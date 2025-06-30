@extends('layouts.dashboard.app')

@section('title', 'Add Dossier')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Dossier</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.dossiers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title (optional)</label>
                                <input type="text" class="form-control" id="title" name="title">
                                <div class="form-text">If left blank, the filename will be used as title</div>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">File</label>
                                <input class="form-control" type="file" id="file" name="file" required>
                                <div class="form-text">Allowed: PDF, Word, Excel, PowerPoint. Max: 10MB</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <a href="{{ route('admin.dossiers') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection