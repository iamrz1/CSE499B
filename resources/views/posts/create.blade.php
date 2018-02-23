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
                @guest
                <h1>You are not logged in.</h1>
                </header>
                @endguest
                @auth
                @if(Auth::user()->level < 5) <!-- Level 5 users can add data -->
					<p>You're not authorised to visit this page</p>
				@else
					<div class="container">
						<h1>Create a new Land Entry</h1>
					</div>
                </header>
                <hr>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Enter Land details Bellow</div>				

                        

                    <div class="panel-body">
                        @include ('layouts.errors')
                            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'class'=>'form-horizontal' ]) !!}
                                <div class="form-group">
                                <label for="category" class="col-md-4 control-label">Category</label>
                                    {{Form::select('category', [ 'HaatBazar' => 'HaatBazar', 'ChingryLand' => 'ChingryLand','Path' => 'Path', 'Island' => 'Island', 'Other'=>'Other'],null, ['placeholder' => 'Select Category'])}}
                                    
                                </div>
                                

                                <div class="form-group">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    <label for="mouja" class="col-md-4 control-label">Mouja</label>
                                    
                                        {{Form::text('mouja', '',array('placeholder'=>'Mouja/Location of the Land'))}} 
                                    
                                </div>
                                

                                <div class="form-group ">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    <label for="daag" class="col-md-4 control-label">Daag Number</label>
                                    {{Form::text('daag', '',array('placeholder'=>'Daag Number'))}} 

                                </div>
                                <div class="form-group  ">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    <label for="size" class="col-md-4 control-label">Size</label>
                                    {{Form::text('size', '',array('placeholder'=>'Size of the Land'))}} 

                                </div>
                                <div class="form-group  ">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    <label for="lessee" class="col-md-4 control-label">Lessee</label>
                                    {{Form::text('lessee', '', array('placeholder'=>'Name of the Lessee (If Any)'))}} 

                                </div>

                                <div class="form-group ">
                                <label for="dispute" class="col-md-4 control-label">Dispute</label>
                                    {{Form::select('dispute', ['Yes' => 'Yes', 'No' => 'No'], null, ['placeholder' => 'Dispute Status'])}}
                                    
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                     Add Entry
                                    </button>
                                    </div>
                                </div>
							
                                
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


<br>
<hr>

                @endif
            @endauth



            </section>
			

@endsection	