@extends('admin.template')

@section('title', 'Tambah Project')
@section('page-heading', 'Tambah Project')

@section('content')

    <div class="admin-panel">

        {{-- Judul Halaman --}}
        <h2 class="h5 fw-bold mb-4">
            Tambah Project Baru
        </h2>

        {{-- Form Tambah Project --}}
        <form
            action="{{ route('admin.projects.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf

            {{-- Input Form Project --}}
            @include('admin.projects._form')

            {{-- Tombol Aksi --}}
            <div class="d-flex gap-2 mt-4">

                <button
                    type="submit"
                    class="btn btn-primary px-4"
                >
                    Simpan
                </button>

                <a
                    href="{{ route('admin.projects.index') }}"
                    class="btn btn-danger"
                >
                    Batal
                </a>

            </div>
        </form>

    </div>

@endsection
