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
				<div class="content style4 featured">
					<div class="container 75%">
						<form method="post" action="#">
							<div class="row ">
                                <div class="12u form-group  form-group-new">
                                <label for="Category">Category:</label>
                                    <select class="form-control-new" id="Category" Label="Select Land Category">
                                        <option>HaatBazar</option>
                                        <option>ChingryLand</option>
                                        <option>Island</option>
                                        <option>Path</option>
                                        <option>Other</option>
                                    </select>
                                </div>

								<div class="12u"><label for="Location">Location  .</label><input type="text" class=" form-control-new" placeholder="Location" /></div>
								<div class="12u"><label for="Size">Size  .</label><input type="text" class=" form-control-new" placeholder="Land Size  in Sq. meters" /></div>
								<div class="12u"><label for="Leassee">Leassee  .</label><input type="text" class=" form-control-new" placeholder="Name Of Leassee (if Any)" /></div>
                                <div class="12u form-group  form-group-new">
                                <label for="Dispute">Dispute Status :  </label>
                                    <select class="form-control-new" id="Dispute" placeholder="Dispute Status">
                                        <option>Under Dispute</option>
                                        <option>No Dispute</option>
                                    </select>
                                </div>
							</div>
							<!-- <div class="row 50%">
								<div class="12u"><textarea name="message" placeholder="Message"></textarea></div>
							</div> -->
							<div class="row">
								<div class="12u">
								<button type="submit" class=" btn-new">Register</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			

@endsection	