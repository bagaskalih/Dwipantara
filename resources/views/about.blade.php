<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/about.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/header.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footerpenilaian.css'); }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet" />    
    <link href='https://fonts.googleapis.com/css?family=Zen Antique' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>Tentang Kami</title>
  </head>
  <body style="background: #242434">
    <div class="hero">
      @include('partials.navbar')
      <div class="hero-text">
        <h1>TENTANG KAMI</h1>
        <hr style="height: 0px; border-width: 1; background-color: #FFFFFFBF; width: 20vw; text-align: center; display: flex" />
      </div>
    </div>
    <div class="container-text">
      <div>
        <p>Website yang bernama Budaya Dwipantara ini di latar belakangi oleh banyaknya masyarakat yang masih awam dan ingin mengetahui mengenai berbagai macam keanekaragaman budaya yang ada di Indonesia. Oleh karena itu, di dalam website ini menyediakan informasi tentang ciri khas dan budaya dari suatu daerah di berbagai pulau yang ada di Indonesia.</p>
      </div>
    </div>
    <div class="hero-text hero-latar">
      <h1>LATAR BELAKANG</h1>
      <hr style="height: 0px; border-width: 1; background-color: #FFFFFFBF; width: 20vw; text-align: center; display: flex" />
    </div>
    <div class="container-text">
      <div>
        <p>Website kami ini dilatarbelakangi karena masih banyaknya masyarakat yang belum mengetahui tentang keberagaman, keindahan dan ciri khas daerah-daerah yang ada di Indonesia. Oleh karena itu kami merancang sebuah website yang menyediakan informasi-informasi terkait hal tersebut. Website ini dapat di akses oleh siapapun yang ingin mengeksplorasi dan ingin mengetahui terkait informasi tersebut. </p>
      </div>
    </div>
    @auth
    @else
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
    @endauth
    @include('partials.footer')

  </body>
</html>
