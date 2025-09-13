<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'phone' => ['nullable', 'string', 'max:20', 'unique:users,phone'],
            'ref_code' => ['nullable', 'string', 'exists:users,ref_code'],
            'is_admin' => ['nullable', 'boolean'],
        ]);

        $referrerId = null;
        if ($request->filled('ref_code')) {
            $referrer = User::where('ref_code', $request->ref_code)->first();
            if ($referrer) {
                $referrerId = $referrer->id;
            }
        }

        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => null,
                'uid' => uniqid('U'),
                'ref_code' => strtoupper(Str::random(8)),
                'referrer_id' => $referrerId,
                'status' => 'active',
                'is_admin' => $request->is_admin ?? false
            ]);
            if ($referrerId) {
                $currentReferrer = $referrer;
                $level = 1;

                // submit referral
                while ($currentReferrer && $level <= 5) {
                    DB::table('referral_paths')->insert([
                        'ancestor_id' => $currentReferrer->id,
                        'descendant_id' => $user->id,
                        'level' => $level,
                    ]);

                    $currentReferrer = $currentReferrer->referrer_id
                        ? User::find($currentReferrer->referrer_id)
                        : null;

                    $level++;
                }
            }
            DB::commit();
            event(new Registered($user));

            Auth::login($user);

            return redirect(route('dashboard', absolute: false));

        }
        catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return back()->withErrors([
                'message' => "something went wrong",
            ]);
        }
    }
}
