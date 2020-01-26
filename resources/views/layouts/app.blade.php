<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ URL('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
    <script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}"></script>
    <script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
    <script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ URL('https://fonts.googleapis.com/css?family=Lato:300,400,700') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css') }}">
    <link rel="stylesheet" href="{{ URL('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <div class="container-fluid"><a class="navbar-brand" href="/erasmus/sds/public"><img src="assets/img/EU%20flag-Erasmus+_vect_POS.png" style="width:120px;height:40px;"></a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                                <a class="nav-link" href="courses">Courses</a>
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>
<div class="container"> 
 <div class="row">
     <div class="col-lg-12 col-sm-12 col-12 main-section">
         <div class="dropdown">
             <button type="button" onclick="window.location.href = 'cart';" value="w3docs" class="btn btn-info" data-toggle="dropdown" href="#"><a href="/erasmus/sds/public"></a>
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> Session <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
             </button>
         </div>
     </div>
 </div>
</div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer class="page-footer">
        <div class="container">
            <div class="links"><a href="https://github.com/Haarkan/sds">Our github page.</a></div>
        </div>
    </footer>
</html>
