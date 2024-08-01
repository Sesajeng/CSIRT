<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakarta Prov CSIRT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=N13Zi1Bw"></script>
    <style>
        .btn-primary {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn.btn-primary:hover {
            background-color: darkorange;
        }

        .card {

            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .search-input {
            padding: 3px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f5f5f5;
            outline: none;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        }


        .search-box {
            width: 200px;
            height: 30px;
            padding: 10px 20px;
            border: 2px solid #ccc;
            border-radius: 20px;
            outline: none;
            font-size: 16px;
        }

        .menu {
            display: flex;
            align-items: center;
            margin: 20px;
            justify-content: center;
            align-items: center;
        }

        .menu-item {
            padding: 10px;
            margin-right: 20px;
            color: black;
            text-decoration: none;
        }

        .menu-item.active {
            background-color: orange;
            color: white;
        }

        .menu-item:not(.active) {
            color: black;
        }

        .menu-item:not(.active):hover {
            text-decoration: underline;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            gap: 20px;
        }

        .card {
            box-shadow: 0 0px px rgba(0, 0, 0, 0);
            border: none;
            border-radius: 0px;
            overflow: hidden;
        }

        .card-body {
            padding: 5px;
        }

        .header {
            color: white;
            background-color: orange;
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
        }

        .carousel {
            border: 2px solid orange;
            border-radius: 10px;
            padding: 20px;
        }

        .carousel-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 90%;
            gap: 20px;
        }

        .card-container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            gap: 20px;
            border: 2px;
            border-radius;
            2px;
        }

        .card2 {
            box-shadow: 5 5px 4px rgba(0, 0, 0, 1);
            border: 2px;
            border-radius: 2px;
            overflow: hidden;

        }

        .card-body {
            padding: 5px;
        }

        .footer {
            background-color: orange;
            padding: 100px 0;
            text-align: center;
            margin-top: 40px;
            border-top: 1px solid #e7e7e7;
        }

        .footer p {
            margin: 0;
            color: #6c757d;
        }

        .side-button {
            position: fixed;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .btn:hover {
            background-color: #e57800;
            border: 2px solid white;
            padding: 2px 11px;
        }

        .btn.active {
            background-color: #e57800;
            border-color: white;
        }

        .navbar ul li a,
        .dropdown .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 0px 2px;
            text-decoration: none;
        }

        .navbar ul li a:hover,
        .dropdown:hover .dropbtn {}

        .navbar ul li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }



        .dropdown-content {
            background-color: orange;
        }


        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            float: left;
            position: relative;
        }

        .navbar ul li a,
        .dropbtn,
        .dropdown-content span {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 100%;
            left: 0;
        }

        .dropdown-content span {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content span:hover {
            background-color: #e67e22;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .search-box {
            padding: 10px;
            margin-top: 8px;
            margin-left: 16px;
            font-size: 17px;
        }



        .footer-section {
            background-color: orange;
            /* Ganti dengan warna background sesuai */
            padding: 20px 0;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 12px;
            background-image: url(/img/footer.png);
        }

        .footer-section .container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-column {
            flex: 1;
            padding: 0 20px;
            min-width: 200px;
        }

        .footer-column h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .footer-column p,
        .footer-column ul {
            margin-bottom: 10px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 5px;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
        }

        .footer-column button {
            background-color: #de8300;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .footer-column button:hover {
            background-color: #dfe6e9;
        }

        .social-media {
            display: flex;
            gap: 10px;
        }

        .social-media a img {
            width: 40px;
            height: 40px;
        }

        .footer-column img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .content {
            width: 100%;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 1px solid #ccc;
            background-color: #fff;

        }

        iframe {
            width: 100%;
            height: 100%;
            border: 5px;
            justify-content: center;
        }

        .btn img {
            width: 24px;
            height: 24px;
        }

        .btn:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }


        .container4 {
            width: 80%;
            max-width: 1200px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: flex-start;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .image-section {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            max-width: 100%;
            border-radius: 5px;
        }

        .content-section {
            flex: 2;
            padding: 20px;
        }

        .content-section h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .content-section .meta {
            margin: 10px 0;
            color: #888;
            font-size: 14px;
        }

        .content-section .meta a {
            color: #007bff;
            text-decoration: none;
        }

        .content-section .meta a:hover {
            text-decoration: underline;
        }

        .content-section p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
{{-- Header --}}
<body class=" text-black">
    <div class="header">
        <header class="bg-orange-800 py-4">
            {{-- Logo CSIRT --}}
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                {{-- Navbar disertai menu (HOME, PROFIL, EVENT, PUBLIKASI,PERINGATAN KEAMANAN, DST) --}}
                <nav class="space-x-4 navbar">
                    <ul>
                        <li class="btn nav-item" onclick="navigate('home')" data-text="Home">Home</li>
                        <li class="btn nav-item" onclick="navigate('profil')" data-text="Profil">Profil</li>
                        <li class="btn nav-item" onclick="navigate('event')" data-text="Event">Event</li>
                        <li class="btn nav-item dropdown">
                            <span class="dropbtn" data-text="Publikasi">Publikasi</span>
                            <div class="dropdown-content">
                                <span class="btn nav-item" onclick="navigate('Peringatan_Keamanan')"
                                    data-text="Peringatan Keamanan">Peringatan Keamanan</span>
                                <span class="btn nav-item" onclick="navigate('Infografis_Keamanan_Informasi')"
                                    data-text="Infografis Keamanan Informasi">Infografis Keamanan Informasi</span>
                                <span class="btn nav-item" onclick="navigate('Peraturan_Kebijakan')"
                                    data-text="Peraturan Kebijakan">Peraturan Kebijakan</span>
                                <span class="btn nav-item" onclick="navigate('Berita_Siber')"
                                    data-text="Berita Siber (Cyber Blitz)">Berita Siber (Cyber Blitz)</span>
                                <span class="btn nav-item" onclick="navigate('Gallery')"
                                    data-text="Gallery">Gallery</span> <span class="btn nav-item"
                                    onclick="navigate('Statistik_Honeypot')" data-text="Statistik (Honeypot)">Statistik
                                    (Honeypot)</span>
                                <span class="btn nav-item" onclick="navigate('Panduan_Teknis')"
                                    data-text="Panduan Teknis">Panduan Teknis</span>
                                <span class="btn nav-item" onclick="navigate('rfc2350')"
                                    data-text="RFC2350">RFC2350</span>
                            </div>
                        </li>
                        <li class="btn nav-item" onclick="navigate('lapor_insiden_siber')"
                            data-text="Lapor Insiden Siber">Lapor Insiden Siber</li>
                        <li class="btn nav-item" onclick="navigate('kontak_kami')" data-text="Kontak Kami">Kontak Kami
                        </li>
                        {{-- Tombol Pencarian di Header --}}
                        <li><input type="text" class="search-box" placeholder="Search..."></li>
                    </ul>
                </nav>
            </div>
    </div>
    </div>
    </header>
    </div>
    {{-- Konten ke 1 bawah header--}}
    <div class="carousel-item active">
        <img src="/img/24.png" class="d-block w-100" alt="gambar 1">
    </div>
    &nbsp;
    {{-- Konten ke 2 berisi tampilan dari berita--}}
    <div class="container4 mx-auto flex justify-between items-center">
        <div class="image-section">
            <img src="/img/28.png" alt="Display Image">
        </div>
        <div class="content-section">
            <h2 class="nav-item"
                data-text="Cek Versi Telegram di Ponsel Android Anda, Kerentanan Zero-Day EvilVideo Mengintai
            2024-07-25 15:47:53 | https://www.securityweek.com/telegram-zero-day-enabled-malware-delivery/
            Kerentanan Zero-Day EvilVideo di Telegram untuk Android Memungkinkan Threat Actors Mengirim File Berbahaya yang Disamarkan sebagai Video.

ESET memperingatkan bahwa Threat Actors telah menggunakan kerentanan Telegram di ponsel yang menggunakan platform Android untuk mendistribusikan file berbahaya yang disamarkan sebagai dalam format video.

Perusahaan keamanan siber tersebut mengidentifikasi adanya kelemahan keamanan setelah menemukan di forum kejahatan siber sebuah iklan eksploitasi zero-day yang menargetkan Telegram untuk Android.

Menurut ESET, eksploitasi tersebut kemungkinan dikembangkan menggunakan API Telegram, yang memungkinkan developers mengupload file multimedia ke chat atau channel Telegram secara terprogram.

Kode tersebut mengeksploitasi kerentanan di Telegram untuk Android, yang oleh ESET disebut EvilVideo , memungkinkan attackers mengirimkan payloads berisi file APK yang ditampilkan sebagai pratinjau multimedia.

Secara default, Telegram mendownload file multimedia secara otomatis, artinya malicious payload secara otomatis diambil di perangkat pengguna.

Namun, ketika pengguna mencoba memutar video tersebut, Telegram menampilkan pesan sah (legitimate message) yang memperingatkan mereka bahwa ia tidak dapat memutar file dan menyarankan agar video tersebut dibuka di pemutar eksternal.

Kemudian, jika pengguna memilih opsi untuk membuka video di pemutar eksternal, mereka akan diminta untuk menginstall malicious aplikasi yang menyamar sebagai pemutar video. Telegram juga meminta pengguna untuk mengaktifkan instalasi aplikasi yang tidak dikenal.

ESET menambahkan bahwa “pada titik ini, aplikasi malicious tersebut telah didownload sebagai file video, tetapi dengan ekstensi .apk. Dan menariknya, sifat kerentananlah yang membuat file yang dibagikan terlihat seperti video – malicious app sebenarnya tidak diubah untuk menyamar sebagai file multimedia.”

Eksploitasi ini dibuat khusus untuk Telegram yang menggunakan platform Android dan tidak akan berfungsi di ponsel platform yang lain.

Analisis ESET terhadap eksploitasi tersebut mengarahkan mereka pada penemuan kerentanan mendasar EvilVideo, yang dilaporkan ke Telegram pada akhir Juni 2024 dan ditambal pada 11 Juli. Namun, eksploitasi zero-day telah tersedia untuk dijual sejak awal Juni.

Di forum underground yang sama tempat mereka menawarkan eksploitasi tersebut, threat actor telah mengiklankan cryptor-as-a-service Android yang diduga sepenuhnya tidak terdeteksi sejak Januari 2024.

EvilVideo memengaruhi Telegram untuk Android versi 10.14.4 dan yang lebih lama. Pengguna disarankan untuk memperbarui aplikasi Telegram ke versi 10.14.5, yang memperbaiki bug, membuat pratinjau chat multimedia menampilkan payload sebagai aplikasi dan bukan video dengan benar.

PEMBARUAN: Telegram telah memberikan pernyataan berikut:

“Eksploitasi ini bukanlah kerentanan di Telegram. Ini mengharuskan pengguna untuk membuka video, menyesuaikan pengaturan keamanan Android dan kemudian secara manual menginstal 'aplikasi media' yang tampak mencurigakan.

Kami menerima laporan tentang eksploitasi ini pada tanggal 5 Juli dan perbaikan sisi server diterapkan pada tanggal 9 Juli untuk melindungi pengguna di semua versi Telegram.”

So.., segera update versi Telegram anda, agar tetap bisa menggunakannya dengan aman.(BSSA-MF)
            ">
                Cek Versi Telegram di Ponsel Android Anda, Kerentanan Zero-Day EvilVideo Mengintai</h2>
            <div class="meta">
                <span>2024-07-25 15:47:53 | https://www.securityweek.com/telegram-zero-day-enabled-malware-delivery/</a>
            </div>
            <p>Kerentanan Zero-Day EvilVideo di Telegram untuk Android Memungkinkan Threat Actors Mengirim File
                Berbahaya yang Disamarkan sebagai Video. </p>

            <p> ESET memperingatkan bahwa Threat Actors telah menggunakan kerentanan Telegram di ponsel yang menggunakan
                platform Android untuk mendistribusikan file berbahaya yang disamarkan sebagai dalam format video. </p>

            <p> Perusahaan keamanan siber tersebut mengidentifikasi adanya kelemahan keamanan setelah menemukan di forum
                kejahatan siber sebuah iklan eksploitasi zero-day yang menargetkan Telegram untuk Android. </p>

            <p> Menurut ESET, eksploitasi tersebut kemungkinan dikembangkan menggunakan API Telegram, yang memungkinkan
                developers mengupload file multimedia ke chat atau channel Telegram secara terprogram. </p>

            <p> Kode tersebut mengeksploitasi kerentanan di Telegram untuk Android, yang oleh ESET disebut EvilVideo ,
                memungkinkan attackers mengirimkan payloads berisi file APK yang ditampilkan sebagai pratinjau
                multimedia. </p>

            <p> Secara default, Telegram mendownload file multimedia secara otomatis, artinya malicious payload secara
                otomatis diambil di perangkat pengguna. </p>

            <p> Namun, ketika pengguna mencoba memutar video tersebut, Telegram menampilkan pesan sah (legitimate
                message) yang memperingatkan mereka bahwa ia tidak dapat memutar file dan menyarankan agar video
                tersebut dibuka di pemutar eksternal. </p>



            <p> Kemudian, jika pengguna memilih opsi untuk membuka video di pemutar eksternal, mereka akan diminta untuk
                menginstall malicious aplikasi yang menyamar sebagai pemutar video. Telegram juga meminta pengguna untuk
                mengaktifkan instalasi aplikasi yang tidak dikenal. </p>

            <p> ESET menambahkan bahwa “pada titik ini, aplikasi malicious tersebut telah didownload sebagai file video,
                tetapi dengan ekstensi .apk. Dan menariknya, sifat kerentananlah yang membuat file yang dibagikan
                terlihat seperti video – malicious app sebenarnya tidak diubah untuk menyamar sebagai file multimedia.”
            </p>

            <p> Eksploitasi ini dibuat khusus untuk Telegram yang menggunakan platform Android dan tidak akan berfungsi
                di ponsel platform yang lain. </p>

            <p> Analisis ESET terhadap eksploitasi tersebut mengarahkan mereka pada penemuan kerentanan mendasar
                EvilVideo, yang dilaporkan ke Telegram pada akhir Juni 2024 dan ditambal pada 11 Juli. Namun,
                eksploitasi zero-day telah tersedia untuk dijual sejak awal Juni. </p>

            <p> Di forum underground yang sama tempat mereka menawarkan eksploitasi tersebut, threat actor telah
                mengiklankan cryptor-as-a-service Android yang diduga sepenuhnya tidak terdeteksi sejak Januari 2024.
            </p>

            <p> EvilVideo memengaruhi Telegram untuk Android versi 10.14.4 dan yang lebih lama. Pengguna disarankan
                untuk memperbarui aplikasi Telegram ke versi 10.14.5, yang memperbaiki bug, membuat pratinjau chat
                multimedia menampilkan payload sebagai aplikasi dan bukan video dengan benar.</p>

            <p> PEMBARUAN: Telegram telah memberikan pernyataan berikut: </p>

            <p> “Eksploitasi ini bukanlah kerentanan di Telegram. Ini mengharuskan pengguna untuk membuka video,
                menyesuaikan pengaturan keamanan Android dan kemudian secara manual menginstal 'aplikasi media' yang
                tampak mencurigakan. </p>

            <p> Kami menerima laporan tentang eksploitasi ini pada tanggal 5 Juli dan perbaikan sisi server diterapkan
                pada tanggal 9 Juli untuk melindungi pengguna di semua versi Telegram.” </p>

            <p> So.., segera update versi Telegram anda, agar tetap bisa menggunakannya dengan aman.(BSSA-MF)</p>

            <img src="/img/suara.png" alt="Icon" style="width: 60px; height: 58px;" id="soundImage">
            <audio id="soundEffect">
                <source src="/path/to/sound.mp3" type="audio/mpeg">
                <source src="/path/to/sound.ogg" type="audio/ogg">
                Your browser does not support the audio element.
            </audio>

            <script>
                document.getElementById("soundImage").addEventListener("click", function() {
                    var audio = document.getElementById("soundEffect");
                    audio.play();
                });
            </script>
        </div>
    </div>
    </div>
    &nbsp;
    {{-- Tampilan bagian Footer --}}
    <section class="footer-section">
        <div class="container">
            <div class="footer-column">
                {{-- Logo CSIRT bagian kiri atas --}}
                <img src="/img/Logo.png" alt="CSIRT Logo">
                <p>Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI Jakarta
                    yang selanjutnya disebut dengan JakartaProv-CSIRT merupakan CSIRT Pemprov DKI Jakarta.</p>
                <p>Tim JakartaProv-CSIRT ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam Keputusan Penjabat
                    Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Compu</p>
                <button>SELENGKAPNYA</button>
            </div>
            {{-- Footer bagian Visitor --}}
            <div class="footer-column">
                <h3>Visitor</h3>
                <p>Pengunjung Online: 4</p>
                <p>Hari ini: 15</p>
                <p>Tanggal: 24-07-2024</p>
                <p>Total Pengunjung: 47322</p>
            </div>
            {{-- Footer bagian Link --}}
            <div class="footer-column">
                <h3>Link</h3>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Peringatan Keamanan</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                </ul>
            </div>
            {{-- Footer bagian alamat dan Media Sosial --}}
            <div class="footer-column">
                <h3>JakartaProv-CSIRT</h3>
                <p> Siber, Sandi dan Aplikasi Diskominfotik Provinsi DKI Jakarta Balaikota Blok H Lantai 13, JL Merdeka
                    Selatan 8-9, Jakarta Pusat 10110</p>
                <p><i class="fa fa-phone"> </i> 081388870152</p>
                <p><i class="fa fa-envelope"></i> csirt@jakarta.go.id</p>
                <div class="social-media">
                </div>
            </div>
        </div>
    </section>
    {{-- Tampilan tombol play dan mute untuk suara --}}
    <button id="audioButton" class="btn btn-primary side-button">
        <img id="audioIcon" src="/img/mute.png" alt="Play" />
    </button>
    {{-- Proses penerjemahan suara --}}
    <script>
        // Mendapatkan status audio dari localStorage
        let isPlaying = localStorage.getItem('audioStatus') === 'true';
        // Fungsi untuk mengucapkan teks menggunakan responsiveVoice
        function speakText(text) {
            if (isPlaying) {
                console.log('Speaking: ', text);
                responsiveVoice.speak(text, 'Indonesian Female');
            }
        }
         // Menambahkan event listener untuk tombol audio
        document.getElementById('audioButton').addEventListener('click', function() {
            const button = this;
            const icon = document.getElementById('audioIcon');
            if (isPlaying) {
                // Jika audio sedang diputar, hentikan dan ubah ikon menjadi mute
                responsiveVoice.cancel();
                icon.src = '/img/mute.png'; // Gambar untuk mode Play
                icon.alt = 'Play';
                isPlaying = false;
                localStorage.setItem('audioStatus', 'false');
                responsiveVoice.speak('Mode Suara of', 'Indonesian Female');
            } else {
                 // Jika audio tidak diputar, mulai dan ubah ikon menjadi play
                icon.src = '/img/play.png'; // Gambar untuk mode Mute
                icon.alt = 'Mute';
                isPlaying = true;
                localStorage.setItem('audioStatus', 'true');
                responsiveVoice.speak('Selamat Datang di Jakarta Prov CSIRT', 'Indonesian Female');
            }
        });
         // Menambahkan event listener untuk item navigasi agar mengucapkan teks saat di-hover
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('mouseover', function(event) {
                const text = item.getAttribute('data-text') || event.target.getAttribute('data-text');
                if (text && isPlaying) {
                    speakText(text);
                }
            });
        });

        // Mengatur ikon audio berdasarkan status isPlaying saat halaman dimuat
        document.getElementById('audioIcon').src = isPlaying ? '/img/play.png' : '/img/mute.png';
        document.getElementById('audioIcon').alt = isPlaying ? 'Mute' : 'Play';
    </script>
    <script>
        // Fungsi untuk menavigasi ke halaman yang berbeda berdasarkan parameter
        function navigate(page) {
            switch (page) {
                case 'Peringatan_Keamanan':
                    window.location.href = '{{ route('peringatan_keamanan') }}';
                    break;
                case 'Infografis_Keamanan_Informasi':
                    window.location.href = '{{ route('infografis_keamanan_informasi') }}';
                    break;
                case 'Peraturan_Kebijakan':
                    window.location.href = '{{ route('peraturan_kebijakan') }}';
                    break;
                case 'Berita_Siber':
                    window.location.href = '{{ route('berita_siber') }}';
                    break;
                case 'Statistik_Honeypot':
                    window.location.href = '{{ route('statistik_honeypot') }}';
                    break;
                case 'Panduan_Teknis':
                    window.location.href = '{{ route('panduan_teknis') }}';
                    break;
                case 'rfc2350':
                    window.location.href = '{{ route('rfc2350') }}';
                    break;
                case 'home':
                    window.location.href = '{{ route('welcome') }}';
                    break;
                case 'profil':
                    window.location.href = '{{ route('profil') }}';
                    break;
                case 'event':
                    window.location.href = '{{ route('event') }}';
                    break;
                case 'lapor_insiden_siber':
                    window.location.href = '{{ route('lapor_insiden_siber') }}';
                    break;
                case 'kontak_kami':
                    window.location.href = '{{ route('kontak_kami') }}';
                    break;
                case 'selengkapnya1':
                    window.location.href = '{{ route('selengkapnya1') }}';
                    break;
                case 'Gallery':
                    window.location.href = '{{ route('gallery') }}';
                    break;
                default:
                    console.log('No route defined for: ' + page);
            }
        }
    </script>
     {{-- Fitur Ubah Tampilan, seperti Contrast, Higtlight Link, Bigger Teks (otomatis menggunakan API)--}}
    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>
</html>
