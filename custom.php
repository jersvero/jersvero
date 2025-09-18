<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Jersey - Jersvero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
</head>

<body class="bg-white text-gray-800 font-sans overflow-x-hidden">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Pastikan <nav> di navbar.php punya class "z-50 fixed ..." -->

    <!-- HERO -->
    <section class="relative mt-20">
        <img src="img tentang/iMac-and-iPhone-Pro-Showcase-Screens-Free-psd-Mockup.jpg" alt="Background"
            class="w-full h-[400px] object-cover" />

        <!-- Overlay hitam -->
        <div class="absolute inset-0 bg-black bg-opacity-70 h-[400px] pointer-events-none"></div>

        <!-- Teks -->
        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center pointer-events-none">
            <div data-aos="fade-right" class="max-w-2xl">
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold text-white leading-snug drop-shadow-lg">
                    Buat Jersey Custom Sesuai Keinginanmu
                </h1>
                <p class="mt-4 text-gray-200 text-base sm:text-lg lg:text-xl drop-shadow">
                    Pilih desain, warna, dan detail sesuai kebutuhan tim kamu. Kami siap mewujudkannya dengan kualitas
                    terbaik.
                </p>
            </div>
        </div>
    </section>

    <!-- STEPS -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 md:px-10">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-[#002b80] mb-8">
                Langkah Pemesanan
            </h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 text-center">
                <div data-aos="fade-up" class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                    <span class="block text-3xl md:text-4xl font-bold text-orange-500 mb-2">1</span>
                    <p>Pilih jenis olahraga dan desain yang kamu mau</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100"
                    class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                    <span class="block text-3xl md:text-4xl font-bold text-orange-500 mb-2">2</span>
                    <p>Isi form pemesanan dengan detail lengkap</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200"
                    class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                    <span class="block text-3xl md:text-4xl font-bold text-orange-500 mb-2">3</span>
                    <p>Kami produksi dan kirim jersey pesananmu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 md:px-10">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-[#002b80] mb-8">
                Form Pemesanan Custom Jersey
            </h2>
            <form action="proses_pesanan.php" method="POST" enctype="multipart/form-data"
                class="bg-white p-6 md:p-8 rounded-lg shadow-lg space-y-5" data-aos="fade-up">

                <div>
                    <label class="block text-gray-700 font-medium">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap"
                        class="w-full border border-gray-300 rounded-lg p-2 md:p-3 focus:outline-none focus:border-orange-500"
                        required />
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Email</label>
                    <input type="email" name="email"
                        class="w-full border border-gray-300 rounded-lg p-2 md:p-3 focus:outline-none focus:border-orange-500"
                        required />
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">No HP</label>
                    <input type="tel" name="no_hp"
                        class="w-full border border-gray-300 rounded-lg p-2 md:p-3 focus:outline-none focus:border-orange-500"
                        required />
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Jenis Olahraga</label>
                    <select name="jenis_olahraga"
                        class="w-full border border-gray-300 rounded-lg p-2 md:p-3 focus:outline-none focus:border-orange-500">
                        <option>Sepak Bola</option>
                        <option>Futsal</option>
                        <option>Basket</option>
                        <option>Esports</option>
                        <option>Lainnya</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Warna Dominan</label>
                    <input type="color" name="warna_dominan" class="w-16 h-10 p-0 border border-gray-300 rounded" />
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Upload Desain</label>
                    <input type="file" name="file_desain" accept="image/*"
                        class="w-full border border-gray-300 rounded-lg p-2 md:p-3" onchange="previewImage(event)" />
                    <img id="preview" class="mt-4 max-h-52 hidden rounded-lg shadow" />
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Catatan Tambahan</label>
                    <textarea name="catatan"
                        class="w-full border border-gray-300 rounded-lg p-2 md:p-3 focus:outline-none focus:border-orange-500"
                        rows="4"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-[#002b80] text-white py-2 md:py-3 rounded-lg hover:bg-[#001a59] transition">
                    Kirim Pemesanan
                </button>

            </form>

        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 text-center text-white bg-[#0d5ea6]">
        &copy; 2025 Jersvero. All rights reserved.
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();

    function previewImage(event) {
        const img = document.getElementById("preview");
        img.src = URL.createObjectURL(event.target.files[0]);
        img.classList.remove("hidden");
    }
    </script>

</body>

</html>