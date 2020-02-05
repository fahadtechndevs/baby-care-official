<header class="header-section">
            <!-- navbar starts -->
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('assets/images/logo/logo2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('design')}}">Websites</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Web Design
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('logo.design')}}">Logo Designs</a></li>
                                    <li><a href="{{route('index')}}">Support</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    {{-- <li><a href="{{route('form')}}">Get Started</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="{{route('logo.design')}}">Logo Designs</a></li>
                            <li><a href="{{route('index')}}">Support</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('user.packages')}}">Packages</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                             <li><a href="{{ route('logout') }}"> <span class="fa fa-lock"></span> Login Out </a></li>

                            @else
                             <li><a href="{{ route('login') }}"> <span class="fa fa-lock"></span> Login  </a></li>

                            @endif

                            <li><a href="{{ route('register') }}"> <span class="fa fa-sign-in-alt"></span> Sign up  </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- navbar close -->
        </header>