@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="topbar">
        <div>
            <h1>Dashboard</h1>
            <p class="muted">Kelola data yang tampil di website company profile.</p>
        </div>
    </div>

    <div class="grid">
        <div class="card stat"><strong>{{ $customerCount }}</strong><span>Total pelanggan</span></div>
        <div class="card stat"><strong>{{ $activeCustomerCount }}</strong><span>Pelanggan aktif</span></div>
        <div class="card stat"><strong>{{ $testimonialCount }}</strong><span>Total testimoni</span></div>
        <div class="card stat"><strong>{{ $activeTestimonialCount }}</strong><span>Testimoni aktif</span></div>
    </div>
@endsection
