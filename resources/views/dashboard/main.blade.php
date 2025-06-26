@extends('layouts.dashboard.app')

@section('title', 'لوحة التحكم - نظرة عامة')

@section('content')
    <div class="container-fluid py-4">
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stat-card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">إجمالي المستخدمين</h6>
                                <h3 class="mb-0">1,245</h3>
                            </div>
                            <i class="bi bi-people fs-1"></i>
                        </div>
                        <small class="d-block mt-2">+12% عن الشهر الماضي</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">إجمالي الطلبات</h6>
                                <h3 class="mb-0">568</h3>
                            </div>
                            <i class="bi bi-cart fs-1"></i>
                        </div>
                        <small class="d-block mt-2">+5 طلبات جديدة</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">المبيعات</h6>
                                <h3 class="mb-0">124</h3>
                            </div>
                            <i class="bi bi-currency-dollar fs-1"></i>
                        </div>
                        <small class="d-block mt-2">+8 عن الأمس</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">الإيرادات</h6>
                                <h3 class="mb-0">$12,345</h3>
                            </div>
                            <i class="bi bi-graph-up fs-1"></i>
                        </div>
                        <small class="d-block mt-2">+15% عن الشهر الماضي</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity and Charts -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>آخر الطلبات</h5>
                        <a href="" class="btn btn-sm btn-outline-primary">عرض الكل</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>العميل</th>
                                        <th>التاريخ</th>
                                        <th>الحالة</th>
                                        <th>المبلغ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1256</td>
                                        <td>أحمد محمد</td>
                                        <td>15/06/2023</td>
                                        <td><span class="badge bg-success">مكتمل</span></td>
                                        <td>$125.00</td>
                                    </tr>
                                    <tr>
                                        <td>1255</td>
                                        <td>سامي علي</td>
                                        <td>14/06/2023</td>
                                        <td><span class="badge bg-warning text-dark">قيد المعالجة</span></td>
                                        <td>$89.50</td>
                                    </tr>
                                    <tr>
                                        <td>1254</td>
                                        <td>ليلى حسن</td>
                                        <td>14/06/2023</td>
                                        <td><span class="badge bg-danger">ملغى</span></td>
                                        <td>$45.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
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
            </div>
        </div>

        <!-- Recent Users -->
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
        </div>
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