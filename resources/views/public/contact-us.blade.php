@extends('layouts.app')

@section('title', 'تواصل معنا - قطرة غيث')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="contact-hero">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <img src="{{ asset('images/contact.png') }}" alt="تواصل معنا" class="contact-illustration">
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="contact-hero-content">
                    <h1 class="nunito-font">نتطلع لسماعك.. كل رسالة تُحدث فرقًا</h1>
                    <p class="nunito-font">أسئلتك، أفكارك، أو حتى كلماتك الداعمة – نعتز بها جميعًا. معًا نصنع التغيير</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="contact-form-container">
        <h2 class="contact-form-title nunito-font">أرسل رسالتك الآن</h2>
        
        @if(session('success'))
            <div class="alert alert-success nunito-font">
                {{ session('success') }}
            </div>
        @endif        <form id="contact-form">            <div class="form-row">
                <div class="form-col">
                    <div class="form-group">
                        <label class="form-label nunito-font">موضوع الرسالة</label>
                        <input type="text" id="message-subject" class="form-control nunito-font" required>
                    </div>
                </div>
                <div class="form-col">
                    <div class="form-group">
                        <label class="form-label nunito-font">الاسم</label>
                        <input type="text" id="user-name" class="form-control nunito-font" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label nunito-font">الرسالة</label>
                <textarea id="user-message" class="form-control nunito-font" rows="6" required></textarea>
            </div>
            <button type="submit" class="submit-btn nunito-font">إرسال الرسالة</button>
        </form>
    </div>
</section>

<!-- Contact Information Section -->
<section class="contact-info-section">
    <div class="container">
        <h2 class="contact-info-title nunito-font">كلمنا مباشرة</h2>
        <div class="contact-info-grid">
            <div class="contact-info-card">
                {{-- <div class="contact-info-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div> --}}
                <h4 class="nunito-font">العامة/التبرعات</h4>
                <p class="nunito-font">00962-12-345-678</p>
            </div>
            <div class="contact-info-card">
                {{-- <div class="contact-info-icon">
                    <i class="bi bi-chat-dots-fill"></i>
                </div> --}}
                <h4 class="nunito-font">شكاوى/مقترحات</h4>
                <p class="nunito-font">00962-12-345-678</p>
            </div>
            <div class="contact-info-card">
                {{-- <div class="contact-info-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div> --}}
                <h4 class="nunito-font">أوقات العمل</h4>
                <p class="nunito-font">الأحد - الخميس (8ص - 4م)</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="social-title nunito-font">تواصل معنا حيثما تفضل</h2>
        <div class="social-links">
            <a href="#" class="social-link" title="واتساب">
                <i class="bi bi-whatsapp"></i>
            </a>
            <a href="#" class="social-link" title="لينكد إن">
                <i class="bi bi-linkedin"></i>
            </a>            <a href="#" class="social-link" title="تويتر">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="social-link" title="فيسبوك">
                <i class="bi bi-facebook"></i>
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/contact-us.js') }}"></script>
@endpush