<header style="background-color: var(--primary-6)">
    <nav class="d-flex justify-content-between align-items-center py-2 px-5">
        <div><a class="text-decoration-none nunito-font p-2 rounded-5"
                style="background-color: var(--primary-3); color: var(--primary-5);" href="">تسجيل
                دخول</a></div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <a style="color: var(--primary-5);"
                class="text-decoration-none nunito-font {{ request()->is('home') ? 'active-link' : '' }}"
                href="/home">الرئيسية</a>
            <a style="color: var(--primary-5);"
                class="text-decoration-none nunito-font {{ request()->is('about-us') ? 'active-link' : '' }}"
                href="/about-us">من نحن</a>
            <a style="color: var(--primary-5);"
                class="text-decoration-none nunito-font {{ request()->is('testimonials') ? 'active-link' : '' }}"
                href="/testimonials">الاراء</a>
            <a style="color: var(--primary-5);"
                class="text-decoration-none nunito-font {{ request()->is('join-us') ? 'active-link' : '' }}"
                href="/join-us">انضم الينا</a>
            <a style="color: var(--primary-5);"
                class="text-decoration-none nunito-font {{ request()->is('contact-us') ? 'active-link' : '' }}"
                href="/contact-us">تواصل معنا</a>

        </div>
        <div>
            <a href="/home" class="text-decoration-none"><img src="{{asset('images/logo.png')}}"
                    style="width: 70px; height: 70px;" alt="شعار الموقع"></a>
        </div>
    </nav>
</header>