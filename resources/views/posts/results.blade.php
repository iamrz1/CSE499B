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
                            <h1>DataBase Entries :</h1>
                            <hr>
                            <br>
							@if (count($posts)>0)
								@foreach ($posts as $post)
									<h3><a href="/posts/{{$post->id}}"> Post ID =  dbe{{$post->id}}</a></h3>

									<small>Land Category : {{$post->category}}</small>
									<small>, Mouja / Location : {{$post->mouja}}</small>
									<small>, Daag Number : {{$post->daag}}</small>
									<small>, Size : {{$post->size}} Sq. Meters, </small><br>
									<small> Lessee : {{$post->lessee}} </small>
									<small>, Dispute Status : {{$post->dispute}}</small>
                                    
                                    <br>
                                    <hr>
								@endforeach
								<h3>{{$posts->links()}}</h3>
							@else
							@endif
						
						<br>

					</div>
                </header>
</section>

@endsection	