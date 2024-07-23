<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Insiden Siber</title>
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
    </style>
</head>
<body class=" text-black">
    <div class="header">
        <header class="bg-orange-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                <nav class="space-x-4">
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
    <footer class="footer">
        <div class="container">
        </div>
    </footer>
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

    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>

</html>
