<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}" />
    <link rel="icon" href="{{asset('storage/favicon.png')}}" type="image/gif" sizes="16x16">
    <title>Naujawan Rozgar</title>
    <style>
        .jumbotron {
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 5px;
        }

        form {
            padding: 5px 10px;
        }

        table img {
            width: 75px;
            height: 40px;
            padding: 4px;
            margin: 0;
        }

        table th {
            line-height: 40px;
        }

        table img:hover {
            border: 1px dotted black;
        }

        #belowtable img {
            width: 90px;
            height: 60px;
            padding: 4px;
            margin: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color: #3176B7 !important">
        <a class="navbar-brand" href="/"><img src="{{asset('storage/logo.png')}}" width="160" height=50" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><b class="text-white">Home</b> <span
                            class="sr-only">(current)</span></a>
                </li>
                {{-- <?php
            if (isset($_SESSION['adminEmail'])) {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <?php
            }
            ?> --}}
            </ul>
            <form class="form-inline my-2 my-lg-0" action="/searchbydate" method="GET">
                <input class="form-control mr-sm-2" type="date" placeholder="Search by City, job title or department"
                    required name="searchjob" aria-label="Search">
                <button class="btn btn-outline-primary bg-dark my-2 my-sm-0 text-white" type="submit">Search by
                    Date</button>
            </form>
            <form class="form-inline my-2 my-lg-0" action="searchjob.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="City, job title or department" required
                    name="searchjob" aria-label="Search">
                <button class="btn btn-outline-primary bg-dark my-2 my-sm-0 text-white" type="submit">Search</button>
            </form>

            {{-- <?php
                if (!isset($_SESSION['email'])) {
                } else {
                    echo '<span><a href="viewprofile.php" class="link-dark text-white">Profile</a></span>&nbsp;&nbsp;&nbsp;';
                }
            ?> --}}
            {{-- <span><a href="signup.php" class="link-dark text-white">Join for Free </a></span>&nbsp;&nbsp;&nbsp;';
            <a href="login.php" class="link-dark text-white"> Login</a>&nbsp;&nbsp;&nbsp;
            <a href="logout.php" class="link-dark text-white"> Log Out</a> --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            {{ __('Profile') }}
                        </a>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>



    @yield('content')



    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 ">

        <!-- Footer Links -->
        <div class="container-fluid bg-primary text-center text-md-left p-3 text-white"
            style="background-color: #3176B7 !important;">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">Naujawan Rozgar</h5>
                    <p></p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links
                <h5 class="text-uppercase">Links</h5>  -->

                    <ul class="list-unstyled">
                        <li>
                            <a href="about.php" class="text-white">Follow us on Social media</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/infonrs.pk"><i
                                    class="fab fa-facebook-f fa-lg text-white mr-2"></i></a>
                            <a href="https://twitter.com/Naujawanrozgar"><i
                                    class="fab fa-twitter fa-lg text-white mr-2"></i></a>
                            <!--<a href="#!"><i class="fab fa-google fa-lg text-white mr-2"></i></a>-->
                            <a href="https://www.instagram.com/naujawanrozgar/"><i
                                    class="fab fa-instagram fa-lg text-white mr-2"></i></a>
                            <!--<a href="#!"><i class="fab fa-linkedin-in fa-lg text-white mr-2"></i></a>-->
                            <a href="https://www.youtube.com/channel/UCqcGH35h6lW7SgSblY7BC6A"><i
                                    class="fab fa-youtube fa-lg text-white mr-2"></i></a>
                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <!-- <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul> -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div style="background-color: #1B1EE0;" class="container-fluid footer-copyright text-center py-3 text-white">
            Copyright © 2021
            <a href="https://naujawanrozgar.com/" class="text-white"> naujawanrozgar.com</a>&nbsp; Developed by <a
                href="https://aghazsolutions.com/" target="_blank" class="text-white">Aghaz IT Solutions</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="{{asset('src/js/jquery-3.5.1.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('src/js/popper.min.js')}}"></script>

    <script src="{{asset('src/js/script.js')}}"></script>
    <script src="{{asset('src/js/main.js')}}"></script>
</body>

</html>