<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Events BEM Online Ticketing {{ $title }}</title>
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
.details {
        padding: 10px 0px;
    }
    .details h4 {
        color: #607D8B;
    }
    .details h6 {
        color: #9E9E9E;
    }
    .details p {
        color: #777777;
        line-height: 20px;
        padding-top: 7px;
    }
    .details a {
        margin: 0 auto;
        font-size: 16px;
        color: #607D8B;
        text-decoration: none;
        font-weight: 500;
        display: table;
        margin-top: 20px;
    }

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}
#content img {
  float: left;
  margin: 35px;
}
.deskripsi ol{
  font-size: 30px;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

* { box-sizing: border-box; }

body { 
  font-family: 'Open Sans', sans-serif;
  color: #666;
}

/* STRUCTURE */

.wrapper {
	padding: 5px;
	max-width: 960px;
	width: 95%;
	margin: 20px auto;
}
header {
	padding: 0 15px;
}

.columns {
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
	margin: 5px 0;
}
.kolom {
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
	margin: 5px 0;
    
}

.column {
	flex: 1;
	
	margin: 2px;
	padding: 10px;
	&:first-child { margin-left: 0; }
	&:last-child { margin-right: 0; }
	
}
.box {
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
	margin: 5px 0;
}

.box {
	flex: 1;

	margin: 2px;
	padding: 10px;
	&:first-child { margin-left: 0; }
	&:last-child { margin-right: 0; }
	
}

@media screen and (max-width: 980px) {
  .kolom .box {
		margin-bottom: 5px;
    flex-basis: 40%;
		&:nth-last-child(2) {
			margin-right: 0;
		}
		&:last-child {
			flex-basis: 100%;
			margin: 0;
		}
	}
}

@media screen and (max-width: 680px) {
	.kolom .box {
		flex-basis: 100%;
		margin: 0 0 5px 0;
	}
}

@media screen and (max-width: 980px) {
  .columns .column {
		margin-bottom: 5px;
    flex-basis: 40%;
		&:nth-last-child(2) {
			margin-right: 0;
		}
		&:last-child {
			flex-basis: 100%;
			margin: 0;
		}
	}
}

@media screen and (max-width: 680px) {
	.columns .column {
		flex-basis: 100%;
		margin: 0 0 5px 0;
	}
}
.column button{
    background: #1297BD;
    border: 3px solid gray;
}
h3{
    font-family: Monotype Corsiva;
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
                          <a href="{{ route('events.events') }}" class="nav-item nav-link">Events</a>
                          <a href="{{ route('tiket.tiket') }}" class="nav-item nav-link active">Ticket</a>
                          <a href="{{ route('team.team') }}" class="nav-item nav-link">Team</a>
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
<section class="columns">
	<div class="column">
    <img src="{{asset('img/MUSIC CORNER.jpeg')}}" width="300px" height="350px">
    
		<h3>Music Corner</h3>
              <center><button>Pesan Tiket
              </a></button></center>		
		</div>
	
	<div class="column">
    <img src="{{asset('img/KOPI SORE.png')}}" width="300px" height="350px">
		<h3>Kopi Sore</h3>
        <center> <button>
        <a href="">Pesan Tiket</a>
      </button>	</center>
		</div>
  
  <div class="column">
  <img src="{{asset('img/fesbud.jpeg')}}" width="300px" height="350px">
		<h3>Festival Budaya</h3>
        <center><button>Pesan Tiket</button></center>
    </div>
</section>

<br />
<div class="wrapper">
<section class="kolom" >
<div class="column">
    <img src="{{asset('img/pentas.jpeg')}}" width="300px" height="350px">
		<h3>Pentas Budaya</h3>

              <center><button>Pesan Tiket</button></center>		
		</div>
    <div class="column">
    <img src="{{asset('img/podcast.png')}}" width="300px" height="350px">
		<h3>Podcast</h3>
 <center><button>Pesan Tiket</button></center>		
		</div>
 
	


</div>