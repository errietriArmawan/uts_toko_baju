@extends('layouts.app_users')

@section('title', 'Daftar Produk')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Daftar Produk</h2>

    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="height: 220px; object-fit: cover;" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($product->description, 80) }}</p>
                        <a href="{{ route('user.product.detail', $product->id) }}" class="btn btn-outline-info btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Tidak ada produk tersedia saat ini.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
