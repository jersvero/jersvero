<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak - Jersvero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    /* Background container */
    .bg-container {
        position: fixed;
        inset: 0;
        z-index: -2;
    }

    .bg-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: blur(3px);
    }

    /* Overlay biru transparan */
    .bg-overlay {
        position: fixed;
        inset: 0;
        background: rgba(174, 200, 251, 0.6);
        z-index: -1;
    }

    /* Efek nav-link */
    .nav-link {
        position: relative;
        padding-bottom: 4px;
        transition: color 0.3s ease;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background-color: orange;
        transition: width 0.3s ease;
    }

    .nav-link:hover {
        color: orange;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link.active {
        color: orange;
    }

    .nav-link.active::after {
        width: 100%;
    }
    </style>
</head>

<body class="text-white font-sans overflow-x-hidden">

    <!-- Background -->
    <div class="bg-container">
        <img src="img tentang/10 (dark, light, color)-1.jpg" alt="Background Kontak" />
    </div>
    <div class="bg-overlay"></div>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Kontak Section -->
    <section class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white bg-opacity-80 p-8 rounded-2xl shadow-lg max-w-lg w-full text-center">
            <!-- Judul Besar -->
            <h2 class="text-4xl text-[#002b80] font-extrabold mb-4">
                Tanya & Konsultasi
            </h2>

            <!-- Judul Kedua -->
            <h1 class="text-3xl text-[#002b80] font-bold mb-4">Hubungi Kami</h1>

            <p class="mb-6 text-[#002b80]">
                Klik tombol di bawah ini untuk terhubung langsung ke WhatsApp kami.
            </p>
            <a href="https://wa.me/6285110807576" target="_blank"
                class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg inline-block transition">
                Hubungi via WhatsApp
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 text-center text-white bg-[#0d5ea6]">
        &copy; 2025 Jersvero. All rights reserved.
    </footer>

</body>

</html>