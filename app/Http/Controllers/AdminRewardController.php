<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AdminRewardController extends Controller
{
    public function index()
    {
        return view('dashboard/reward');
    }

    // distribute usdt to users
    public function distribute(Request $request)
    {
        if(auth()->user()->is_admin == 0) die("What do you want ?! go back and return with admin account");
        $data = $request->validate([
            'total_profit' => 'required|numeric|min:1',
        ]);

        DB::beginTransaction();

        try {
            // $totalTokens = DB::table('user_tokens')->sum('amount'); // debug
            $totalTokens = DB::table('wallets')->sum('balance');

            if ($totalTokens == 0) {
                return back()->with('error', "Aren't any token");
            }

            // value of token (every token how much does value 1$ or ...)
            $tokenValue = $data['total_profit'] / $totalTokens;

            // all users and all tokens
            $users = DB::table('wallets')
                ->select('user_id', DB::raw('SUM(balance) as tokens'))
                ->groupBy('user_id')
                ->get();


            foreach ($users as $user) {
                $reward = $user->tokens * $tokenValue;

                // save reward every user in his database
                DB::table('monthly_rewards')->insert([
                    'user_id' => $user->user_id,
                    'token_amount' => $user->tokens,
                    'usdt_amount' => $reward,
                    'status' => 'paid',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // add for widrawal usdt (debug)
                $zero = "0.00";
                Wallet::where('user_id', $user->user_id)->first()->update(['balance' => $zero, 'usdt_balance' => $reward]);
                // DB::table('wallets')->where('user_id', $user->user_id)
                //     ->update([
                //         'balance' => DB::raw("usdt_balance + $zero")
                //     ]);
            }

            DB::commit();

            return back()->with('success', 'success');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'warning');
        }
    }

    public function withdrawal() {
        $user = Auth::user();
        $data = User::where('id', $user->id)->first();
        return view('dashboard.withdraw', compact('data'));
    }

    public function withdrawal_usdt(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $data = $request->validate([
            'wallet' => 'required|string',
            'amount' => 'required|numeric|min:0|max:' . $user->wallet->usdt_balance
        ]);

        // withdrawa user money to his usdt_bep20 wallet
        // API Keys از env
        $apiKey = env('COINBASE_API_KEY');
        $apiSecret = env('COINBASE_API_SECRET');
        $passphrase = env('COINBASE_PASSPHRASE');

        $timestamp = time();
        $method = 'POST';
        $path = '/withdrawals/crypto';
        $body = json_encode([
            'amount' => (string)$data['amount'],
            'currency' => 'USDT',
            'crypto_address' => $data['wallet'],
            'network' => 'bep20' // اگه شبکه رو بخواد مشخص کنی
        ]);

        // sign با HMAC SHA256
        $sign = base64_encode(hash_hmac('sha256', $timestamp.$method.$path.$body, $apiSecret, true));

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'CB-ACCESS-KEY' => $apiKey,
            'CB-ACCESS-PASSPHRASE' => $passphrase,
            'CB-ACCESS-SIGN' => $sign,
            'CB-ACCESS-TIMESTAMP' => $timestamp,
        ])->post('https://api.exchange.coinbase.com'.$path, $body);

        if ($response->failed()) {
            return back()->withErrors(['withdraw' => 'Coinbase API error: '.$response->body()]);
        }

        $result = $response->json();

    }

    public function users() {
        $data = User::select(["id", "uid", "status", "is_admin", "name", "email", "ref_code"])
        ->with("wallet")
        ->paginate(20);

        return view("dashboard.users", compact('data'));
    }
}
