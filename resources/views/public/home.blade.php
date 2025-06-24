@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const heroImages = [
                "{{ asset('images/cover1.jpg') }}",
                "{{ asset('images/teaching.jpg') }}",
                "{{ asset('images/learning.png') }}",
                "{{ asset('images/about-us.jpg') }}"
            ];

            const heroImage = document.querySelector('.hero-image');
            let currentIndex = 0;

            function changeHeroImage() {
                currentIndex = (currentIndex + 1) % heroImages.length;
                heroImage.style.opacity = 0;

                setTimeout(() => {
                    heroImage.src = heroImages[currentIndex];
                    heroImage.style.opacity = 1;
                }, 500);
            }

            // Change image every 1.5 seconds
            setInterval(changeHeroImage, 2500);
        });
    </script>
@endpush

@section('content')
    <section class="hero-section">
        <div class="hero-slider">
            <img src="{{ asset('images/cover1.jpg') }}" alt="مبادرة التعليم الألكتروني عن بعد" class="hero-image">
        </div>
        <div class="hero-overlay">
            <div class="container d-flex flex-column align-items-center justify-content-center h-100">
                <h1 class="hero-title nunito-font align-middle">مبادرة التعليم الألكتروني عن بعد,</h1>
                <p class="hero-subtitle nunito-font">-قطرة غيث-</p>
                <a href="/login" class="cta-button nunito-font">سجل كمتطوع الآن</a>
            </div>
        </div>
    </section>

    <div class="container mt-5 d-flex flex-column align-items-center">
        <p class="text-center nunito-font brief-text">
            ُمبادرة ُمعتمدة على منصة “نحن” كُمبادرة رسمية, وهو عمل خيري تأسس عام 2020 هدفه مساعدة الطلاب في التعلم الى جانب
            التأسيس لمن هو بحاجة.
        </p>
    </div>

    <section class="achievements my-5 nunito-font">
        <div class="top-divider"></div>

        <div class="container">
            <h2 class="section-title text-center text-light nunito-font">إنجازات</h2>

            <div class="achievements-container">
                <div class="achievement-item nunito-font">
                    <div class="achievement-icon text-light nunito-font">
                        <i class="fa-solid fa-calendar-days" style="color: #ffffff;"></i>
                    </div>
                    <div class="achievement-content nunito-font">
                        <span class="achievement-number text-light nunito-font">+5</span>
                        <span class="achievement-text text-light nunito-font">سنوات وخبرة</span>
                    </div>
                </div>
                <div class="achievement-item nunito-font">
                    <div class="achievement-icon text-light nunito-font">
                        <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    </div>
                    <div class="achievement-content nunito-font">
                        <span class="achievement-number text-light nunito-font">+600</span>
                        <span class="achievement-text text-light nunito-font">متطوع</span>
                    </div>
                </div>
                <div class="achievement-item nunito-font">
                    <div class="achievement-icon text-light nunito-font">
                        <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    </div>
                    <div class="achievement-content nunito-font">
                        <span class="achievement-number text-light nunito-font">+500</span>
                        <span class="achievement-text text-light nunito-font">طالب</span>
                    </div>
                </div>
                <div class="achievement-item nunito-font">
                    <div class="achievement-icon text-light nunito-font">
                        <i class="fa-solid fa-lightbulb" style="color: #ffffff;"></i>
                    </div>
                    <div class="achievement-content nunito-font">
                        <span class="achievement-number text-light nunito-font">+22000</span>
                        <span class="achievement-text text-light nunito-font"> ساعه تطوعية</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-divider"></div>
    </section>


    <section class="bg-light py-1">
        <div class="container my-5 d-flex align-items-center">
            <div class="w-50 d-flex flex-column align-items-start justify-content-center pe-5 gap-3">
                <h1 class="fs-1 nunito-font">معرض الصور</h1>
                <p class="fs-3 gallery-info nunito-font pt-3">شاهدوا كيف تتحول ساعات العطاء إلى لحظات تعليمية خالدة - من حصص
                    تفاعلية
                    إلى وجوه مشرقة بالمعرفة.</p>
                <a href="/gallery" class="btn nunito-font fw-semibold button-gallery mt-4">معرض الصور</a>
            </div>

            <div class="w-50 position-relative" style="height: 500px;">
                <div class="image-card standing-card">
                    <img src="{{ asset('images/learning.png') }}" alt="معرض الصور" class="img-fluid">
                </div>
                <div class="image-card tilted-card">
                    <img src="{{ asset('images/teaching.jpg') }}" alt="معرض الصور" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


@endsection