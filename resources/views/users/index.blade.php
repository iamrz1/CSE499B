@extends ('layouts/mainLayout')

@section ('content')
<section id="header" class="">
				<header>
					<div class="container">
							@include ('layouts.errors')
					@guest
					<h1>You are not logged in!</h1>
					@endguest

                    @auth
					@if(Auth::user()->level <1) <!-- Level 5 users can add data -->
					<p>You're not authorised to vist this page</p>
					@else
                            
							@if (count($users)>0)
								@foreach ($users as $user)
								<h1>User Info: </h1>
								<hr>
									
								<h3>User ID = usr{{$user->id}}</h3>
								
								<small>Name : {{$user->name}} </small><br>
								<small>Email : {{$user->email}} </small><br>
								<small>Phone: {{$user->phone}} </small><br>
								<small>Address : {{$user->address}} </small><br>
								<small>User Level : {{$user->level}} </small><br>
								<br>
									<a href = "/users/{{$user->id}}" class ="btn btn-default">Details</a>
									<br>
									<hr>
								@endforeach
								<h3>{{$users->links()}}</h3>
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