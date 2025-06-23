@extends('layouts.app')

@section('title', 'من نحن - فطرة غيث')

@push('styles')
    <style>
    :root {
        --primary-teal: #00adb5;
        --secondary-teal: #0097b2;
        --accent-orange: #ff914d;
        --text-gray: #545454;
        --text-black: #000000;
        --bg-light: #e8f4f8;
    }
    * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
     }
    body {
                font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                direction: rtl;
                text-align: right;
                background:var(--bg-light);
            }
    /* Hero Section Styles */
    .hero-section {
        background: linear-gradient(135deg,var(--bg-light) 0%, #f0f8ff 100%);
        padding: 80px 0 60px;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        width: 100%;
    }

    /* Hero Content Layout */
    .hero-content {
        display: flex;
        align-items: center;
        gap: 40px;
        margin-bottom: 60px;
        flex-wrap: wrap;
    }

    /* Hero Text */
    .hero-text {
        flex: 1;
        text-align: right;
        max-width: 500px;
        padding-right: 60px;
        margin-right: 90px;
    }

    .hero-title {
        font-size: 3rem;
        color: var(--text-black);
        margin-bottom: 10px;
        font-weight: bold;
        line-height: 1.3;
    }

    .hero-subtitle {
        font-size: 5rem;
        color: var(--text-black);
        font-weight: bold;
        line-height: 1.3;
    }

    /* Hero Image */
    .hero-image {
        flex: 1;
        max-width: 400px;
        position: relative;
    }

    .hero-image img {
        width: 100%;
        height: auto;
        border-radius: 25px;
        box-shadow: 0 15px 40px rgba(0, 173, 181, 0.2);
        transition: transform 0.3s ease;
    }

    .hero-image img:hover {
        transform: translateY(-5px);
    }

    /* Info Box */
    .info-box {
        background: white;
        padding: 40px;
        border-radius: 25px;
        border: 4px solid var(--primary-teal);
        box-shadow: 0 15px 40px rgba(0, 173, 181, 0.15);
        max-width: 900px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
    }

    .info-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--primary-teal) 0%, var(--secondary-teal) 100%);
    }

    .info-title {
        color: var(--primary-teal);
        font-size: 1.5rem;
        margin-bottom: 25px;
        text-align: center;
        font-weight: bold;
        position: relative;
    }

    .info-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: var(--accent-orange);
        border-radius: 2px;
    }

    .info-text {
        color: var(--text-gray);
        line-height: 1.9;
        font-size: 1.1rem;
        text-align: right;
        direction: rtl;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-content {
            gap: 40px;
        }

        .hero-text {
            padding-right: 30px;
        }

        .hero-title {
            font-size: 2.2rem;
        }

        .hero-subtitle {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 0 40px;
            min-height: auto;
        }

        .hero-content {
            flex-direction: column;
            text-align: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .hero-text {
            text-align: center;
            max-width: 100%;
            padding-right: 0;
        }

        .hero-title {
            font-size: 1.8rem;
        }

        .hero-subtitle {
            font-size: 1.3rem;
        }

        .hero-image {
            max-width: 300px;
            margin: 0 auto;
        }

        .info-box {
            padding: 30px 20px;
            margin: 0 10px;
        }

        .info-title {
            font-size: 1.3rem;
        }

        .info-text {
            font-size: 1rem;
            line-height: 1.7;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 0 15px;
        }

        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1.5rem;
        }

        .info-box {
            padding: 25px 15px;
            border-radius: 20px;
            border-width: 3px;
        }

        .info-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .info-text {
            font-size: 0.95rem;
        }
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-text {
        animation: fadeInUp 0.8s ease-out;
    }

    .hero-image {
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .info-box {
        animation: fadeInUp 0.8s ease-out 0.4s both;
    }
    /* Target Groups Section Styles */
    .target-groups-section {
        background: white;
        padding: 80px 0;
        position: relative;
    }

    .target-groups-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg,var(--bg-light) 0%, #f8fdff 100%);
        z-index: -1;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Section Title */
    .section-title {
        text-align: center;
        font-size: 2.2rem;
        color: var(--section-title-color);
        margin-bottom: 60px;
        font-weight: bold;
        position: relative;
        line-height: 1.4;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--accent-orange);
        border-radius: 2px;
    }

    /* Groups Grid */
    .groups-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
        max-width: 1000px;
        margin: 0 auto;
    }

    /* Group Card */
    .group-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
    }

    .group-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 173, 181, 0.2);
    }

    /* Group Image */
    .group-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .group-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .group-card:hover .group-image img {
        transform: scale(1.05);
    }

    /* Group Title */
    .group-title {
        background: var(--primary-teal);
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
    }

    .group-title h3 {
        font-size: 1.3rem;
        font-weight: bold;
        margin: 0;
        line-height: 1.3;
    }

    /* Add subtle gradient overlay on images */
    .group-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(0, 173, 181, 0.1) 100%);
        pointer-events: none;
    }

    /* Card Animation */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .group-card {
        animation: slideInUp 0.6s ease-out forwards;
    }

    .group-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .group-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .group-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .target-groups-section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 40px;
        }

        .groups-grid {
            grid-template-columns: 1fr;
            gap: 30px;
            max-width: 400px;
        }

        .group-image {
            height: 180px;
        }

        .group-title h3 {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 0 15px;
        }

        .section-title {
            font-size: 1.6rem;
            margin-bottom: 30px;
        }

        .groups-grid {
            gap: 25px;
        }

        .group-image {
            height: 160px;
        }

        .group-title {
            padding: 15px;
        }

        .group-title h3 {
            font-size: 1.1rem;
        }
    }

    /* Extra styling for better visual appeal */
    .group-card {
        position: relative;
        overflow: hidden;
    }

    .group-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
        z-index: 1;
    }

    .group-card:hover::before {
        left: 100%;
    }
    /* Partners Section Styles */
      .initiative-container {
            font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            direction: rtl;
            text-align: right;
        }

        .cards-section {
            padding: 60px 0;
            background: linear-gradient(135deg,var(--bg-light) 0%, #e9ecef 100%);
        }

        .card-item {
            border-radius: 15px;
            padding: 40px 30px;
            color:var(--bg-light);
            min-height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }

        .card-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .card-goals {
            background: linear-gradient(135deg, #545454 0%, #3a3a3a 100%);
        }

        .card-message {
            background: linear-gradient(135deg, #ff914d 0%, #e8762a 100%);
        }

        .card-values {
            background: linear-gradient(135deg, #00adb5 0%, #0097b2 100%);
        }

        .card-item h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 10px;
        }

        .card-item p {
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
        }

        .accreditation-section {
            background: linear-gradient(135deg,var(--primary-teal) 0%,var(--secondary-teal) 100%);
            color: var(--bg-light);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .accreditation-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: 50px 50px;
            opacity: 0.1;
        }

        .accreditation-content {
            position: relative;
            z-index: 2;
        }

        .accreditation-section h2 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .accreditation-section .subtitle {
            font-size: 20px;
            text-align: center;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .accreditation-section h4 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        .accreditation-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .accreditation-list li {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 15px;
            padding-right: 20px;
            position: relative;
        }

        .accreditation-list li::before {
            content: '•';
            color: #ff914d;
            font-weight: bold;
            position: absolute;
            right: 0;
            font-size: 20px;
        }

        .partners-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .partners-section h2 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 50px;
            color: #545454;
        }

        .partner-logo {
            text-align: center;
            padding: 20px;
        }

        .partner-logo img {
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .partner-logo img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .card-item {
                margin-bottom: 20px;
                padding: 30px 20px;
            }

            .accreditation-section h2,
            .partners-section h2 {
                font-size: 28px;
            }

            .accreditation-section .subtitle {
                font-size: 18px;
            }
        }
         .cards-section {
                background: #e8f4f8;
                padding: 60px 0;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            .cards-grid {
                display: flex;
                gap: 30px;
                justify-content: center;
                flex-wrap: wrap;
                margin-bottom: 50px;
            }

            .card-item {
                width: 300px;
                height: 200px;
                border-radius: 15px;
                padding: 30px 25px;
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .card-goals {
                background:var(--text-gray);
            }

            .card-message {
                background:var(--accent-orange);
            }

            .card-values {
                background:var(--primary-teal);
            }

            .card-item h3 {
                font-size: 22px;
                font-weight: bold;
                margin-bottom: 15px;
            }

            .card-item p {
                font-size: 14px;
                line-height: 1.6;
            }

            /* قسم الاعتمادات والشراكات */
            .accreditation-partners-section {
                background:var(--primary-teal);
                color: white;
                padding: 60px 0;
                border-radius: 50px 50px 0 0;
                position: relative;
            }

            .section-content {
                text-align: center;
                margin-bottom: 60px;
            }

            .main-title {
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .subtitle {
                font-size: 18px;
                margin-bottom: 30px;
                font-weight: normal;
            }

            .benefits-title {
                font-size: 16px;
                margin-bottom: 20px;
                text-align: right;
            }

            .benefits-list {
                text-align: right;
                max-width: 800px;
                margin: 0 auto 60px;
            }

            .benefits-list ul {
                list-style: none;
                padding: 0;
            }

            .benefits-list li {
                font-size: 14px;
                line-height: 1.8;
                margin-bottom: 12px;
                padding-right: 20px;
                position: relative;
            }

            .benefits-list li::before {
                content: '•';
                color:var(--accent-orange);
                font-weight: bold;
                position: absolute;
                right: 0;
                font-size: 16px;
            }

            /* قسم الشراكات */
            .partners-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 30px;
                text-align: center;
            }

            .partner-logo {
                text-align: center;
            }

            .partner-logo img {
                width: 120px;
                height: 120px;
                background: white;
                border-radius: 15px;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .cards-grid {
                    flex-direction: column;
                    align-items: center;
                    gap: 20px;
                }

                .card-item {
                    width: 100%;
                    max-width: 350px;
                }

                .main-title {
                    font-size: 24px;
                }

                .subtitle {
                    font-size: 16px;
                }

                .benefits-list {
                    padding: 0 20px;
                }
            }

    </style>
@endpush

@section('content')

    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            {{-- Main Hero Content --}}
            <div class="hero-content">
                 {{-- Hero Text --}}
                <div class="hero-text">
                    <h1 class="hero-title">من نحن؟؟</h1>
                    <h2 class="hero-subtitle">فطرة غيث</h2>
                </div>
                {{-- Hero Image --}}
                <div class="hero-image">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="طفل يكتب مع أقلام ملونة" />
                </div>


            </div>

            {{-- Info Box --}}
            <div class="info-box">
                <h3 class="info-title">التعريف العام عن المبادرة</h3>
                <p class="info-text">
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
            <h2 class="section-title">الجهات التي تطبقها المبادرة</h2>

            {{-- Groups Grid --}}
            <div class="groups-grid">
                {{-- Group 1: Gaza Students --}}
                <div class="group-card">
                    <div class="group-image">
                        <img src="{{ asset('images/kid3.jpg') }}" alt="طلاب مدينة غزة" />
                    </div>
                    <div class="group-title">
                        <h3>طلاب مدينة غزة</h3>
                    </div>
                </div>

                {{-- Group 2: Cancer Patients --}}
                <div class="group-card">
                    <div class="group-image">
                        <img src="{{ asset('images/kid2.jpg') }}" alt="مرضى السرطان" />
                    </div>
                    <div class="group-title">
                        <h3>مرضى السرطان</h3>
                    </div>
                </div>

                {{-- Group 3: Orphans and Poor --}}
                <div class="group-card">
                    <div class="group-image">
                        <img src="{{ asset('images/kid1.jpg') }}" alt="الأيتام والفقراء" />
                    </div>
                    <div class="group-title">
                        <h3>الأيتام والفقراء</h3>
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
                    <h3>أهدافنا</h3>
                    <p>تطوير كلمة "سنستطيع" وزيادة عقل كل طالب، علم، وتغيير الأماكن الضافية، الشاملة.</p>
                </div>

                <!-- بطاقة الرسالة -->
                <div class="card-item card-message">
                    <h3>رسالتنا</h3>
                    <p>العمل لإيجاد والإيثار وأسسنا نفس إجراء تكون سعادة في عملنا.</p>
                </div>

                <!-- بطاقة القيم -->
                <div class="card-item card-values">
                    <h3>قيمنا</h3>
                    <p>التركيز على عنصر الشمول وتطوير وتنمية المهارات والخبرات لبناء مجتمع ناجح.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الاعتمادات والشراكات -->
    <section class="accreditation-partners-section">
        <div class="container">
            <!-- محتوى الاعتمادات -->
            <div class="section-content">
                <h2 class="main-title">اعتماد المبادرة</h2>
                <p class="subtitle">المبادرة معتمدة على منصة "نحن" كمبادرة رسمية</p>

                <div class="benefits-list">
                    <p class="benefits-title">هذا الاعتماد يفيد المتطوعين بـ:</p>
                    <ul>
                        <li>اعتماد ساعات التطوع في خدمة مجتمع للمتطوع داخل الجامعة العربية الهاشمية</li>
                        <li>نقاط على مادة خدمة مجتمع في الجامعات ونقاط إضافية على المنح الحكومية التي تكون من قبل الحكومات</li>
                        <li>شهادات معتمدة من منصة نحن للمتطوعين</li>
                    </ul>
                </div>
            </div>

            <!-- قسم الشراكات -->
            <div class="partners-content">
                <h3 class="partners-title">الشركاء</h3>
                <div class="partner-logo">
                    <img src="{{ asset('images/snip1.jpg') }}"  alt="منصة نحن" />
                </div>
            </div>
        </div>
    </section>






@endsection

@push('scripts')
    <script>
        // Add smooth scrolling animation
        document.addEventListener('DOMContentLoaded', function() {
            // Animate stats on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
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