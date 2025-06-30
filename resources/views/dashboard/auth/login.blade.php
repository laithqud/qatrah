<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    
    <!-- Bootstrap RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Main CSS Variables -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <!-- Admin Login CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/admin-login.css') }}">
    
    <title>تسجيل دخول المشرفين - قطرة غيث</title>
</head>

<body>
    <div class="admin-login-container">
        <div class="admin-login-card">
            <div class="admin-login-header">
                <img src="{{ asset('images/logo.png') }}" alt="قطرة غيث" class="admin-login-logo">
                <h1 class="admin-login-title nunito-font">لوحة التحكم</h1>
                <p class="admin-login-subtitle nunito-font">تسجيل دخول المشرفين</p>
            </div>

            @if($errors->any())
                <div class="admin-alert admin-alert-danger">
                    <i class="bi bi-exclamation-triangle admin-icon"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                
                <div class="admin-form-group">
                    <label for="email" class="nunito-font">
                        <i class="bi bi-envelope admin-icon"></i>البريد الإلكتروني
                    </label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           class="admin-form-control nunito-font @error('email') is-invalid @enderror" 
                           value="{{ old('email') }}" 
                           required 
                           autocomplete="username"
                           placeholder="أدخل البريد الإلكتروني">
                    @error('email')
                        <div class="admin-invalid-feedback nunito-font">{{ $message }}</div>
                    @enderror
                </div>

                <div class="admin-form-group">
                    <label for="password" class="nunito-font">
                        <i class="bi bi-lock admin-icon"></i>كلمة المرور
                    </label>
                    <input type="password" 
                           id="password" 
                           name="password" 
                           class="admin-form-control nunito-font @error('password') is-invalid @enderror" 
                           required 
                           autocomplete="current-password"
                           placeholder="أدخل كلمة المرور">
                    @error('password')
                        <div class="admin-invalid-feedback nunito-font">{{ $message }}</div>
                    @enderror
                </div>

                <div class="admin-remember-group">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                    <label for="remember" class="nunito-font">تذكرني</label>
                </div>

                <button type="submit" class="admin-login-btn nunito-font">
                    <i class="bi bi-box-arrow-in-right me-2"></i>تسجيل الدخول
                </button>
            </form>

            <div class="admin-back-link">
                <a href="{{ url('/') }}" class="nunito-font">
                    <i class="bi bi-arrow-left"></i>العودة للموقع الرئيسي
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
