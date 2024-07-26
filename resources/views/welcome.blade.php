<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakarta Prov CSIRT</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=k252SkNj"></script>

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
            margin-bottom: 0; 
            padding-bottom: 0; 

        }

        .card {
            box-shadow: 0 0px px rgba(0, 0, 0, 0);
            border: none;
            border-radius: 0px;
            overflow: hidden;
        }

        .card-body {
            font-size: 13px;
            width: 98%;
            height: 90%;
        }

        .header {
            color: white;
            background-color: orange;
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
        }

        .carousel-inner {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 90%;
            gap: 20px;
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

        .box-title1 {
            width: 200px;
            float: left;
            background: #de8300;
            color: #fff;
            padding: 5px;
            font-size: 18px;
            padding-left: 15px;
        }

        .box-title2 {
            float: right;
            padding: 5px;
            font-size: 18px;
            padding-left: 15px;
        }

        .divider-custom .divider-custom-line {
            width: 100%;
            height: 0.25rem;
            background-color: #de8300;
            border-color: #de8300;
        }

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }

        .divider-custom .divider-custom-line:first-child {
            margin-right: 0px;
        }


        .infografis {
            border: solid 2px #fd8e09;
            border-radius: 20px;
            width: 87%;
            padding: 25px;
        }

        .#slider1 .buttons {
            display: block;
            position: absolute;
            top: 38%;
            left: 0;
            width: 50px;
            height: 50px;
            color: #fd8e09;
            font-weight: bold;
            text-align: center;
            line-height: 35px;
            text-decoration: none;
            font-size: 55px;
        }

        .#slider1 .overview {
            list-style: none;
            position: absolute;
            padding: 0;
            margin: 0;
            width: 240px;
            left: 0;
            top: 0;
        }

        #slider1 .viewport {
            height: 293px;
            overflow: hidden;
            position: relative;
        }

        #slider1 .overview {
            list-style: none;
            position: absolute;
            padding: 0;
            margin: 0;
            width: 240px;
            left: 0;
            top: 0;
        }

        #slider1 {
            height: 1%;
            margin: 30px 0 0;
            overflow: hidden;
            position: relative;
            padding: 0 50px 10px;
        }

        .element.style {
            width: 2214px;
            left: 0px;
        }

        .divider-custom .divider-custom-line:last-child {
            margin-left: 0px;
        }

        .divider-custom .divider-custom-line:first-child {
            margin-right: 0px;
        }

        .divider-custom .divider-custom-line {
            width: 100%;
            height: 0.25rem;
            background-color: #de8300;
            border-color: #de8300;
        }

        .line {
            width: 100%;
            height: 5px;
            background-color: #de8300;
            display: flex;
            margin-top: -13px;
        }

        .container.conten {
            display: flex;
            justify-content: space-between;
            align-items: center

        }

        .card-container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            gap: 23px;
            border: 8px;
            border-color: #000;
        }

        .card2 {
            border: 1px solid (128, 128, 128);
            border-radius: 5px;
            margin: 2px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            width: 300px;
            transition: transform 0.3s, box-shadow 0.3s;

        }

        .card2 img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid rgb(128, 128, 128);
            margin-bottom: 10px;
            border-radius: 5px 5px 0 0;
        }

        .card2 h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .card2 p {
            color: grey;
            font-size: 0.9em;
        }

        .card2:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            margin-left: 8px;
            margin-right: 8px;

        }

        .card-text {
            margin-left: 8px;
            margin-right: 8px;
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


        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
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

    </style>
</head>
<body class=" text-black">
    <div class="header">
        <header class="bg-orange-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                <nav class="space-x-4 navbar">
                    <ul>
                        <li class="btn nav-item" onclick="navigate('home')" data-text="Home">Home</li>
                        <li class="btn nav-item" onclick="navigate('profil')" data-text="Profil">Profil</li>
                        <li class="btn nav-item" onclick="navigate('event')" data-text="Event">Event</li>
                        <li class="btn nav-item dropdown">
                            <span class="dropbtn" data-text="publikasi">Publikasi</span>
                            <div class="dropdown-content">
                                <span class="btn nav-item" onclick="navigate('Peringatan_Keamanan')" data-text="Peringatan Keamanan">Peringatan Keamanan</span>
                                <span class="btn nav-item" onclick="navigate('Infografis_Keamanan_Informasi')" data-text="Infografis Keamanan Informasi">Infografis Keamanan Informasi</span>
                                <span class="btn nav-item" onclick="navigate('Peraturan_Kebijakan')" data-text="Peraturan Kebijakan">Peraturan Kebijakan</span>
                                <span class="btn nav-item" onclick="navigate('Berita_Siber')" data-text="Berita Siber (Cyber Blitz)">Berita Siber (Cyber Blitz)</span>
                                <span class="btn nav-item" onclick="navigate('Statistik_Honeypot')" data-text="Statistik (Honeypot)">Statistik (Honeypot)</span>
                                <span class="btn nav-item" onclick="navigate('Panduan_Teknis')" data-text="Panduan Teknis">Panduan Teknis</span>
                                <span class="btn nav-item" onclick="navigate('rfc2350')" data-text="RFC2350">RFC2350</span>
                            </div>
                        </li>
                        <li class="btn nav-item" onclick="navigate('lapor_insiden_siber')" data-text="Lapor Insiden Siber">Lapor Insiden Siber</li>
                        <li class="btn nav-item" onclick="navigate('kontak_kami')" data-text="Kontak Kami">Kontak Kami</li>
                        <li><input type="text" class="search-box" placeholder="Search..."></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-header">
            <div class="carousel-item active">
                <img src="/img/1.png" class="d-block w-100" alt="gambar 1">
            </div>
        </div>
        <button id="audioButton" class="btn btn-primary side-button">Play</button>
        <script>
            let isPlaying = false;
            const navItems = document.querySelectorAll('.nav-item, .nav-item-dropdown, .nav-item .dropdown-content, .dropbtn, .dropdown-content, .card-title, .card-text, .card-body, .card-container, .card');

            function speakText(text) {
                if (isPlaying) {
                    responsiveVoice.speak(text, 'Indonesian Female');
                }
            }
            document.getElementById('audioButton').addEventListener('click', function() {
                const button = this;
                if (isPlaying) {
                    responsiveVoice.cancel();
                    button.textContent = 'Play';
                    isPlaying = false;
                } else {
                    button.textContent = 'Mute';
                    isPlaying = true;
                    responsiveVoice.speak('Selamat Datang di Jakarta Prov CSIRT', 'Indonesian Female');
                }
            });

            navItems.forEach(item => {
                item.addEventListener('mouseover', function(event) {

                    const text = item.getAttribute('data-text') || event.target.getAttribute('data-text');
                    if (isPlaying) {
                        speakText(text);
                    }
                });
            });
        </script>
        <script>
           function navigate(page) {
            switch(page) {
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
                default:
                    console.log('No route defined for: ' + page);
            }
        }      
        </script>
        &nbsp;
        <section class="page-section portofolio">
            <div class="container conten">
                <div class="box-title1">Berita Tekrini </div>
                <div class="box-title2">
                    <p class="nav-item" onclick="IndexBerita()" data-text="Index Berita" style="color: black;"> Index
                        Berita ></a>
                    </p>
                </div>
            </div>
            <div class="container content">
                <div class="line"></div>
                </diiv>
            </div>
    </div>
    </section>
    &nbsp;
    <div class="card-container">
        <div class="card" style="width: 22rem;">
            <img src="/img/3.png" class="card-img-top" alt="Berita 1">
            <div class="card-body">
                <h6 class="card-title"  data-text="Carbanak Malware Kembali Beroperasi Dalam Serangan Ransomware">Carbanak Malware Kembali Beroperasi Dalam Serangan Ransomware</h6>
                <p class="card-text"  data-text="Peringatan Keamanan" >2024-01-10 13:50:20 |
                    https://securityaffairs.com/156410/malware/carbanak-malware-ransomware-attacks.html</p>
                <p class="card-text">Peneliti dari NCC Group melaporkan adanya aktivitas malware carbanak dalam
                    sebuah serangan ransomware. Kelompok kejahatan siber Carbanak pertama kali diidentifikasi oleh
                    Kaspersky Lab pada tahun 2015, dan telah berhasil mencuri setidaknya 300 juta</p>
                    <nav class="space-x-4 navbar">
                        <ul>
                            <li class="btn nav-item" onclick="navigate('selengkpanya1')" data-text="Selengkapnya">Selengkapnya</li>
                    </ul>
                </nav>
                </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img src="/img/11.jpg" class="card-img-top" alt="Berita 2">
            <div class="card-body">
                <h6 class="card-title">Peningkatan Aktivitas Rugmi Malware Loader</h6>
                <p class="card-text"> 2024-01-10 13:49:27 |
                    https://thehackernews.com/2023/12/new-rugmi-malware-loader-surges-with.html</p>
                <p class="card-text"> Malware loader baru bernama Rugmi digunakan oleh pelaku ancaman untuk
                    menyebarkan pencuri informasi seperti Lumma Stealer, Vidar, RecordBreaker, dan Rescoms.
                    Perusahaan keamanan siber ESET melacak trojan ini dengan nama Win/TrojanDownloader.Rugmi,</p>
                <nav class="space-x-4">
                    <ul>
                        <li class="btn nav-item" onclick="Selengkapnya()" data-text="Selengkapnya">SELENGKAPNYA</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="card" style="width: 22rem;">
            <img src="/img/12.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
                <h6 class="card-title"> Barracuda Memperbaiki Kerentanan Baru ESG Zero-Day yang Dieksploitasi
                    Oleh
                    Kelompok Peretas UNC4841</h6>
                <p class="card-text"> 2024-01-10 13:48:18 | idsirtii.or.id</p>
                <p class="card-text"> Email Security Gateways (ESG) pada Barracuda Networks kembali menjadi
                    korban
                    eksploitasi para peretas yang menyalahgunakan kerentanan zero-day pada open-source library
                    untuk
                    memproses file Excel. Kerentanan yang diidentifikasi sebagai CVE-2023-710</p>
                <span class="btn nav-item" data-text="Selengkapnya">SELENGKAPNYA</span>
            </div>
        </div>
    </div>
    <div class="container conten">
        <div class="box-title1">Gallery Kegiatan </div>
        <div class="box-title2">
            <p class="nav-item" onclick="IndexBerita()" data-text="Index Berita" style="color: black;"> Index
                Gallery ></a>
            </p>
        </div>
    </div>
    <div class="container content">
        <div class="line"></div>
        </diiv>
    </div>
    </div>
    &nbsp;
    <div class="card-container1">
        <div class="card2" style="width: 16rem;">
            <img src="/img/16.png" class="card-img-top" alt="Berita 1">
            <div class="card-body">
                <h6 class="card-title">Sosialisasi Security Awareness Keamanan Mobile Computing dan Teleworking
                </h6>
                <p class="card-text">31-Aug-2023</p>
            </div>
        </div>
        <div class="card2" style="width: 16rem;">
            <img src="/img/17.png" class="card-img-top" alt="Berita 2">
            <div class="card-body">
                <h6 class="card-title">Security Awareness Potensi Ancaman Siber di Tahun 2023</h6>
                <p class="card-text"> 31-Aug-2023</p>
            </div>
        </div>
        <div class="card2" style="width: 16rem;">
            <img src="/img/14.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
                <h6 class="card-title">Sosialisasi Security Awareness - Menjaga Keamanan Akses Jaringan</h6>
                <p class="card-text"> 20-Oct-2022</p>
            </div>
        </div>
        <div class="card2" style="width: 16rem;">
            <img src="/img/18.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
                <h6 class="card-title">Sosialisasi Security Awareness - Workshop Secure Coding #3</h6>
                <p class="card-text"> 02-Aug-2022</p>
            </div>
        </div>
    </div>
    <div class="card-container1">
        <div class="card2" style="width: 16rem;">
            <img src="/img/16.png" class="card-img-top" alt="Berita 1">
            <div class="card-body">
                <h6 class="card-title">Sosialisasi Security Awareness Keamanan Mobile Computing dan Teleworking
                </h6>
                <p class="card-text">31-Aug-2023</p>
            </div>
        </div>
        <div class="card2" style="width: 16rem;">
            <img src="/img/17.png" class="card-img-top" alt="Berita 2">
            <div class="card-body">
                <h6 class="card-title">Security Awareness Potensi Ancaman Siber di Tahun 2023</h6>
                <p class="card-text"> 31-Aug-2023</p>
            </div>
        </div>
        <div class="card2" style="width: 16rem;">
            <img src="/img/14.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
                <h6 class="card-title">Sosialisasi Security Awareness - Menjaga Keamanan Akses Jaringan</h6>
                <p class="card-text"> 20-Oct-2022</p>
            </div>
        </div>
        <div class="card2" style="width: 16rem;">
            <img src="/img/18.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
                <h6 class="card-title">Sosialisasi Security Awareness - Workshop Secure Coding #3</h6>
                <p class="card-text"> 02-Aug-2022</p>
            </div>
        </div>
    </div>
    &nbsp;
    <section class="footer-section">
        <div class="container">
            <div class="footer-column">
                <img src="/img/Logo.png" alt="CSIRT Logo">
                <p>Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI Jakarta
                    yang selanjutnya disebut dengan JakartaProv-CSIRT merupakan CSIRT Pemprov DKI Jakarta.</p>
                <p>Tim JakartaProv-CSIRT ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam Keputusan Penjabat
                    Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Compu</p>
                <button>SELENGKAPNYA</button>
            </div>
            <div class="footer-column">
                <h3>Visitor</h3>
                <p>Pengunjung Online: 4</p>
                <p>Hari ini: 15</p>
                <p>Tanggal: 24-07-2024</p>
                <p>Total Pengunjung: 47322</p>
            </div>
            <div class="footer-column">
                <h3>Link</h3>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Peringatan Keamanan</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                </ul>
            </div>
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
    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>

</html>
