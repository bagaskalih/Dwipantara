<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pulau Jawa</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/jawa.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/header.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css'); }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  </head>
  <body>
    <div class="hero">
      @include('partials.navbar')
      <div class="hero-text">
        <h1>PULAU JAWA</h1>
        <p>Jawa adalah sebuah pulau di Indonesia yang terletak di kepulauan Sunda Besar dan merupakan pulau terluas ke-13 di dunia. Jumlah penduduk di Pulau Jawa sekitar 150 juta. Pulau Jawa dihuni oleh 60% total populasi Indonesia.</p>
      </div>
    </div>
    <div class="card-group" id="list-pulau">
      <div class="card card-kota" style="width: 180px; background: #1e1e2e; border-right: 1px solid #ffffffbf">
        <img src="{{ URL::asset('img/monas.png'); }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">JAKARTA</h5>
          <p class="card-text">Jakarta, atau secara resmi bernama Daerah Khusus Ibukota Jakarta adalah ibu kota negara dan kota terbesar di Indonesia. Menurut sistem pembagian administratif Indonesia, Jakarta merupakan provinsi dengan status daerah khusus. Sementara menurut pengertian secara umum, Jakarta merupakan kota metropolitan</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
      <div class="card card-kota" style="width: 180px; background: #1e1e2e; border-left: 1px solid #ffffffbf">
        <img src="{{ URL::asset('img/jogja.png'); }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">JOGJAKARTA</h5>
          <p class="card-text">Yogyakarta adalah ibu kota sekaligus pusat pemerintahan dan perekonomian dari Daerah Istimewa Yogyakarta, Indonesia. Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya Jawa.</p>
          <a href="../jogja" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
    </div>
    <div class="card-group" id="list-pulau">
      <div class="card card-kota" style="width: 180px; background: #3a2a49; border-right: 1px solid #ffffffbf">
        <img src="{{ URL::asset('img/bogor.png'); }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">BOGOR</h5>
          <p class="card-text">Bogor adalah sebuah kota yang terletak di provinsi Jawa Barat, Indonesia. Kota ini terletak 59 km di sebelah selatan Jakarta, dan merupakan enklave Kabupaten Bogor. Pada pertengahan tahun 2022, jumlah penduduk kota Bogor sebanyak 1.099.422 jiwa, dengan kepadatan 9.278 jiwa/km².</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
      <div class="card card-kota" style="width: 180px; background: #3a2a49; border-left: 1px solid #ffffffbf">
        <img src="{{ URL::asset('img/semarang.png'); }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">SEMARANG</h5>
          <p class="card-text">Semarang adalah ibu kota Provinsi Jawa Tengah, Indonesia yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Provinsi Jawa Tengah, Indonesia. Kota ini adalah kota metropolitan terbesar kelima di Indonesia setelah Jakarta, Surabaya, Bandung, dan Medan.</p>
          <a href="#" class="btn text-light border border-white">LIHAT</a>
        </div>
      </div>
    </div>
    <div class="container-card-gede">
      <div>
        <img src="{{ URL::asset('img/bandung.png'); }}" alt="bandung" class="card-gede-img" />
      </div>
      <div class="card-gede-body">
        <h5 class="card-title">BANDUNG</h5>
        <p class="card-text">Kota Bandung adalah ibu kota Provinsi Jawa Barat yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Provinsi Jawa Barat, Indonesia. Kota Bandung juga merupakan kota terbesar ketiga di Indonesia setelah Jakarta dan Surabaya.</p>
        <a href="#" class="btn text-light border border-white">LIHAT</a>
      </div>
    </div>
    <div class="container-penilaian">
      <div class="col-penilaian-kiri">
        <h1>BERI PENILAIAN</h1>
        <p>Bagaimana pengalaman anda selama berada di website kami. Berikan penilaian Anda disini</p>
      </div>
      <div class="col-penilaian-kanan">
        <label for="inputEmail">Email*</label> <br />
        <input type="email" placeholder="Alamat Email" name="inputEmail" /> <br />
        <a href="../login" class="btn text-light border border-white">Masuk</a>
      </div>
    </div>
    @include('partials.footer')

  </body>
</html>
