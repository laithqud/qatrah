@extends('layouts.dashboard.app')

@section('title', 'إضافة مشرف جديد - قطرة غيث')

@section('content')
<!-- Page Header -->
<div class="admin-header text-center">
    <h1 class="nunito-font">إضافة مشرف جديد</h1>
    <p class="nunito-font">إنشاء حساب مشرف جديد للنظام</p>
</div>

<!-- Breadcrumb -->
<nav class="admin-breadcrumb">
    <ol class="breadcrumb">
        <li class="admin-breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a></li>
        <li class="admin-breadcrumb-item"><a href="{{ route('admin.admins.index') }}">المشرفين</a></li>
        <li class="admin-breadcrumb-item active">إضافة مشرف</li>
    </ol>
</nav>

<!-- Create Admin Form -->
<div class="admin-card">
    <div class="admin-card-header">
        <h3 class="nunito-font">
            <i class="bi bi-person-plus"></i>
            بيانات المشرف الجديد
        </h3>
    </div>
    <div class="admin-card-body">
        <form method="POST" action="{{ route('admin.admins.store') }}">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="admin-form-group">
                        <label for="name" class="nunito-font">الاسم الكامل</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               class="admin-form-control nunito-font @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" 
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
                               value="{{ old('email') }}" 
                               required>
                        @error('email')
                            <div class="admin-invalid-feedback nunito-font">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="admin-form-group">
                        <label for="password" class="nunito-font">كلمة المرور</label>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               class="admin-form-control nunito-font @error('password') is-invalid @enderror"
                               required>
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
                               class="admin-form-control nunito-font"
                               required>
                    </div>
                </div>
            </div>
            
            <div class="admin-form-actions">
                <button type="submit" class="admin-btn admin-btn-success nunito-font">
                    <i class="bi bi-check"></i>
                    إنشاء المشرف
                </button>
                <a href="{{ route('admin.admins.index') }}" class="admin-btn admin-btn-secondary nunito-font">
                    <i class="bi bi-arrow-left"></i>
                    رجوع
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
