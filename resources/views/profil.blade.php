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

   
        .search-box {
            width: 200px;
            height: 30px;
            padding: 10px 20px;
            border: 2px solid #ccc;
            border-radius: 20px; /* Membuat ujung kotak pencarian berbentuk oval */
            outline: none;
            font-size: 16px;
        }
        .table{
        display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
    <img src="/img/8.png" class="d-block w-100" alt="gambar 8">
   <table class="table">
    <tr>
        <th><img src="/img/Logo.png" > </th>
            <th> <p> Tim Tanggap Insiden Siber (Computer Security Incident Response Team) Pemerintah Provinsi DKI Jakarta yang selanjutnya disebut dengan JakartaProv-CSIRT merupakan CSIRT Pemprov DKI Jakarta.

                Tim JakartaProv- CSIRT ditetapkan oleh Sekretaris Daerah Provinsi DKI Jakarta dalam Keputusan Penjabat Sekretaris Daerah DKI Jakarta Nomor: 41 Tahun 2020 Tentang Computer Security Incident Response Team
                
                Kepala Dinas Komunikasi Informatika dan Statistik Provinsi DKI Jakarta ditunjuk sebagai Ketua CSIRT Propinsi DKI Jakarta dan ditugaskan untuk melaksanakan memimpin, mengkoordinasikan, memfasilitasi pengembangan kemampuan SDM, pengalokasian sumber daya, memantau, serta melaporkan pelaksanaan terkait JakartaProv-CSIRT.
                
                Dalam pembentukannya, JakartaProv-CSIRT memiliki tujuan yaitu:
                
                - Membangun mengkoordinasikan, mengkolaborasikan dan mengoperasionalkan sistem mitigasi, manajemen krisis, penanggulangan dan pemulihan terhadap insiden keamanan siber pada sektor Pemerintah Daerah Provinsi DKI Jakarta.
                - Membangun kapasitas sumber daya penanggulangan dan pemulihan insiden keamanan siber pada sektor Pemerintah Daerah Provinsi DKI Jakarta
                
                CSIRT Propinsi DKI Jakarta melaksanakan layanan tanggap insiden siber, berupa:
                - Layanan reaktif, yaitu layanan yang terkait dengan kebutuhan melakukan respon terhadap insiden siber termasuk penangkalan, penindakan dan pemulihan siber.
                - Layanan proaktif, yaitu layanan yang mendeteksi dan mencegah serangan siber sebelum ada dampak nyata.
                
                CSIRT Propinsi DKI Jakarta secara resmi di-launching pada 23 Desember 2020. Konstituen JakartaProv-CSIRT meliputi Perangkat Daerah (OPD) di lingkungan Pemerintah Daerah Provinsi DKI Jakarta.  </th>

   
    
</body>

</html>