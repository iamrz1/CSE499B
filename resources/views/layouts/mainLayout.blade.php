
<!DOCTYPE HTML>
<!--
		KhashLand

-->
<html lang="{{config('app.locale')}}">
	<head>
		<title>{{config('app.name','khashLand')}}</title>
		
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
		<script src="{{asset('js/skel.min.js')}}"></script>
		<script src="{{asset('js/init.js')}}"></script>
		

		
		<link rel="stylesheet" href="{{asset('css/skel.css')}}" />
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style-wide.css')}}" />


			
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="{{asset('css/ie/v8.css')}}" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="{{asset('css/ie/v9.css')}}" /><![endif]-->
	</head>
	<body class= "">
        <div class="container-fluid">
		
        <!-- Navbar -->
        
        <nav class="navbar navbar-inverse custom-navbar navbar-fixed-top" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button> 
              <!-- Branding Image -->

              <a class="navbar-brand " href="{{ url('/') }}">
                <span class="glyphicon glyphicon-home">   </span>   {{ config('app.name', 'Laravel') }}    
              </a>   
            </div>
            
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="{{ Request::is('services') ? 'active' : '' }}">
                        <a href="{{ url('services') }}">Services</a>
                    </li>
                
                    <li class="{{ Request::is('about') ? 'active' : '' }}">
                        <a href="{{url('about')}}"> About</a>
                    </li>
                    @auth
                        <li class="{{ Request::is('search') ? 'active' : '' }}">
                            <a href="/search"><span class="glyphicon glyphicon-search"></span>Search</a>
                        </li>


                    @endauth
                </ul>
                <ul class="nav navbar-nav pull-right">
                    @guest
                    <li class="{{ Request::is('login') ? 'active' : '' }}">
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"> </span> Login</a>
                    </li>

                    <li class="{{ Request::is('register') ? 'active' : '' }}">
                        <a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a>
                    </li>

                    @endguest
                    @auth

                
                        <li class="{{ Request::is('account') ? 'active' : '' }}">
                            <a href="/account"><span class="glyphicon glyphicon-tasks"></span> My Account</a>
                        </li>

                        <li class="{{ Request::is('users') ? 'active' : '' }}"> 
                            <a href="/users/{{Auth::user()->id}}" > {{ Auth::user()->name }}  </a>
                        </li>


                        <li >      
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <small>[Logout]</small>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                                
                            
                        </li>
                    @endauth
                </ul>
            </div>

          </nav>



        <!-- End Navbar -->
        <!-- Nav Placeholder -->
        <div class="container-fluid ">

            <div class="row">
                    <div class="col-sm-12 nav_placeholder" ">
                    
                    </div>
            </div>
        </div>
        
        @yield('content')

        <!-- Footer -->

		<section id="footer">	
			<div class="container-full">
			



				<div class="row">
					<div class="col-sm-8">
						<ul class="icons credit">
							<li ">&copy; Project KhasLand. All rights reserved. Design: Talukder Brothers.</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
					
						</ul>
					</div>
				</div>

			</div>
		</section>
    </div>
	</body>
</html>

