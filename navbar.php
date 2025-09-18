<?php
$current_page = basename($_SERVER['PHP_SELF']); // ambil nama file halaman sekarang
?>

<style>
.jersey-shadow {
    filter: drop-shadow(0 8px 12px rgba(0, 0, 0, 0.25));
}

.nav-link {
    position: relative;
    padding-bottom: 4px;
    color: white;
    /* default putih */
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
    color: orange !important;
}

.nav-link:hover::after {
    width: 100%;
}

.nav-link.active {
    color: orange !important;
}

.nav-link.active::after {
    width: 100%;
}
</style>

<nav class="fixed top-0 left-0 w-full bg-[#0d5ea6] shadow-md px-6 py-4 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="SVG/logo.svg" alt="Jersvero" class="w-12 h-12" />
            <span class="text-3xl font-bold text-white">jersvero</span>
        </div>

        <!-- Menu Desktop -->
        <ul class="hidden md:flex space-x-6 font-normal">
            <li><a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>">Beranda</a>
            </li>
            <li><a href="katalog.php" class="nav-link <?= $current_page == 'katalog.php' ? 'active' : '' ?>">Katalog</a>
            </li>
            <li><a href="custom.php" class="nav-link <?= $current_page == 'custom.php' ? 'active' : '' ?>">Custom</a>
            </li>
            <li><a href="kontak.php" class="nav-link <?= $current_page == 'kontak.php' ? 'active' : '' ?>">Kontak</a>
            </li>
        </ul>

        <!-- Hamburger -->
        <div class="md:hidden ml-4">
            <button id="hamburgerBtn" class="text-white focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu"
    class="fixed top-0 right-0 w-3/4 max-w-sm h-full z-50 bg-[#0d5ea6] shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <div class="flex justify-end p-4 border-b border-white">
        <button id="closeMenu" class="text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <ul class="flex flex-col items-start px-6 space-y-6 mt-6 font-normal text-lg">
        <li><a href="index.php" class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>">Beranda</a></li>
        <li><a href="katalog.php" class="nav-link <?= $current_page == 'katalog.php' ? 'active' : '' ?>">Katalog</a>
        </li>
        <li><a href="custom.php" class="nav-link <?= $current_page == 'custom.php' ? 'active' : '' ?>">Custom</a></li>
        <li><a href="kontak.php" class="nav-link <?= $current_page == 'kontak.php' ? 'active' : '' ?>">Kontak</a></li>
    </ul>
</div>

<script>
const hamburgerBtn = document.getElementById("hamburgerBtn");
const mobileMenu = document.getElementById("mobileMenu");
const closeMenu = document.getElementById("closeMenu");

// buka menu
hamburgerBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
    mobileMenu.classList.add("translate-x-0");
});

// tutup menu
closeMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-0");
    mobileMenu.classList.add("translate-x-full");
});
</script>