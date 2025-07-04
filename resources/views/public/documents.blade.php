@extends('layouts.app')

@section('title', 'الملفات والتقارير')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/documents.css') }}">
@endpush

@section('content')
    <section class="documents-section">
        <div class="container">
            <!-- Documents Header -->
            <div class="documents-header text-center my-5">
                <h1 class="documents-title nunito-font">الملفات والتقارير</h1>
                <p class="documents-subtitle nunito-font">تصفح دوسياتنا وملخصاتنا التعليمية</p>
            </div>

            <!-- Documents Grid -->
            <div class="documents-grid">
                <!-- Dossiers Section -->
                <div class="category-section">
                    <h3 class="category-title nunito-font">
                        <i class="fas fa-folder-open me-2"></i> الدوسيات
                    </h3>
                    <div class="category-items">
                        @foreach ($dossiers as $dossier)
                            <div class="document-card dossier nunito-font">
                                <div class="document-icon nunito-font">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="document-content nunito-font">
                                    <h3 class="document-name nunito-font">
                                        {{ $dossier->title ?? 'دوسية بدون عنوان' }}
                                    </h3>
                                    <div class="document-actions nunito-font">
                                        <a href="{{ asset('storage/' . $dossier->file_path) }}" class="btn-preview nunito-font"
                                            target="_blank">
                                            <i class="fas fa-eye"></i> معاينة
                                        </a>
                                        <a href="{{ asset('storage/' . $dossier->file_path) }}" class="btn-download nunito-font"
                                            download>
                                            <i class="fas fa-download"></i> تحميل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- Summaries Section -->
                <div class="category-section">
                    <h3 class="category-title nunito-font">
                        <i class="fas fa-file-alt me-2"></i> الملخصات
                    </h3>
                    <div class="category-items">
                        @foreach ($documents as $document)
                            <div class="document-card summary nunito-font">
                                <div class="document-icon nunito-font">
                                    <img class="summaries-img" src="{{ asset('storage/' . $document->image_path) }}"
                                        alt="ملخص Icon">
                                </div>
                                <div class="document-content nunito-font">
                                    <h3 class="document-name nunito-font pt-2">{{ $document->name }}</h3>
                                    <p class="document-meta nunito-font">عدد الصفحات: {{ $document->page_count }}</p>
                                    <div class="document-actions nunito-font">
                                        <a href="{{ asset('storage/' . $document->file_path) }}" class="btn-preview nunito-font"
                                            target="_blank">
                                            <i class="fas fa-eye"></i> معاينة
                                        </a>
                                        <a href="{{ asset('storage/' . $document->file_path) }}"
                                            class="btn-download nunito-font" download>
                                            <i class="fas fa-download"></i> تحميل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection