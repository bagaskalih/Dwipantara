<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/search.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/header.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footerpenilaian.css'); }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet" />    
    <link href='https://fonts.googleapis.com/css?family=Zen+Antique' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>Search</title>
  </head>
  
  <body style="background: #242434">
    @include('partials.navbar')

    <div class="search-container">
      <form class="search" method="GET" action="search">
        <button type="submit"><img src="img/search.png" /></button>
        <input type="search" name="search" placeholder="Cari" />
      </form>
    </div>
    
    @if (count($kota) == 0)
      <h1 class="search-result">Tidak ada hasil</h1>
    @else
      <div class="search-header">HASIL :</div>
      @foreach ($kota as $k)
        
        <div class="kota-wrapper">
          <img src="../img/{{$k["fotoKota"]}}" alt="foto-kota" />
          <h1 class="judul-kota">{{$k["namaKota"] }}</h1>
          <hr style="height: 2px; border-width: 0; color: white !important; background-color: white; width: 100px; text-align: center; display: flex" />
          <p class="deskripsi-kota">{{ $k["descKota"] }}</p>
          <a type="button" class="btn-lihat" href="{{$k["linkKota"];}}">LIHAT LEBIH LANJUT</a>
          <hr style="height: 2px; border-width: 0; color: white !important; background-color: white; width: 100vw; text-align: center; display: flex" />
        </div>
      @endforeach
    
    @endif
    
    
    
    @include('partials.footer')

  </body>
</html>
