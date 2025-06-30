@extends('layouts.dashboard.app')

@section('title', 'إدارة المشرفين - قطرة غيث')

@section('content')
<!-- Page Header -->
<div class="admin-header text-center">
    <h1 class="nunito-font">إدارة المشرفين</h1>
    <p class="nunito-font">عرض وإدارة جميع مشرفي النظام</p>
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

<!-- Admins Management Card -->
<div class="admin-card">
    <div class="admin-card-header d-flex justify-content-between align-items-center">
        <h3 class="nunito-font mb-0">
            <i class="bi bi-shield-check"></i>
            قائمة المشرفين ({{ $admins->total() }})
        </h3>
        <div>
            <a href="{{ route('admin.admins.trashed') }}" class="admin-btn admin-btn-warning">
                <i class="bi bi-trash"></i>المحذوفين
            </a>
            <a href="{{ route('admin.admins.create') }}" class="admin-btn admin-btn-success">
                <i class="bi bi-plus"></i>إضافة مشرف جديد
            </a>
        </div>
    </div>
    <div class="admin-card-body">
        @if($admins->count() > 0)
            <div class="admin-table-container">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th class="nunito-font">الرقم</th>
                            <th class="nunito-font">الاسم</th>
                            <th class="nunito-font">البريد الإلكتروني</th>
                            <th class="nunito-font">تاريخ الإنشاء</th>
                            <th class="nunito-font">آخر تحديث</th>
                            <th class="nunito-font">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td class="nunito-font">{{ $admin->id }}</td>
                                <td class="nunito-font">{{ $admin->name ?? 'غير محدد' }}</td>
                                <td class="nunito-font">{{ $admin->email }}</td>
                                <td class="nunito-font">{{ $admin->created_at ? $admin->created_at->format('Y-m-d H:i') : 'غير محدد' }}</td>
                                <td class="nunito-font">{{ $admin->updated_at ? $admin->updated_at->format('Y-m-d H:i') : 'غير محدد' }}</td>
                                <td>
                                    <div class="admin-actions">
                                        <a href="{{ route('admin.admins.edit', $admin) }}" 
                                           class="admin-btn admin-btn-primary admin-btn-sm"
                                           title="تعديل">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        
                                        @if($admin->id !== auth('admin')->id())
                                            <form action="{{ route('admin.admins.destroy', $admin) }}" 
                                                  method="POST" 
                                                  class="d-inline admin-delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="admin-btn admin-btn-danger admin-btn-sm"
                                                        onclick="return confirm('هل أنت متأكد من حذف هذا المشرف؟')"
                                                        title="حذف">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        @else
                                            <span class="admin-btn admin-btn-secondary admin-btn-sm disabled" title="لا يمكن حذف حسابك الخاص">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="admin-pagination">
                {{ $admins->links() }}
            </div>
        @else
            <div class="admin-empty-state">
                <i class="bi bi-shield-exclamation admin-empty-icon"></i>
                <h3 class="nunito-font">لا توجد مشرفين</h3>
                <p class="nunito-font">لم يتم إنشاء أي مشرفين حتى الآن</p>
                <a href="{{ route('admin.admins.create') }}" class="admin-btn admin-btn-primary">
                    <i class="bi bi-plus"></i>إضافة أول مشرف
                </a>
            </div>
        @endif
    </div>
</div>
@endsection