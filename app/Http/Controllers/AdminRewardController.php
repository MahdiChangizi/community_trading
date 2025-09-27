<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRewardController extends Controller
{
    public function index()
    {
        return view('dashboard/reward');
    }

    // distribute usdt to users
    public function distribute(Request $request)
    {
        $data = $request->validate([
            'total_profit' => 'required|numeric|min:1',
        ]);

        DB::beginTransaction();

        try {
            $totalTokens = DB::table('user_tokens')->sum('amount'); // debug

            if ($totalTokens == 0) {
                return back()->with('error', "Aren't any token");
            }

            // value of token (every token how much does value 1$ or ...)
            $tokenValue = $data['total_profit'] / $totalTokens;

            // all users and all tokens
            $users = DB::table('user_tokens') // debug
                ->select('user_id', DB::raw('SUM(amount) as tokens'))
                ->groupBy('user_id')
                ->get();

            foreach ($users as $user) {
                $reward = $user->tokens * $tokenValue;

                // save reward every user in his database
                DB::table('monthly_rewards')->insert([
                    'user_id' => $user->user_id,
                    'month' => $data['month'], // debug
                    'token_amount' => $user->tokens,
                    'usdt_amount' => $reward,
                    'status' => 'paid',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // add for widrawal usdt (debug)
                DB::table('wallets')->where('user_id', $user->user_id)
                    ->update([
                        'usdt_balance' => DB::raw("usdt_balance + $reward")
                    ]);
            }

            DB::commit();

            return back()->with('success', 'success');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'warning');
        }
    }
}
