<?php
include('Assets/pageHeader.php');
?>
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Get recruited, fast</h1>
        <p>The world's best college sports recruiting network. Period.</p>
        <p><a class="btn btn-primary btn-lg" href="#learnMore" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div id="signup" class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>Players</h2>
          <p>Find your perfect college team for you. Create a profile and show off your skills by adding pictures, videos, and stats.</p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>pp/playerSignup" role="button">Player Sign Up &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Coaches</h2>
          <p>Find the best players for your college team. Search for players based on location, skill, and academic performance. </p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>pp/coachSignup" role="button">Coach Sign Up &raquo;</a></p>
       </div>
      </div>
    </div>

    <div id="learnMore" class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 icon">
            <h2>How it works</h2>
        </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-thumbs-up logo"></span>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-education logo"></span>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
       </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-plane logo"></span>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
      </div>
    </div>
<?php include('Assets/pageFooter.php');