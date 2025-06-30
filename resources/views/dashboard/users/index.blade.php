@extends('layouts.dashboard.app')

@section('title', 'إدارة المستخدمين - قطرة غيث')

@section('content')
<!-- Page Header -->
<div class="admin-header text-center">
    <h1 class="nunito-font">إدارة المستخدمين</h1>
    <p class="nunito-font">عرض وإدارة جميع المستخدمين المسجلين</p>
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
            <i class="bi bi-people"></i>
            قائمة المستخدمين ({{ $users->total() }})
        </h3>
        <div>
            <a href="{{ route('admin.users.trashed') }}" class="admin-btn admin-btn-warning">
                <i class="bi bi-trash"></i>المحذوفين
            </a>
            <a href="/home" target="_blank" class="admin-btn admin-btn-success">
                <i class="bi bi-globe"></i>الموقع الرئيسي
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
                            <th class="nunito-font">تاريخ التسجيل</th>
                            <th class="nunito-font">آخر تحديث</th>
                            <th class="nunito-font">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="nunito-font">{{ $user->id }}</td>
                                <td class="nunito-font">{{ $user->name ?? 'غير محدد' }}</td>
                                <td class="nunito-font">{{ $user->email }}</td>
                                <td class="nunito-font">{{ $user->created_at ? $user->created_at->format('Y-m-d H:i') : 'غير محدد' }}</td>
                                <td class="nunito-font">{{ $user->updated_at ? $user->updated_at->format('Y-m-d H:i') : 'غير محدد' }}</td>
                                <td>
                                    <div class="admin-actions">
                                        <a href="{{ route('admin.users.edit', $user) }}" 
                                           class="admin-btn admin-btn-primary admin-btn-sm"
                                           title="تعديل">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        
                                        <form action="{{ route('admin.users.destroy', $user) }}" 
                                              method="POST" 
                                              class="d-inline admin-delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="admin-btn admin-btn-danger admin-btn-sm"
                                                    onclick="return confirm('هل أنت متأكد من حذف هذا المستخدم؟')"
                                                    title="حذف">
                                                <i class="bi bi-trash"></i>
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
            <div class="admin-empty-state">
                <i class="bi bi-people admin-empty-icon"></i>
                <h3 class="nunito-font">لا توجد مستخدمين</h3>
                <p class="nunito-font">لم يتم تسجيل أي مستخدمين حتى الآن</p>
            </div>
        @endif
    </div>
</div>
@endsection