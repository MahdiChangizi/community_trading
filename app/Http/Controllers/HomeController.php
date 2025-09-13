<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // ->with(['purchases', 'referrals'])
        $data = User::where('id', $user->id)
        ->with(['purchases', 'referrals'])
        ->first();

        return view('dashboard.index', compact('data'));
    }
}
