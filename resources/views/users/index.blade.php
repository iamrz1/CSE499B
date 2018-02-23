@if (count($posts)>0)
								@foreach ($posts as $post)
									<h3>Post ID =  dbe{{$post->id}}</a></h3>
								
									<small>Land Category : {{$post->category}}</small>
									<small>, Mouja / Location : {{$post->mouja}}</small>
									<small>, Daag Number : {{$post->daag}}</small>
									<small>, Size : {{$post->size}} Sq. Meters, </small><br>
									<small> Lessee : {{$post->lessee}} </small>
									<small>, Dispute Status : {{$post->dispute}}</small>
									<br>
									<a href = "/posts/{{$post->id}}" class ="btn btn-default">Details</a>
									
									<br>
									<hr>
								@endforeach
								<h3>{{$posts->links()}}</h3>
							@else
							<p>No entries yet!</p>
							@endif