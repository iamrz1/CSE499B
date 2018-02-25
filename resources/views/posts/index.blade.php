@extends ('layouts/mainLayout')

@section ('content')
<section id="header" class="">
				<header>

					<div class = " ">
						<div class = " ">
							<img src="{{asset('images/logo.png')}}" alt="Smiley face" >
						</div>
					</div>
					<div class="container">
					@include ('layouts.errors')
					@guest
					<h1>You are not logged in!</h1>
					@endguest

                    @auth
					@if(Auth::user()->level <1) <!-- Level 5 users can add data -->
					<p>You're not authorised to vist this page</p>
					@else
							<h1>DataBase Entries :</h1>
							<br>
							<hr>
                            
							@if (count($posts)>0)
								@foreach ($posts as $post)
									<h3>Post ID =  lnd{{$post->id}}</a></h3>
								
									<small>Land Category : {{$post->category}}</small>
									<small>, Mouja / Location : {{$post->mouja}}</small>
									<small>, Daag Number : {{$post->daag}}</small>
									<small>, Size : {{$post->size}} Sq. Meters, </small><br>
									<small> Lessee : {{$post->lessee}} </small>
									<small>, Dispute Status : {{$post->dispute}}</small>
									<br>
									<a href = "/posts/{{$post->id}}" class ="btn btn-info btn-lg">Details</a>
									
									<br>
									<hr>
								@endforeach
								<h3>{{$posts->links()}}</h3>
							@else
							<p>No entries yet!</p>
							@endif
						
						<br>
						
					</div>
					@endif
					@endauth
                </header>
</section>

@endsection	