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
                    @guest
                    <h1>You are not logged in.</h1>
                    @endguest
                    @auth
                        
                        <br>
                        <h3>Pick from categories or Enter search queries bellow :</h3>
                        <br>
					</div>
                </header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                        
                       
                       
						{!! Form::open(['action' => 'SearchController@store', 'method' => 'POST' ]) !!}
                                <div class="form-group  form-group-new">
                                    {{Form::select('category', [ 'HaatBazar' => 'HaatBazar', 'ChingryLand' => 'ChingryLand','Path' => 'Path', 'Island' => 'Island', 'Other'=>'Other'],null, ['placeholder' => 'Select Category'])}}
                                    
                                </div>

                                <div class="form-group  form-group-new">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    
                                    {{Form::text('mouja', '',array('placeholder'=>'Mouja/Location of the Land'))}} 

                                </div>
                                <div class="form-group  form-group-new">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    
                                    {{Form::text('daag', '',array('placeholder'=>'Daag Number'))}} 

                                </div>
                                <div class="form-group  form-group-new">
                                    <!--{{Form::label('location', 'Location :', ['class' => 'awesome'])}}-->
                                    
                                    {{Form::text('lessee', '',array('placeholder'=>'Name Of Lessee'))}} 

                                </div>
                               
                                <div class="form-group  form-group-new">
                                    {{ Form::submit('Search Data')}}
                                </div>
                     
							
                                
                            {!! Form::close() !!}
                        </div>

                        @endauth
                        <div class="col-sm-4"></div>
                    </div>
                </div>





            </section>
			

@endsection	