<?php
include('Assets/pageHeader.php');
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Signing up as a coach!</h1>
			<p>You must finish the sign up process & make changes to your profile for it to go live</p>
		</div>
	</div>
	<div class="container">
		<form class="" id="signupFormCoach" method="post" action="<?php echo HOME;?>signup/coachSignupFinal">		
                        <!-- First name and Last name inputs -->
			<div class="form-group col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3">
				<label for="firstName" class="control-label">First Name</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
					<input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name" required/>
				</div>
			</div>
			<div class="form-group col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3">
				<label for="lastName" class="control-label">Last Name</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
					<input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name" required/>
				</div>
			</div>
                        <!-- Email(username) -->
			<div class="form-group col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3">
				<label for="email" class="cols-sm-2 control-label">Email</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required/>
					</div>
				</div>	
			</div>
                        <!-- Phone input -->
                        <div class="form-group col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3">
				<label for="phone" class="cols-sm-2 control-label">Phone Number (For Verification)</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="phone" id="phone"  placeholder="Ex: 555-555-5555" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required/>
					</div>
				</div>
			</div> 
                        <!-- Password input -->
			<div class="form-group col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3">
				<label for="password" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="password" id="password"  placeholder="Enter a password" required/>
					</div>
				</div>	
			</div>
                        <!-- Confirm password -->
			<div class="form-group col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3">
				<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="verify" id="verify"  placeholder="Re-type password" required/>
					</div>
					<div class="input-group">
						<span class="input-group-addon input-primary" style="visibility:hidden;"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<p style = "color:red;" id = "message"></p>
					</div>					
				</div>	
			</div>
                        <!-- Level select input -->
                        <div class="form-group col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3">
  				<label class="cols-sm-2 control-label" for="state">What level do you coach?</label>
		  		<div class="cols-sm-10">
					<div class="input-group">	
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
	 					<select required id="level" name="level" class="form-control">
							<option value="">Select level</option>
							<option value="1">Club</option>
							<option value="2">College</option>
							<option value="3">High School</option>				
						</select>
					</div>
				</div>
			</div>                      
                        <!--Bio Input-->
                        <div class="form-group col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3">
				<label class="cols-sm-2 control-label" for="state">Select your state</label>
				<div class="cols-sm-10">
					<div class="input-group">		
						<span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
						<select required id="state" name="state" class="form-control">
							<option value="">Select state</option>
							<option value="1">Alabama</option>
							<option value="2">Alaska</option>
							<option value="3">Arizona</option>
							<option value="4">Arkansas</option>
							<option value="5">California</option>
							<option value="6">Colorado</option>
							<option value="7">Connecticut</option>
							<option value="8">Delaware</option>
							<option value="9">Florida</option>
							<option value="10">Georgia</option>
							<option value="11">Hawaii</option>
							<option value="12">Idaho</option>
							<option value="13">Illinois</option>
							<option value="14">Indiana</option>
							<option value="15">Iowa</option>
							<option value="16">Kansas</option>
							<option value="17">Kentucky</option>
							<option value="18">Louisiana</option>
							<option value="19">Maine</option>
							<option value="20">Maryland</option>
							<option value="21">Massachusetts</option>
							<option value="22">Michigan</option>
							<option value="23">Minnesota</option>
							<option value="24">Mississippi</option>
							<option value="25">Missouri</option>
							<option value="26">Montana</option>
							<option value="27">Nebraska</option>
							<option value="28">Nevada</option>
							<option value="29">New Hampshire</option>
							<option value="30">New Jersey</option>
							<option value="31">New Mexico</option>
							<option value="32">New York</option>
							<option value="33">North Carolina</option>
							<option value="34">North Dakota</option>
							<option value="35">Ohio</option>
							<option value="36">Oklahoma</option>
							<option value="37">Oregon</option>
							<option value="38">Pennsylvania</option>
							<option value="39">Rhode Island</option>
							<option value="40">South Carolina</option>
							<option value="41">South Dakota</option>
							<option value="42">Tennessee</option>
							<option value="43">Texas</option>
							<option value="44">Utah</option>
							<option value="45">Vermont</option>
							<option value="46">Virginia</option>
							<option value="47">Washington</option>
							<option value="48">West Virginia</option>
							<option value="49">Wisconsin</option>
							<option value="50">Wyoming</option>
						</select>
					</div>			
				</div>					
			</div>
			<!-- City Input -->
			<div class="form-group col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-3">
				<label for="city" class="cols-sm-2 control-label">City</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="city" id="city"  placeholder="Enter city" required/>
					</div>
				</div>	
			</div>
			<!-- Zip code input -->
			<div class="form-group col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3">
				<label for="zip" class="cols-sm-2 control-label">Zip Code</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="zip" id="zip"  placeholder="Ex: 55555" pattern="\d{5}" required/>
					</div>
				</div>
			</div>                                               
			<!-- Next Button -->
			<div class="form-group col-sm-4 col-sm-offset-4">
                            <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">
                        </div>
		</form>
	</div>

<?php include('Assets/pageFooter.php');
