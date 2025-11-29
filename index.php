<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Anwar & Putri</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Background utama website */
        body {
            background-color: #111;
            /* Hitam elegan */
            color: #e6e6e6;
            /* Teks abu putih */
            font-family: "Poppins", sans-serif;
        }

        /* Hero overlay lebih lembut */
        .hero-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.65),
                    rgba(0, 0, 0, 0.4));
        }

        /* Navbar transparan elegan */
        .navbar-dark.fixed-top {
            backdrop-filter: blur(6px);
            background: rgba(0, 0, 0, 0.25) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Border menu elegan */
        .navbar .nav-link {
            border: 1px solid rgba(255, 255, 255, 0.55) !important;
            transition: 0.3s ease;
        }

        .navbar .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: #fff !important;
        }

        /* Cover Title elegan */
        .cover-title {
            font-family: "Playfair Display", serif;
            font-size: clamp(2.2rem, 4vw, 3.8rem);
            letter-spacing: 1px;
        }

        .cover-symbol {
            font-size: clamp(3rem, 5vw, 4rem);
            font-family: "Playfair Display", serif;
        }

        /* Gaya Card Countdown */
        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(3px);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Foto mempelai */
        .mempelai-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        /* Galeri */
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border: 3px solid #fff;
            transition: 0.3s;
        }

        .gallery-img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        /* Section terang */
        section.bg-light {
            background-color: #1b1b1b !important;
            color: #eee;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        section {
            scroll-margin-top: 50px;
            /* sesuaikan dengan tinggi navbar */
        }

        /* Footer */
        footer {
            background: #0d0d0d !important;
            border-top: 1px solid #333;
        }
    </style>

</head>

