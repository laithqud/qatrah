@extends('layouts.dashboard.app')

@section('title', 'Add Document')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Document</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Document Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Preview Image</label>
                                <input class="form-control" type="file" id="image" name="image" required>
                                <div class="form-text">JPEG, PNG, JPG (Max: 2MB)</div>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Document File</label>
                                <input class="form-control" type="file" id="file" name="file" required>
                                <div class="form-text">PDF, Word (Max: 10MB)</div>
                            </div>
                            <div class="mb-3">
                                <label for="page_count" class="form-label">Page Count</label>
                                <input type="number" class="form-control" id="page_count" name="page_count" min="1"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('admin.documents') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection