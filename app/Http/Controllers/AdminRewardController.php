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

    public function users() {
        $data = User::select(["id", "uid", "status", "is_admin", "name", "email", "ref_code"])
        ->with("wallet")
        ->paginate(20);

        return view("dashboard.users", compact('data'));
    }

    public function withdrawal_usdt(Request $request)
    {
        $request->validate([
            'wallet' => 'required|string',
            'amount' => 'required|numeric'
        ]);

        try {
            $response = Http::post('http://localhost:3000/send', [
                'to' => $request->wallet,
                'amount' => $request->amount
            ]);

            $data = $response->json();

            if (isset($data['error'])) {
                return response()->json([
                    'status' => false,
                    'message' => $data['error']
                ], 400);
            }

            $user = Auth::user();
            $wallet = $user->wallet;

            $wallet->usdt_balance = 0.00;
            $wallet->save();

            return back()->with('success', 'USDT withdrawal was successful!');

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }


}
