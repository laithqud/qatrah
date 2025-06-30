@extends('layouts.dashboard.app')

@section('title', 'المستخدمين المحذوفين - قطرة غيث')

@section('content')
<!-- Page Header -->
<div class="admin-header text-center">
    <h1 class="nunito-font">المستخدمين المحذوفين</h1>
    <p class="nunito-font">عرض وإدارة المستخدمين المحذوفين</p>
</div>

<!-- Success/Error Messages -->
@if(session('success'))
    <div class="admin-alert admin-alert-success nunito-font">
        <i class="bi bi-check-circle me-2"></i>
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="admin-alert admin-alert-danger nunito-font">
        <i class="bi bi-exclamation-triangle me-2"></i>
        {{ $errors->first() }}
    </div>
@endif

<!-- Users Management Card -->
<div class="admin-card">
    <div class="admin-card-header d-flex justify-content-between align-items-center">
        <h3 class="nunito-font mb-0">
            <i class="bi bi-trash"></i>
            المستخدمين المحذوفين ({{ $users->total() }})
        </h3>
        <div>
            <a href="{{ route('admin.users.index') }}" class="admin-btn admin-btn-secondary">
                <i class="bi bi-arrow-left"></i>العودة للمستخدمين
            </a>
        </div>
    </div>
    <div class="admin-card-body">
        @if($users->count() > 0)
            <div class="admin-table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th class="nunito-font">الرقم</th>
                            <th class="nunito-font">الاسم</th>
                            <th class="nunito-font">البريد الإلكتروني</th>
                            <th class="nunito-font">تاريخ الحذف</th>
                            <th class="nunito-font">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="nunito-font">{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                                <td class="nunito-font">{{ $user->name ?? 'غير محدد' }}</td>
                                <td class="nunito-font">{{ $user->email }}</td>
                                <td class="nunito-font">{{ $user->deleted_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <div class="admin-action-buttons">
                                        <form action="{{ route('admin.users.restore', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="admin-btn admin-btn-success admin-btn-sm" 
                                                    onclick="return confirm('هل أنت متأكد من استعادة هذا المستخدم؟')">
                                                <i class="bi bi-arrow-clockwise"></i>
                                                استعادة
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.users.force-delete', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="admin-btn admin-btn-danger admin-btn-sm"
                                                    onclick="return confirm('هل أنت متأكد من حذف هذا المستخدم نهائياً؟ هذا الإجراء لا يمكن التراجع عنه!')">
                                                <i class="bi bi-trash"></i>
                                                حذف نهائي
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="admin-pagination">
                {{ $users->links() }}
            </div>
        @else
            <div class="admin-empty-state text-center">
                <i class="bi bi-trash" style="font-size: 3rem; color: #dee2e6;"></i>
                <h4 class="nunito-font mt-3">لا توجد مستخدمين محذوفين</h4>
                <p class="nunito-font text-muted">سيظهر هنا المستخدمين المحذوفين</p>
            </div>
        @endif
    </div>
</div>
@endsection
