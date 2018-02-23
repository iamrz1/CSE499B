@extends ('layouts/mainLayout')

@section ('content')

			<!-- Logo-->
			<section id="header" class="">
				<header>

					<div class = " ">
						<div class = " ">
							<img src="images/logo.png" alt="Smiley face" >
						</div>
					</div>
					<div class="container">
							<h1>Login to your account</h1>
						<p>Enter Your Username and Password</p>
						<br>

					</div>
				</header>
				<div class="content style4 featured">
					<div class="container 50%">
						<form method="post" action="#">
							<div class="row 50%">
								<div class="6u"><input type="text" class=" form-control-new" placeholder="Username" /></div>
								<div class="6u"><input type="password" class=" form-control-new" placeholder="Password" /></div>
							</div>
							<div class="row">
								<div class="12u">
								<button type="submit" class=" btn-new">Login</button>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

@endsection	