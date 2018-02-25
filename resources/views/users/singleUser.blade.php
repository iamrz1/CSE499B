@extends ('layouts/mainLayout')

@section ('content')
<section id="header" class="">
				<header>

					<div class = " ">
					</div>
					<div class="container">
					@auth
						@if(Auth::user()->level <0) <!-- Level 5 users can add data -->
						<p>You're not authorised to vist this page</p>
						@else
							<h1>User Info: </h1>
							<hr>
								
							<h3>User ID = usr{{$user->id}}</h3>
							
							<small> Name : {{$user->name}} </small><br>
							<small>Email : {{$user->email}} </small><br>
							<small>Phone: {{$user->phone}} </small><br>
							<small>Address : {{$user->address}} </small><br>
							<small>User Level : {{$user->level}} </small><br>
                            
							<small>Edited by Admin : {{$user->admin_edited}} </small><br>
                            <small>User Created at : {{$user->created_at}} </small><br>
                            <small>User Updated at : {{$user->updated_at}} </small><br>
							

							@if(Auth::user()->level >3)
							<a href = "/users/{{$user->id}}/edit" class ="btn btn-default">Edit Data</a>
							{!!Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST' ])!!}
								{{Form::hidden('_method','DELETE')}}
								{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
							{!!Form::close()!!}
							<hr>
							@endif
						@endif
					@endauth
					</div>
                </header>
</section>

@endsection	