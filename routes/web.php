<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\RebateController;
use App\Http\Controllers\PayoutController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPlanController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminPayoutController;
use App\Http\Controllers\Admin\AdminReportController;



// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/community', [CommunityController::class, 'index'])->name('community');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// plans
Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('/plans/{slug}', [PlanController::class, 'show'])->name('plans.show');

Route::middleware('auth')->group(function () {
    Route::post('/purchase', [PurchaseController::class, 'store'])->name('purchase.store');
    Route::get('/purchase/history', [PurchaseController::class, 'history'])->name('purchase.history');
});

// referral
Route::middleware('auth')->group(function () {
    Route::get('/referrals', [ReferralController::class, 'index'])->name('referrals.index');
    Route::get('/commissions', [CommissionController::class, 'index'])->name('commissions.index');
});

// rebate
Route::middleware('auth')->group(function () {
    Route::get('/rebates', [RebateController::class, 'index'])->name('rebates.index');
    Route::post('/rebates/claim/{id}', [RebateController::class, 'claim'])->name('rebates.claim');
});

// payout
Route::middleware('auth')->group(function () {
    Route::get('/payouts', [PayoutController::class, 'index'])->name('payouts.index');
    Route::post('/payouts/request', [PayoutController::class, 'store'])->name('payouts.store');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('plans', AdminPlanController::class)->names('admin.plans');
    Route::resource('users', AdminUserController::class)->names('admin.users');
    Route::get('/payouts', [AdminPayoutController::class, 'index'])->name('admin.payouts.index');
    Route::post('/payouts/{id}/approve', [AdminPayoutController::class, 'approve'])->name('admin.payouts.approve');
    Route::post('/payouts/{id}/reject', [AdminPayoutController::class, 'reject'])->name('admin.payouts.reject');
    Route::resource('reports', AdminReportController::class)->names('admin.reports');
});


// main

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
