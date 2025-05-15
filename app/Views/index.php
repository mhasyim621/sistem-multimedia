<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kazumi Store</title>
    <link rel="stylesheet" href="<?= base_url('ACT2/index.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

</head>

<main>
    <header class="header">
        <img src="<?= base_url('images/logo.jpg') ?>" alt="Kazumi Logo" class="logo">
        <h1>Kazumi Store</h1>
    </header>

    <h2>Toko Kazumi Store</h2>
    <p>Memenuhi kebutuhan <span class="highlight italic bold underline">perawatan tubuh</span> dan <span class="highlight italic bold underline">kebersihan rumah tangga</span>.</p>

    <h2>
        <p><span class="animated-text">Beli Sekarang!</span></p>
    </h2>

    <marquee class="marquee" behavior="scroll" direction="left">
        Dapatkan Voucher Diskon 10% dan Gratis Ongkir!
    </marquee>

    <h2>Detail Produk: </h2>
    <div class="scrolling-wrapper">
        <div class="product-card">
            <a href="https://id.shp.ee/MSPTU1i" target="_blank">
                <img src="<?= base_url('images/romano.jpeg') ?>" alt="Produk 1">
                <p>PARFUM</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/g5SftFB" target="_blank">
                <img src="<?= base_url('images/ponds.jpeg') ?>" alt="Produk 2">
                <p>SABUN WAJAH</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/FQayvrh" target="_blank">
                <img src="<?= base_url('images/molto.jpeg') ?>" alt="Produk 3">
                <p>SABUN CUCI PAKAIAN</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/dYPZJPT" target="_blank">
                <img src="<?= base_url('images/deodorant.jpg') ?>" alt="Produk 4">
                <p>DEODORANT</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/U2JNSsb" target="_blank">
                <img src="<?= base_url('images/cbd.jpg') ?>" alt="Produk 5">
                <p>PERAWATAN RAMBUT</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/F7wnbGX" target="_blank">
                <img src="<?= base_url('images/sunscreen.jpg') ?>" alt="Produk 6">
                <p>SUNSCREEN</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/vfswjiP" target="_blank">
                <img src="<?= base_url('images/kamper.jpg') ?>" alt="Produk 7">
                <p>KAMPER</p>
            </a>
        </div>
        <div class="product-card">
            <a href="https://id.shp.ee/BMFyDLL" target="_blank">
                <img src="<?= base_url('images/kompres.jpg') ?>" alt="Produk 8">
                <p>PLESTER KOMPRES</p>
            </a>
        </div>
    </div>


    <!--==== Bagian Video Promosi ====-->
    <section class="promo-section">
        <div class="promo-gif">
            <img src="<?= base_url('images/nobara-gif.gif') ?>" alt="Promo GIF">
        </div>

        <div class="promo-video">
            <p class="video-invite">🎥 Yuk, tonton video promosi kami dan temukan produk favoritmu!</p>
            <iframe width="560" height="315"
                src="https://www.youtube.com/embed/8uMAVLEyoMw?si=aYMYekKUn8KraEq2"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen>
            </iframe>
        </div>

    </section>

    <!--==== Tombol Audio Pop-up ====-->

    <audio id="bg-audio" muted loop>
        <source src="<?= base_url('audio/backsound-lofi.mp3') ?>" type="audio/mpeg">
        Browser Anda tidak mendukung audio.
    </audio>


    <!-- Tombol Mute/Unmute -->
    <div class="popup-audio" id="mute-btn" onclick="toggleMute()" title="Klik untuk mute/unmute">
        🔊
    </div>

    <script>
        const audio = document.getElementById('bg-audio');
        const btn = document.getElementById('mute-btn');

        // Volume awal
        audio.volume = 0.5;

        function toggleMute() {
            if (audio.paused) {
                // jika audio belum dimulai, mulai dulu dan unmute
                audio.muted = false;
                audio.play();
                btn.textContent = '🔊';
            } else {
                // toggle mute jika audio sudah diputar
                audio.muted = !audio.muted;
                btn.textContent = audio.muted ? '🔇' : '🔊';
            }
        }
    </script>


    </body>

    <footer class="footer">
        <p>© 2024 Muhammad Hasyim. All rights reserved. —
            <a href="http://shopee.co.id/kazumi_store_" target="_blank" rel="noopener noreferrer">
                Kunjungi Toko Shopee
            </a>
        </p>
    </footer>


</html>