<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jersvero</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
    .jersey-shadow {
        filter: drop-shadow(0 8px 12px rgba(0, 0, 0, 0.25));
    }

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

    /* Animasi bounce logo */
    @keyframes logoBounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .bounce-logo {
        animation: logoBounce 1s infinite ease-in-out;
    }
    </style>
</head>

<body class="bg-white text-gray-800 font-sans overflow-x-hidden">

    <!-- LOADING -->
    <div id="loadingScreen" class="fixed inset-0 z-50 flex flex-col gap-4 items-center justify-center bg-white">
        <img src="SVG/jersvero svg.svg" alt="Loading" class="w-24 h-24 bounce-logo" />
        <p class="text-[#002b80] font-bold animate-pulse">Loading...</p>
    </div>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- HERO -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-28 md:pt-0">
        <div class="absolute inset-0 z-0">
            <img src="img tentang/bg.jpg" alt="Background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-white bg-opacity-70 backdrop-blur-sm"></div>
        </div>

        <div class="relative z-10 max-w-7xl w-full px-6 md:px-10 grid md:grid-cols-2 items-center gap-12">

            <!-- TEKS -->
            <div class="space-y-6 max-w-3xl" data-aos="fade-right">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-snug text-[#002b80]">
                    Jersey Custom Premium untuk Tim Kamu
                </h1>
                <p class="text-base md:text-lg text-gray-700">
                    Bikin jersey sepak bola, futsal, basket, atau esports dengan kualitas terbaik
                    dan desain bebas! Dengan layanan custom premium, kami pastikan setiap detail
                    sesuai dengan identitas tim kamu.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="katalog.php"
                        class="px-8 py-3 bg-[#002b80] text-white rounded-full text-base hover:bg-[#0d5ea6] hover:text-white transition">
                        Lihat Katalog
                    </a>
                    <a href="custom.php"
                        class="px-8 py-3 border-2 border-[#002b80] text-[#002b80] rounded-full text-base hover:bg-[#0d5ea6] hover:text-white transition">
                        Pesan Custom
                    </a>
                </div>
            </div>


            <!-- GAMBAR -->
            <div class="relative flex justify-center items-center" data-aos="fade-left">
                <img id="jerseyDepan" src="mockup jersvero/Jersey timnas indonesia-01.png" alt="Jersey Depan"
                    class="w-[90vw] md:w-[80%] lg:w-[95%] max-w-[900px] z-20 floating-image" />
            </div>
        </div>
    </section>


    <!-- SECTION KEDUA -->
    <section class="relative py-12 px-6 md:px-20 overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 items-center gap-16">
            <!-- Gambar Jersey Belakang -->
            <div class="flex justify-center md:justify-start" data-aos="fade-up">
                <img id="jerseyBelakang" src="mockup jersvero/Jersey timnas indonesia-02.png" alt="Jersey Belakang"
                    class="w-[80vw] sm:w-[55vw] max-w-[600px] z-20 floating-image rotate-[-5deg]" />
            </div>

            <!-- Teks -->
            <div class="space-y-6 text-center md:text-left" data-aos="fade-left">
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#002b80] leading-tight">
                    Desain Sesukamu, <br /> Kualitas Tak Tertandingi
                </h2>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed max-w-xl mx-auto md:mx-0">
                    Wujudkan jersey impian yang sesuai identitas tim kamu! Pilih bahan terbaik, tentukan desain bebas,
                    dan serahkan sisanya pada kami.
                </p>
                <a href="custom.php"
                    class="inline-block px-8 py-4 bg-[#002b80] text-white rounded-full text-lg md:text-xl hover:bg-[#0d5ea6] hover:text-white transition">
                    Mulai Desain Sekarang
                </a>
            </div>
        </div>
    </section>



    <!-- TENTANG -->
    <section id="tentang" class="py-28 bg-[#0d5ea6]">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-20">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="img tentang/Logo Jersvero-02.jpg" alt="Tentang Jersvero"
                    class="rounded-2xl shadow-2xl w-full max-w-[500px]" />
            </div>

            <div class="w-full md:w-1/2 text-white" data-aos="fade-left">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6">Tentang Jersvero</h2>

                <p class="leading-relaxed text-xl mb-6">
                    Jersvero adalah brand lokal penyedia jersey custom premium untuk berbagai keperluan.
                </p>

                <p class="leading-relaxed text-xl">
                    Dengan pengalaman desain dan produksi yang mumpuni, kami membantu mewujudkan identitas tim kamu
                    dalam bentuk jersey yang keren.
                </p>
            </div>
        </div>
    </section>




    <!-- TESTIMONI -->
    <section class="py-24 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <h2 class="text-4xl md:text-5xl font-bold text-[#002b80] mb-12 text-center">
                Apa Kata Mereka
            </h2>

            <!-- Track Testimoni -->
            <div class="relative w-full overflow-hidden">
                <div id="testimoniTrack" class="flex space-x-6 animate-scroll">
                    <!-- Duplikasi konten agar animasi mulus tanpa putus -->
                    <div class="min-w-[300px] bg-white p-8 rounded-2xl shadow-lg flex-shrink-0">
                        <p class="text-lg text-gray-700 italic leading-relaxed">
                            "Kualitas jerseynya mantap, bahan adem dan sablon awet!"
                        </p>
                        <div class="mt-6 flex items-center space-x-3">
                            <img src="img/testimoni1.jpg" alt="Pelanggan"
                                class="w-14 h-14 rounded-full object-cover border-2 border-[#002b80]" />
                            <span class="font-semibold text-[#002b80]">Andi - Tim Futsal X</span>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white p-8 rounded-2xl shadow-lg flex-shrink-0">
                        <p class="text-lg text-gray-700 italic leading-relaxed">
                            "Desain sesuai request, hasilnya keren banget!"
                        </p>
                        <div class="mt-6 flex items-center space-x-3">
                            <img src="img/testimoni2.jpg" alt="Pelanggan"
                                class="w-14 h-14 rounded-full object-cover border-2 border-[#002b80]" />
                            <span class="font-semibold text-[#002b80]">Rizky - Komunitas Bola</span>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white p-8 rounded-2xl shadow-lg flex-shrink-0">
                        <p class="text-lg text-gray-700 italic leading-relaxed">
                            "Pengiriman cepat, kualitas premium, recommended!"
                        </p>
                        <div class="mt-6 flex items-center space-x-3">
                            <img src="img/testimoni3.jpg" alt="Pelanggan"
                                class="w-14 h-14 rounded-full object-cover border-2 border-[#002b80]" />
                            <span class="font-semibold text-[#002b80]">Dewi - Tim Basket Y</span>
                        </div>
                    </div>

                    <!-- Ulangi testimoni lagi biar animasi seamless -->
                    <div class="min-w-[300px] bg-white p-8 rounded-2xl shadow-lg flex-shrink-0">
                        <p class="text-lg text-gray-700 italic leading-relaxed">
                            "Kualitas jerseynya mantap, bahan adem dan sablon awet!"
                        </p>
                        <div class="mt-6 flex items-center space-x-3">
                            <img src="img/testimoni1.jpg" alt="Pelanggan"
                                class="w-14 h-14 rounded-full object-cover border-2 border-[#002b80]" />
                            <span class="font-semibold text-[#002b80]">Andi - Tim Futsal X</span>
                        </div>
                    </div>

                    <div class="min-w-[300px] bg-white p-8 rounded-2xl shadow-lg flex-shrink-0">
                        <p class="text-lg text-gray-700 italic leading-relaxed">
                            "Desain sesuai request, hasilnya keren banget!"
                        </p>
                        <div class="mt-6 flex items-center space-x-3">
                            <img src="img/testimoni2.jpg" alt="Pelanggan"
                                class="w-14 h-14 rounded-full object-cover border-2 border-[#002b80]" />
                            <span class="font-semibold text-[#002b80]">Rizky - Komunitas Bola</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOSIAL MEDIA -->
    <section class="py-12 bg-[#0d5ea6] text-white text-center">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <h2 class="text-3xl text-white font-bold mb-6">Ikuti Kami</h2>
            <p class="text-lg mb-8 text-gray-200">Dapatkan update desain terbaru dan promo menarik di sosial media kami
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="https://www.instagram.com/jersvero.design/" target="_blank"
                    class="flex items-center gap-3 border border-white px-5 py-3 rounded-full hover:bg-white hover:text-[#002b80] transition">
                    <img src="img icon/instagram-2016-5.svg" alt="Instagram" class="w-6 h-6" />
                    <span class="font-semibold">Instagram</span>
                </a>
                <a href="https://www.tiktok.com/@jersvero" target="_blank"
                    class="flex items-center gap-3 border border-white px-5 py-3 rounded-full hover:bg-white hover:text-[#002b80] transition">
                    <img src="img icon/tiktok-1.svg" alt="TikTok" class="w-6 h-6" />
                    <span class="font-semibold">TikTok</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-6 text-center text-white bg-[#0d5ea6]">
        &copy; 2025 Jersvero. All rights reserved.
    </footer>

    <!-- SCRIPT -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();

    // Loading
    window.addEventListener("load", () => {
        const loader = document.getElementById("loadingScreen");
        loader.classList.add("opacity-0");
        setTimeout(() => loader.style.display = "none", 500);
    });

    // Testimoni auto scroll
    const track = document.getElementById("testimoniTrack");
    track.innerHTML += track.innerHTML;
    let scrollAmount = 0;

    function autoScroll() {
        scrollAmount += 1;
        if (scrollAmount >= track.scrollWidth / 2) scrollAmount = 0;
        track.style.transform = `translateX(${-scrollAmount}px)`;
        requestAnimationFrame(autoScroll);
    }
    autoScroll();

    // GSAP floating
    gsap.to("#jerseyDepan", {
        rotation: "+=3",
        y: "+=5",
        duration: 1.8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });
    gsap.to("#jerseyBelakang", {
        rotation: "-=3",
        y: "-=5",
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        delay: 0.3
    });
    </script>
</body>

</html>