<?php
include('Assets/pageHeader.php');
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
            <h1>Signing up as a Coach!</h1>
            <p>You must finish the sign up process & make changes to your profile for it to go live</p>
    </div>
</div>

<!-- Navigation bar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
                <a class="navbar-brand" href="#">RecuitChute</a>
        </div>
        <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo HOME;?>signup/coachSignup1">About You</a></li>
                <li><a href="<?php echo HOME;?>signup/coachSignup2">Where are you from</a></li>
                <li><a href="<?php echo HOME;?>signup/coachSignup3">School / Club</a></li>
                <li><a href="<?php echo HOME;?>signup/coachSignup4">Account info</a></li>

                <p class="navbar-text">Finished!</p>
        </ul>
    </div>
</nav>
<div class="container">
        <form class="" method="post" action="#">

                <!-- First name and Last name inputs -->
                <div class="form-group">
                        <label for="firstName" class="cols-sm-2 control-label">First Name</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name"/>
                                </div>
                        </div>
                </div>
                <div class="form-group">
                        <label for="lastName" class="cols-sm-2 control-label">Last Name</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name"/>
                                </div>
                        </div>	
                </div>
                <div class="form-group">
                        <label class="cols-sm-2 control-label" for="state">What level do you coach?</label>
                        <div class="cols-sm-10">
                                <div class="input-group">	
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <select id="level" name="level" class="form-control">
                                                <option value="1">Select level</option>
                                                <option value="2">High School</option>
                                                <option value="3">College</option>
                                                <option value="4">Club</option>				
                                        </select>
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="cols-sm-2 control-label" for="state">Which gender do you coach?</label>
                        <div class="cols-sm-10">
                                <div class="input-group">	
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <select id="gender" name="gender" class="form-control">
                                                <option value="1">Select gender</option>
                                                <option value="2">Mens</option>
                                                <option value="3">Womens</option>	
                                        </select>
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
