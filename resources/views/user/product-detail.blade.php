@extends('layouts.app_users')

@section('title', 'Detail Produk')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="border rounded shadow-sm p-3">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid w-100 rounded">
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="mb-3">{{ $product->name }}</h2>
            <p class="text-muted">{{ $product->description }}</p>

            @if($product->link)
                <a href="{{ $product->link }}" target="_blank" class="btn btn-outline-primary mt-3">
                    🔗 Kunjungi Toko Online
                </a>
            @else
                <div class="alert alert-secondary mt-3">
                    Tautan toko online belum tersedia.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
