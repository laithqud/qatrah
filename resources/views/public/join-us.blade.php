@extends('layouts.app')

@section('title', 'انضم إلينا - قطرة غيث')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/join-us.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title nunito-font">انضم إلينا.. كن يدًا تُغير العالم</h1>
            <p class="hero-subtitle nunito-font">
                بقلب مؤمن ويد تعمل، نصنع معًا فرقًا لا ينسى. تطوع اليوم وساهم في بناء مستقبل أفضل
            </p>
            <a href="/login" class="cta-button nunito-font">سجل كمتطوع الآن</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <h2 class="section-title nunito-font">لماذا نريدك معنا</h2>
        <div class="feature-cards-container">
            <!-- First Row -->
            <div class="feature-cards-row">
                <div class="feature-card">
                    <div class="card-image">
                        <img src="{{ asset('images/thinking.png') }}" alt="تكتسب مهارات">
                    </div>
                    <div class="card-content">
                        <h3 class="feature-title nunito-font">تكتسب مهارات وتجارب لا تُقدَّر بثمن</h3>
                        <p class="feature-description nunito-font">
                            التطوع فرصتك لتنمية ذاتك بينما تساعد الآخرين
                        </p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="card-image">
                        <img src="{{ asset('images/image.png') }}" alt="تترك أثرًا">
                    </div>
                    <div class="card-content">
                        <h3 class="feature-title nunito-font">تترك أثرًا خالدًا</h3>
                        <p class="feature-description nunito-font">
                            كل ساعة تطوع هي بذرة خير تنمو لتصبح شجرة عطاء
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Second Row -->
            <div class="feature-cards-row">
                <div class="feature-card feature-card-center">
                    <div class="card-image">
                        <img src="{{ asset('images/hearts.png') }}" alt="أسرة واحدة">
                    </div>
                    <div class="card-content">
                        <h3 class="feature-title nunito-font">تكون جزءًا من أسرة واحدة</h3>
                        <p class="feature-description nunito-font">
                            نؤمن بأن العمل الخيري يجمع القلوب قبل الأيدي
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Help Section -->
<section class="how-we-help-section">
    <div class="container">
        <h2 class="section-title nunito-font">كيف تنضم إلينا؟</h2>
        <div class="steps-container">
            <div class="step-item">
                <div class="step-number nunito-font">1</div>
                <div class="step-content">
                    <h3 class="step-title nunito-font">املأ استمارة التطوع</h3>
                    <div class="step-image">
                        <img src="{{ asset('images/form.jpg') }}" alt="استمارة التطوع">
                    </div>
                    <p class="step-description nunito-font">
                        أخبرنا عن مهاراتك واهتماماتك
                    </p>
                </div>
            </div>
            
            <div class="step-item">
                <div class="step-number nunito-font">2</div>
                <div class="step-content">
                    <h3 class="step-title nunito-font">انتظر اتصالنا</h3>
                    <div class="step-image">
                        <img src="{{ asset('images/call.png') }}" alt="اتصال">
                    </div>
                    <p class="step-description nunito-font">
                        سنراجع طلبك ونحدد أفضل فرصة لك
                    </p>
                </div>
            </div>
            
            <div class="step-item">
                <div class="step-number nunito-font">3</div>
                <div class="step-content">
                    <h3 class="step-title nunito-font">احضر التدريب</h3>
                    <div class="step-image">
                        <img src="{{ asset('images/training.png') }}" alt="التدريب">
                    </div>
                    <p class="step-description nunito-font">
                        جلسة واحدة لتتعرف على قيمنا وطريقة عملنا
                    </p>
                </div>
            </div>
            
            <div class="step-item">
                <div class="step-number nunito-font">4</div>
                <div class="step-content">
                    <h3 class="step-title nunito-font">ابدأ رحلة العطاء</h3>
                    <div class="step-image">
                        <img src="{{ asset('images/hero.jpg') }}" alt="رحلة العطاء">
                    </div>
                    <p class="step-description nunito-font">
                        كن بطلاً خفيًا في قصة تغيير حياة الآخرين
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="/contact-us" class="join-now-button nunito-font">انضم الآن</a>
    </div>
</section>

@push('scripts')
<script src="{{ asset('js/join-us.js') }}"></script>
@endpush