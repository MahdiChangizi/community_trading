@extends('layouts.app')
@section('title', 'Referral')
@section('content')

<!-- Logo + Title -->
<section class="py-20 text-center bg-white">
  <img src="{{ asset('images/Logo-bg.png') }}" class="h-32 mx-auto mb-6" alt="logo">
  <h1 class="text-5xl font-extrabold mb-4 tracking-tight text-[#ffa500]">
    Referral Program
  </h1>
  <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
    Our community is built on <span class="font-semibold text-gray-800">growth, trading, and shared success</span>.
    With our referral system, you don’t just learn — you also earn.
    Invite friends, expand the network, and unlock monthly rewards.
  </p>
</section>

<!-- How It Works -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-14">
      How <span class="text-[#ffa500]">Referral Works</span>
    </h2>

    <div class="grid md:grid-cols-3 gap-8 mb-12">
      <!-- Main Account -->
      <div class="bg-white rounded-2xl shadow-lg border-t-4 border-yellow-500 p-8 hover:shadow-xl transition">
        <h3 class="text-2xl font-bold mb-2">Main Account</h3>
        <p class="text-5xl font-extrabold text-yellow-600 mb-4">5%</p>
        <p class="text-gray-600">Base reward directly from your own account activities.</p>
      </div>
      <!-- Level 1 -->
      <div class="bg-white rounded-2xl shadow-lg border-t-4 border-yellow-400 p-8 hover:shadow-xl transition">
        <h3 class="text-2xl font-bold mb-2">Level 1</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.60%</p>
        <p class="text-gray-600">Highest bonus from your direct referrals.</p>
      </div>
      <!-- Level 2 -->
      <div class="bg-white rounded-2xl shadow-lg border-t-4 border-yellow-300 p-8 hover:shadow-xl transition">
        <h3 class="text-2xl font-bold mb-2">Level 2</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.50%</p>
        <p class="text-gray-600">Get rewarded when your referrals invite others.</p>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Level 3 -->
      <div class="bg-white rounded-2xl shadow-lg border-t-4 border-yellow-200 p-8 hover:shadow-xl transition">
        <h3 class="text-2xl font-bold mb-2">Level 3</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.40%</p>
        <p class="text-gray-600">Passive income from your extended network.</p>
      </div>
      <!-- Level 4 -->
      <div class="bg-white rounded-2xl shadow-lg border-t-4 border-yellow-200 p-8 hover:shadow-xl transition">
        <h3 class="text-2xl font-bold mb-2">Level 4</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.30%</p>
        <p class="text-gray-600">Earn more as your community grows further.</p>
      </div>
      <!-- Level 5 -->
      <div class="bg-white rounded-2xl shadow-lg border-t-4 border-yellow-100 p-8 hover:shadow-xl transition">
        <h3 class="text-2xl font-bold mb-2">Level 5</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.20%</p>
        <p class="text-gray-600">Even the furthest connections give back.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12">
      Why Join <span class="text-[#ffa500]">Our Program?</span>
    </h2>
    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-gray-50 rounded-2xl shadow-md p-10 hover:shadow-lg transition">
        <div class="text-4xl mb-4">💸</div>
        <h3 class="text-xl font-bold mb-2">Monthly Cashback</h3>
        <p class="text-gray-600">We return training fees as <span class="font-semibold">monthly rewards</span>.</p>
      </div>
      <div class="bg-gray-50 rounded-2xl shadow-md p-10 hover:shadow-lg transition">
        <div class="text-4xl mb-4">🌍</div>
        <h3 class="text-xl font-bold mb-2">Global Community</h3>
        <p class="text-gray-600">Be part of a <span class="font-semibold">worldwide trading network</span>.</p>
      </div>
      <div class="bg-gray-50 rounded-2xl shadow-md p-10 hover:shadow-lg transition">
        <div class="text-4xl mb-4">📈</div>
        <h3 class="text-xl font-bold mb-2">Passive Income</h3>
        <p class="text-gray-600">Earn commissions <span class="font-semibold">even when not trading</span>.</p>
      </div>
    </div>
  </div>
</section>

@endsection
