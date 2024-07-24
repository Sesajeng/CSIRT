<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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

        .flex-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 10px;
            max-width: 80%;
            margin: 0 auto;
            padding: 0 100px;
            font-size: 12px;
        }

        .flex-container img {
            height: auto;
            max-width: 350px;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;

            margin: 50 auto;
            padding: 0 15px;
        }

        .flex-container .text-content {
            flex: 1;
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
        <img src="/img/19.png" class="d-block w-100" alt="gambar 1">
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
    
            <div class="col-12 flex-container">
                <img src="/img/Logo.png" alt="Logo">
                <div class="text-content">
                    <p> Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI
                        Jakarta yang selanjutnya disebut dengan <b> JakartaProv-CSIRT</b> merupakan CSIRT Pemprov DKI
                        Jakarta.</p>
                   
                    <p> Tim <b> JakartaProv- CSIRT </b> ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam
                        Keputusan Penjabat Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Computer Security
                        Incident Response Team </p>
                   
                    <p> Kepala Dinas Komunikasi Informatika dan Statistik Provinsi DKI Jakarta ditunjuk sebagai Ketua
                        CSIRT Propinsi DKI Jakarta dan ditugaskan untuk melaksanakan memimpin, mengkoordinasikan,
                        memfasilitasi pengembangan kemampuan SDM, pengalokasian sumber daya, memantau, serta melaporkan
                        pelaksanaan terkait JakartaProv-CSIRT. </p>
                  
                    <p> Dalam pembentukannya, JakartaProv-CSIRT memiliki tujuan yaitu: </p>
                  
                    <p> - Membangun mengkoordinasikan, mengkolaborasikan dan mengoperasionalkan sistem mitigasi,
                        manajemen krisis, penanggulangan dan pemulihan terhadap insiden keamanan siber pada sektor
                        Pemerintah Daerah Provinsi DKI Jakarta.
                    <p> - Membangun kapasitas sumber daya penanggulangan dan pemulihan insiden keamanan siber pada
                        sektor Pemerintah Daerah Provinsi DKI Jakarta </p>
                    
                    <p> CSIRT Propinsi DKI Jakarta melaksanakan layanan tanggap insiden siber, berupa:
                    <p> - Layanan reaktif, yaitu layanan yang terkait dengan kebutuhan melakukan respon terhadap insiden
                        siber termasuk penangkalan, penindakan dan pemulihan siber.
                    <p>- Layanan proaktif, yaitu layanan yang mendeteksi dan mencegah serangan siber sebelum ada dampak
                        nyata. </p>
                    
                    <p> CSIRT Propinsi DKI Jakarta secara resmi di-launching pada 23 Desember 2020. Konstituen
                        JakartaProv-CSIRT meliputi Perangkat Daerah (OPD) di lingkungan Pemerintah Daerah Provinsi DKI
                        Jakarta. </p>
                </div>
            </div>
        </div>
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
