<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Martabak Lekku</h1>
            <nav>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#features">Menu</a>
                        <ul class="dropdown-menu">
                            <li><a href="#feature1">Menu 1</a></li>
                            <li><a href="#feature2">Menu 2</a></li>
                            <li><a href="#feature3">Menu 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h2>Selamat datang di Toko Kami</h2>
            <p>Kami menyediakan Mertabak untuk Anda</p>
            <a href="#contact" class="cta-button">Hubungi Kami</a>
        </div>
    
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2>Menu Makanan</h2>
            <div id="feature1" class="feature-item">
                <img src="/asset/image/Martabak.webp" alt="Fitur 1" class="feature-image">
                <h3>Menu 1</h3>
                <p>Deskripsi Martabak 1.</p>
            </div>
            <div id="feature2" class="feature-item">
                <img src="/asset/image/Martabak.webp" alt="Fitur 2" class="feature-image">
                <h3>Menu 2</h3>
                <p>Deskripsi Martabak 2.</p>
            </div>
            <div id="feature3" class="feature-item">
                <img src="/asset/image/Martabak.webp" alt="Fitur 3" class="feature-image">
                <h3>Menu 3</h3>
                <p>Deskripsi Martabak 3.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kami Menjual Martabak</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <form action="#" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Nama Website. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>