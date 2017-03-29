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
	<nav id="mainForm" class="navbar navbar-default">
	<div class="container-fluid col-lg-8 col-lg-offset-4">
		<ul class="nav navbar-nav">
		
			<li class="active"><a href="<?php echo HOME;?>signup/coachSignup1">School / Club</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup2">About You</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup3">Account info</a></li>
			<p class="navbar-text">Finished!</p>
		
		</ul>
	</div>
	</nav>
	<div class="container">
		<form class="" method="post" action="#">		
			<!-- School input -->
			<div class="form-group">
				<label for="school" class="cols-sm-2 control-label">Name of School or Club</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="school" id="school"  placeholder="Enter name of school or club"/>
					</div>
				</div>
			</div>
                        
			<hr>
			<!-- Next Button -->
			<div class="form-group">
				<a href="<?php echo HOME;?>signup/coachSignup2" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Next</a>
			</div>
		</form>
	</div>

<?php include('Assets/pageFooter.php');
