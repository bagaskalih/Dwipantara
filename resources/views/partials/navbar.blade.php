@auth
<div class="">
  <div class="navbar">
    <div class="logo">
      <a href="/" class="logo1">Budaya</a>
      <a href="/" class="logo2">Dwipantara</a>
    </div>
    <div class="menu">
      <div class="pulau-dropdown">
        <button class="dropbtn">
          Pulau
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <hr style="height: 2px; border-width: 0; color: gray; background-color: gray; margin: 0px" />
          <a href="pulau/jawa">Jawa</a>
          <a href="#">Sumatera</a>
          <a href="#">Kalimantan</a>
        </div>
      </div>
      <a href="#">Tentang Kami</a>
      <a href="#">Kontak</a>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
      </form>
    </div>
  </div>
  <hr style="height: 2px; border-width: 0; color: gray; background-color: gray; margin-top: 0px" />
</div>
@else
<div class="">
  <div class="navbar">
    <div class="logo">
      <a href="/" class="logo1">Budaya</a>
      <a href="/" class="logo2">Dwipantara</a>
    </div>
    <div class="menu">
      <div class="pulau-dropdown">
        <button class="dropbtn">
          Pulau
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <hr style="height: 2px; border-width: 0; color: gray; background-color: gray; margin: 0px" />
          <a href="pulau/jawa">Jawa</a>
          <a href="#">Sumatera</a>
          <a href="#">Kalimantan</a>
        </div>
      </div>
      <a href="#">Tentang Kami</a>
      <a href="#">Kontak</a>
      <a href="/login">Login</a>
    </div>
  </div>
  <hr style="height: 2px; border-width: 0; color: gray; background-color: gray; margin-top: 0px" />
</div>
@endauth
