@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container-fluid py-5">
        <div class="row">
            <!-- Hero Section -->
            <div class="col-md-12 text-center mb-5">
                <div class="alert alert-primary p-4" role="alert">
                    <h2 class="display-4 fw-bold text-dark">Selamat Datang, Admin!</h2>
                    <p class="lead text-dark">Anda berhasil login sebagai admin. Kelola aplikasi Anda melalui dashboard ini.</p>
                    <i class="bi bi-person-circle display-1 text-primary"></i>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row text-center">
            <!-- Product Card -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-box-fill text-success"></i> Produk</h5>
                        <p class="card-text">Kelola produk yang tersedia di toko online Anda.</p>
                        <a href="{{ route('admin.products') }}" class="btn btn-outline-success">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <!-- User Card -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-lines-fill text-info"></i> Pengguna</h5>
                        <p class="card-text">Kelola akun pengguna yang mendaftar di toko Anda.</p>
                        <a href="{{ route('admin.users') }}" class="btn btn-outline-info">Lihat Pengguna</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Welcome Section -->
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h4 class="fw-bold text-primary">Pilih menu di atas untuk mulai mengelola aplikasi Anda</h4>
                <p class="lead text-secondary">Jika Anda membutuhkan bantuan, silakan hubungi support kami.</p>
            </div>
        </div>
    </div>
@endsection
