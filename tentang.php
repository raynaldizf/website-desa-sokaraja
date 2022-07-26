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
                <h1 class="text-5xl font-bold">Tentang desa Sokaraja Tengah</h1>
            </div>
        </div>
    </div>


    <div class="bg-[#EEEEEE] mx-10 my-20 rounded-3xl ">
        <?php
        include "koneksi.php";
        $data = mysqli_query($koneksi, "SELECT * FROM tentang");
        while ($data2 = mysqli_fetch_array($data)) {
        ?>
            <div class="border-4 rounded-3xl">
                <p class="text-lg whitespace-pre-wrap text-xl py-5" style="font-family: montserrat; margin-left: 30px; margin-right: 30px; font-size: 25px;">
                    <?php echo $data2["isi"] ?>
                </p>
            </div>
        <?php } ?>
    </div>

    <!-- Footer -->
    <?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM alamat");
    while ($data2 = mysqli_fetch_array($data)) {
    ?>
        <footer class="text-gray-600 body-font bg-slate-200	text-lg">
            <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                        <img class="h-14 w-14" src="src/logo.png" alt="">

                        <span class="ml-3 text-xl">Sokaraja Tengah</span>
                    </a>
                    <p class="mt-2 text-sm text-gray-500"><?php echo $data2["alamat"] ?></p>
                </div>
            <?php } ?>

            <?php
            include "koneksi.php";
            $data = mysqli_query($koneksi, "SELECT * FROM footer");
            while ($data2 = mysqli_fetch_array($data)) {
            ?>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center ">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-40">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3"><?php echo $data2["Judul_hubungikontak"] ?></h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800"><?php echo $data2["isi_hubungi kontak"] ?></a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800"><?php echo $data2["isi_hubungikontak2"] ?></a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-20">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">LOKASI</h2>
                        <nav class="list-none mb-10">
                            <iframe class="h-[6rem] w-[10rem]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15824.289862963458!2d109.27661822029849!3d-7.457235637621256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655b8ac2d28b53%3A0xacc0a3e1fe4fc7cb!2sSokaraja%20Tengah%2C%20Kec.%20Sokaraja%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1658802092135!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-40">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">MENU</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a href="index.php" class="text-gray-600 hover:text-gray-800">Beranda</a>
                            </li>
                            <li>
                                <a href="tentang.php" class="text-gray-600 hover:text-gray-800">Tentang</a>
                            </li>
                            <li>
                                <a href="berita.php" class="text-gray-600 hover:text-gray-800">Berita Desa</a>
                            </li>
                            <li>
                                <a href="kontak.php" class="text-gray-600 hover:text-gray-800">Kontak</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
        <?php } ?>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        </span>
        <div class="bg-gray-100 py-4 px-5">
            <p class="text-gray-500 text-sm text-center sm:text-center">© Copyright. 2022. Pemerintah Desa Sokaraja Tengah.
            </p>
        </div>
        </div>
</body>

</html>