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
                <a href="{{ route('dashboard') }}"
                    class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}"
                    class="nav-link {{ request()->routeIs('admin.dashbaord') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i>
                    <span>الادمن</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.dashboard')}}"
                    class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i>
                    <span>المستخدمين</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('forms')}}" class="nav-link {{ request()->routeIs('forms') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i>
                    <span>رابط الانضمام</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.gallery.index') }}"
                    class="nav-link {{ request()->routeIs('admin.gallery.index') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i>
                    <span>الصور</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dossiers') }}" class="nav-link {{ request()->routeIs('dossiers') ? 'active' : '' }}">
                    <i class="bi bi-box-seam me-2"></i>
                    <span>الدوسيات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('documents') }}"
                    class="nav-link {{ request()->routeIs('documents') ? 'active' : '' }}">
                    <i class="bi bi-receipt me-2"></i>
                    <span>الملخصات</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('testimonials') }}"
                    class="nav-link {{ request()->routeIs('testimonials') ? 'active' : '' }}">
                    <i class="bi bi-graph-up me-2"></i>
                    <span>الاراء</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/home" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                    <i class="bi bi-gear me-2"></i>
                    <span>الموقع الرئيسي</span>
                </a>
            </li>
        </ul>
    </div>
</aside>