<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="icon" href="../../favicon.ico">

    <title>Recruit Chute</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- asses main script file -->
    <script src='<?php echo HOME.DS; ?>Assets/js/script.js'></script>
    
    <!-- Link to main css document for the site -->
    <link rel="stylesheet" href="<?php echo HOME.DS; ?>Assets/css/main.css">
    <!--<link rel="stylesheet" href="<?php echo HOME.DS; ?>Assets/css/main.css">-->
    <!--<link rel-"stylesheet" href="http://recruitchute.io//Assets/css/main.css">-->
    
    <!-- Link to the two main fonts used in the site-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <!-- start session -->
    <?php
        session_start();
    ?>
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://recruitchute.io/index.php">Recruit Chute</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post">
            <div id='customer-name'>
                <span id='user'>
                    <?php if (isset($_SESSION['customer_id'])){
                        echo $_SESSION['name'] ;
                    }?>
                </span>
                <span id='sign-out'>Sign out</span>
            </div>
            <div class="form-group">
              <input type="text" placeholder="Email" id="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" id="pwd" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <!--<button type="submit" class="btn btn-danger">Sign up</button>-->
            <a class="btn btn-danger" id="" href="<?php echo HOME;?>pp/bothSignup" role="button">Sign Up</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


