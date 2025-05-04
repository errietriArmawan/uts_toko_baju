@extends('layouts.app_users')

@section('title', 'Profil Saya')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h4 class="mb-0">Profil Saya</h4>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="mb-3">
                        <strong>Nama:</strong>
                        <p class="text-muted">{{ $user->name }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>

                    <a href="{{ route('user.profile.edit') }}" class="btn btn-outline-primary">Edit Profil</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
