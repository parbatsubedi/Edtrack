<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Lorem Ipsum</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +977 9898989898</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> Sample@abc.edu.np</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Lorem</span>-Ipsum</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>  --}}

        <div class="collapse navbar-collapse" id="navbarSupport" style="visibility: visible !important;">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/visitor')}}">VISITOR</a>
            </li>
            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{url('myAppointments')}}">My Appointments</a>
            </li>
            <x-app-layout>
            </x-app-layout>
            @else
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
            @endif
        </ul> 
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <!-- Modal -->
  {{--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalTitle">Welcome to our website!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you a visitor?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" >Yes</button>
          <button type="button" class="btn btn-primary" >No</button>
        </div>
      </div>
    </div>
  </div>  --}}

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalTitle">Welcome to our website!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you a visitor?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="showNextModal()">Yes</button>
          <button type="button" class="btn btn-primary" onclick="showVisitPopup()">No</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="visitModal" tabindex="-1" role="dialog" aria-labelledby="visitModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="visitModalTitle">Visit Our College!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Do you want to visit our college?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="showContactModal()">Yes</button>
          <button type="button" class="btn btn-primary" onclick="showExploreModal()">No</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalTitle">Contact Us!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Great! Contact us for more information.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exploreModal" tabindex="-1" role="dialog" aria-labelledby="exploreModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exploreModalTitle">Explore Our Website!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Thank you! Feel free to explore our website.</p>
        </div>
      </div>
    </div>
  </div>

  @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
      x
      </button>
    {{ session()->get('message') }}
  </div>
@endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(..\assets\img\aadim.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Be familiar</span> with a Faculty Members</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Lorem Ipsum <br> Lorem</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="..\assets\img\aadim.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.teachers')
  @include('user.latestNews')
  @include('user.appointment')

  
  <footer class="page-footer">
    <div class="container" id="aboutUS">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>About</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Lorem Ipsum</p>
          <a href="#" class="footer-link">9898989898</a>
          <a href="#" class="footer-link">parbatsubedi000@gmail.com</a>

          {{--  <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>  --}}
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://parbatsubedi.com.np/" target="_blank">Parbat Subedi</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>