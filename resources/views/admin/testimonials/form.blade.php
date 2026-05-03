@extends('admin.layouts.app')

@section('title', $testimonial->exists ? 'Edit Testimoni' : 'Tambah Testimoni')

@section('content')
    <div class="topbar">
        <div>
            <h1>{{ $testimonial->exists ? 'Edit Testimoni' : 'Tambah Testimoni' }}</h1>
            <p class="muted">Testimoni aktif akan tampil di slider homepage.</p>
        </div>
        <a class="button secondary" href="{{ route('admin.testimonials.index') }}">Kembali</a>
    </div>

    <form class="card" method="POST" action="{{ $testimonial->exists ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($testimonial->exists)
            @method('PUT')
        @endif

        <div class="form-grid">
            <div class="field">
                <label for="title">Judul</label>
                <input id="title" type="text" name="title" value="{{ old('title', $testimonial->title) }}" required>
            </div>
            <div class="field">
                <label for="sort_order">Urutan</label>
                <input id="sort_order" type="number" name="sort_order" min="0" value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}">
            </div>
            <div class="field">
                <label for="person_name">Nama pemberi testimoni</label>
                <input id="person_name" type="text" name="person_name" value="{{ old('person_name', $testimonial->person_name) }}" required>
            </div>
            <div class="field">
                <label for="institution">Instansi / sekolah</label>
                <input id="institution" type="text" name="institution" value="{{ old('institution', $testimonial->institution) }}">
            </div>
            <div class="field full">
                <label for="content">Isi testimoni</label>
                <textarea id="content" name="content" required>{{ old('content', $testimonial->content) }}</textarea>
            </div>
            <div class="field full">
                <label for="avatar">Avatar / logo kecil</label>
                <input id="avatar" type="file" name="avatar" accept="image/*">
                @if ($testimonial->avatar)
                    <p class="muted">Avatar saat ini: {{ $testimonial->avatar }}</p>
                    <label><input type="checkbox" name="remove_avatar" value="1"> Hapus avatar saat ini</label>
                @endif
            </div>
            <label class="check">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                Tampilkan di website
            </label>
        </div>

        <button class="button" type="submit">{{ $testimonial->exists ? 'Simpan Perubahan' : 'Tambah Testimoni' }}</button>
    </form>
@endsection
