@extends('layouts.app')
@section('title', 'Referral')
@section('content')

<!-- Hero -->
<section class="relative py-24 text-center bg-gradient-to-br from-white via-gray-50 to-gray-100 overflow-hidden" data-aos="fade-up">
  <img src="{{ asset('images/Logo-bg.png') }}" class="h-40 mx-auto mb-8" alt="logo">
  <h1 class="text-6xl font-extrabold mb-6 tracking-tight text-[#ffa500]">
    Referral Program
  </h1>
  <p class="text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed">
    Our community is built on <span class="font-semibold text-gray-900">growth, trading, and shared success</span>.
    With our referral system, you don’t just learn — you also earn.
    <br>
    <span class="text-[#ffa500] font-semibold">Invite friends, expand the network, unlock rewards.</span>
  </p>
</section>

<!-- How It Works -->
<section class="py-24 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold mb-16" data-aos="zoom-in">
      How <span class="text-[#ffa500]">Referral Works</span>
    </h2>

    <div class="grid md:grid-cols-3 gap-10 mb-12">
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-2xl font-bold mb-3">Main Account</h3>
        <p class="text-5xl font-extrabold text-yellow-600 mb-4">5%</p>
        <p class="text-gray-600">Base reward directly from your own account activities.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="150">
        <h3 class="text-2xl font-bold mb-3">Level 1</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.60%</p>
        <p class="text-gray-600">Highest bonus from your direct referrals.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-2xl font-bold mb-3">Level 2</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.50%</p>
        <p class="text-gray-600">Get rewarded when your referrals invite others.</p>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-2xl font-bold mb-3">Level 3</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.40%</p>
        <p class="text-gray-600">Passive income from your extended network.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="150">
        <h3 class="text-2xl font-bold mb-3">Level 4</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.30%</p>
        <p class="text-gray-600">Earn more as your community grows further.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-2xl font-bold mb-3">Level 5</h3>
        <p class="text-5xl font-extrabold text-yellow-500 mb-4">0.20%</p>
        <p class="text-gray-600">Even the furthest connections give back.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="py-24 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold mb-16" data-aos="zoom-in">
      Why Join <span class="text-[#ffa500]">Our Program?</span>
    </h2>
    <div class="grid md:grid-cols-3 gap-12">
      <div class="bg-gray-50 rounded-2xl shadow-lg p-12" data-aos="fade-up" data-aos-delay="0">
        <div class="text-5xl mb-6">💸</div>
        <h3 class="text-2xl font-bold mb-3">Monthly Cashback</h3>
        <p class="text-gray-700">We return training fees as <span class="font-semibold">monthly rewards</span>.</p>
      </div>
      <div class="bg-gray-50 rounded-2xl shadow-lg p-12" data-aos="fade-up" data-aos-delay="150">
        <div class="text-5xl mb-6">🌍</div>
        <h3 class="text-2xl font-bold mb-3">Global Community</h3>
        <p class="text-gray-700">Be part of a <span class="font-semibold">worldwide trading network</span>.</p>
      </div>
      <div class="bg-gray-50 rounded-2xl shadow-lg p-12" data-aos="fade-up" data-aos-delay="300">
        <div class="text-5xl mb-6">📈</div>
        <h3 class="text-2xl font-bold mb-3">Passive Income</h3>
        <p class="text-gray-700">Earn commissions <span class="font-semibold">even when not trading</span>.</p>
      </div>
    </div>
  </div>
</section>

<script>
  AOS.init({
    duration: 900,
    once: true,
    offset: 100
  });
</script>
@endsection
