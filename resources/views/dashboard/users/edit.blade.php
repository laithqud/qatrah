@extends('layouts.dashboard.app')

@section('title', 'تعديل المستخدم - قطرة غيث')

@section('content')
<!-- Page Header -->
<div class="admin-header text-center">
    <h1 class="nunito-font">تعديل المستخدم</h1>
    <p class="nunito-font">تحديث بيانات المستخدم: {{ $user->name ?? $user->email }}</p>
</div>

<!-- Breadcrumb -->
<nav class="admin-breadcrumb">
    <ol class="breadcrumb">
        <li class="admin-breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a></li>
        <li class="admin-breadcrumb-item"><a href="{{ route('admin.users.index') }}">المستخدمين</a></li>
        <li class="admin-breadcrumb-item active">تعديل المستخدم</li>
    </ol>
</nav>

<!-- Edit User Form -->
<div class="admin-card">
    <div class="admin-card-header">
        <h3 class="nunito-font">
            <i class="bi bi-person-gear"></i>
            تعديل بيانات المستخدم
        </h3>
    </div>
    <div class="admin-card-body">
        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6">
                    <div class="admin-form-group">
                        <label for="name" class="nunito-font">الاسم الكامل</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               class="admin-form-control nunito-font @error('name') is-invalid @enderror"
                               value="{{ old('name', $user->name) }}" 
                               required>
                        @error('name')
                            <div class="admin-invalid-feedback nunito-font">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="admin-form-group">
                        <label for="email" class="nunito-font">البريد الإلكتروني</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               class="admin-form-control nunito-font @error('email') is-invalid @enderror"
                               value="{{ old('email', $user->email) }}" 
                               required>
                        @error('email')
                            <div class="admin-invalid-feedback nunito-font">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="admin-form-actions">
                <button type="submit" class="admin-btn admin-btn-primary nunito-font">
                    <i class="bi bi-check"></i>
                    حفظ التغييرات
                </button>
                <a href="{{ route('admin.users.index') }}" class="admin-btn admin-btn-secondary nunito-font">
                    <i class="bi bi-arrow-left"></i>
                    رجوع
                </a>
            </div>
        </form>
    </div>
</div>

<!-- User Information Card -->
<div class="admin-card mt-4">
    <div class="admin-card-header">
        <h3 class="nunito-font">
            <i class="bi bi-info-circle"></i>
            معلومات إضافية
        </h3>
    </div>
    <div class="admin-card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="admin-info-item">
                    <label class="nunito-font">تاريخ التسجيل:</label>
                    <span class="nunito-font">{{ $user->created_at->format('Y-m-d H:i:s') }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="admin-info-item">
                    <label class="nunito-font">آخر تحديث:</label>
                    <span class="nunito-font">{{ $user->updated_at->format('Y-m-d H:i:s') }}</span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="admin-info-item">
                    <label class="nunito-font">معرف المستخدم:</label>
                    <span class="nunito-font">#{{ $user->id }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="admin-info-item">
                    <label class="nunito-font">حالة البريد الإلكتروني:</label>
                    @if($user->email_verified_at)
                        <span class="admin-badge admin-badge-success nunito-font">مؤكد</span>
                    @else
                        <span class="admin-badge admin-badge-warning nunito-font">غير مؤكد</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Section -->
<div class="admin-card mt-4">
    <div class="admin-card-header">
        <h3 class="nunito-font">
            <i class="bi bi-lock"></i>
            تغيير كلمة المرور
        </h3>
    </div>
    <div class="admin-card-body">
        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="password_change" value="1">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="admin-form-group">
                        <label for="password" class="nunito-font">كلمة المرور الجديدة</label>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               class="admin-form-control nunito-font @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="admin-invalid-feedback nunito-font">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="admin-form-group">
                        <label for="password_confirmation" class="nunito-font">تأكيد كلمة المرور</label>
                        <input type="password" 
                               id="password_confirmation" 
                               name="password_confirmation" 
                               class="admin-form-control nunito-font">
                    </div>
                </div>
            </div>
            
            <div class="admin-form-actions">
                <button type="submit" class="admin-btn admin-btn-warning nunito-font">
                    <i class="bi bi-key"></i>
                    تغيير كلمة المرور
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
