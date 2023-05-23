<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css'); }}" />
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
    <title>Kontak</title>
  </head>
  
  <body style="background: #242434">
    <div class="hero">
      @include('partials.navbar')
      <div class="hero-text">
        <h2>HUBUNGI</h1>
        <h1>KONTAK KAMI</h1>
      </div>
    </div>

    <div class="container-form">
      <div class="form">
        <div class="form-group">
          <label for="nama">Nama Depan</label>
          <input type="text" name="name" placeholder="Masukkan nama depan anda" autofocus id="name"/>
        </div>
        <div class="form-group">
          <label for="nama">Nama Belakang</label>
          <input type="text" name="name" placeholder="Masukkan nama belakang anda" autofocus id="name"/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email anda" id="email"/>
        </div>
        <div class="form-group ">
          <label for="pesan">Pesan</label>
          <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Masukkan pesan"></textarea>
        </div>
        <button type="submit" class="btn text-light border border-white mb-5">SUBMIT</button>

      </div>
      <div class="alamat">
        <h1>ALAMAT</h1>
        <div class="text-alamat">
          <P>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</P>
        </div>
      </div>
    </div>


    <div class="kontak">
      <h2>KONTAK</h2>
      <hr style="height: 0px; border-width: 1; background-color: #FFFFFFBF; width: 100px; text-align: center; display: flex; margin-top:0" />

      <div class="container-logo-kontak">
        <div class="kontak-col">
          <div class="logo-kontak">
            <a href="mailto:budayadwipantara@gmail.com?subject = Feedback&body = Message"><i class="fa-regular fa-envelope"></i></a>
            <a href="mailto:budayadwipantara@gmail.com?subject = Feedback&body = Message">
              <p>budayadwipantara@gmail.com</p>
            </a>
          </div>
          <div class="logo-kontak">
            <a href="https://www.instagram.com/budaya_dwipantara/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.instagram.com/budaya_dwipantara/" target="_blank">
              <p>@budaya_dwipantara</p>
            </a>
          </div>
        </div>
        <div class="kontak-col">
          <div class="logo-kontak">
            <a href="https://api.whatsapp.com/send?phone=6287870301623" target="_blank"><i class="fa fa-phone"></i></a>
            <a href="https://api.whatsapp.com/send?phone=6287870301623" target="_blank">
              <p>+62-878-7030-1623</p>
            </a>
          </div>
          <div class="logo-kontak">
            <a href="https://twitter.com/budaya_dwipantara" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://twitter.com/budaya_dwipantara" target="_blank">
              <p>@budaya_dwipantara</p>
            </a>
          </div>
        </div>
      </div>

    </div>
    
    @include('partials.footer')

  </body>
</html>
