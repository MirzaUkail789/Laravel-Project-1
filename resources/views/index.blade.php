<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martabak Lekku</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Martabak Lekku</h1>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-300">Beranda</a></li>
                    <li><a href="#" class="hover:text-gray-300">Menu</a></li>
                    <li><a href="#" class="hover:text-gray-300">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kontak</a></li>
                    <li><a href="{{ route('login')}}">login</a></li>
                    <li><a href="{{ route('about')}}">about</a></li>
                </ul>
            </nav>
            <button class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Selamat datang di Toko Kami</h2>
            <p class="mb-6">Kami menyediakan Mertabak untuk Anda</p>
            <a href="#" class="bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-700 transition duration-300">Hubungi Kami</a>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-6 text-center">Menu Makanan</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="fitur1.jpg" alt="Fitur 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Menu 1</h3>
                        <p class="text-gray-700">Deskripsi Martabak 1.</p>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="fitur2.jpg" alt="Fitur 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Menu 2</h3>
                        <p class="text-gray-700">Deskripsi Martabak 2.</p>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="fitur3.jpg" alt="Fitur 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Menu 3</h3>
                        <p class="text-gray-700">Deskripsi Martabak 3.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Martabak Lekku. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>