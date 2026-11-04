<div class="row g-4">

    {{-- Nama Project --}}
    <div class="col-md-6">
        <label for="title" class="form-label fw-semibold">
            Nama Project <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            id="title"
            name="title"
            class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $project->title) }}"
            maxlength="255"
            required
        >

        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    {{-- Teknologi --}}
    <div class="col-md-6">
        <label for="teknologi" class="form-label fw-semibold">
            Teknologi <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            id="teknologi"
            name="teknologi"
            class="form-control @error('teknologi') is-invalid @enderror"
            value="{{ old('teknologi', $project->teknologi) }}"
            maxlength="255"
            placeholder="Contoh: Laravel & Bootstrap"
            required
        >

        @error('teknologi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    {{-- Status Project --}}
    <div class="col-md-6">
        <label for="status" class="form-label fw-semibold">
            Status <span class="text-danger">*</span>
        </label>

        @php
            $currentStatus = strtolower(old('status', $project->status ?: 'selesai'));
        @endphp

        <select
            id="status"
            name="status"
            class="form-select @error('status') is-invalid @enderror"
            required
        >
            <option value="">Pilih Status</option>

            <option value="selesai" {{ $currentStatus === 'selesai' ? 'selected' : '' }}>
                Selesai
            </option>

            <option value="proses" {{ in_array($currentStatus, ['proses', 'dalam proses', 'active']) ? 'selected' : '' }}>
                Dalam Proses
            </option>

            <option value="rencana" {{ in_array($currentStatus, ['rencana', 'direncanakan', 'archived']) ? 'selected' : '' }}>
                Direncanakan
            </option>
        </select>

        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    {{-- Foto Project --}}
    <div class="col-md-6">
        <label for="image" class="form-label fw-semibold">
            Foto Project
        </label>

        <input
            type="file"
            id="image"
            name="image"
            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
            class="form-control @error('image') is-invalid @enderror"
        >

        <div class="form-text">
            Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
            Foto tidak wajib diisi.
        </div>

        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        {{-- Preview Foto Saat Ini --}}
        @if ($project->image)
            <div class="mt-3">
                <div class="small text-muted mb-1">
                    Foto saat ini:
                </div>

                <img
                    src="{{ str_starts_with($project->image, 'projects/')
                        ? asset('storage/' . $project->image)
                        : asset('img/' . $project->image) }}"
                    alt="Foto {{ $project->title }}"
                    style="
                        max-width: 220px;
                        max-height: 140px;
                        object-fit: cover;
                        border-radius: 8px;
                        border: 1px solid #dee2e6;
                        padding: 3px;
                    "
                >

                <div class="form-text">
                    Kosongkan pilihan foto jika ingin tetap memakai foto ini.
                </div>
            </div>
        @endif
    </div>


    {{-- Deskripsi Project --}}
    <div class="col-12">
        <label for="description" class="form-label fw-semibold">
            Description <span class="text-danger">*</span>
        </label>

        <textarea
            id="description"
            name="description"
            rows="5"
            class="form-control @error('description') is-invalid @enderror"
            placeholder="Jelaskan project ini..."
            required
        >{{ old('description', $project->description) }}</textarea>

        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>
