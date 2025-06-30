<header style="background-color: var(--primary-6)">
    <nav class="navbar navbar-expand-lg py-2 px-3 px-md-5">
        <a href="/home" class="navbar-brand">
            <img src="{{asset('images/logo.png')}}" style="width: 60px; height: 60px;" alt="شعار الموقع">
        </a>

        {{-- mobile button --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: var(--primary-5);"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <div class="d-flex justify-content-start justify-content-lg-end order-lg-2">

                {{-- If guest (not logged in), show Login button --}}
                @guest
                    <a class="text-decoration-none nunito-font p-2 rounded-3 login-btn"
                        style="background-color: var(--primary-3); color: var(--primary-5);" href="{{ route('login') }}">
                        تسجيل دخول
                    </a>
                @endguest

                {{-- If authenticated, show profile dropdown --}}
                @auth
                    <div class="dropdown">
                        <a class="btn d-flex align-items-center gap-2 p-2 rounded-3" href="#" role="button" id="userDropdown" 
                            data-bs-toggle="dropdown" aria-expanded="false" 
                            style="background-color: var(--primary-3); color: var(--primary-5);">
                            <i class="bi bi-person-circle fs-4"></i>
                            <span class="nunito-font d-none d-sm-inline">{{ Auth::user()->name ?? 'المستخدم' }}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item nunito-font" href="{{ route('profile.show') }}">
                                <i class="bi bi-person me-2"></i>الملف الشخصي</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item nunito-font" type="submit">
                                        <i class="bi bi-box-arrow-right me-2"></i>تسجيل خروج
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth

            </div>

            <ul class="navbar-nav gap-2 gap-lg-3 order-lg-1" style="padding-right: 250px;">
                <li class="nav-item">
                    <a class="nav-link nunito-font {{ request()->is('home') ? 'active-link' : '' }}"
                        style="color: var(--primary-5);" href="/home">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nunito-font {{ request()->is('about-us') ? 'active-link' : '' }}"
                        style="color: var(--primary-5);" href="/about-us">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nunito-font {{ request()->is('testimonials') ? 'active-link' : '' }}"
                        style="color: var(--primary-5);" href="/testimonial">الاراء</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nunito-font {{ request()->is('documents') ? 'active-link' : '' }}"
                        style="color: var(--primary-5);" href="/documents-dossiers">الملفات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nunito-font {{ request()->is('join-us') ? 'active-link' : '' }}"
                        style="color: var(--primary-5);" href="/join-us">انضم الينا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nunito-font {{ request()->is('contact-us') ? 'active-link' : '' }}"
                        style="color: var(--primary-5);" href="/contact-us">تواصل معنا</a>
                </li>
            </ul>
        </div>
    </nav>
</header>