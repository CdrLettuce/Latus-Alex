<?php
include('Assets/pageHeader.php');
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container text-center">
                <h1>Signing up as a Coach!</h1>
                <p>You must finish the sign up process & make changes to your profile for it to go live</p>
        </div>
</div>

<!-- Navigation bar -->
<nav class="navbar navbar-default">
    <div class="container-fluid col-lg-8 col-lg-offset-3">
        <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo HOME;?>signup/coachSignup1">Account Info</a></li>
                <li><a href="<?php echo HOME;?>signup/coachSignup2">About You</a></li>
                <li><a href="<?php echo HOME;?>signup/coachSignup3">Where are you from</a></li>
                <li><a href="<?php echo HOME;?>signup/coachSignup4">School / Club</a></li>		
                <li><a href="#">Finished!</a></li>
        </ul>
    </div>
</nav>

<!-- Body -->
<div class="container">
        <form class="" method="post" action="#">
                <!-- Phone number input -->
                <div class="form-group">
                        <label for="phone" class="cols-sm-2 control-label">Phone Number</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your phone number"/>
                                </div>
                        </div>
                </div>
                <!-- Email(username) input -->
                <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Email</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email address"/>
                                </div>
                        </div>	
                </div>
                <!-- Password input -->
                <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="password" id="password"  placeholder="Enter a password"/>
                                </div>
                        </div>	
                </div>
                <!-- Password Verification -->
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
                        <a href="<?php echo HOME;?>signup/coachSignup2" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Next</a>
                </div>	
        </form>
</div>

<?php include('Assets/pageFooter.php');
