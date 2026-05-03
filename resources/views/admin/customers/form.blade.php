@extends('admin.layouts.app')

@section('title', $customer->exists ? 'Edit Pelanggan' : 'Tambah Pelanggan')

@section('content')
    <div class="topbar">
        <div>
            <h1>{{ $customer->exists ? 'Edit Pelanggan' : 'Tambah Pelanggan' }}</h1>
            <p class="muted">Upload logo berbentuk PNG/JPG/WebP. Jika kosong, website memakai inisial nama.</p>
        </div>
        <a class="button secondary" href="{{ route('admin.customers.index') }}">Kembali</a>
    </div>

    <form class="card" method="POST" action="{{ $customer->exists ? route('admin.customers.update', $customer) : route('admin.customers.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($customer->exists)
            @method('PUT')
        @endif

        <div class="form-grid">
            <div class="field">
                <label for="name">Nama pelanggan</label>
                <input id="name" type="text" name="name" value="{{ old('name', $customer->name) }}" required>
            </div>
            <div class="field">
                <label for="sort_order">Urutan</label>
                <input id="sort_order" type="number" name="sort_order" min="0" value="{{ old('sort_order', $customer->sort_order ?? 0) }}">
            </div>
            <div class="field full">
                <label for="logo">Logo</label>
                <input id="logo" type="file" name="logo" accept="image/*">
                @if ($customer->logo)
                    <p class="muted">Logo saat ini: {{ $customer->logo }}</p>
                    <label><input type="checkbox" name="remove_logo" value="1"> Hapus logo saat ini</label>
                @endif
            </div>
            <label class="check">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $customer->is_active) ? 'checked' : '' }}>
                Tampilkan di website
            </label>
        </div>

        <button class="button" type="submit">{{ $customer->exists ? 'Simpan Perubahan' : 'Tambah Pelanggan' }}</button>
    </form>
@endsection
