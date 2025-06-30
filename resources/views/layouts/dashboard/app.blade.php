<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/main.css') }}">

    <title>@yield('title', 'لوحة التحكم')</title>

    @stack('styles')
</head>

<body class="dashboard-layout">

    @include('layouts.dashboard.sidebar')


    <div class="main-content">

        @include('layouts.dashboard.nav')

        <main class="container-fluid py-4">
            @yield('content')
        </main>

        <footer class="footer bg-light py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-muted">© 2023 جميع الحقوق محفوظة</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <span class="text-muted">الإصدار 1.0.0</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.body.classList.toggle('sidebar-toggled');
            document.querySelector('.sidebar').classList.toggle('toggled');
        });

        // Close sidebar when clicking outside on mobile
        document.querySelector('.main-content').addEventListener('click', function () {
            if (window.innerWidth < 992) {
                document.body.classList.remove('sidebar-toggled');
                document.querySelector('.sidebar').classList.remove('toggled');
            }
        });
    </script>

    @stack('scripts')
</body>

</html>