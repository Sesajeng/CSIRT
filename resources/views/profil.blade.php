<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
            gap: 20px;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 100px;
            font-size: 13px;
        }

        .flex-container img {
            max-width: 250px;
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
        <img src="/img/19.png" class="d-block w-100" alt="gambar 1">
    </div>
    &nbsp;
    <div class="container">
        <div class="row">
            <div class="col-12 flex-container">
                <img src="/img/Logo.png" alt="Logo">
                <div class="text-content">
                    <p> Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI
                        Jakarta yang selanjutnya disebut dengan <b> JakartaProv-CSIRT</b> merupakan CSIRT Pemprov DKI
                        Jakarta.</p>
                    &nbsp;
                    <p> Tim <b> JakartaProv- CSIRT </b> ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam
                        Keputusan Penjabat Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Computer Security
                        Incident Response Team </p>
                    &nbsp;
                    <p> Kepala Dinas Komunikasi Informatika dan Statistik Provinsi DKI Jakarta ditunjuk sebagai Ketua
                        CSIRT Propinsi DKI Jakarta dan ditugaskan untuk melaksanakan memimpin, mengkoordinasikan,
                        memfasilitasi pengembangan kemampuan SDM, pengalokasian sumber daya, memantau, serta melaporkan
                        pelaksanaan terkait JakartaProv-CSIRT. </p>
                    &nbsp;
                    <p> Dalam pembentukannya, JakartaProv-CSIRT memiliki tujuan yaitu: </p>
                    &nbsp;
                    <p> - Membangun mengkoordinasikan, mengkolaborasikan dan mengoperasionalkan sistem mitigasi,
                        manajemen krisis, penanggulangan dan pemulihan terhadap insiden keamanan siber pada sektor
                        Pemerintah Daerah Provinsi DKI Jakarta.
                    <p> - Membangun kapasitas sumber daya penanggulangan dan pemulihan insiden keamanan siber pada
                        sektor Pemerintah Daerah Provinsi DKI Jakarta </p>
                    &nbsp;
                    <p> CSIRT Propinsi DKI Jakarta melaksanakan layanan tanggap insiden siber, berupa:
                    <p> - Layanan reaktif, yaitu layanan yang terkait dengan kebutuhan melakukan respon terhadap insiden
                        siber termasuk penangkalan, penindakan dan pemulihan siber.
                    <p>- Layanan proaktif, yaitu layanan yang mendeteksi dan mencegah serangan siber sebelum ada dampak
                        nyata. </p>
                    &nbsp;
                    <p> CSIRT Propinsi DKI Jakarta secara resmi di-launching pada 23 Desember 2020. Konstituen
                        JakartaProv-CSIRT meliputi Perangkat Daerah (OPD) di lingkungan Pemerintah Daerah Provinsi DKI
                        Jakarta. </p>
                </div>
            </div>
        </div>
        <footer class="footer">
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
