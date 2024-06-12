
<!DOCTYPE html>
<html lang="en">

<head>
<style>
    /* Existing styles */
    /* Gaya untuk dropdown */
    .dropbtn {
      display: inline-block;
      color: #333;
      text-decoration: none;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #222831;
      min-width: 160px;
      z-index: 1;
    }

    .dropdown-content a {
      display: block;
      padding: 12px 16px;
      color: #333;
      text-decoration: none;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin: 20px auto;
      padding: 20px;
      width: 90%;
      box-sizing: border-box;
    }

    .card {
      background-color: #222831;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 10px;
      width: calc(20% - 20px);
      /* Mengubah ukuran kartu agar memuat 5 kartu dalam satu baris */
      box-sizing: border-box;
      padding: 10px;
      text-align: left;
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 4px;
    }

    .card h3 {
      margin-top: 10px;
      margin-bottom: 5px;
      font-size: 16px;
      /* Mengurangi ukuran font */
    }

    .card p {
      margin: 5px 0;
      font-size: 12px;
      /* Mengurangi ukuran font */

    }

    .card .actions {
      margin-top: 10px;
    }

    .card .actions a {
      margin-right: 10px;
      text-decoration: none;
      color: #007bff;
    }

    .card .actions a:hover {
      text-decoration: underline;
    }

    .header-text h6,
    .header-text h4 {
      color: #fff;
    }

    @media (max-width: 768px) {
      .card {
        width: calc(33.333% - 20px);
      }
    }

    @media (max-width: 480px) {
      .card {
        width: 100%;
      }
    }

    /* New styles */
    .logo {
      margin-bottom: 20px;
      /* Adjust the margin as needed */
    }

    .main-nav .logo h3 {
      margin-left: 50px;
      /* Add left margin to the title */
    }

  </style>





  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--my style-->
  <link rel="stylesheet" href="style/assets/css/style.css">
  <title>MovieRecc | Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('style/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/css/templatemo-cyborg-gaming.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('style/assets/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('style/https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" href="script.css" />


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
            <a class="logo">
              <h3>MovieeMove</h3>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Search End ***** -->
            <div class="search-input">
              <form id="search" action="/dashboard/cari" method="GET">
                <input type="text" placeholder="Type Something" id='searchText' value="{{ old('cari') }}" name="cari" onkeypress="handle" />
                <i class="fa fa-search"></i>

              </form>
            </div>
            <!-- ***** Search End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="dashboard" class="active">Home</a></li>
              <li class="nav-item">
                <form action="/logout" method="post">
                  @csrf
                
                </form>
                

              </li>
              <li class="dropdown">
                <a href="#" class="dropbtn">Movies <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-content">
                  <a href="toprated">Top Rated</a>
                  <a href="upcoming"> Upcoming</a>
                  <a href="#">Submenu 3</a>
                </div>
              </li>
              <li><a href="jenisgenre">Kategori</a></li>
              <li><a href="browse">Browse</a></li>
              <li class="nav-item">
                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
                  Login</a>

              </li>
             

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
                  <h4><em>Browse</em> Our Popular movie Here</h4>
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
                  <h4><em>Most Popular</em> Right Now</h4>
                </div>
                <a href="/dashboard/tambahdashboard"> + Tambah Film Baru</a>

                <br />
                <br />
                <div class="card-container">

                  @foreach($recommend_film as $p)
                  <div class="card">
                    <img src="{{ url('/data_file/'.$p->thumbnail) }}" alt="Thumbnail">
                    <h3>{{ $p->Judul_Film }}</h3>
                    <p>Kode Film: {{ $p->Kode_Film }}</p>
                    <p>Tahun Rilis: {{ $p->Tahun_Rilis }}</p>
                    <p>Genre: {{ $p->Genre }}</p>
                    <p>Rating: <i class="fa fa-star"></i> {{ $p->Rating }}</p>
                    <div class="actions">
                      <a href="/dashboard/edit/{{ $p->Kode_Film }}">Edit</a> |
                      <a href="/dashboard/hapus/{{ $p->Kode_Film }}">Hapus</a> |
                      <a href="/dashboard/detail/{{ $p->Kode_Film }}">Details >></a>
                    </div>
                  </div>
                  @endforeach
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
