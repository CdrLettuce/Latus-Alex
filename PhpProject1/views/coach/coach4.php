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
	<!-- Navigation Bar -->
	<nav id="mainForm" class="navbar navbar-default">
	<div class="container-fluid col-lg-8 col-lg-offset-4">
		<ul class="nav navbar-nav">
                        <li><a href="<?php echo HOME;?>signup/coachSignup1">School / Club</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup2">About You</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup3">About You</a></li>	
			<li class="active"><a href="#">Finish!</a></li>
		</ul>
	</div>
	</nav>
	<div class="container text-center">
            <h3>Account Summary</h3>
		<table id="coachConfirmation" class="table-bordered col-md-4 col-md-offset-4">                  
                    <tr>
                        <td class="rightAlign ">
                            School or Club Name :
                        </td>
                        <td class="leftAlign">
                            space saver
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign " >
                            First Name :
                        </td>
                        <td>
                            <?php
                                echo $_POST['fname'];
                                echo $_SESSION['fname']
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign " >
                            Last Name :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign " >
                            Coaching Level :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign">
                            Coached Gender :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign">
                            State :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign ">
                            City :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign ">
                            Zip Code :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign ">
                            Phone Number :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="rightAlign ">
                            Email Address :
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="<?php echo HOME;?>signup/coachSignup1"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>                 
                </table>
        </div>
                       
<?php include('Assets/pageFooter.php');
