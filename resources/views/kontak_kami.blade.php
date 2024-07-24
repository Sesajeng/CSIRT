<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
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

        .th {
            text-align: left;
            vertical-align: top;
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
        .form-container{
            width: 100%;
            height: 100%;
        }

        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }
        .footer-section {
    background-color: orange; /* Ganti dengan warna background sesuai */
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
    background-color:#de8300 ;
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

    </style>
</head>

<body class=" text-black">
    <div class="header">
        <header class="bg-orange-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                <nav class="space-x-4">
                    <nav class="space-x-4 ml-auto">
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
                </nav>
            </div>
    </div>
    </header>
    </div>
    <div class="carousel-item active">
        <img src="/img/18.png" class="d-block w-100" alt="gambar 1">
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
   
   <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>
                    <h2> Jakarta Prov-CSIRT</h2>
                    <p>Bidang Siber, Sandi dan Aplikasi Diskominfotik Provinsi DKI Jakarta.</p>
                    <p> Balaikota Blok H Lantai 13 Jl. Medan Merdeka Selatan 8-9, Jakarta Pusat 10110 </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.620215706114!2d106.82587777453058!3d-6.18155836056839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42c1857be71%3A0xe2e79a83d2cb3c4c!2sDinas%20Komunikasi%2C%20Informatika%20dan%20Statistik%20Provinsi%20DKI%20Jakarta!5e0!3m2!1sen!2sid!4v1721622987186!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </th>
                    <th>
                    <div class="form-container">
                        <form action="/submit-form" method="POST">
                            <div class="form-group">
                                <label for="name">Nama Anda:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Anda:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subjek:</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan:</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="captcha">Kode Verifikasi:</label>
                                <input type="text" id="captcha" name="captcha" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="margin-top:10px;">Kirim</button>    </div>
                        </form>
                    </div>
                    </th>
            </tr>
        </thead>
    </table>
   </div>
   &nbsp;
        <section class="footer-section">
            <div class="container">
                <div class="footer-column">
                    <img src="/img/Logo.png" alt="CSIRT Logo">
                    <p>Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI Jakarta yang selanjutnya disebut dengan JakartaProv-CSIRT merupakan CSIRT Pemprov DKI Jakarta.</p>
                    <p>Tim JakartaProv-CSIRT ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam Keputusan Penjabat Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Compu</p>
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
                    <p> Siber, Sandi dan Aplikasi Diskominfotik Provinsi DKI Jakarta Balaikota Blok H Lantai 13, JL Merdeka Selatan 8-9, Jakarta Pusat 10110</p>
                    <p><i class="fa fa-phone">  </i> 081388870152</p>
                    <p><i class="fa fa-envelope"></i> csirt@jakarta.go.id</p>
                    <div class="social-media">
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>

</html>
