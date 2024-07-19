<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* styles.css */
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
            /* menghilangkan garis highlight saat focus */
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
            /* shadow ringan */
        }


        .search-box {
            width: 200px;
            height: 30px;
            padding: 10px 20px;
            border: 2px solid #ccc;
            border-radius: 20px;
            /* Membuat ujung kotak pencarian berbentuk oval */
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
    </style>
</head>

<body class=" text-black">

    <!-- Header -->
    <div class="header">
        <header class="bg-orange-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <img src="/img/Logo.png" alt="Logo" class="h-10">
                <nav class="space-x-4">
                    <a href="{{ route('welcome') }}" class="hover:underline" button
                        onclick="responsiveVoice.speak('Home');" type="button" value="Play">Home</a>
                    {{-- <script> 
                    function getSelectionText() {
                        var text = "";
                        if (window.getSelection) {
                            text = window.getSelection().toString();
                        // for Internet Explorer 8 and below. For Blogger, you should use &amp;&amp; instead of &&.
                        } else if (document.selection && document.selection.type != "Control") { 
                            text = document.selection.createRange().text;
                        }
                        return text;
                    }
                    $(document).ready(function (){ // when the document has completed loading
                       $(document).mouseup(function (e){ // attach the mouseup event for all div and pre tags
                          setTimeout(function() { // When clicking on a highlighted area, the value stays highlighted until after the mouseup event, and would therefore stil be captured by getSelection. This micro-timeout solves the issue. 
                             responsiveVoice.cancel(); // stop anything currently being spoken
                             responsiveVoice.speak(getSelectionText()); //speak the text as returned by getSelectionText
                          }, 1);
                       });
                    });
                    </script> --}}
                    <a href="{{ route('profil') }}" class="hover:underline">Profil</a>
                    <a href="{{ route('event') }}" class="hover:underline">Event</a>
                    <a href="{{ route('publikasi') }}" class="hover:underline">Publikasi</a>
                    <a href="{{ route('lapor_insiden_siber') }}" class="hover:underline">Lapor Insiden Siber</a>
                    <a href="{{ route('kontak_kami') }}" class="hover:underline">Kontak Kami</a>
                </nav>
                <div class="search-container">
                    <input type="text" class="search-box" placeholder="Search...">
                </div>

            </div>
        </header>
    </div>
    <div class="carousel-item active">
        <img src="/img/5.png" class="d-block w-100" alt="gambar 1">
    </div>
    <div class="search-container">
        <input type="text" class="search-box" placeholder="Search...">
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
        let isHovering = false;

        const button = document.getElementById('playButton');

        button.addEventListener('click', () => {
            isPlaying = !isPlaying;
            if (isPlaying && isHovering) {
                responsiveVoice.speak('Mode Suara', 'Indonesian Female');
            }
        });

        button.addEventListener('mouseover', () => {
            isHovering = true;
            if (isPlaying) {
                responsiveVoice.speak('Mode Non Suara', 'Indonesian Female');
            }
        });

        button.addEventListener('mouseout', () => {
            isHovering = false;
        });
    </script>

    <script src="https://cdn.userway.org/widget.js" data-account="qTYTjlI1Es"></script>
</body>

</html>
