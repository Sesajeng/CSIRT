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

        .btn img {
            width: 24px;
            height: 24px;
        }

        .btn:hover {
            background-color: rgba(0, 0, 0, 0.1);
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
                                    data-text="Gallery">Gallery</span>
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
        <img src="/img/5.png" class="d-block w-100" alt="gambar 1">
    </div>
    {{-- Tombol pencarian--}}
    <div class="search-container">
        <input type="text" class="search-box" placeholder="Search...">
    </div>
    
    <footer class="footer">
        <div class="container">
        </div>
    </footer>
    <button id="audioButton" class="btn btn-primary side-button">
        <img id="audioIcon" src="/img/mute.png" alt="Play" />
    </button>

    <script>
        let isPlaying = localStorage.getItem('audioStatus') === 'true';

        function speakText(text) {
            if (isPlaying) {
                console.log('Speaking: ', text);
                responsiveVoice.speak(text, 'Indonesian Female');
            }
        }

        document.getElementById('audioButton').addEventListener('click', function() {
            const button = this;
            const icon = document.getElementById('audioIcon');
            if (isPlaying) {
                responsiveVoice.cancel();
                icon.src = '/img/mute.png'; // Gambar untuk mode Play
                icon.alt = 'Play';
                isPlaying = false;
                localStorage.setItem('audioStatus', 'false');
                responsiveVoice.speak('Mode Suara of', 'Indonesian Female');
            } else {
                icon.src = '/img/play.png'; // Gambar untuk mode Mute
                icon.alt = 'Mute';
                isPlaying = true;
                localStorage.setItem('audioStatus', 'true');
                responsiveVoice.speak('Selamat Datang di Jakarta Prov CSIRT', 'Indonesian Female');
            }
        });

        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('mouseover', function(event) {
                const text = item.getAttribute('data-text') || event.target.getAttribute('data-text');
                if (text && isPlaying) {
                    speakText(text);
                }
            });
        });

        // Set initial icon based on the saved status
        document.getElementById('audioIcon').src = isPlaying ? '/img/play.png' : '/img/mute.png';
        document.getElementById('audioIcon').alt = isPlaying ? 'Mute' : 'Play';
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
                case 'Gallery':
                    window.location.href = '{{ route('gallery') }}';
                    break;
                default:
                    console.log('No route defined for: ' + page);
            }
        }
    </script>
    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
    
</body>

</html>
