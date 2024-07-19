<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Insiden Siber</title>
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

   
        .search-box {
            width: 200px;
            height: 30px;
            padding: 10px 20px;
            border: 2px solid #ccc;
            border-radius: 20px; /* Membuat ujung kotak pencarian berbentuk oval */
            outline: none;
            font-size: 16px;
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
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Search...">
            </div>

        </div>
    </header>

   
    
</body>

</html>