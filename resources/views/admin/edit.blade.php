@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0">Edit Produk</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required placeholder="Masukkan nama produk">
                        </div>

                        <!-- Deskripsi Produk -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Tulis deskripsi produk">{{ $product->description }}</textarea>
                        </div>

                        <!-- Link Produk -->
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Produk</label>
                            <input type="url" class="form-control" id="link" name="link" value="{{ $product->link }}" placeholder="Masukkan URL produk jika ada">
                        </div>

                        <!-- Gambar Produk -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            @if ($product->image)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail" width="150" alt="Gambar Produk">
                                </div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-warning w-100">Update Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
