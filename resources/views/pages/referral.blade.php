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
    Success on Bitorex becomes more valuable when you share it with others. By inviting friends and expanding your network, you will not only benefit from the platform’s services, but also receive special referral program rewards.
    (Every invitation is an opportunity for growth and more income.)
</section>

<!-- How It Works -->
<section class="py-24 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold mb-16" data-aos="zoom-in">
      How <span class="text-[#ffa500]">Referral Works</span>
    </h2>

    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-2xl font-bold mb-3">Level 1</h3>
        <p class="text-4xl font-extrabold text-yellow-500 mb-4">5%</p>
        <p class="text-gray-600">Earn 5% from your direct referrals.</p>
      </div>

      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="150">
        <h3 class="text-2xl font-bold mb-3">Level 2</h3>
        <p class="text-4xl font-extrabold text-yellow-500 mb-4">3%</p>
        <p class="text-gray-600">Earn 3% from your second-level referrals.</p>
      </div>

      <div class="bg-white rounded-2xl shadow-xl p-10" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-2xl font-bold mb-3">Level 3</h3>
        <p class="text-4xl font-extrabold text-yellow-500 mb-4">1%</p>
        <p class="text-gray-600">Earn 1% from your third-level referrals.</p>
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
        <h3 class="text-2xl font-bold mb-3">Moment Cashback</h3>
        <p class="text-gray-700">Direct and immediate payment to your account upon activation. Your users can invest in any of the plans.</p>
      </div>
      <div class="bg-gray-50 rounded-2xl shadow-lg p-12" data-aos="fade-up" data-aos-delay="150">
        <div class="text-5xl mb-6">🌍</div>
        <h3 class="text-2xl font-bold mb-3">Global Community</h3>
        <p class="text-gray-700">Be part of our global platform business network</p>
      </div>
      <div class="bg-gray-50 rounded-2xl shadow-lg p-12" data-aos="fade-up" data-aos-delay="300">
        <div class="text-5xl mb-6">📈</div>
        <h3 class="text-2xl font-bold mb-3">Passive Income</h3>
        <p class="text-gray-700">Earn commissions <span class="font-semibold">even when not trading</span> (Even if you don't invest in any plan, you will have your income after your users sign up and invest in your platform).</p>
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