	<!-- header -->
	<header>
	    <div class="header_topw3layouts_bar">
	        <div class="container">
	            <!-- header-top -->
	            <div class="row border-bottom py-lg-4 py-3">
	                <div class="col-xl-7 col-lg-6 header_agileits_left">
	                    <ul>
	                        <li class="mr-3">
	                            <i class="fas fa-phone mr-2"></i> 6379444139</li>
	                        <li>
	                            <i class="fas fa-envelope mr-2"></i>
	                            <a href="mailto:info@example.com"> crramji004@gmail.com </a>
	                        </li>
	                    </ul>
	                </div>
	                <div class="col-xl-5 col-lg-6 header_right text-center mt-lg-0 mt-2">
	                    <div class="row">
	                        <!-- social icons -->
	                        <div class="col-4 w3social-icons">
	                            <ul>
	                                <li>
	                                    <a href="#" class="rounded-circle">
	                                        <i class="fab fa-facebook-f"></i>
	                                    </a>
	                                </li>
	                                <li class="px-2">
	                                    <a href="#" class="rounded-circle">
	                                        <i class="fab fa-google-plus-g"></i>
	                                    </a>
	                                </li>
	                                <li>
	                                    <a href="#" class="rounded-circle">
	                                        <i class="fab fa-twitter"></i>
	                                    </a>
	                                </li>
	                                <li class="pl-2">
	                                    <a href="#" class="rounded-circle">
	                                        <i class="fab fa-dribbble"></i>
	                                    </a>
	                                </li>
	                            </ul>
	                        </div>
	                        <!-- //social icons -->
	                        <div class="col-4 header-loginw3ls text-lg-right text-center">
								@if (!Auth::check())
									<a href="{{route('login')}}" class="log">
	                                <i class="fas fa-user mr-2"></i> Login</a>
								@else
									<a href="{{route('logout')}}" class="log">
									<i class="fas fa-user mr-2"></i> Logout</a>
								@endif
	                        </div>
	                        <div class="col-4 header-loginw3ls">
							<a href="{{route('register')}}" class="log">
	                                <i class="fas fa-key mr-2"></i> Register</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--// header-top -->

	            <!-- navigation -->
	            <nav class="navbar navbar-expand-lg navbar-light bg-light">
	                <a class="navbar-brand" href="{{ route('home') }}">WhiteBricks 
	                    <span>Paying Guest</span>
	                </a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse"
	                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
	                    aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>

	                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                    <ul class="navbar-nav ml-auto">
	                        <li class="nav-item {{ (request()->is('home')) ? 'active' : ''}}">
	                            <a class="nav-link" href="{{ route('home') }}">Home
	                                <span class="sr-only">(current)</span>
	                            </a>
	                        </li>
	                        <li
	                            class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3 {{ (request()->is('about')) ? 'active' : ''}}">
	                            <a class="nav-link" href="{{route('about')}}">About Us</a>
	                        </li>
	                        <li class="nav-item dropdown">
	                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
	                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Dropdown
	                            </a>
	                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                                <a class="dropdown-item scroll" href="#services">Services</a>
	                                <a class="dropdown-item scroll" href="#pricings">Pricings</a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item scroll" href="#clients">Clients</a>
	                                <a class="dropdown-item" href="about.html">Our Agents</a>
	                                <a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
	                            </div>
	                        </li>
	                        <li
	                            class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3 {{ (request()->is('portfolio')) ? 'active' : ''}}">
	                            <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
	                        </li>
	                        <li class="nav-item {{ (request()->is('contact')) ? 'active' : ''}}">
	                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
	                        </li>
	                    </ul>
	                </div>
	            </nav>
	            <!-- //navigation -->
	        </div>
	    </div>
	</header>
	<!-- //header -->