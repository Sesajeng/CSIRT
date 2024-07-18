<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style >
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
        outline: none; /* menghilangkan garis highlight saat focus */
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.1); /* shadow ringan */
    }

    .search-input:focus {
        border-color: #007bff; /* warna border saat focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* shadow lebih kuat saat focus */
    }
</style>
</head>

<body class=" text-black">

    <!-- Header -->
    <header class="bg-orange-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <img src="/img/Logo.png" alt="Logo" class="h-10">
            <nav class="space-x-4">
                <a href="{{ route('welcome') }}" class="hover:underline">Home</a>
                <a href="{{ route('profil') }}" class="hover:underline">Profil</a>
                <a href="{{ route('event') }}" class="hover:underline">Event</a>
                <a href="{{ route('publikasi') }}" class="hover:underline">Publikasi</a>
                <a href="{{ route('lapor_insiden_siber') }}" class="hover:underline">Lapor Insiden Siber</a>
                <a href="{{ route('kontak_kami')  }}" class="hover:underline">Kontak Kami</a>
            </nav>
            <input type="text" placeholder="Search" class="search-input">

        </div>
    </header>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/1.png" class="d-block w-100" alt="gambar 1">
          </div>
      </div>
   
      <div class="card-container">
        <div class="card" style="width: 18rem;">
            <img src="/img/3.png" class="card-img-top" alt="Berita 1">
            <div class="card-body">
                <h5 class="card-title">Carbanak Malware Kembali Beroperasi Dalam Serangan Ransomware</h5>
                <p class="card-text">2024-01-10 13:50:20 | https://securityaffairs.com/156410/malware/carbanak-malware-ransomware-attacks.html</p>
                <p class="card-text">Peneliti dari NCC Group melaporkan adanya aktivitas malware carbanak dalam sebuah serangan ransomware. Kelompok kejahatan siber Carbanak pertama kali diidentifikasi oleh Kaspersky Lab pada tahun 2015, dan telah berhasil mencuri setidaknya 300 juta</p>
                <a href="#" class="btn btn-primary">SELENGKAPNYA</a>
            </div>
        </div>
      </div>
    
</body>

</html>