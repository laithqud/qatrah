@extends('layouts.app')

@section('title', 'من نحن - فطرة غيث')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endpush

@section('content')

    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            {{-- Main Hero Content --}}
            <div class="hero-content">
                {{-- Hero Text --}}
                <div class="hero-text">
                    <h1 class="hero-title nunito-font">من نحن؟؟</h1>
                    <h2 class="hero-subtitle nunito-font">قطرة غيث</h2>
                </div>
                {{-- Hero Image --}}
                <div class="hero-image">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="طفل يكتب مع أقلام ملونة" />
                </div>
            </div>

            {{-- Info Box --}}
            <div class="info-box">
                <h3 class="info-title nunito-font">التعريف العام عن المبادرة</h3>
                <p class="info-text nunito-font">
                    هي عبارة عن مبادرة غيث تأسست عام 2020 هدفها مساعدة الأطفال الذين يحتاجوا لرعاية خاصة ولا
                    يستطيعون الحصول على فرص تعليمية وتربوية كافية، حيث نقوم بتوفير برامج تعليمية وأنشطة
                    تفاعلية ومهارات حياتية للأطفال من سن 6-16 سنة. نؤمن بأن لكل طفل الحق في الحصول على
                    الأساسيات في وقت مبكر والتعليم بعد ذلك. يكون من خلال الإنترنت حتى نطبقات الهواتف وبرامج الحاسوب
                    الأساسية وغيرها حيث نكهن الحصول على مساعدة ونيم نساعدهم في حل المشاكل وتوسع طموحاتهم من
                    خلال برامج مختصة هادفة من أجل مجتمع فعال لتحقيق النجاح.
                </p>
            </div>
        </div>
    </section>
    {{-- Target Groups Section --}}
    <section class="target-groups-section">
        <div class="container">
            {{-- Section Title --}}
            <h2 class="section-title nunito-font">الجهات التي تطبقها المبادرة</h2>

            {{-- Groups Grid --}}
            <div class="groups-grid">
                {{-- Group 1: Gaza Students --}}
                <div class="group-card">
                    <div class="group-image">
                        <img src="{{ asset('images/kid3.jpg') }}" alt="طلاب مدينة غزة" />
                    </div>
                    <div class="group-title">
                        <h3 class="nunito-font">طلاب مدينة غزة</h3>
                    </div>
                </div>

                {{-- Group 2: Cancer Patients --}}
                <div class="group-card">
                    <div class="group-image">
                        <img src="{{ asset('images/kid2.jpg') }}" alt="مرضى السرطان" />
                    </div>
                    <div class="group-title">
                        <h3 class="nunito-font">مرضى السرطان</h3>
                    </div>
                </div>

                {{-- Group 3: Orphans and Poor --}}
                <div class="group-card">
                    <div class="group-image">
                        <img src="{{ asset('images/kid1.jpg') }}" alt="الأيتام والفقراء" />
                    </div>
                    <div class="group-title">
                        <h3 class="nunito-font">الأيتام والفقراء</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cards-section">
        <div class="container">
            <div class="cards-grid">
                <!-- بطاقة الأهداف -->
                <div class="card-item card-goals">
                    <h3 class="nunito-font">أهدافنا</h3>
                    <p class="nunito-font fs-5">تطوير كلمة "سنستطيع" وزيادة عقل كل طالب، علم، وتغيير الأماكن الضافية
                        ، الشاملة.</p>
                </div>

                <!-- بطاقة الرسالة -->
                <div class="card-item card-message">
                    <h3 class="nunito-font">رسالتنا</h3>
                    <p class="nunito-font fs-5">العمل لإيجاد والإيثار وأسسنا نفس إجراء تكون سعادة في عملنا.</p>
                </div>

                <!-- بطاقة القيم -->
                <div class="card-item card-values">
                    <h3 class="nunito-font">قيمنا</h3>
                    <p class="nunito-font fs-5">التركيز على عنصر الشمول وتطوير وتنمية المهارات والخبرات لبناء مجتمع ناجح.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الاعتمادات والشراكات -->
    <section class="accreditation-partners-section">
        <div class="container">
            <!-- محتوى الاعتمادات -->
            <div class="section-content">
                <h2 class="main-title nunito-font">اعتماد المبادرة</h2>
                <p class="subtitle nunito-font">المبادرة معتمدة على منصة "نحن" كمبادرة رسمية</p>

                <div class="benefits-list">
                    <p class="benefits-title nunito-font">هذا الاعتماد يفيد المتطوعين بـ:</p>
                    <ul>
                        <li class="nunito-font">اعتماد ساعات التطوع في خدمة مجتمع للمتطوع داخل الجامعة العربية الهاشمية</li>
                        <li class="nunito-font">نقاط على مادة خدمة مجتمع في الجامعات ونقاط إضافية على المنح الحكومية التي
                            تكون من قبل الحكومات
                        </li>
                        <li class="nunito-font">شهادات معتمدة من منصة نحن للمتطوعين</li>
                    </ul>
                </div>
            </div>

            <!-- قسم الشراكات -->
            <div class="partners-content">
                <h3 class="partners-title nunito-font">الشركاء</h3>
                <div class="partner-logo">
                    <img src="{{ asset('images/snip1.jpg') }}" alt="منصة نحن" />
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Add smooth scrolling animation
        document.addEventListener('DOMContentLoaded', function () {
            // Animate stats on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe service cards
            document.querySelectorAll('.service-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });

            // Observe stat cards
            document.querySelectorAll('.stat-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
@endpush