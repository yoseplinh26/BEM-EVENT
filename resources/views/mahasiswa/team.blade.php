<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Events BEM Online Ticketing {{ $title }}</title>
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
     
    .our-team {
        padding: 50px 0px;
        background-color: #f9f9f9;
    }
    .our-team h2{
      margin-bottom: 40px;
    }
    .our-team a:hover{
      color: #333;
    }
    .client-img {
        width: 90px;
        height: 100px;
        overflow: hidden;
        margin: 0 auto;
        border-radius: 70%;
        border: 1px solid #607D8B;
        padding: 5px;
    }
    .box-bg {
        background-color: #fff;
        padding: 20px 20px;
        border: 2px solid #e2e2e2;
        border-top-left-radius: 40px;
        border-bottom-right-radius: 40px;
        position: relative;
        margin: 15px 0px;
        overflow: hidden;
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
    .social-links {
        width: 100%;
        position: absolute;
        top: -200px;
        left: 0px;
        background-color: rgba(0, 0, 0, 0.6);
        height: 50%;
        padding: 30px 0px;
        transition: 1s;
    }
    .box-bg:hover .social-links{
      top: 0px;
    }
    .social-links ul {
        padding: 0px;
        margin: 0px;
    }
    .social-links ul li {
        list-style: none;
        float: left;
        width: 20%;
    }
    .social-links ul li a {
        text-align: center;
        display: block;
        background-color: #e6e6e6;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        line-height: 40px;
        color: #607D8B;
        margin: 0 auto;
    }
    .social-links ul li a:hover {
        font-size: 20px;
    }
    .social-links h4{
      color: #fff;
      padding-bottom: 15px;
    }
    #header {
  background: #fff;
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
  top: 40px;
  box-shadow: 0px 2px 15px rgba(25, 119, 204, 0.1);
}
#header.header-scrolled {
  top: 0;
}
#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 0.5px;
  font-family: "Poppins", sans-serif;
}
#header .logo a {
  color: #2c4964;
}
#header .logo img {
  max-height: 40px;
}

/**
* Appointment Button *
*/
.appointment-btn {
  margin-left: 25px;
  background: #1977cc;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
}
.appointment-btn:hover {
  background: #166ab5;
  color: #fff;
}
@media (max-width: 768px) {
  .appointment-btn {
    margin: 0 15px 0 0;
    padding: 6px 18px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
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
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #2c4964;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}
.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(28, 47, 65, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile > ul > li {
  padding: 0;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #2c4964;
  border: none;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #1977cc;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #1977cc;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
#
--------------------------------------------------------------*/

#hero .container {
  position: relative;
  
}
h2 {
  color: #fff;
  margin: 10px 0 0 0;
  font-size: 35px;
  font-family: Monotype Corsiva;
}


@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 992px) {
  #hero {
    margin-bottom: 0;
    height: 50vh;
  }
  #hero .container {
    padding-bottom: 20px;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}
.team{
    background: #3297BB;
}
  


    </style>
</head>

<body>
      <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">  

            </div>
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
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                            <a href="{{ route('tiket') }}" class="nav-item nav-link">Ticket</a>
                            <a href="{{ route('team') }}" class="nav-item nav-link active">Team</a>
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
                                  <a class="nav-link" href="{{ url('/login') }}">Login</a>
                                </li>
                                @endauth
                              </ul>                      
                        </div>
                    </div>
                </nav>
                <!-- ======= Hero Section ======= -->
</div>
</div>
           <div class="team">
        
                <center> <img src="{{asset('img/teamm.png')}}" width="350px" height="250px"></center>
    <h2>Let's get closer to the Berkisa's Team</h2>
     <div>
                <div class="container">
                <section id="hero" class="d-flex align-items-center">
               
</div>
  </section><!-- End Hero -->
  <main id="main">
<body>
<div class="our-team">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Amanda-removebg-preview.png')}}"class="img-fluid">
        
          </div>
          <div class="details">
            <h4 class="text-center">Amanda Simbolon</h4>
            <h6 class="text-center">11321055 </h6>
            <p class="text-center">D3 Teknologi Informasi</p>
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            
              <li><a href="whatsapp://send?text=Hello&phone=+6282167148170"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/amandaa.zip/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/amanda5bln"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Ester-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Ester Sinaga</h4>
            <h6 class="text-center">11321054</h6>
            <p class="text-center">D3 Teknologi Informasi</p>
           
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6285260617206"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/ester_sinaga_/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.instagram.com/ester_sinaga_/"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Albert-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Albert Aritonang </h4>
            <h6 class="text-center">11321031</h6>
            <p class="text-center">D3 Teknologi Informasi</p>
            
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="https://www.facebook.com/alberth.rafael.71"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6287899570216"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/albeerthhh/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://telegram.org/dl"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Yosevyn-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Yosevyn Sipahutar</h4>
            <h6 class="text-center">11321022 </h6>
            <p class="text-center"> D3 Teknologi Informasi</p>
           
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="https://www.facebook.com/yosevyn.sipahutar.3"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6282219676608"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/yosevyn_sipahutar/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/Yosevyn_sipahutar"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Fransiska-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Fransiska Simanungkalit</h4>
            <h6 class="text-center">11321005 </h6>
            <p class="text-center">D3 Teknologi Informasi</p>
            
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="https://www.facebook.com/fransiska.simanungkalit.9"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6285314770301"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/sizskaa/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/FransiskaSimanungkalit"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Yoseplin-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Yoseplin Hutauruk </h4>
            <h6 class="text-center">11321017</h6>
            <p class="text-center">D3 Teknologi Informasi</p>
            
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6283189693525"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/yoseplin_/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/hahahahhahahaaaa22"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>