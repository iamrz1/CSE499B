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
						<h1>Create a new Land Entry</h1>
						<br>
						<h3>Enter new Land details bellow :</h3>
						<br>
					</div>
                </header>


@if (count($articles) === 0)
<h3>
    No Articles
</h3>
@elseif (count($articles) >= 1)

    @foreach($articles as $article)
    <h3>

    {{article->location}}

    </h3>
    @endforeach
@endif


			

@endsection	