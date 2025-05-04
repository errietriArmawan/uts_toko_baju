@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Detail Produk</h2>

    {{-- Card for Product Detail --}}
    <div class="card mb-4 shadow-sm">
        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: contain;">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            
            @if($product->link)
                <a href="{{ $product->link }}" class="btn btn-outline-info" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i> Lihat Produk
                </a>
            @else
                <span class="text-muted">Link produk tidak tersedia</span>
            @endif
        </div>
    </div>

    {{-- Back Button --}}
    <a href="{{ route('admin.products') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left-circle"></i> Kembali ke Daftar Produk
    </a>
</div>
@endsection
