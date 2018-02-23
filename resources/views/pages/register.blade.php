@extends ('layouts/mainLayout')

@section ('content')
			<!-- Logo-->
			<section id="header" class="dark">
				<header>

					<div class = " ">
						<div class = "">
							<img src="{{asset('images/logo.png')}}" alt="Smiley face" >
						</div>
					</div>
					<div class="container">
						<h1>Register a new account</h1>
						<br>
						<h3>Enter Your new Account details bellow :</h3>
						<br>
					</div>
				</header>
				<div class="content style4 featured">
					<div class="container 75%">
						<form method="post" action="#">
							<div class="row ">
								<div class="12u"><input type="text" class=" form-control-new" placeholder="Name" /></div>
								<div class="12u"><input type="text" class=" form-control-new" placeholder="Email" /></div>
								<div class="12u"><input type="text" class=" form-control-new" placeholder="Username" /></div>
								<div class="12u"><input type="password" class=" form-control-new" placeholder="Password" /></div>
								<div class="12u"><input type="password" class=" form-control-new" placeholder="Password Again" /></div>
	
							</div>
							<!-- <div class="row 50%">
								<div class="12u"><textarea name="message" placeholder="Message"></textarea></div>
							</div> -->
							<div class="row">
								<div class="12u">
								<button type="submit" class=" btn-new">Register</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			

@endsection	