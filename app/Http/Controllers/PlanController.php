<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::where('active', true)->get();
        return view('pages.plans', compact('plans'));
    }

    public function show(Plan $plan)
    {
        return view('plans.show', compact('plan'));
    }
}