<body>
    <audio id="bg-music" autoplay loop muted>
        <source src="assets/music/pure-love-304010.mp3" type="audio/mp3">
    </audio>

    <!-- ===================== -->
    <!-- HERO NAVIGATION MENU -->
    <!-- ===================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top py-3 px-3 d-none d-lg-flex"
        style="z-index: 100;">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarWedding">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarWedding">
                <ul class="navbar-nav mb-2 mb-lg-0 text-end">

                    <li class="nav-item mx-1">
                        <a class="nav-link text-white fw-semibold border border-light  px-3 py-1"
                            href="#cover">Beranda</a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="nav-link text-white fw-semibold border border-light  px-3 py-1"
                            href="#mempelai">Mempelai</a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="nav-link text-white fw-semibold border border-light  px-3 py-1"
                            href="#acara">Acara</a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="nav-link text-white fw-semibold border border-light  px-3 py-1"
                            href="#lokasi">Lokasi</a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="nav-link text-white fw-semibold border border-light  px-3 py-1"
                            href="#galeri">Galeri</a>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="nav-link text-white fw-semibold border border-light  px-3 py-1"
                            href="#rsvp">RSVP</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>



    <!-- ===================== -->
    <!-- SECTION: COVER HEADER -->
    <!-- ===================== -->
    <div class="position-relative w-100 vh-100 d-flex justify-content-center align-items-center text-white"
        style="
            background-image: url('assets/images/images1.jpg');
            background-size: cover;
            background-position: center;" id="cover">

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

        <!-- Konten -->
        <div class="position-relative text-center px-3">

            <!-- Judul -->
            <p class="fs-5 mb-4 mt-4" style="letter-spacing: 1px;">
                The Wedding of
            </p>

            <h1 class="text-white fw-bold cover-title mb-0">
                Toni Mustopa, S.Pd.
            </h1>

            <div class="cover-symbol my-2">&amp;</div>

            <h1 class="text-white fw-bold cover-title">
                Aas Purwati, S.Pd.
            </h1>

            <p class="mt-4 px-3 py-2 d-inline-block fw-semibold border border-light bg-opacity-25 text-white">
                Minggu, 21 Desember 2025
            </p>



            <!-- ======================== -->
            <!-- SECTION: COUNTDOWN CARD -->
            <!-- ======================== -->
            <section class="py-4">
                <div class="container text-center">

                    <h3 class="fw-bold mb-4">Countdown Menuju Acara</h3>

                    <div class="d-flex flex-nowrap justify-content-center gap-3">

                        <!-- Hari -->
                        <div class="card shadow-sm border-0 rounded-4" style="min-width: 80px;">
                            <div class="card-body p-2 p-sm-3">
                                <h2 id="cd-days" class="fw-bold mb-0 fs-4 fs-sm-3 fs-md-2">0</h2>
                                <small>Hari</small>
                            </div>
                        </div>

                        <!-- Jam -->
                        <div class="card shadow-sm border-0 rounded-4" style="min-width: 80px;">
                            <div class="card-body p-2 p-sm-3">
                                <h2 id="cd-hours" class="fw-bold mb-0 fs-4 fs-sm-3 fs-md-2">0</h2>
                                <small>Jam</small>
                            </div>
                        </div>

                        <!-- Menit -->
                        <div class="card shadow-sm border-0 rounded-4" style="min-width: 80px;">
                            <div class="card-body p-2 p-sm-3">
                                <h2 id="cd-minutes" class="fw-bold mb-0 fs-4 fs-sm-3 fs-md-2">0</h2>
                                <small>Menit</small>
                            </div>
                        </div>

                        <!-- Detik -->
                        <div class="card shadow-sm border-0 rounded-4" style="min-width: 80px;">
                            <div class="card-body p-2 p-sm-3">
                                <h2 id="cd-seconds" class="fw-bold mb-0 fs-4 fs-sm-3 fs-md-2">0</h2>
                                <small>Detik</small>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


        </div>

    </div>

    <!-- =============== -->
    <!-- SECTION: MEMPELAI -->
    <!-- =============== -->
    <section class="py-5 text-center" id="mempelai">
        <div class="container">

            <!-- Bismillah -->
            <p class="mb-4 fs-2" style="font-family: 'Scheherazade', serif;">
                بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ
            </p>

            <p class="mb-3">
                Dengan memohon rahmat serta ridho Allah SWT, <br>
                kami bermaksud menyelenggarakan pernikahan putra–putri kami:
            </p>
            <div class="row justify-content-center">

                <!-- Mempelai Pria -->
                <div class="col-12 col-md-4 mb-4">
                    <img src="assets/images/images2.jpg" class="rounded-circle mempelai-img mb-3" alt="">

                    <h4 class="fw-bold mb-1">Toni Mustopa, S.Pd.</h4>
                    <p class="text-white mb-2">Putra dari</p>

                    <div class="px-3 py-2 d-inline-block rounded-3 bg-light text-dark shadow-sm">
                        <strong>Bpk. Toha</strong> & <strong>Ibu. Amin, S.Pd.SD</strong>
                    </div>
                </div>

                <!-- Mempelai Wanita -->
                <div class="col-12 col-md-4 mb-4">
                    <img src="assets/images/images3.jpg" class="rounded-circle mempelai-img mb-3" alt="">

                    <h4 class="fw-bold mb-1">Aas Purwati, S.Pd.</h4>
                    <p class="text-white mb-2">Putri dari</p>

                    <div class="px-3 py-2 d-inline-block rounded-3 bg-light text-dark shadow-sm">
                        <strong>Bpk. Dedi Sasmita</strong> & <strong>Ibu. Juhartini</strong>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ========================== -->
    <!-- FIRMAN ALLAH SUBHANAHU WA TA'ALA -->
    <!-- ========================== -->
    <section class="py-5 text-center position-relative"
        style="
            background-image: url('assets/images/images4.jpg');
            background-size: cover;
            background-position: center;
            overflow: hidden;
        ">

        <!-- Overlay Gelap -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

        <!-- Konten -->
        <div class="container position-relative" style="z-index: 2;">

            <!-- Judul -->
            <h2 class="fw-bold text-white mb-4" style="font-size: 1.8rem;">
                Allah Subhanahu Wa Ta'ala berfirman
            </h2>

            <!-- Ayat 1 -->
            <div class="p-4 bg-white bg-opacity-10 text-white shadow rounded-4 mb-4"
                style="border: 2px dashed rgba(255,255,255,0.4);"
                data-aos="fade-down" data-aos-duration="1200">

                <p class="mb-2" style="font-size: 1rem;">
                    “Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah).”
                </p>

                <p class="m-0 fw-semibold" style="font-size: 1rem;">
                    QS. Adh-Dhariyat: 49
                </p>
            </div>

            <!-- Ayat 2 -->
            <div class="p-4 bg-white bg-opacity-10 text-white shadow rounded-4 mb-4"
                style="border: 2px dashed rgba(255,255,255,0.4);"
                data-aos="fade-down" data-aos-duration="1200">

                <p class="mb-2" style="font-size: 1rem;">
                    “Dan sesungguhnya Dialah yang menciptakan pasangan laki-laki dan perempuan.”
                </p>

                <p class="m-0 fw-semibold" style="font-size: 1rem;">
                    QS. An-Najm: 45
                </p>
            </div>

        </div>

    </section>




    <!-- =============== -->
    <!-- SECTION: ACARA -->
    <!-- =============== -->
    <section class="py-5 bg-light" id="acara">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Detail Acara</h2>

            <div class="row">

                <div class="col-12 col-md-6 mb-4">
                    <div class="p-4 border rounded-3 h-100">
                        <h4 class="fw-semibold">Akad Nikah</h4>
                        <p class="mt-3">
                            <strong>Selasa, 10 Juni 2025</strong><br>
                            Pukul 09.00 WIB<br>
                            Bertempat di Gedung xxxx
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="p-4 border rounded-3 h-100">
                        <h4 class="fw-semibold">Resepsi</h4>
                        <p class="mt-3">
                            <strong>Selasa, 10 Juni 2025</strong><br>
                            Pukul 11.00 – 14.00 WIB<br>
                            Bertempat di Gedung xxxx
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =============== -->
    <!-- SECTION: LOKASI -->
    <!-- =============== -->
    <section class="py-5" id="lokasi">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Lokasi Acara</h2>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3961.2538406947956!2d107.99849407499592!3d-6.860150993138373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1764451609197!5m2!1sid!2sid"
                        class="w-100"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>



                    <a href="https://maps.app.goo.gl/wm4vrb5EJJCAY4kg7" target="_blank"
                        class="btn btn-light px-4 mt-3">
                        Buka di Google Maps
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- =============== -->
    <!-- SECTION: GALERI -->
    <!-- =============== -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Galeri</h2>

            <div class="row g-3">
                <div class="col-6 col-md-4">
                    <img src="assets/images/gl1.jpg" class="gallery-img rounded-3">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/gl2.jpg" class="gallery-img rounded-3">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/gl3.jpg" class="gallery-img rounded-3">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/gl7.jpg" class="gallery-img rounded-3">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/gl5.jpg" class="gallery-img rounded-3">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/gl6.jpg" class="gallery-img rounded-3">
                </div>
            </div>
        </div>
    </section>

    <!-- =============== -->
    <!-- SECTION: RSVP -->
    <!-- =============== -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-3">Konfirmasi Kehadiran</h2>

            <p>Silakan isi form berikut untuk konfirmasi kehadiran.</p>

            <a href="https://forms.gle/xxxx" target="_blank" class="btn btn-success px-4">Isi RSVP</a>

            <p class="mt-4">Atau konfirmasi via WhatsApp:</p>

            <a href="https://wa.me/628xxxx" target="_blank" class="btn btn-outline-success px-4">Hubungi Kami</a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-3 bg-dark text-white text-center">
        <p class="mb-0">&copy; 2025 Anwar Maulana, S.Kom.</p>
    </footer>


    <!-- COUNTDOWN -->
    <script>
        var eventDate = new Date("2025-12-21 09:00:00").getTime();

        var timer = setInterval(function() {
            var now = new Date().getTime();
            var distance = eventDate - now;

            if (distance < 0) {
                clearInterval(timer);

                document.getElementById("cd-days").innerHTML = "0";
                document.getElementById("cd-hours").innerHTML = "0";
                document.getElementById("cd-minutes").innerHTML = "0";
                document.getElementById("cd-seconds").innerHTML = "0";
                return;
            }

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("cd-days").innerHTML = days;
            document.getElementById("cd-hours").innerHTML = hours;
            document.getElementById("cd-minutes").innerHTML = minutes;
            document.getElementById("cd-seconds").innerHTML = seconds;

        }, 1000);
    </script>



</body>

</html>