
@desktop
@extends ('layouts/mainLayout')
@enddesktop


@section ('content')

<div class="container-full">

			<div id="myCarousel" class=" carousel slide " data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class=" carousel-inner container-full">
				<div class="item active image100">
				  <img src="images/0.jpg" alt="Los Angeles">

					<div class="carousel-caption">
						<h3>First slide</h3>
						<h5>Nulla vitae elit libero, a pharetra augue mollis interdum.</h5>
						<br>
					</div>
				</div>
				
				
				<div class="item image100">
					<img src="images/1.jpg" alt="Chicago">
		
					<div class="carousel-caption">
						<h3>Second slide</h3>
						<h5>Nulla vitae elit libero, a pharetra augue mollis interdum.</h5>
						<br>
					</div>
				</div>

				<div class="item image100">
					<img src="images/2.jpg" alt="New York">
				  	<div class="carousel-caption">
						<h3>Third slide</h3>
						<h5>Nulla vitae elit libero, a pharetra augue mollis interdum.</h5>
						<br>
					</div>
				</div>
				

		
			  </div>
	<br>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>




		</div>




		<section id="header" class="search_area">
		</br>
		</br>

		<h1> Welcome to Project KhashLand. </h1> 
		<h2>A new way of browsing Khash Properties in Bangladesh.</h2>
		@auth
		<h3>Use the search page to search for any specific query.  </h3>
		@endauth
		@guest
		<h3> Please Register and Login to access more features. </h3>
		@endguest
<hr>

		</section>
@endsection