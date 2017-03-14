<?php
include('Assets/pageHeader.php');
?>

<body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
		<div class="container">
			<h1>Signing up as a coach!</h1>
			<p>You must finish the sign up process & make changes to your profile for it to go live</p>
		</div>
    </div>
	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">RecuitChute</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="<?php echo HOME;?>signup/coachSignup1">About You</a></li>
			<li class="active"><a href="<?php echo HOME;?>signup/coachSignup2">Where are you from</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup3">School / Club</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup4">Account info</a></li>
			<p class="navbar-text">Finished!</p>
		</ul>
	</div>
	</nav>
	<div class="container">
		<form class="" method="post" action="#">
			
			<!-- State Selection -->
			<div class="form-group">
				<label class="cols-sm-2 control-label" for="state">Which state are you based out of?</label>
				<div class="cols-sm-10">
					<div class="input-group">		
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<select id="state" name="state" class="form-control">
							<option value="0">Select a State</option>
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
			<div class="form-group">
				<label for="city" class="cols-sm-2 control-label">City</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="city" id="city"  placeholder="Enter your City"/>
					</div>
				</div>	
			</div>
			
			<div class="form-group">
				<label for="zip" class="cols-sm-2 control-label">Zip Code</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="zip" id="zip"  placeholder="Enter your Zip Code"/>
					</div>
				</div>
			</div>			
			<hr>
			<!-- Next Button -->
			<div class="form-group ">
				<a href="<?php echo HOME;?>signup/coachSignup3" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Next</a>
			</div>
		</form>
	</div>

<?php include('Assets/pageFooter.php');
