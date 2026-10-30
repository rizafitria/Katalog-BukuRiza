<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | RuangBaca</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #176b57;
            --dark: #173b32;
            --light: #f4f7f4;
            --text: #263b34;
            --muted: #718078;
        }

        body {
            font-family: Arial, sans-serif;
            background: var(--light);
            color: var(--text);
            line-height: 1.7;
        }

        header {
            background: white;
            border-bottom: 1px solid #e4ebe6;
        }

        .nav {
            max-width: 1100px;
            margin: auto;
            padding: 18px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            color: var(--primary);
            font-size: 23px;
            font-weight: bold;
            text-decoration: none;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav a {
            color: var(--text);
            text-decoration: none;
            font-size: 14px;
        }

        nav a:hover {
            color: var(--primary);
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 40px 24px;
            min-height: 75vh;
        }

        .hero {
            background: var(--dark);
            color: white;
            padding: 55px 40px;
            border-radius: 22px;
            margin-bottom: 35px;
        }

        .hero h1 {
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            margin: 12px 0;
        }

        .hero p {
            max-width: 600px;
            color: #d8e8df;
            margin-bottom: 24px;
        }

        .button {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 11px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 10px;
        }

        .hero .button {
            background: white;
            color: var(--dark);
        }

        .section-title {
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 15px;
            border: 1px solid #e4ebe6;
        }

        .book-cover {
            background: #e4eee8;
            min-height: 145px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: var(--primary);
            font-size: 42px;
            margin-bottom: 18px;
        }

        .tag {
            display: inline-block;
            background: #e4f3eb;
            color: var(--primary);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            margin: 8px 0;
        }

        .muted {
            color: var(--muted);
            font-size: 14px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .detail-box {
            max-width: 750px;
            margin: auto;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: white;
            border-top: 1px solid #e4ebe6;
            color: var(--muted);
            font-size: 13px;
        }

        @media (max-width: 750px) {
            .nav {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                gap: 12px;
            }

            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .hero {
                padding: 35px 24px;
            }
        }

        @media (max-width: 480px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 25px 16px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="nav">
            <a href="{{ route('beranda') }}" class="logo">RuangBaca.</a>

            <nav>
                <a href="{{ route('beranda') }}">Beranda</a>
                <a href="{{ route('buku.index') }}">Daftar Buku</a>
                <a href="{{ route('kategori') }}">Kategori</a>
                <a href="{{ route('tentang') }}">Tentang Kami</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} RuangBaca — Temukan Buku, Perluas Wawasan.
    </footer>

</body>
</html>