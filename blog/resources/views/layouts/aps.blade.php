<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portofolio</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::asset('/aset/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/aset/vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/aset/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/aset/css/freelancer.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('/aset/css/dtble.css')}}">

</head>
<body id="app-layout">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Nabil Arfian</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/home') }}">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/portofolio') }}">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/profile') }}">Profile</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/article') }}">Article</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/tampil') }}">Posting</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="galeri">Galeri</a>
            </li>
            @if (Auth::guest())
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/login') }}">Login</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/register') }}">Register</a>
            </li>
            @else
            <li class="dropdown nav-item mx-0 mx-lg-1">
                <a href="#" class="dropdown-toggle nav-link py-3 px-0 px-lg-3 rounded" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
          @endif
          </ul>
        </div>
      </div>
    </nav>


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



    <!-- JavaScripts -->
    <script src="{{URL::asset('aset/js/jquery.js')}}"></script>
    <script src="{{URL::asset('/aset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/aset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('/aset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{URL::asset('/aset/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('/aset/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{URL::asset('/aset/js/contact_me.js')}}"></script>
    <script src="{{URL::asset('/aset/js/freelancer.min.js')}}"></script>
    <script src="{{URL::asset('aset/js/dtble_jquery.js')}}"></script>
    <script src="{{URL::asset('aset/js/dtble_bootstrap.js')}}"></script>

    <script>
    
    $(document).ready(function(){
      
      $('#myTable').DataTable({
          'info': false
      });

    })

    </script>
</body>
</html>
