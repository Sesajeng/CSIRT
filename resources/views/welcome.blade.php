<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            width: 50rem;
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
            /* max-width: 7rem; */
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
            /* background: #C01313; */
            /* border-radius: 35px; */
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
            /* max-width: 7rem; */
            height: 0.25rem;
            background-color: #de8300;
            border-color: #de8300;
        }
    </style>
</head>

<body class=" text-black">

    <div class="header">
        <header class="bg-orange-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                <nav class="space-x-4">
                    <ul>
                        <li class="btn nav-item" onclick="Home()" data-text="Home">Home
                        </li>
                        <li class="btn nav-item" onclick="Profil()" data-text="Profil">Profil
                        </li>
                        <li class="btn nav-item" onclick="Event()" data-text="Event">Event
                        </li>
                        <li class="btn nav-item" onclick="Publikasi()" data-text="Publikasi">Publikasi
                        </li>
                        <li class="btn nav-item" onclick="Lapor()" data-text="Lapor Insiden Siber">Lapor Insiden Siber
                        </li>
                        <li class="btn nav-item" onclick="Kontak()" data-text="Kontak Kami">Kontak Kami
                        </li>
                        <input type="text" class="search-box" placeholder="Search..."> </input>
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
            const navItems = document.querySelectorAll('.nav-item');

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
                    button.textContent = 'Mute', 'Selamat Datang di Jakarta Prov CSIRT';
                    isPlaying = true;
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
            function Home() {
                window.location.href = '{{ route('welcome') }}';;
            }

            function Profil() {
                window.location.href = '{{ route('profil') }}';;
            }

            function Event() {
                window.location.href = '{{ route('event') }}';;
            }

            function Publikasi() {
                window.location.href = '{{ route('publikasi') }}';;
            }

            function Lapor() {
                window.location.href = '{{ route('lapor_insiden_siber') }}';
            }

            function Kontak() {
                window.location.href = '{{ route('kontak_kami') }}';
            }

            function IndexBerita() {
                window.location.href = '{{ route('index_berita') }}';;
            }
        </script>


        &nbsp;
        <section class="page-section portofolio">
            <div class="container conten">
                <div class="box-title1">Berita Tekrini </div>
                <div class="box-title2">
                    <p class="nav-item" onclick="IndexBerita()" data-text="Index Berita" style="color: black;"> Index
                        Berita </a>
                </div>
            </div>
            <div class="container content">
                <diiv classs="divider-custom">
                    <div class="divider-custom-line"></div>
                </diiv>
            </div>
        </section>
        &nbsp;
        <div class="card-container">
            <div class="card" style="width: 18rem;">
                <img src="/img/3.png" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                    <h6 class="card-title">Carbanak Malware Kembali Beroperasi Dalam Serangan Ransomware</h6>
                    <p class="card-text">2024-01-10 13:50:20 |
                        https://securityaffairs.com/156410/malware/carbanak-malware-ransomware-attacks.html</p>
                    <p class="card-text">Peneliti dari NCC Group melaporkan adanya aktivitas malware carbanak dalam
                        sebuah serangan ransomware. Kelompok kejahatan siber Carbanak pertama kali diidentifikasi oleh
                        Kaspersky Lab pada tahun 2015, dan telah berhasil mencuri setidaknya 300 juta</p>
                    <div class="btn nav-item" onclick="Selengkapnya1()" data-text="Selengkapnya">SELENGKAPNYA</div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/img/11.jpg" class="card-img-top" alt="Berita 2">
                <div class="card-body">
                    <h6 class="card-title">Peningkatan Aktivitas Rugmi Malware Loader</h6>
                    <p class="card-text"> 2024-01-10 13:49:27 |
                        https://thehackernews.com/2023/12/new-rugmi-malware-loader-surges-with.html</p>
                    <p class="card-text"> Malware loader baru bernama Rugmi digunakan oleh pelaku ancaman untuk
                        menyebarkan pencuri informasi seperti Lumma Stealer, Vidar, RecordBreaker, dan Rescoms.
                        Perusahaan keamanan siber ESET melacak trojan ini dengan nama Win/TrojanDownloader.Rugmi,</p>
                    <div class="btn nav-item" onclick="Selengkapnya2()" data-text="Selengkapnya">SELENGKAPNYA</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
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
                        <a href="#" class="btn nav-item" data-text="Selengkapnya">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            {{-- <section class="page-section portfolio" id="portfolio">
            <div class="container infografis" style="margin-top: -145px;">
                <h6>Infografis Terkini<br>Keamanan Siber</h6>
                <div id="slider1">  --}}
            {{-- <a class="buttons prev" href="#">&lt;</a>
                    <div class="viewport">
                        <ul class="overview" style="width: 2214px; left: 0px;">
                            <li><a data-fancybox="img" data-src="/img/12.png">
                                    <img src="/img/12.png" style="width:100%;border:1px solid #000;"></a></li><li><a data-fancybox="img" data-src="/img/12.png">
                                    <img src="/img/8.jpg" style="width:100%;border:1px solid #000;"></a></li><li><a data-fancybox="img" data-src="/img/12.png">
                                    <img src= " /img/12.png" style="width:100%;border:1px solid #000;"></a></li><li><a data-fancybox="img" data-src="/img.12.png"> --}}
            {{-- <img src="images/gallery/Apa yang harus dilakukan pengelola server jika mengalami insiden siber_20230605075944.jpg" style="width:100%;border:1px solid #000;"></a></li><li><a data-fancybox="gallery" data-src="/images/gallery/WhatsApp Image 2023-05-23 at 11.22.14_20230523042511.jpeg">
                                    <img src="images/gallery/WhatsApp Image 2023-05-23 at 11.22.14_20230523042511.jpeg" style="width:100%;border:1px solid #000;"></a></li><li><a data-fancybox="gallery" data-src="/images/gallery/Tips agar terhindar dari serangan backdoor_20230523042411.jpeg">
                                    <img src="images/gallery/Tips agar terhindar dari serangan backdoor_20230523042411.jpeg" style="width:100%;border:1px solid #000;"></a></li>                </ul>  --}}
            {{-- </div>
                    <a class="buttons next" href="#">&gt;</a>
                </div> 
            </div>
        </section> --}}

            {{-- <div class="card-container1">
            <div class="card2" style="width: 18rem;">
                <img src="/img/16.png" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                    <h5 class="card-title">Sosialisasi Security Awareness Keamanan Mobile Computing dan Teleworking
                    </h5>
                    <p class="card-text">31-Aug-2023</p>
                </div>
            </div>
            <div class="card2" style="width: 18rem;">
                <img src="/img/17.png" class="card-img-top" alt="Berita 2">
                <div class="card-body">
                    <h5 class="card-title">Security Awareness Potensi Ancaman Siber di Tahun 2023</h5>
                    <p class="card-text"> 31-Aug-2023</p>
                </div>
            </div>
            <div class="card2" style="width: 18rem;">
                <img src="/img/14.jpg" class="card-img-top" alt="Berita 3">
                <div class="card-body">
                    <h5 class="card-title">Sosialisasi Security Awareness - Menjaga Keamanan Akses Jaringan</h5>
                    <p class="card-text"> 20-Oct-2022</p>
                </div>
            </div>
        </div>  --}}
            <footer class="footer">
                <div class="container">
                </div>
            </footer>

            <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>

</html>
