<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events BEM Online Ticketing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{  asset('css/carousel.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{  asset('css/index.css') }}" rel="stylesheet">

    {{-- nav-login --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> --}}
    <script src="{{  asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }} " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar > ul > li {
  position: relative;
  white-space: nowrap;
  padding: 8px 0 8px 20px;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 14px;
  color: #2c4964;
  white-space: nowrap;
  transition: 0.3s;
  border-bottom: 2px solid #fff;
  padding: 5px 2px;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #1977cc;
  border-color: #1977cc;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 20px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #082744;
  border: none;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #1977cc;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }:root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

:root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
}

</style>
</head>

<body>
    <!-- Topbar Start -->
<!--     
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <img src="{{asset('img/7.png')}}">
            </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

            <div class="col-lg-3 d-none d-lg-block">
            
            <img src="{{asset('img/7.png')}}">
            </div>
            
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Events BEM</span></h1>
                    </a>
                    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                    
                        </div>
                        <div class="navbar-nav ml-auto py-5">
                            <ul class="navbar-nav ms-auto">
                            
                              <div class="navbar-nav mr-auto py-0">
                                <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                                <a href="{{ asset('events') }}" class="nav-item nav-link active">Events</a>
                                <a href="{{ asset('tiket') }}" class="nav-item nav-link ">Ticket</a>
                                <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
                              </div>
                                @auth
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, {{ auth()->user()->name }}
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                      <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button> 
                                      </form>
                                    </li>
                                  </ul>
                                </li>
                                @else
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ route('auth.index') }}">Login</a>
                                </li>
                                @endauth
                              </ul>                      
                        </div>
                    </nav>
                    </div>
                    </div>            
  <br>
                <!-- ======= Hero Section ======= -->

<!-- Content ============================================= -->
<!-- Portfolio Items============================================= -->
@foreach($pesans as $tampil)
<div class="container mx-auto mt-4">
  <div class="col">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($tampil->image) }}" />
  <div class="card-body">
   <h5>Nama Event: {{$tampil->nama}}</h5>
        <h6>Tema Event: {{$tampil->tema}}</h6>
    <h6> Lokasi Event: {{$tampil->lokasi}}</h6>
       <a href="#"><i class="fas fa-link"></i> Kuota Event: {{$tampil->kuota}}</a>
    <a href="#" class="btn "><i class="fab fa-github"></i>Tanggal: {{$tampil->tanggal}}</a>
  </div>
  </div>
    </div>    
    {{-- @foreach($pesans as $tampil)

    <br>
    <div class="container mx-auto mt-4">
      <div class="row">
       <div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src="{{ Storage::url($tampil->image) }}" />
  <div class="card-body">
    <p class="">
      {{$tampil->nama}}
    </p>
    <p class="Lokasi">
      {{$tampil->tema}}
    </p>
    <p class="Lokasi">
      {{$tampil->lokasi}}
    </p>
    <p class="">
      {{$tampil->kuota}}
    </p>
    <p class="">
      {{$tampil->tanggal}}
    </p>
  </div> --}}
  </div>
    </div> 
    @endforeach   
        