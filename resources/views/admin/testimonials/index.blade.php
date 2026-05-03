@extends('admin.layouts.app')

@section('title', 'Testimoni')

@section('content')
    <div class="topbar">
        <div>
            <h1>Testimoni</h1>
            <p class="muted">Data aktif akan tampil pada carousel testimoni di homepage.</p>
        </div>
        <a class="button" href="{{ route('admin.testimonials.create') }}">Tambah Testimoni</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Judul</th>
                    <th>Nama</th>
                    <th>Urutan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($testimonials as $testimonial)
                    <tr>
                        <td>
                            <div class="thumb">
                                @if ($testimonial->avatar)
                                    <img src="{{ asset('storage/'.$testimonial->avatar) }}" alt="{{ $testimonial->person_name }}">
                                @else
                                    {{ substr($testimonial->person_name, 0, 1) }}
                                @endif
                            </div>
                        </td>
                        <td>{{ $testimonial->title }}</td>
                        <td>{{ $testimonial->person_name }}<br><span class="muted">{{ $testimonial->institution }}</span></td>
                        <td>{{ $testimonial->sort_order }}</td>
                        <td>{{ $testimonial->is_active ? 'Aktif' : 'Nonaktif' }}</td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('admin.testimonials.edit', $testimonial) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" onsubmit="return confirm('Hapus testimoni ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6">Belum ada testimoni.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
