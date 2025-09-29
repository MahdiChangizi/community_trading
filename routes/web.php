<?php

use App\Http\Controllers\AdminRewardController;
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
use Illuminate\Support\Facades\DB;

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/community', [CommunityController::class, 'index'])->name('community');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// plans
Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('/plans/{plan}', [PlanController::class, 'show'])->name('plans.show');

Route::get('test', function () {
    return view('pages.test');
});

// purchase
Route::middleware('auth')->group(function () {
    Route::post('/plans/{plan}/purchase', [PurchaseController::class, 'store'])->name('plans.purchase');
    Route::get('/purchases/{purchase}', [PurchaseController::class, 'show'])->name('purchases.show');
    Route::post('/purchases/{purchase}/tx', [PurchaseController::class, 'submitTx'])->name('purchases.tx');
});
// admin
Route::middleware(['auth','role:admin'])->group(function () {
    Route::post('/purchases/{purchase}/confirm', [PurchaseController::class, 'confirm'])->name('admin.purchases.confirm');
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

Route::prefix('admin')->group(function () {
    Route::get('/rewards', [AdminRewardController::class, 'index'])->name('admin.rewards');
    Route::post('/distribute', [AdminRewardController::class, 'distribute'])->name('admin.distribute');
    Route::get('/users', [AdminRewardController::class, 'users'])->name('admin.users');
});

Route::get('/withdrawal', [AdminRewardController::class, 'withdrawal'])->name('withdrawal');
Route::post('/withdrawal', [AdminRewardController::class, 'withdrawal_usdt'])->name('withdrawal.usdt');

// Route::post('/users', [AdminRewardController::class, 'withdrawal_usdt'])->name('withdrawal.usdt');


// api price
Route::get('/crypto-prices', function () {
    $response = Http::withHeaders([
        'X-CMC_PRO_API_KEY' => '7431c5f2-b4f2-4b5d-b41e-d1743b252bb2',
    ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest', [
        'symbol' => 'BTC,ETH,XRP,SOL,BNB,DOGE,TRX,ADA,HYPE,LINK',
        'convert' => 'USD',
    ]);

    return response()->json($response->json());
});



// main
Route::get('/', function () {
     $plans = DB::table('plans')->where('active', true)->get();
    return view('welcome', compact('plans'));
});

Route::get('/referral', function() {
    return view("pages/referral");
});

//Community
Route::get('/community', function () {
    return view('pages/community');
})->name('community');


Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
