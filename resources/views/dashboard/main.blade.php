@extends('layouts.dashboard.app')

@section('title', 'لوحة التحكم - نظرة عامة')

@section('content')
    <div class="container-fluid py-4">
        <!-- Welcome Header -->
        <div class="admin-header text-center mb-4">
            <h1 class="nunito-font">مرحباً بك في لوحة التحكم</h1>
            <p class="nunito-font">إدارة نظام قطرة غيث التعليمي</p>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stat-card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">إجمالي المستخدمين</h6>
                                <h3 class="mb-0">{{ $totalUsers ?? 0 }}</h3>
                            </div>
                            <i class="bi bi-people fs-1"></i>
                        </div>
                        <small class="d-block mt-2">مسجلين في النظام</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">إجمالي المشرفين</h6>
                                <h3 class="mb-0">{{ $totalAdmins ?? 0 }}</h3>
                            </div>
                            <i class="bi bi-shield-check fs-1"></i>
                        </div>
                        <small class="d-block mt-2">مشرفي النظام</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">الصور</h6>
                                <h3 class="mb-0">{{ $totalImages ?? 0 }}</h3>
                            </div>
                            <i class="bi bi-images fs-1"></i>
                        </div>
                        <small class="d-block mt-2">في المعرض</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">الوثائق</h6>
                                <h3 class="mb-0">{{ $totalDocuments ?? 0 }}</h3>
                            </div>
                            <i class="bi bi-file-earmark-text fs-1"></i>
                        </div>
                        <small class="d-block mt-2">متاحة للتحميل</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity and Charts -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>أحدث المستخدمين</h5>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-primary">عرض الكل</a>
                    </div>
                    <div class="card-body">
                        @if(isset($recentUsers) && $recentUsers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>تاريخ التسجيل</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentUsers as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name ?? 'غير محدد' }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at ? $user->created_at->format('Y/m/d') : 'غير محدد' }}</td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">تعديل</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="text-center py-4">
                            <i class="bi bi-people fs-1 text-muted"></i>
                            <p class="text-muted mt-2">لا توجد مستخدمين مسجلين حتى الآن</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>آخر النشاطات</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>طلب جديد #1256</span>
                                    <small class="text-muted">منذ 5 دقائق</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>تسجيل مستخدم جديد</span>
                                    <small class="text-muted">منذ 30 دقيقة</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>تحديث المنتج #P-458</span>
                                    <small class="text-muted">منذ ساعتين</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>دفع جديد بقيمة $125</span>
                                    <small class="text-muted">منذ 5 ساعات</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- <!-- Recent Users -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>أحدث المستخدمين</h5>
                        <a href="" class="btn btn-sm btn-outline-primary">عرض الكل</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-center mb-3">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" width="80"
                                    height="80">
                                <h6>أحمد محمد</h6>
                                <small class="text-muted">مدير النظام</small>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" width="80"
                                    height="80">
                                <h6>سامي علي</h6>
                                <small class="text-muted">مستخدم عادي</small>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" width="80"
                                    height="80">
                                <h6>ليلى حسن</h6>
                                <small class="text-muted">مستخدم مميز</small>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" width="80"
                                    height="80">
                                <h6>خالد عمر</h6>
                                <small class="text-muted">مستخدم جديد</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@push('scripts')
    <script>
        // Initialize any charts or interactive elements here
        document.addEventListener('DOMContentLoaded', function () {
            // Example: Initialize a chart
            const ctx = document.getElementById('salesChart');
            if (ctx) {
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
                        datasets: [{
                            label: 'المبيعات',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        });
    </script>
@endpush