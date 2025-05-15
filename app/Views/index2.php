<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('ACT2/index.css') ?>">
</head>

<body>
    <h1>Praktikum Sistem Multimedia</h1>
    <h2>Tema: Teks pada website</h2>

    <p>Dalam sistem multimedia, <span class="highlight">teks</span> berperan penting sebagai sarana penyampaian informasi
        . Teks bisa digunakan untuk judul, deskripsi, maupun penjelasan tambahan.</p>

    <p>Contoh teks dengan <span class="italic">gaya italic</span>, <strong>tebal</strong>, dan <u>garis bawah</u>.</p>

    <marquee class="marquee" behavior="scroll" direction="left">Ini adalah contoh teks berjalan (marquee) yang dapat
        digunakan untuk pengumuman atau highlight informasi!</marquee>

    <h2>Animasi Teks</h2>
    <p><span class="animated-text">teks ini muncul dan menghilang secara berulang dengan animasi css</span></p>

    <h2>Elemen Multimedia - Gambar</h2>

    <!--==== Logo ====-->
    <div class="image-card">
        <img src="<?= base_url('images/logo.jpg') ?>" alt="Sistem Multimedia" class="card-image">
        <div class="card-content">
            <h3>Contoh Gambar</h3>
        </div>
    </div>

    <!--==== GIF ====-->
    <div class="banner">
        <img height="600" src="<?= base_url('images/animation.gif') ?>" alt="Animasi Multimedia" class="banner-image">
        <div class="banner-overlay">
            <h3>GIF animasi</h3>
            <p>Animasi yang bergerak</p>
        </div>
    </div>

    <!--==== Audio ====-->
    <section class="audiplay">
        <h2>Penerapan Audio Dalam Website</h2>

        <audio controls>
            <source src="audio/putin-walk.mp3" type="audio/mpeg">
            Browser Anda tidak mendukung tag audio.
        </audio>
    </section>

    <!--==== Video ====-->
    <iframe width="100%" height="720" src="
        <?php echo base_url('video/genshin.mp4'); ?>"
        frameborder="0" allowfullscreen muted="" autoplay='autoplay' loop="true">
    </iframe>

</body>

</html>