@extends('admin.layouts.app')

@section('title', 'Pelanggan')

@section('content')
    <div class="topbar">
        <div>
            <h1>Pelanggan</h1>
            <p class="muted">Logo yang aktif akan tampil di bagian “Pelanggan kami”.</p>
        </div>
        <a class="button" href="{{ route('admin.customers.create') }}">Tambah Pelanggan</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Nama</th>
                    <th>Urutan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>
                            <div class="thumb">
                                @if ($customer->logo)
                                    <img src="{{ asset('storage/'.$customer->logo) }}" alt="{{ $customer->name }}">
                                @else
                                    {{ collect(explode(' ', $customer->name))->map(fn ($word) => $word[0])->take(2)->implode('') }}
                                @endif
                            </div>
                        </td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->sort_order }}</td>
                        <td>{{ $customer->is_active ? 'Aktif' : 'Nonaktif' }}</td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('admin.customers.edit', $customer) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.customers.destroy', $customer) }}" onsubmit="return confirm('Hapus pelanggan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">Belum ada pelanggan.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
