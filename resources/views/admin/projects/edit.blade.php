@extends('admin.template')

@section('title', 'Edit Project')
@section('page-heading', 'Edit Project')

@section('content')
    <div class="admin-panel">
        <h2 class="h5 fw-bold mb-4">Edit Project: {{ $project->title }}</h2>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.projects._form')
            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection
