@extends('layouts.app')

@section('title', 'الملف الشخصي - قطرة غيث')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
<div class="profile-container">
    <div class="container">
        <!-- Profile Header -->
        <div class="profile-header">
            <h1 class="nunito-font">الملف الشخصي</h1>
            <p class="nunito-font">قم بإدارة معلومات حسابك وأمان كلمة المرور</p>
        </div>

        <div class="profile-content">
            <!-- Success Messages -->
            @if(session('success'))
                <div class="alert alert-success nunito-font">
                    <i class="bi bi-check-circle me-2"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Profile Welcome -->
            <div class="profile-welcome">
                <div class="profile-avatar">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h2 class="nunito-font">مرحباً، {{ $user->name ?? 'المستخدم' }}</h2>
                <p class="nunito-font">عضو منذ {{ $user->created_at->format('Y/m/d') }}</p>
            </div>

            <!-- Profile Information Card -->
            <div class="profile-card">
                <div class="profile-card-header">
                    <h3 class="nunito-font">
                        <i class="bi bi-person-gear"></i>
                        معلومات الحساب
                    </h3>
                </div>
                <div class="profile-card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile-form-group">
                                    <label for="name" class="nunito-font">الاسم الكامل</label>
                                    <input type="text" 
                                           class="profile-form-control nunito-font @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name', $user->name) }}" 
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback nunito-font">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-form-group">
                                    <label for="email" class="nunito-font">البريد الإلكتروني</label>
                                    <input type="email" 
                                           class="profile-form-control nunito-font @error('email') is-invalid @enderror" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email', $user->email) }}" 
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback nunito-font">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="profile-btn nunito-font">
                                <i class="bi bi-save me-2"></i>
                                حفظ التغييرات
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Password Change Card -->
            <div class="profile-card">
                <div class="profile-card-header">
                    <h3 class="nunito-font">
                        <i class="bi bi-shield-lock"></i>
                        تغيير كلمة المرور
                    </h3>
                </div>
                <div class="profile-card-body">
                    <form method="POST" action="{{ route('profile.password.update') }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile-form-group">
                                    <label for="password" class="nunito-font">كلمة المرور الجديدة</label>
                                    <input type="password" 
                                           class="profile-form-control nunito-font @error('password') is-invalid @enderror" 
                                           id="password" 
                                           name="password" 
                                           required>
                                    <div class="password-requirements nunito-font">
                                        يجب أن تحتوي على 8 أحرف على الأقل
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback nunito-font">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-form-group">
                                    <label for="password_confirmation" class="nunito-font">تأكيد كلمة المرور الجديدة</label>
                                    <input type="password" 
                                           class="profile-form-control nunito-font" 
                                           id="password_confirmation" 
                                           name="password_confirmation" 
                                           required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="profile-btn nunito-font">
                                <i class="bi bi-shield-check me-2"></i>
                                تحديث كلمة المرور
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Account Info Card -->
            <div class="profile-card">
                <div class="profile-card-header">
                    <h3 class="nunito-font">
                        <i class="bi bi-info-circle"></i>
                        معلومات الحساب
                    </h3>
                </div>
                <div class="profile-card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="nunito-font"><strong>تاريخ الانضمام:</strong></p>
                            <p class="nunito-font text-muted">{{ $user->created_at->format('d/m/Y - H:i') }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="nunito-font"><strong>آخر تحديث:</strong></p>
                            <p class="nunito-font text-muted">{{ $user->updated_at->format('d/m/Y - H:i') }}</p>
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
document.addEventListener('DOMContentLoaded', function () {
    // Add loading animation to buttons on form submission
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
            }
        });
    });

    // Password confirmation validation
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('password_confirmation');
    
    if (passwordField && confirmPasswordField) {
        function validatePasswordMatch() {
            if (confirmPasswordField.value && passwordField.value !== confirmPasswordField.value) {
                confirmPasswordField.setCustomValidity('كلمات المرور غير متطابقة');
            } else {
                confirmPasswordField.setCustomValidity('');
            }
        }
        
        passwordField.addEventListener('input', validatePasswordMatch);
        confirmPasswordField.addEventListener('input', validatePasswordMatch);
    }

    // Auto-hide alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.remove();
            }, 300);
        }, 5000);
    });
});
</script>
@endpush
