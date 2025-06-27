@extends('layouts.dashboard.app')

@section('title', 'Documents Management')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Documents</h2>
                    <a href="{{ route('dashboard.documents.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i> Add Document
                    </a>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Preview</th>
                                <th>Name</th>
                                <th>Pages</th>
                                <th>File</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($documents as $document)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $document->image_url }}" alt="{{ $document->name }}"
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>{{ $document->name }}</td>
                                    <td>{{ $document->page_count }}</td>
                                    <td>
                                        <a href="{{ $document->file_url }}" target="_blank"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('dashboard.documents.destroy', $document->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Delete this document?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection