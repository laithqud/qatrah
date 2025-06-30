<aside class="sidebar bg-dark text-white" id="sidebar">
    <div class="sidebar-header d-flex justify-content-between align-items-center p-3">
        <div class="d-flex align-items-center">
            <img src="/images/logo.png" alt="Logo" width="40" height="40" class="me-2">
            <h5 class="mb-0">لوحة التحكم</h5>
        </div>
        <button class="btn btn-link text-white d-lg-none" id="sidebarToggle">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <div class="sidebar-menu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.admins.index') }}"
                    class="nav-link {{ request()->routeIs('admin.admins.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-check me-2"></i>
                    <span>إدارة المشرفين</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}"
                    class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i>
                    <span>إدارة المستخدمين</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.forms') }}" class="nav-link {{ request()->routeIs('admin.forms') ? 'active' : '' }}">
                    <i class="bi bi-link-45deg me-2"></i>
                    <span>رابط الانضمام</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.gallery.index') }}"
                    class="nav-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                    <i class="bi bi-images me-2"></i>
                    <span>معرض الصور</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.dossiers') }}" class="nav-link {{ request()->routeIs('admin.dossiers.*') ? 'active' : '' }}">
                    <i class="bi bi-box-seam me-2"></i>
                    <span>الدوسيات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.documents') }}"
                    class="nav-link {{ request()->routeIs('admin.documents.*') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-text me-2"></i>
                    <span>الوثائق</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.testimonials') }}"
                    class="nav-link {{ request()->routeIs('admin.testimonials') ? 'active' : '' }}">
                    <i class="bi bi-chat-quote me-2"></i>
                    <span>آراء الطلاب</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/home" target="_blank" class="nav-link">
                    <i class="bi bi-globe me-2"></i>
                    <span>الموقع الرئيسي</span>
                </a>
            </li>
        </ul>
    </div>
</aside>