@extends('layouts.app_users')

@section('title', 'Galeri Produk')

@section('content')
    <div class="container">
        <h2>Galeri Produk</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <!-- Menampilkan gambar produk -->
                        <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
