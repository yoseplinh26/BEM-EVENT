<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Events BEM Online Ticketing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
      .card {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.2s ease-in-out;
  box-sizing: 20px;
  
  margin-bottom:10px;
  background-color:#FFF;
  width:125px;
  height:100px;
  top:200%;
  
  
}
.flex-container {
  display: flex;
  flex-direction: row;
  width: 900px;
 

  margin-left:-10px; (300/2)
}
.image{
  width:60px;
  height: 70px;
}
.card:hover {
  box-shadow: 0 5px 5px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
/* .card > .card-inner {
  padding:10px;
  
} */
.col-sm-4{
  flex-direction: row;
}
.card .header h2, h3 {
  margin-bottom: 0px;
  margin-top:0px;
}
.card .header {
  margin-bottom:5px;
}

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
/* @media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
} */

.container {
  /* background:#3297BB; */
  width: 1000px;
  
}
.container p{
font-family: Monotype Corsiva;
color: #fff;
font-size: 25px;

}
.jumbotron{
  width: 2000px;
  height: 700px;
  background-repeat: no-repeat;
  background-size: cover;
}

.container-2{
  width:400px;
  height:30px;
  position:absolute;
  left:55%;
  top:105%;
  margin-left:-150px; (300/2)
  /* margin-top:-120px; */
}
/* .container-3{
 
  height:240px;
  position:absolute;

  top:135%;
}  */
p{
  font-family: Comic Sans;
  font-size: 20px;
}
h1{
  font-family: Poppins;
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
                          <a href="{{ asset('events') }}" class="nav-item nav-link">Events</a>
                          <a href="{{ route('tiket') }}" class="nav-item nav-link">Ticket</a>
                          <a href="{{ route('team') }}" class="nav-item nav-link">Team</a>
                        </div>
                                @auth
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, {{ auth()->user()->name }}
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                      <form action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button> 
                                      </form>
                                    </li>
                                  </ul>
                                @else
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ asset('login') }}">Login</a>
                                </li>
                                @endauth
                              </ul>                      
                        </div>
                    </nav>
                 </div>
</div>
      
    <div class="jumbotron" style="background-image: url({{asset('img/desain.jpeg')}})";>
        <div class="container" >
            <h1 class="display-4">Event BEM</h1>
            <p class="lead">Welcome To Website Online BEM Ticketing</p>
            <p>Let's Check It!</p>   
        </div>
    </div>
    <div class="desc"><br><br>
      <h1>Apa yah tujuan diadakannya Event BEM di IT DEL?</h1>
      <p>Tujuan diadakannya event yang ada di IT DEL adalah untuk menjalin mepererat hubungan sesama <p>
       mahasiswa dikampus kita Institut Teknologi Del. Melalui landasan yang selalu kita terapkan yaitu <p>
       3M MarTuhan, MarRoha, MarBisuk sehingga pentingnya  bagi mahasiwa dikampus dan diasrama tetap <p>
       menjalin hubungan yang erat dan tali persahabatan yang kuat dengan pertemanan yang kuat akan <p>
       relasi yang baik pula ke depan. Baik hubungan yang erat antara senior maupun junior dikampus.<p>
       Selain mempererat keakraban sesama mahasiswa event ini juga membantu meningkatkan bakat <p>
       yang dimiliki oleh mahasiswa dan melatih kepercayaan diri. 
     </p>
</div>
<div class="container-2">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" weight="500px" width="350px">
      <div class="item active">
        <img src="{{asset('img/fesbud.jpeg')}}" alt="Festival Budaya" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset('img/pentas.jpeg')}}" alt="Pentas Budaya" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{asset('img/podcast.png')}}" alt="Festival Budaya" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{asset('img/MUSIC CORNER.png')}}" alt="Music Corner" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{asset('img/KOPI SORE.png')}}" alt="Kopi Sore" style="width:100%;">
      </div>
    </div>
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>

</div>
    <div class="flex-container">
    <div class="col-sm-4">
  <div class="card">
    <div class="image">
      
    </div>
    <div class="card-inner">
      <div class="header">
      <img src="{{asset('img/masker.png')}}" />
        <h5>Gunakan Masker</h5>
      
    </div>
    
      </div>
  </div>
</div>
<div class="flex-container">
    <div class="col-sm-4">
  <div class="card">
    <div class="image">
      
    </div>
    <div class="card-inner">
      <div class="header">
      <img src="{{asset('img/jarak.png')}}" />
        <h6>Menjaga <br>Jarak</h6>
      
    </div>
    
      </div>
  </div>
</div>
<div class="flex-container">
    <div class="col-sm-4">
  <div class="card">
    <div class="image">
      
    </div>
    <div class="card-inner">
      <div class="header">
      <img src="{{asset('img/batuk.png')}}" />
        <h5>Menutup hidung jika batuk bersin</h5>
      
    </div>
    
      </div>
  </div>
</div>
<div class="flex-container">
    <div class="col-sm-4">
  <div class="card">
    <div class="image">
      
    </div>
    <div class="card-inner">
      <div class="header">
      <img src="{{asset('img/hand.png')}}" />
        <h5>Membawa Handsinitizer</h5>
      
    </div>
    
      </div>
  </div>
</div>
<div class="flex-container">
    <div class="col-sm-4">
  <div class="card">
    <div class="image">
      
    </div>
    <div class="card-inner">
      <div class="header">
      <img src="{{asset('img/cek suhu.png')}}" />
        <h5>Melakukan cek suhu</h5>
      
    </div>
    
      </div>
  </div>
</div>
    </div>
</div>


</body> 