
<!DOCTYPE html>
<html lang="en">

  <head>
  <style>
  .item td,
  .item th {
    padding: 8px; /* Atur padding agar konten tidak terlalu dekat dengan tepi kolom */
  }

 

  /* Sesuaikan lebar kolom sesuai kebutuhan */
  .item td:nth-child(1), .item th:nth-child(1) { width: 150px; }
  .item td:nth-child(2), .item th:nth-child(2) { width: 200px; }
  .item td:nth-child(3), .item th:nth-child(3) { width: 300px; }
  .item td:nth-child(4), .item th:nth-child(4) { width: 150px; }
  .item td:nth-child(5), .item th:nth-child(5) { width: 50px; }
  .item td:nth-child(6), .item th:nth-child(6) { width: 35px; }
  .item td:nth-child(7), .item th:nth-child(7) { width: 100px; }
  .item td:nth-child(8), .item th:nth-child(8) { width: 100px; }
  /* Gaya tambahan untuk membuat isi tabel sejajar dengan judul tabel */
  .item th {
    text-align: left; /* Teks di judul tabel menjadi rata kiri */
    
  }

  .item td {
    text-align: left; /* Teks di sel tabel menjadi rata kiri */
  }

  .table-container {
    margin: 0 auto; /* Membuat tabel berada di tengah halaman */
    width: 80%; /* Atur lebar container tabel sesuai kebutuhan */
    padding: 20px; /* Tambahkan padding ke dalam container tabel */
    box-sizing: border-box; /* Pastikan padding tidak menambah lebar total */
  }

  .item {
    width: 100%; /* Pastikan tabel mengambil lebar maksimum dari container */
    border-collapse: collapse; /* Gabungkan batas antar sel */
  }
</style>
<style>
  .table-container {
    margin: 0 auto; /* Membuat tabel berada di tengah halaman */
    width: 80%; /* Atur lebar container tabel sesuai kebutuhan */
    padding: 20px; /* Tambahkan padding ke dalam container tabel */
    box-sizing: border-box; /* Pastikan padding tidak menambah lebar total */
  }

  .item {
    width: 100%; /* Pastikan tabel mengambil lebar maksimum dari container */
    border-collapse: collapse; /* Gabungkan batas antar sel */
  }
  /*DROP DOWN*/
/* Style the dropdown button */
.dropbtn {
    display: inline-block;
    color: #333; /* warna teks */
    text-decoration: none;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #222831; /* warna background */
    min-width: 160px;
    z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
    display: block;
    padding: 12px 16px;
    color: #333; /* warna teks */
    text-decoration: none;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd; /* warna latar belakang saat dihover */
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

  
  

 
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>MovieRecc | Kategori</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('style/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/animate.css')}}">
    <link rel="stylesheet"href="{{asset('style/https://unpkg.com/swiper@7/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="script.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="dashboard" class="active">Home</a></li>
                        <li class="dropdown">
                              <a href="#" class="dropbtn">Movies <i class="fa fa-caret-down"></i></a>
                              <div class="dropdown-content">
                                  <a href="toprated">Top Rated</a>
                                  <a href="upcoming"> Upcoming</a>
                                  <a href="#">Submenu 3</a>
                              </div>
                          </li>
                          
                          <li><a href="jenisgenre">Kategori</a></li>
       

                        <li><a href="jenisgenre">Kategori</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To Cyborg</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
  <div class="row">
    <div class="col-lg-12">
      <div class="heading-section">
        <h4><em>Kategori</em> Right Now</h4>
      </div>
                <a href="/jenisgenre/tambahkategori"> + Tambah Genre Baru</a>
 
 <br/>
 <br/>
 <div class="table-container">
 <div class="table-responsive">
        <table class="item">
          <tr>
            <th>ID Genre</th>
            <th>Genre</th>
            <th>OPSI</th>
          </tr>
      
        @foreach($jenis_genre as $p)
        <tr>
        <td>{{ $p->ID_Genre }}</td>
        <td>{{ $p->Genre }}</td>
        <td>
          <a href="/jenisgenre/edit/{{ $p->ID_Genre }}">Edit</a>
          |
          <a href="/jenisgenre/hapus/{{ $p->ID_Genre }}">Hapus</a>
        </td>
        </tr>
           @endforeach
      </table>
    </div>
</div>
      <div class="col-lg-12">
        <div class="main-button">
          <a href="browse.html">Discover Popular</a>
        </div>
      </div>
    </div>
  </div>
</div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Donwload</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="{{asset('style/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('style/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('style/assets/js/tabs.js')}}"></script>
  <script src="{{asset('style/assets/js/popup.js')}}"></script>
  <script src="{{asset('style/assets/js/custom.js')}}"></script>


  </body>

</html>
