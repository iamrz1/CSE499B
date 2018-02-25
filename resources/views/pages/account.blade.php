@extends ('layouts/mainLayout')

@section ('content')
			<!-- Logo-->
			<section id="header" class="dark">
				<header>                   
                @guest
                <h1>You are not logged in.</h1>
                </header>
                @endguest
                
                    <div class="container">
                   
                    @auth
                        <h1>Hello {{Auth::user()->name}}!</h1>
                    @if(Auth::user()->level < 1) <!-- Level 1 users can edit user data -->
                        <p> You Are a Registered user.</p>
                        <p> We are coming up with new features for you soon.</p>
                    @else
                    <p> You Are a Level - {{Auth::user()->level}} Admin.</p>
                    @include ('layouts.errors')
                    </div>
                
                    <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           Your Tools
                                        </div>	
                                        
                                        <div>
                                            <a href="/posts/create" class="btn btn-info btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> Add Entry</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="/posts" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> Show All Entries</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="/users/" class="btn btn-warning btn-lg btn-block" role="button"><span class="glyphicon glyphicon-list-alt"></span> Show All Users</a>
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