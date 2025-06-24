<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="blur-overlay"></div>

    <div class="login-container d-flex justify-content-evenly align-items-center">

        <div class="welcome-section">
            <h1 class="welcome-title">أهلاً بعودتك</h1>
            <h2 class="welcome-subtitle">سجل دخولك لتستكمل رحلة العطاء</h2>
        </div>

        <!-- Login Form -->
        <div class="login-form-container">
            <div class="login-form card">
                <h2 class="login-title">تسجيل دخول</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" id="email" required>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">كلمة المرور</label>
                        <input type="password" name="password" id="password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <a href="" class="forgot-password">نسيت كلمة المرور؟</a>
                    <div class="form-group buttons-group">
                        <a href="" class="btn register-button">إنشاء حساب جديد</a>
                        <button type="submit" class="btn login-button">دخول</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>