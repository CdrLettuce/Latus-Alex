<?php
include('Assets/pageHeader.php');
?>

<body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Signing up as a Coach!</h1>
			<p>You must finish the sign up process & make changes to your profile for it to go live</p>
		</div>
	</div>
	
	<!-- Navigation bar -->
	<nav id="mainForm" class="navbar navbar-default">
	<div class="container-fluid col-lg-8 col-lg-offset-4">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo HOME;?>signup/coachSignup1">School / Club</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup2">About You</a></li>
			<li class="active"><a href="<?php echo HOME;?>signup/coachSignup3">Account Info</a></li>		
			<p class="navbar-text">Finished!</p>
		</ul>
	</div>
	</nav>
	<div class="container">
		<form class="" method="post" action="#">		
			<div class="form-group">
				<label for="phone" class="cols-sm-2 control-label">Phone Number</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your phone number"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Email</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email address"/>
					</div>
				</div>	
			</div>
			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="password" id="password"  placeholder="Enter a password"/>
					</div>
				</div>	
			</div>
			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Password Verification</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="verify" id="verify"  placeholder="Re-type password"/>
					</div>
				</div>	
			</div>
	
			
			<hr>
			<div class="form-group ">
				<a href="<?php echo HOME;?>signup/coachSignup4" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Summary</a>
			</div>	
		</form>
	</div>


<?php include('Assets/pageFooter.php');
