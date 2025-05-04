@extends('layouts.app_users')

@section('title', 'Edit Profil')

@section('content')
<div class="container">
    <h2>Edit Profil</h2>

    <form action="{{ route('user.profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('user.profile') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
