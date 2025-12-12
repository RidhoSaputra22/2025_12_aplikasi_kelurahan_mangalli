<div x-data="{ open: false }" class="bg-primary text-white">

    <!-- HEADER ATAS -->
    <div class="p-3 flex justify-between items-center gap-4">
        <div class="flex gap-3 justify-center items-center">
            <img src="/assets/logo.png" alt="" class="h-12">
            <div>
                <h1 class="text-2xl font-semibold">Kelurahan Mangalli</h1>
                <h1 class="text-sm font-light">Sistem Informasi Kelurahan</h1>
            </div>
        </div>

        <!-- Kontak (hidden on mobile) -->
        <div class="text-sm hidden md:block">
            <h1>Jalan Allattappampang RT 004 RW 003</h1>
            <h1>Kecamatan Palangga, Kabupaten Gowa</h1>
            <h1>Sulawesi Selatan</h1>
            <a href="https://wa.me/6285394998504" class="hover:underline">Telp: 0853-9499-8504</a>
        </div>

        <!-- Hamburger button (mobile only) -->
        <button @click="open = !open" class="md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- MENU -->
    <div class="py-3 bg-primary-500">
        <ul class="md:flex md:justify-center md:gap-12" x-cloak :class="open ? 'block' : 'hidden md:flex'">

            <a class="block px-4 py-2 hover:underline" href="/">Beranda</a>
            <a class="block px-4 py-2 hover:underline" href="/profile">Profil</a>
            <a class="block px-4 py-2 hover:underline" href="/berita">Berita</a>
            <a class="block px-4 py-2 hover:underline" href="/galeri">Galeri</a>
            <a class="block px-4 py-2 hover:underline" href="https://wa.me/6285394998504">Pengaduan</a>
            <a class="block px-4 py-2 hover:underline" href="/login">Login</a>
        </ul>
    </div>

</div>
