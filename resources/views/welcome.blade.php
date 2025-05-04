<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Toko Baju</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome untuk ikonnya -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #ff6f61;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            background: #f4f4f4;
            flex-direction: column;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            padding: 10px 20px;
            margin: 10px;
            background-color: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .buttons a:hover {
            background-color: #ff4b39;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Selamat Datang di Toko Baju</h1>
        <p>Temukan berbagai koleksi baju terbaru dan terbaik hanya di toko kami!</p>
    </div>

    <div class="main-content">
        <h2>Ayo Mulai Belanja Sekarang!</h2>
        <div class="buttons">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Daftar</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Toko Baju. Semua hak dilindungi.</p>
    </footer>

</body>
</html>
