<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>MedicineInfo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <style>
    
    body
    {
        background-color:white;
    }
    
    </style>

</head>
<body>
<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="top">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="colorlib-logo"><a href="/">Medicine<span>Info</span></a></div>
                            </div>
                            <div class="col-md-3">
                                <div class="num">
                                    <span class="icon"><i class="icon-phone"></i></span>
                                    <p><a href="#">+62-11-2222-3333
                                    </a><br><a href="#">+62-22-1111-2222</a></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="loc">
                                    <span class="icon"><i class="icon-location"></i></span>
                                    <p><a href="#">Medicine Info Tower</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="menu-wrap">
        <div class="container">
            <div class="row">
                <ul>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                    
                        <li><a href="/">Home</a></li>
                            
                        <li><a href="/MedicineInfo">Medicine Info</a></li>
                        
                        <li ><a href="/Aboutus">About Us</a></li>

                        <li><a href="/ViewCompareDrug">Compare Drug</a></li>

                        <li><a href="/ScannDrug">Scan Original Drug</a></li>
                            <!-- end add menu -->

                            <!-- <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
                    @endif
                    <li style="padding-left:33%;"> <a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @else

                    <li><a href="/">Home</a></li>
                        
                    <li><a href="/MedicineInfo">Medicine Info</a></li>
                    
                    <li ><a href="/Aboutus">About Us</a></li>

                    <li><a href="/ViewCompareDrug">Compare Drug</a></li>

                    <li><a href="/ScannDrug">Scan Original Drug</a></li>

                    <li><a href="/InsertDrug">Insert Drug</a></li>

                    <!-- end add menu -->

                    <li style="padding-left:10%;">
                        
                            {{ Auth::user()->name }}
                        
                    </li>
                    <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                @endguest
                </ul>
						
				</div>
			</div>
		</div>
	</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/sticky-kit.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
