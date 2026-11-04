@extends('admin.template')

@section('title', 'Data Project')
@section('page-heading', 'Data Project')

@section('content')
    <div class="admin-panel">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div>
                <h2 class="h5 fw-bold mb-1">Daftar Project</h2>
                <p class="text-muted mb-0">Semua data di halaman ini terhubung dengan halaman Project website.</p>
            </div>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
        </div>

        <form method="GET" action="{{ route('admin.projects.index') }}" class="row g-2 mb-3">
            <div class="col-sm-8 col-md-5 col-lg-4">
                <input type="search" name="search" class="form-control" value="{{ $search }}" placeholder="Cari judul, teknologi, status..." aria-label="Cari project">
            </div>
            <div class="col-auto"><button class="btn btn-outline-primary" type="submit">Cari</button></div>
            @if ($search !== '')
                <div class="col-auto"><a class="btn btn-outline-secondary" href="{{ route('admin.projects.index') }}">Reset</a></div>
            @endif
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-center" style="width:60px">No</th>
                        <th style="width:110px">Image</th>
                        <th style="min-width:170px">Title</th>
                        <th style="min-width:150px">Teknologi</th>
                        <th style="min-width:240px">Description</th>
                        <th style="width:130px">Status</th>
                        <th style="width:150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td class="text-center">{{ $projects->firstItem() + $loop->index }}</td>
                            <td>
                                @if ($project->image)
                                    <img class="project-thumb" src="{{ str_starts_with($project->image, 'projects/') ? asset('storage/' . $project->image) : asset('img/' . $project->image) }}" alt="{{ $project->title }}">
                                @else
                                    <span class="text-muted small">Tidak ada foto</span>
                                @endif
                            </td>
                            <td class="fw-semibold">{{ $project->title }}</td>
                            <td>{{ $project->teknologi }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($project->description, 130) }}</td>
                            <td>
                                @php($status = strtolower($project->status ?? ''))
                                <span class="badge {{ $status === 'selesai' ? 'text-bg-success' : ($status === 'proses' ? 'text-bg-warning' : 'text-bg-secondary') }}">{{ ucfirst($status ?: '-') }}</span>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap gap-1">
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center py-5 text-muted">Belum ada data project yang cocok.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-3">
            <small class="text-muted">Menampilkan {{ $projects->firstItem() ?? 0 }}–{{ $projects->lastItem() ?? 0 }} dari {{ $projects->total() }} project</small>
            {{ $projects->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
