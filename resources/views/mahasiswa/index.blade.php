<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Events BEM Online Ticketing</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
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
  color: blue;
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
  }
}

.container {
  /* background:#3297BB; */
  width: 1500px;
  
}
.container p{
font-family: Monotype Corsiva;
color: #fff;
font-size: 25px;

}
.jumbotron{
  width: 1300px;
  height: 400px;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</head>

<body>

<div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

            <div class="col-lg-3 d-none d-lg-block">
            
            <img src="{{asset('img/7.png')}}">
            </div>
            
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg py-3 py-lg-0 px-0">
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
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="" class="nav-item nav-link">Events</a>
                            <a href="" class="nav-item nav-link">Ticket</a>
                            <a href="" class="nav-item nav-link">Team</a>
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
      
<div class="container py-5">
      <div class="jumbotron text-white" style="background-image: url({{asset('img/desain.jpeg')}});>
        <h2 class="mb-4">
          Welcome To Website <br>Event BEM ONLINE TICKETING
        </h2>
        <p class="mb-4">
          Come and Join Us
        </p>
        
      </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row px-xl-1 pb-3">
            <div class="col-lg-2 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
              <img src="{{asset('img/masker.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Gunakan Masker</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/jarak.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Menjaga Jarak</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/hand.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Membawa Handsanitizer</h5>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/cek suhu.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Melakukan Cek Suhu</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                <div class="d-flex align-items-center" style="padding: 30px;">
                <img src="{{asset('img/batuk.png')}}">
                    <h5 class="font-weight-semi-bold m-0">Menutup hidung jika batuk dan bersin</h5>
                </div>
            </div>
        </div>
    </div>
    
</body> 