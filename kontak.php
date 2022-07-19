<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-around items-center h-20 text-xl text-white">
        <div class="flex items-center gap-5">
            <img class="h-14 w-14" src="src/logo.png" alt="">
            <p class="font-bold text-green-500">Sokaraja Tengah</p>
        </div>
        <div>
            <ul class="flex gap-10">
                <li>
                    <a href="index.php" class="hover:text-green-500">Beranda</a>
                </li>
                <li>
                    <a href="tentang.php" class="text-green-500 font-semibold hover:text-white">Tentang</a>
                </li>
                <li>
                    <a href="berita.php" class="hover:text-green-500">Berita Desa</a>
                </li>
                <li>
                    <a href="kontak.php" class="hover:text-green-500">Kontak</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Hero -->
    <div>
        <img class="w-screen h-[50vh] absolute top-0 -z-10 brightness-50" src="src/hero.png" alt="">
        <div class="h-[40vh] flex items-center justify-center ">
            <div class="text-center text-white space-y-8">
                <h1 class="text-5xl font-bold">Kontak desa Sokaraja Tengah</h1>
            </div>
        </div>
    </div>

    <div class="my-20 mx-44 flex justify-between items-center">
        <div class="space-y-5">
            <h1 class="text-5xl font-bold text-green-600">Keep in touch</h1>
            <div class="space-y-3">
                <h1 class="text-2xl">Phone</h1>
                <a href="#">08515611319</a>
            </div>
            <div>
                <h1 class="text-2xl">Email</h1>
                <a href="#">bambang@gmail.com</a>
            </div>
            <div>
                <h1 class="text-2xl">Address</h1>
                <a href="#">Jl. Raya Sokaraja Tengah</a>
            </div>
        </div>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7912.1447380248!2d109.28099562662919!3d-7.457246340369885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655b8ac2d28b53%3A0xacc0a3e1fe4fc7cb!2sSokaraja%20Tengah%2C%20Kec.%20Sokaraja%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1657826419128!5m2!1sid!2sid"
                width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-green-500 text-center py-10 text-xl font-semibold text-white space-y-5">
        <div>
            <h1>Desa Sokaraja Tengah</h1>
            <p>Temukan informasi publik terkini dari Pemerintahan Daerah Provinsi Jawa Barat</p>
        </div>

        <div class="flex justify-center gap-3">
            <a href="#" class="border border-white rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
            </a>
            <a href="#" class="border border-white rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </a>
        </div>
    </div>
</body>

</html>