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
					@auth
						@if(Auth::user()->level <1) <!-- Level 5 users can add data -->
						<p>You're not authorised to vist this page</p>
						@else
							<h1>Post Info: </h1>
							<hr>
								
							<h3>Post ID = dbe{{$post->id}}</h3>
							
							<small> Category : {{$post->category}} </small><br>
							<small>Mouja : {{$post->mouja}} </small><br>
							<small>Size of Land : {{$post->size}} Sq Meters</small><br>
							<small>Name of Lessee : {{$post->lessee}} </small><br>
							<small>Dispute Status : {{$post->dispute}} </small><br>
							<small>Post Created at : {{$post->created_at}} </small><br>

							@if(Auth::user()->level >3)
							<a href = "/posts/{{$post->id}}/edit" class ="btn btn-default">Edit Data</a>
							{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST' ])!!}
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