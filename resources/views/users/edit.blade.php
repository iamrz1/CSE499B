@extends ('layouts/mainLayout')

@section ('content')
			<!-- Logo-->
			<section id="header" class="dark">
				<header>

                    
                @guest
                <h1>You are not logged in.</h1>
                </header>
                @endguest
                @auth
                @if(Auth::user()->level < 1) <!-- Level 1 users can edit user data -->
					<p>You're not authorised to visit this page</p>
				@else
                    <div class="container">
                            <h1>Edit User Data</h1>
                    </div>
                    </header>
                    <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Enter Changes Bellow
                                        </div>				

                                                <!-- Form Goes Here-->
                                                {!! Form::open(['action' =>  ['UsersController@update',$user->id], 'method' => 'POST', 'class'=>'form-horizontal' ]) !!}

                                                        

                                                <div class="form-group">
                                                    <label for="name" class="col-md-4 control-label">Name</label>
                                                    
                                                        {{Form::text('name',$user->name,array('placeholder'=>'Name'))}} 
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-md-4 control-label">Email</label>
                                                    
                                                        {{Form::text('email',$user->email,array('placeholder'=>'email'))}} 
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="col-md-4 control-label">Phone</label>
                                                    
                                                        {{Form::text('phone',$user->phone,array('placeholder'=>'phone'))}} 
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="address" class="col-md-4 control-label">Address</label>
                                                    
                                                        {{Form::text('address',$user->address,array('placeholder'=>'address'))}} 
                                                    
                                                </div>
                                                <div class="form-group">
                                                        <label for="level" class="col-md-4 control-label">Level</label>
                                                        
                                                            {{Form::text('level',$user->level,array('placeholder'=>'level'))}} 
                                                        
                                                    </div>

                                                <br>
                                                {{Form::hidden('_method','PUT')}}
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit Edit
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