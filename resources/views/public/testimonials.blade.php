@extends('layouts.app')

@section('content')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
        <style>
            .nunito-font { font-family: 'Nunito', sans-serif !important; }
        </style>
    @endpush

    <div class="hero">
        <div class="hero-content nunito-font">
            <h1 class="nunito-font">فاقصِدْ مسيرَك للأعلا متوكلاً، البذلُ روحٌ والمُنى أجساد.</h1>
        </div>
    </div>

    <div class="section-icons nunito-font">
        <div>
            <i class="fas fa-hand-holding-heart"></i>
            <span class="nunito-font">الإنسانية</span>
        </div>
        <div>
            <i class="fas fa-book-open"></i>
            <span class="nunito-font">التعلم</span>
        </div>
        <div>
            <i class="fas fa-map-marker-alt"></i>
            <span class="nunito-font">الخبرة</span>
        </div>
    </div>

    <div class="testimonials my-5 nunito-font">
        <div class="title nunito-font">
            <h4 class="nunito-font">التوصيات</h4>
            <h2 class="nunito-font">ماذا قالوا عنا؟</h2>
        </div>

        <div class="testimonial-container nunito-font">
            <div class="testimonial-card nunito-font">
                <img src="/images/guy.png" alt="وسيم يوسف">
                <h5 class="nunito-font">وسيم يوسف</h5>
                <small class="mt-2 nunito-font">هندسة أنظمة ذكية</small>
                <p class="nunito-font">نقاط على مادة خدمة مجتمع في الجامعات ونقاط إضافية عند المنح الخارجية التي تكون من قبل الحكومات.</p>
            </div>

            <div class="testimonial-card nunito-font">
                <img src="/images/guy.png" alt="وسيم يوسف">
                <h5 class="nunito-font">وسيم يوسف</h5>
                <small class="mt-2 nunito-font">هندسة أنظمة ذكية</small>
                <p class="nunito-font">نقاط على مادة خدمة مجتمع في الجامعات ونقاط إضافية عند المنح الخارجية التي تكون من قبل الحكومات.</p>
            </div>
        </div>
    </div>

@endsection