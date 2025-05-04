@extends('layouts.app_users')

@section('title', 'Kontak Kami')

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-4">Kontak Kami</h2>

        <div class="row">
            <div class="col-md-6">
                <h3>Informasi Kontak</h3>
                <p>Untuk informasi lebih lanjut, Anda dapat menghubungi kami melalui detail kontak di bawah ini:</p>
                <ul>
                    <li><strong>Alamat:</strong> Jl. Pedestrian No.123, Kota Purbalingga, Indonesia</li>
                    <li><strong>Telepon:</strong> (021) 123456789</li>
                    <li><strong>Email:</strong> tokoBaju@toko.com</li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3>Lokasi Kami</h3>
                <!-- Menyisipkan Peta Lokasi (Optional) -->
                <div class="mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAPS_URL" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
