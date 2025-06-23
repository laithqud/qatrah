@extends('layouts.app')

@section('content')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-teal: #00adb5;
            --secondary-teal: #0097b2;
            --accent-orange: #ff914d;
            --text-gray: #545454;
            --text-black: #000000;
            --bg-light: #e8f4f8;
        }

        body {
            direction: rtl;
            font-family: 'Cairo', 'Arial', sans-serif;
            background-color: #fff;
        }

        .hero {
            background-image: url('/images/opinion.jpg');
            background-size: cover;
            background-position: center;
            padding: 120px 20px;
            color: var(--text-black);
            text-align: left;
            /* تغيير من right إلى left */
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }

        .hero p {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.8;
            margin: 0;
            position: relative;
            z-index: 2;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .section-icons {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: var(--accent-orange);
            padding: 25px 0;
            color: #000;
            font-size: 18px;
            font-weight: 600;
        }

        .section-icons div {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .section-icons div:hover {
            transform: translateY(-3px);
        }

        .section-icons i {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .testimonials {
            padding: 70px 20px;
            background-color: #fff;
        }

        .testimonials .title {
            text-align: right;
            margin-bottom: 50px;
            position: relative;
        }

        .testimonials .title h4 {
            font-size: 22px;
            color: var(--text-gray);
            margin-bottom: 10px;
            border-bottom: 2px solid var(--accent-orange);
            display: inline-block;
            padding-bottom: 5px;
            font-weight: 400;
        }

        .testimonials .title h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-black);
        }

        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .testimonial-card {
            background-color: #fff;
            border: 1px solid #f0f0f0;
            border-radius: 15px;
            padding: 30px;
            width: 320px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(255, 145, 77, 0.15);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-teal), var(--accent-orange));
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(255, 145, 77, 0.25);
        }

        .testimonial-card img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid var(--accent-orange);
        }

        .testimonial-card h5 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
            color: var(--text-black);
        }

        .testimonial-card small {
            color: var(--primary-teal);
            display: block;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .testimonial-card p {
            color: var(--text-gray);
            font-size: 16px;
            line-height: 1.7;
            font-weight: 400;
        }

        @media (max-width: 768px) {
            .hero p {
                font-size: 24px;
                text-align: center;
            }

            .section-icons {
                flex-direction: column;
                gap: 20px;
            }

            .testimonials .title {
                text-align: center;
            }

            .testimonial-card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>

    <div class="hero">
        <p>فاقصِدْ مسيرَك للأعلا<br>متوكلاً، البذلُ روحٌ<br>والمُنى أجساد.</p>
    </div>

    <div class="section-icons">
        <div>
            <i class="fas fa-hand-holding-heart"></i>
            الإنسانية
        </div>
        <div>
            <i class="fas fa-book-open"></i>
            التعلم
        </div>
        <div>
            <i class="fas fa-map-marker-alt"></i>
            الخبرة
        </div>
    </div>

    <div class="testimonials">
        <div class="title">
            <h4>التوصيات</h4>
            <h2>ماذا قالوا عنا؟</h2>
        </div>

        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="/images/guy.png" alt="وسيم يوسف">
                <h5>وسيم يوسف</h5>
                <small>هندسة أنظمة ذكية</small>
                <p>نقاط على مادة خدمة مجتمع في الجامعات ونقاط إضافية عند المنح الخارجية التي تكون من قبل الحكومات.</p>
            </div>

            <div class="testimonial-card">
                <img src="/images/guy.png" alt="وسيم يوسف">
                <h5>وسيم يوسف</h5>
                <small>هندسة أنظمة ذكية</small>
                <p>نقاط على مادة خدمة مجتمع في الجامعات ونقاط إضافية عند المنح الخارجية التي تكون من قبل الحكومات.</p>
            </div>
        </div>
    </div>

@endsection