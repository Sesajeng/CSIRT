<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    </style>
</head>

<body class=" text-black">

    <div class="header">
        <header class="bg-orange-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                <nav class="space-x-4">
                    <nav class="space-x-4 ml-auto">
                        <button class="btn">
                            <a href="{{ route('welcome') }}" button onclick="responsiveVoice.speak('Home');"
                                type="button" value="Play">Home</a>
                            <button class="btn">
                                <a href="{{ route('profil') }}">Profil</a>
                                <button class="btn">
                                    <a href="{{ route('event') }}">Event</a>
                                    <button class="btn">
                                        <a href="{{ route('publikasi') }}">Publikasi</a>
                                        <button class="btn">
                                            <a href="{{ route('lapor_insiden_siber') }}">Lapor Insiden Siber</a>
                                            <button class="btn">
                                                <a href="{{ route('kontak_kami') }}">Kontak Kami</a> </button>
                                            <input type="text" class="search-box" placeholder="Search...">
                    </nav>
                </nav>
            </div>
    </div>
    </header>
    </div>
    <div class="carousel-item active">
        <img src="/img/5.png" class="d-block w-100" alt="gambar tampilan event">
    </div>
    <div class="parent-container">
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Search...">
        </div>
    </div>

    <div class="menu">
        <div class="menu-item active">Berita Terkini</div>
        <div class="menu-item">Index Berita ></div>
    </div>
    <div class="card-container1">
        <div class="card2" style="width: 18rem;">
            <img src="/img/15.jpg" class="card-img-top" alt="Berita 1">
            <div class="line">
            </div>
            <div class="card-body">
                <h5 class="card-title"> Sosialisasi Security Awareness - Pencegahan dan Penanganan Serangan Ransomware
                </h5>
            </div>
        </div>
        <div class="card2" style="width: 18rem;">
            <img src="/img/16.jpg" class="card-img-top" alt="Berita 2">
            <div class="line">
            </div>
            <div class="card-body">
                <h5 class="card-title">Sosialisasi Security Awareness - Keamanan Mobile Computing dan Teleworking</h5>
            </div>
        </div>
        <div class="card2" style="width: 18rem;">
            <img src="/img/10.jpg" class="card-img-top" alt="Berita 3">
            <div class="line"></div>
            <div class="card-body">
                <h5 class="card-title">Edukasi Pemanfaatan - Index Keamanan Informasi (Indeks Kami)</h5>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
        </div>
    </footer>
    <button id="playButton" class="btn btn-primary side-button">Play</button>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=N13Zi1Bw"></script>
    <script>
        let isPlaying = false;
        const playButton = document.getElementById('playButton');
        const navButtons = document.querySelectorAll('nav .btn');
        playButton.addEventListener('click', () => {
            isPlaying = !isPlaying;
            if (isPlaying) {
                playButton.textContent = 'Mute';
            } else {
                playButton.textContent = 'Play';
                responsiveVoice.cancel();
            }
        });
    </script>
    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>

</html>
