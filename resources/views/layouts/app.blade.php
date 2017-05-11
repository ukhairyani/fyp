<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="{{ asset('css/starrr.css') }}">

    <script src="js/jquery-1.11.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
    <meta name="keywords" content="Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous">

    </script>


<script>
          $( document ).ready(function() {
          $( "#states" ).change(function(e){
            console.log(e);
            // alert( "Handler for .change() called." );
              var state_id = e.target.value;
      //ajax
        $.get('/ajax-district?state_id=' + state_id, function(data){
            //success data
            // $('#district').empty();
            $('#district').find("option:not(:first)").remove();
            $.each(data, function(index, districtObj){

              $('#district').append('<option value="' + districtObj.id+ '"> '+ districtObj.name + '</option>');

            });

        });
        });

      });
    </script>


</head>
<body>
    {{-- <div class="header"> --}}
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li><a href="{{ url('/home') }}" class="glyphicon glyphicon-home">Home</a></li>
                        <li><a href="{{ url('/offer') }}" class="glyphicon glyphicon-map-marker">Offer Ride</a></li>
                        <li><a href="{{ url('/catalog') }}" class="glyphicon glyphicon-th-list">Catalog</a></li>
                        <li class="dropdown">
                            <a href="#" class="glyphicon glyphicon-bell" data-toggle="dropdown" role="button" aria-expanded="false">Notification</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/notification') }}">Booking Request</a></li>
                                <li><a href="{{ url('/confirmation') }}">Ride Confirmation</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/start') }}">Active Ride</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Give Feedback</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/driver_list') }}">Your Driver</a></li>
                                <li><a href="{{ url('/passenger_list') }}">Your Passenger</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/report') }}">Report</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/profile') }}">Profile</a></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

                {{-- <div class="header">
                  <div class="container">
                    <div class="header-main">
                      <div class="top-navg">
                            <nav class="cl-effect-13">
                               <ul class="res">
                                   <li><a class="active" href="{{ url('/home') }}">Home</a></li>
                                   <li><a href="{{ url('/offer') }}">Offer Ride</a></li>
                                   <li><a href="{{ url('/catalog') }}">Catalog</a></li>
                                   <li class="dropdown">
                                       <a href="#" data-toggle="dropdown" role="button">Notification</a>
                                       <ul class="dropdown-menu" role="menu">
                                           <li><a href="{{ url('/notification') }}">Booking Request</a></li>
                                           <li><a href="{{ url('/confirmation') }}">Ride Confirmation</a></li>
                                       </ul>
                                   </li>
                                   <li><a href="{{ url('/start') }}">Active Ride</a></li>
                                   <li class="dropdown">
                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Give Feedback</a>
                                       <ul class="dropdown-menu" role="menu">
                                           <li><a href="{{ url('/driver_list') }}">Your Driver</a></li>
                                           <li><a href="{{ url('/passenger_list') }}">Your Passenger</a></li>
                                       </ul>
                                   </li>
                                   <li><a href="{{ url('/report') }}">Report</a></li>


                                   {{-- <li><a href="gallery.html">Gallery</a></li> --}}
                                   {{-- <li><a href="contact.html">Contact</a></li> --}}
                               </ul>
                           </nav>
                           <!-- script-for-menu -->
                                <script>
                                  $( "span.menu" ).click(function() {
                                    $( "ul.res" ).slideToggle( 300, function() {
                                    // Animation complete.
                                     });
                                    });
                               </script>
                      </div>
                       <div class="clearfix"> </div>
                     </div>
                   </div>
                 </div>

        </nav>

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (isset($errors))
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
</div>
{{-- </diwev> --}}


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/starrr.js') }}"></script>

    <script>
        $(document).on("click", "#confirm-modal", function(e) {
            window.console&&console.log('foo');
            var url = $(this).attr("href");
            window.console&&console.log(url);
            e.preventDefault();

            $('#destroy-form').attr('action', url);
            $('#destroy-modal').modal({ show: true });
        });
    </script>

    <script src="{{ asset('js/add-image.js') }}"></script>
    @yield('scripts')

    {{-- <div class="copy-right wow bounceInLeft" data-wow-delay="0.3s">
   	  <p> &copy; 2016 All rights reserved | Design by ukhairyani</a></p>
  </div> --}}
</body>
</html>
