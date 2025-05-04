@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Produk</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="name" required placeholder="Masukkan nama produk">
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" name="description" rows="4" required placeholder="Tulis deskripsi produk"></textarea>
                        </div>

                        <!-- Link Produk -->
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Produk (Opsional)</label>
                            <input type="url" class="form-control" name="link" placeholder="Masukkan URL produk jika ada">
                        </div>

                        <!-- Gambar Produk -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100">Simpan Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
