<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إنشاء حساب جديد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="blur-overlay"></div>

    <div class="register-container d-flex flex-column justify-content-evenly align-items-center">

        <div class="welcome-section">
            <h1 class="welcome-title text-center">مرحباً بك</h1>
            <h2 class="welcome-subtitle text-center mb-5">انضم إلينا وكن جزءاً من رحلة العطاء</h2>
        </div>

        <!-- Register Form -->
        <div class="register-form-container">
            <div class="register-form card">
                <h2 class="register-title">إنشاء حساب جديد</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">الاسم الكامل</label>
                        <input type="text" name="name" id="name" required>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
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
                    <div class="form-group">
                        <label for="password_confirmation">تأكيد كلمة المرور</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>
                    <a href="/login" class="login-button mb-3 text-decoration-none">لديك حساب؟ سجل دخول</a>

                    <div class="form-group buttons-group mt-4">
                        <button type="submit" class="btn register-button">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>