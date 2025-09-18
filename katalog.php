<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katalog - Jersvero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-white text-gray-800 font-sans overflow-x-hidden">
    <!-- LOADING -->
    <div id="loadingScreen"
        class="fixed inset-0 z-50 flex flex-col gap-4 items-center justify-center bg-white transition-opacity duration-700">
        <img src="SVG/jersvero svg.svg" alt="Loading" class="w-24 h-24 animate-bounce" />
        <p class="text-[#0d5ea6] font-bold animate-pulse">Loading...</p>
    </div>

    <?php include 'navbar.php'; ?>

    <!-- Overlay (untuk mobile menu / modal tambahan) -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

    <!-- KATALOG -->
    <section class="py-20 mt-10 bg-blue-50">
        <div class="max-w-7xl mx-auto text-center mb-12" data-aos="fade-down">
            <h2 class="text-4xl font-bold text-[#002b80]">Katalog Jersey</h2>
            <p class="text-gray-600 mt-2 text-lg">
                Lihat berbagai desain jersey premium dari Jersvero
            </p>
        </div>

        <!-- Grid Katalog -->
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4 max-w-7xl mx-auto px-4">
            <?php
      $images = glob("Jersvero/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
      $delay = 0;
      foreach ($images as $img) {
          echo '
          <div class="overflow-hidden rounded-xl group cursor-pointer" data-aos="fade-up" data-aos-delay="' . $delay . '" onclick="openModal(\'' . $img . '\')">
              <img src="' . $img . '" alt="Katalog Jersey"
                  class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110"
                  loading="lazy" />
          </div>';
          $delay += 100;
      }
      ?>
        </div>

        <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
            <span class="absolute top-5 right-8 text-white text-4xl cursor-pointer"
                onclick="closeModal()">&times;</span>
            <img id="modalImage" class="max-h-[90%] max-w-[90%] rounded-lg shadow-lg" />
        </div>
    </section>

    <footer class="py-6 text-center text-white bg-[#0d5ea6]">
        &copy; <?php echo date("Y"); ?> Jersvero. All rights reserved.
    </footer>

    <!-- SCRIPT -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    // Init AOS
    AOS.init();

    // Loading screen
    window.addEventListener("load", () => {
        const loadingScreen = document.getElementById("loadingScreen");

        // biar loading kelihatan dulu (1 detik)
        setTimeout(() => {
            loadingScreen.classList.add("opacity-0");

            setTimeout(() => {
                loadingScreen.style.display = "none";
            }, 700); // sesuai duration-700
        }, 1000);
    });

    // Modal katalog
    function openModal(src) {
        document.getElementById("modalImage").src = src;
        document.getElementById("imageModal").classList.remove("hidden");
        document.getElementById("imageModal").classList.add("flex");
    }

    function closeModal() {
        document.getElementById("imageModal").classList.add("hidden");
        document.getElementById("imageModal").classList.remove("flex");
    }
    </script>
</body>

</html>