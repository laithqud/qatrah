@extends('layouts.dashboard.app')

@section('title', 'Dossiers Management')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Dossiers</h2>
                    <a href="{{route('admin.dossiers.create')}}" class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i> Add Dossier
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
                                <th>Title</th>
                                <th>File</th>
                                <th>Uploaded At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dossiers as $dossier)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dossier->title }}</td>
                                    <td>
                                        <a href="{{ $dossier->file_path }}" target="_blank"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-download"></i> Download
                                        </a>
                                    </td>
                                    <td>{{ $dossier->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <form action="{{route('admin.dossiers.destroy', $dossier->id)}}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Delete this dossier?')">
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