<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <button class="btn btn-link me-3 d-lg-none" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>

        <div class="d-flex align-items-center ms-auto">
            <div class="dropdown">
                <button class="btn btn-link dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                    <img src="{{asset('images/hero.jpeg')}}" width="40" height="40" class="rounded-circle me-2">
                    <span class="text-dark text-decoration-none">
                        {{ auth('admin')->check() ? auth('admin')->user()->name : 'المشرف' }}
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-left me-2"></i>تسجيل الخروج
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>