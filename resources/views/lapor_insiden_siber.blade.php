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

        .parent-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 9vh;
        }

        .card-container1 {
            display: flex;
            flex-wrap: wrap;

        }

        .card2 {
            border: 1px solid orange;
            border-radius: 5px;
            margin: 2px;
            box-shadow: 10 20px 1px rgba(0, 0, 0, 0.1);
            padding: 5px
        }

        .card-body {
            padding: 15px;

        }

        .line {
            width: 100%;
            height: 1px;
            background-color: orange;
            margin-top: 5px;
        }

        .card-body {
            padding: 10px;

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

        .footer-section {
            background-color: orange;
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
            margin-bottom: 100px;
        }

        ul,
        ol {
            list-style-type: disc;
            padding-left: 30px;
        }

        li {
            margin-right: 10px;


        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0.125rem solid rgba(0, 0, 0, 0.125);
            border-radius: 0.5rem;
            width: 300px;
            height: auto;
            max-width: 100%;
            max-height: 100%;
        }

        .form-image-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 100px 0;
        }

        .form-section {
            flex: 1;
            margin-right: 20px;
        }

        .image-section {
            flex: 1;
            display: flex;
            justify-content: right;
            align-items: center;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
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
                <nav class="space-x-4">
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
                                    <span class="btn nav-item" onclick="navigate('Statistik_Honeypot')"
                                        data-text="Statistik (Honeypot)">Statistik (Honeypot)</span>
                                    <span class="btn nav-item" onclick="navigate('Panduan_Teknis')"
                                        data-text="Panduan Teknis">Panduan Teknis</span>
                                    <span class="btn nav-item" onclick="navigate('rfc2350')"
                                        data-text="RFC2350">RFC2350</span>
                                </div>
                            </li>
                            <li class="btn nav-item" onclick="navigate('lapor_insiden_siber')"
                                data-text="Lapor Insiden Siber">Lapor Insiden Siber</li>
                            <li class="btn nav-item" onclick="navigate('kontak_kami')" data-text="Kontak Kami">Kontak
                                Kami</li>
                            <li><input type="text" class="search-box" placeholder="Search..."></li>
                        </ul>
                    </nav>
                </nav>
            </div>
    </div>
    </header>
    </div>
    <div class="carousel-item active">
        <img src="/img/18.png" class="d-block w-100" alt="gambar tampilan event">
    </div>
    <table>
        <td>
            <div class="col-12 flex-container">
                <div class="text-content">
                    <h3> Form Laporan Insiden Siber </h3>
                    <p> Catatan : </p>
                    <ol>
                        <li>Lingkup Domain dan subdomain yang dilaporkan adalah *. Jakarta.go.id</li>
                        <li>Harap mengisi nama lengkap dan kontak pribadi dengan benar, karena sertifikat akan ditulis
                            berdasarkan data yang ada</li>
                        <li>Proses validasi report bug bounty memerlukan waktu maksimal selama 7 hari kerja</li>
                        <li>Jika report dinyatakan VALID dan tidak DUPLICATED, maka kami akan mengirimkan sertifikat
                            apresiasi
                            maksimal selama 3 hari kerja </li>
                    </ol>
                    <div class="card card-frame" style="padding:10px; margin-bottom:10px;">
                        <h5 class="card-title">Data Pelapor</h5>
                        <div class="form-group field-cyberreport-name required">
                            <label class="control-label" for="cyberreport-name">Nama Lengkap</label>
                            <input type="text" id="cyberreport-name" class="form-control" name="CyberReport[name]"
                                maxlength="100" aria-required="true">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-cyberreport-email required">
                            <label class="control-label" for="cyberreport-email">Email</label>
                            <input type="text" id="cyberreport-email" class="form-control" name="CyberReport[email]"
                                maxlength="100" aria-required="true">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-cyberreport-phone_number required">
                            <label class="control-label" for="cyberreport-phone_number">Nomor HP</label>
                            <input type="number" id="cyberreport-phone_number" class="form-control"
                                name="CyberReport[phone_number]" maxlength="100" aria-required="true">

                            <div class="help-block"></div>
                        </div>
                        <div style=";margin-top:10px;" class="form-group">
                            <label for="datepicker">Tanggal Temuan</label>
                            <input type="text" name="CyberReport[report_date]" class="form-control"
                                id="datepicker" placeholder="Input Tanggal">
                        </div>
                    </div>
                    <div class="card card-frame" style="padding:10px; margin-bottom:10px;">
                        <h5 class="card-title">Data Website</h5>
                        <div class="form-group field-cyberreport-domain_name required">
                            <label class="control-label" for="cyberreport-domain_name">Nama Domain</label>
                            <input type="text" id="cyberreport-domain_name" class="form-control"
                                name="CyberReport[domain_name]" maxlength="100" aria-required="true">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-cyberreport-url_affected required">
                            <label class="control-label" for="cyberreport-url_affected">Url Terdampak</label>
                            <input type="text" id="cyberreport-url_affected" class="form-control"
                                name="CyberReport[url_affected]" aria-required="true">

                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>

                <div class="card card-frame" style="padding:10px; margin-bottom:10px;">
                    <h5 class="card-title">Detail Laporan</h5>
                    <div class="form-group field-cyberreport-description required">
                        <label class="control-label" for="cyberreport-description">Deskripsi</label>
                        <textarea id="cyberreport-description" class="form-control" name="CyberReport[description]" rows="6"
                            aria-required="true"></textarea>

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-cyberreport-risk_type required">
                        <label class="control-label" for="cyberreport-risk_type">Jenis Risiko</label>
                        <input type="text" id="cyberreport-risk_type" class="form-control"
                            name="CyberReport[risk_type]" maxlength="100" aria-required="true">

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-cyberreport-risk_level required">
                        <label class="control-label" for="cyberreport-risk_level">Tingkat Risiko</label>
                        <input type="text" id="cyberreport-risk_level" class="form-control"
                            name="CyberReport[risk_level]" maxlength="100" aria-required="true">

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-cyberreport-cvss_score required">
                        <label class="control-label" for="cyberreport-cvss_score">Cvss Score</label>
                        <input type="text" id="cyberreport-cvss_score" class="form-control"
                            name="CyberReport[cvss_score]" maxlength="255" aria-required="true">

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-cyberreport-url_video required">
                        <label class="control-label" for="cyberreport-url_video">Url Bukti Video</label>
                        <input type="text" id="cyberreport-url_video" class="form-control"
                            name="CyberReport[url_video]" aria-required="true">

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-cyberreport-refrence required">
                        <label class="control-label" for="cyberreport-refrence">Refrensi (Optional)</label>
                        <input type="text" id="cyberreport-refrence" class="form-control"
                            name="CyberReport[refrence]" value="-" maxlength="200" aria-required="true">

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-cyberreport-recomendation required">
                        <label class="control-label" for="cyberreport-recomendation">Rekomendasi</label>
                        <input type="text" id="cyberreport-recomendation" class="form-control"
                            name="CyberReport[recomendation]" maxlength="200" aria-required="true">

                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-file-image">
                        <label class="control-label" for="file-image">Screenshot Bukti</label>
                        <input type="hidden" name="CyberReport[proofFile]" value=""><input type="file"
                            id="file-image" class="form-control" name="CyberReport[proofFile]" accept="image/*"
                            onchange="return showImage()">

                        <div class="help-block"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-lg-7"><img id="cyberreport-verifycode-image"
                        src="/site/captcha?v=66a0b13b6a3620.36799103" alt=""></div>
                <div class="col-lg-7"><input type="text" id="cyberreport-verifycode" class="form-control"
                        name="CyberReport[verifyCode]" placeholder=" Captcha" required="" aria-invalid="true">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success" style="margin-top:10px;">Save</button>
            </div>
        </td>
        <th>
            <div class="image-section">
                <img src="/img/20.png" alt="Your Image">
            </div>
        </th>
    </table>
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
                responsiveVoice.speak('Mode Suara of', 'Indonesian Female');
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
                default:
                    console.log('No route defined for: ' + page);
            }
        }
    </script>

    &nbsp;
    <section class="footer-section">
        <div class="container">
            <div class="footer-column">
                <img src="/img/Logo.png" alt="CSIRT Logo">
                <p>Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI
                    Jakarta yang selanjutnya disebut dengan JakartaProv-CSIRT merupakan CSIRT Pemprov DKI
                    Jakarta.</p>
                <p>Tim JakartaProv-CSIRT ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam Keputusan
                    Penjabat Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Compu</p>
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
                <p> Siber, Sandi dan Aplikasi Diskominfotik Provinsi DKI Jakarta Balaikota Blok H Lantai 13, JL
                    Merdeka Selatan 8-9, Jakarta Pusat 10110</p>
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
