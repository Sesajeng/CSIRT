<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
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
                                                <a href="{{ route('kontak_kami') }}">Kontak Kami</a></button>
                                            <input type="text" class="search-box" placeholder="Search...">
                    </nav>
                </nav>
            </div>
    </div>
    </header>
    </div>
    <div class="carousel-item active">
        <img src="/img/18.png" class="d-block w-100" alt="gambar 1">
    </div>
    <table>
        <thead>
            <tr>
                <th>
                    <h2> Jakarta Prov-CSIRT</h2>
                    <p> <b> Bidang Siber, Sandi dan Aplikasi Diskominfotik Provinsi DKI Jakarta.</b></p>
                    <p> Balaikota Blok H Lantai 13 Jl. Medan Merdeka Selatan
                        8-9, Jakarta Pusat 10110 </p>
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
                            <input type="submit" value="Kirim">
                        </form>
                    </div>


                </th>
            </tr>
        </thead>
    </table>
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
