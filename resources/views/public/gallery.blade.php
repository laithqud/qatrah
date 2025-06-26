@extends('layouts.app')

@section('title', 'Gallery')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endpush

@section('content')
    <section class="gallery-section">
        <div class="container">
            <a href="/home" class="home-link">
                <h2 class="pe-3 pt-5 fs-4 nunito-font">
                    <i class="fas fa-arrow-right me-2"></i> العودة الى الصفحة الرئيسية
                </h2>
            </a>

            <div class="gallery-header text-center my-5">
                <h1 class="gallery-title nunito-font">معرض الصور</h1>
                <p class="gallery-subtitle nunito-font">لحظات من العطاء والإنجاز</p>
            </div>

            <div class="gallery-grid">
                @foreach ($images as $image)
                    <div class="gallery-item">
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->alt_text }}"
                                class="gallery-image" data-bs-toggle="modal" data-bs-target="#galleryModal"
                                onclick="setModalImage(this.src)">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" class="img-fluid" alt="صورة مكبرة">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function setModalImage(src) {
            document.getElementById('modalImage').src = src;
        }
    </script>
@endpush