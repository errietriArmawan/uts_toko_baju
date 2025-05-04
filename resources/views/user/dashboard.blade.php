@extends('layouts.app_users')

@section('title', 'Dashboard Users')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Selamat Datang, {{ Auth::user()->name }}</h2>
        <p class="text-muted">Panel pengguna sederhana untuk menjelajahi fitur utama toko kami.</p>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title mb-3">Lihat Profil</h5>
                    <p class="card-text text-muted">Perbarui informasi pribadi Anda dengan mudah.</p>
                    <a href="{{ route('user.profile') }}" class="btn btn-outline-primary">Profil</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title mb-3">Produk</h5>
                    <p class="card-text text-muted">Lihat daftar produk yang tersedia saat ini.</p>
                    <a href="{{ route('user.products') }}" class="btn btn-outline-success">Lihat Produk</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title mb-3">Kontak</h5>
                    <p class="card-text text-muted">Temukan informasi kontak kami di sini.</p>
                    <a href="{{ route('user.contact') }}" class="btn btn-outline-secondary">Kontak Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
