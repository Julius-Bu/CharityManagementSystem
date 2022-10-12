<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ APP_NAME . " | ". $title }}</title>
        <meta name="description" content="Phase php library">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="png/x-image" href="{{asset('imgs/icons/logo.png')}}"/>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style type="text/css"> ul.unstyled{list-style: none}</style>
        @yield('css')
    </head>
    <body class="bg-light">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="overlay">
            <div id="progstat"></div>
            <div id="progress"></div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow sticky-top">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('imgs/icons/logo.png') }}" height="50" alt="logo" 
                class="rounded-circle">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('donations/clothes') }}" class="nav-item nav-link">Clothes</a>
                    <a href="{{ url('donations/food') }}" class="nav-item nav-link">Food</a>
                    <a href="{{ url('donations/shoes') }}" class="nav-item nav-link">Shoes</a>
                    <a href="{{ url('donations/funds') }}" class="nav-item nav-link">Funds/Money</a>
                    <a href="{{ url('donations/others') }}" class="nav-item nav-link">Others</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Donations List</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('donations/items/clothes') }}" class="dropdown-item">Clothes</a>
                            <a href="{{ url('donations/items/food') }}" class="dropdown-item">Food</a>
                            <a href="{{ url('donations/items/shoes') }}" class="dropdown-item">Shoes</a>
                            <a href="{{ url('donations/items/funds') }}" class="dropdown-item">Funds/Money</a>
                            <a href="{{ url('donations/items/others') }}" class="dropdown-item">Others</a>
                        </div>
                    </div>
                </div>

                <div class="navbar-nav ml-auto">
                    @if (!isset($user))
                    <a href="{{ url('donations/account') }}" class="nav-item nav-link">Create Account</a>
                    <a href="{{ url() }}" class="nav-item nav-link">Login</a>
                    @else
                        <a href="javascript:;" class="nav-item nav-link"><h5 class="text-warning">Hi, {{ $user->first_name }}</h5></a>
                        <a href="{{ url('user/dashboard') }}" class="nav-item nav-link"><h5><i class="fas fa-arrow-alt-circle-up text-success"></i> Dashboard</h5></a>
                        <a href="{{ url('auth/user/logout') }}" class="nav-item nav-link"><h5><i class="fas fa-power-off text-danger"></i> </h5></a>
                    @endif
                </div>
            </div>
        </nav>
    @section('content')

    @show

    <footer class="container-fluid bg-pup mt-3 sticky-footer">
        <div class="d-flex justify-content-between ml-4">
            <div class="mb-4 text-center">
                <img src="{{ asset('imgs/icons/logo.png') }}" width="50%" class="rounded-circle"/>
                <h4 class="font-weight-bold">SANYU BABIES HOME</h4>
            </div>
            <div class="mb-3">
                <ul class="unstyled">
                    <h5><u>Donate</u></h5>
                    <li>
                        <a href="{{ url('donations/clothes') }}" class="text-doco-none text-light"><i class="fas fa-tshirt"></i> Clothes</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/food') }}" class="text-doco-none text-light"><i class="fas fa-shopping-basket"></i> Food</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/shoes') }}" class="text-doco-none text-light"> <i class="fas fa-shoe-prints"></i> Shoes</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/funds') }}" class="text-doco-none text-light"><i class="fas fa-dollar-sign"></i> Funds / Money</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/others') }}" class="text-doco-none text-light">Others</a>
                    </li>
                </ul>
            </div>
            <div class="mb-3">
                <ul class="unstyled">
                    <h5><u>Donated Items</u></h5>
                    <li>
                        <a href="{{ url('donations/items/clothes') }}" class="text-doco-none text-light"><i class="fas fa-tshirt"></i> Clothes</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/items/food') }}" class="text-doco-none text-light"><i class="fas fa-shopping-basket"></i> Food</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/items/shoes') }}" class="text-doco-none text-light"> <i class="fas fa-shoe-prints"></i> Shoes</a>
                    </li>
                    <li>
                        <a href="{{ url('donations/items/funds') }}" class="text-doco-none text-light"><i class="fas fa-shillings-sign"></i> Funds in Shillings</a>
                    </li>
                </ul>
            </div>

            <div class="mb-3">
                <ul class="unstyled">
                    <h5><u>Contacts Us</u></h5>
                    <li>
                        <a href="https://facebook.com/Homesanyu" class="text-doco-none text-light"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/HomeSanyu" class="text-doco-none text-light"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/sanyubabieshome/?hl=en" class="text-doco-none text-light"> <i class="fab fa-instagram"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </footer>
    <section id="js">
        <script type="text/javascript" src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </section>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/app-ajax.js') }}"></script>
    @yield('scripts')
</body>
</html>