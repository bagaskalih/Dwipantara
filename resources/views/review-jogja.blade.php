<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/reviewJogja.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/header.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footerpenilaian.css'); }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>Ulasan Yogyakarta</title>
  </head>
  <body>
    @include('partials.navbar')
    <div class="hero">
      <h1>ULASAN YOGYAKARTA</h1>
    </div>
    <div class="input-review-container">
      <p>ULASAN ANDA</p>
      <form class="input-review">
        <input type="text" placeholder="Ketik ulasan anda di sini" />
        <button><img src="{{ URL::asset('img/submitReview.png'); }}" alt="" /></button>
      </form>
    </div>

    <hr style="height: 2px; border-width: 0; color: gray; background-color: gray; margin: 50px; margin-right: 20vw; margin-left: 20vw" />

    <div class="container-list-review">
      @foreach ($komentar as $k)
      <div class="comment-wrapper">
        <img src="{{ URL::asset('img/profile.png'); }}" alt="" />
        <div class="container-review">
          <h1>{{ $k["name"] }}</h1>
          <p>{{ $k["comment"] }}</p>
        </div>
      </div>
      @endforeach
    </div>

    <div class="container-penilaian">
      <div class="col-penilaian-kiri">
        <h1>BERI PENILAIAN</h1>
        <p>Bagaimana pengalaman anda selama berada di website kami. Berikan penilaian Anda disini</p>
      </div>
      <div class="col-penilaian-kanan">
        <label for="inputEmail">Email*</label> <br />
        <input type="email" placeholder="Alamat Email" name="inputEmail" /> <br />
        <a href="" class="btn text-light border border-white">Masuk</a>
      </div>
    </div>

    @include('partials.footer')

  </body>
</html>
