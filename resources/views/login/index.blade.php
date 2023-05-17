<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  </head>
  <body>
    @include('partials.navbar')
    <div>
      <form method="post" class="form">
        <h1>MASUK</h1>
        <hr style="height: 2px; border-width: 0; color: gray; background-color: gray; width: 100px; text-align: center; display: flex" />

        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anda" />
        </div>
        <div class="form-group">
          <label for="email`">Email:</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Masukkan alamat email Anda" />
        </div>
        <div class="form-group">
          <label for="password">Kata Sandi:</label>
          <input type="password" class="form-control" name="password" placeholder="Masukkan kata sandi email Anda" />
        </div>
        <button type="submit" class="btn text-light border border-white">KIRIM</button>

        <p class="label-logo"><span>Budaya Dwipantara</span></p>
      </form>
    </div>
    @include('partials.footer')

  </body>
</html>
