<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=15d234a1&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>FILM TEPOPULER </h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="film1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">PGGY</h5>
        <p class="card-text">Seorang remaja yang kelebihan berat badan diintimidasi oleh sekelompok 
          gadis keren di tepi kolam renang saat berlibur di desanya. Perjalanan pulang yang panjang akan mengubah sisa hidupnya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">the witch part 2</h5>
        <p class="card-text"> mengisahkan tentang seorang gadis muda yang melarikan diri dari laboratorium rahasia. 
          Gadis itu menjadi satu-satunya yang selamat dari kecelakaan laboratorium dan reruntuhan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film3.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Train to busan</h5>
        <p class="card-text">Seok-woo dan putrinya yang berulang tahun pergi ke Busan dengan kereta untuk menemui istrinya. 
          Tapi perjalanan tersebut berubah menjadi mimpi buruk kala mereka terjebak di tengah-tengah wabah zombie.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">black adam (2022)</h5>
        <p class="card-text">Hampir 5.000 tahun setelah dia dianugerahi kekuatan maha kuasa dari dewa-dewa Mesir - dan 
          dipenjara dengan cepat - Adam Hitam dibebaskan dari makam duniawinya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">fall</h5>
        <p class="card-text">Becky dan Hunter adalah dua orang yang suka menghadapi ketakutan dan suka menantang diri mereka hingga batas terakhir. Tetapi, setelah mereka memanjat sebuah tower radio
           terbengkalai setinggi 600-an meter, mereka menemukan diri mereka terjebak di atas tanpa jalan turun.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">AVATAR THE WAY OF WATER (2022)</h5>
        <p class="card-text">Jake Sully tinggal bersama keluarga barunya yang dibentuk di bulan ekstrasolar Pandora. Begitu ancaman yang akrab kembali untuk menyelesaikan apa yang
          sebelumnya dimulai, jake harus bekerja dengan neytiri dan pasukan ras na'vi untuk melindungi rumah mereka.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Island (2022)</h5>
        <p class="card-text">Drama ini menceritakan sekelompok orang yang berperang melawan kejahatan dan melindungi dunia dari kehancuran. Ban (Kim Nam Gil) merupakan sosok yang dibesarkan 
          untuk melindungi dunia dari kejahatan. Sejak kecil, ia memang dilatih untuk bertugas melindungi banyak orang.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film8.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">WHITE HOUSE DOWN (2013)</h5>
        <p class="card-text">Saat tengah tur keliling Gedung Putih bersama putrinya, tak diduga John terpaksa harus beraksi untuk menyelamatkan sang Presiden dari kelompok 
          teroris bersenjata yang tiba-tiba datang menyerang..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film9.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">PANTHER SWAT (2023)</h5>
        <p class="card-text">Film ini memulai dengan ledakan yang mengguncang keamanan bank dan sekelompok penjahat yang kabur dengan uang yang dicuri.
           Polisi yang mendengar berita langsung mengejar penjahat, memulai pertempuran yang sengit di jalan raya</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
