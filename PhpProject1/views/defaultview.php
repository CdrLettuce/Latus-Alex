<?php
include('Assets/pageHeader.php');
?>
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron minheight">
      <div class="container">
        <h1>Step Up, Be Noticed, Get Recruited</h1>
        <p>Your recruitment journey begins here</p>
        <p><a class="btn btn-primary btn-lg" href="#learnMore" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div id="signup" class="container signup">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
            <b><h1>Sign Up </h1></b>
        </div>
        <div class="col-md-6 icon">
          <h2>Players</h2>
          <span class="glyphicon glyphicon-user logo"></span>
          <p>Find the perfect college team for you. Create a profile and show off your skills by adding pictures, videos, and stats.</p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>pp/playerSignup" role="button">Player Sign Up &raquo;</a></p>
        </div>
        <div class="col-md-6 icon">
          <h2>Coaches</h2>
          <span class="glyphicon glyphicon-list-alt logo"></span>
          <p>Find the best players for your college team. Search for players based on location, skill, and academic performance. </p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>pp/coachSignup" role="button">Coach Sign Up &raquo;</a></p>
       </div>
      </div>
    </div>
    <div id="playerInfo" class="container minheight gray">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
             <b><h1>How it works</h1></b>
        </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-user logoBig"></span>
          <!--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-8 howitworks icon">
          <h1>Get Recruited</h1>
          <p>Recuitchute helps expand your network and makes you more visible to college and club recuiters. Once you create a profile, you can add stats, videos, and a calendar of upcoming games. All of your connections can see your profile and if a coach likes what they see, they may recruit you!! </p>
          <p>Connect with:</p>
		<ul>
			<li>Current coaches and teams</li>
			<li>Club teams</li>
			<li>College coaches</li>
		</ul>          
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
       </div>
      </div>
    </div>
    <div id="coachInfo" class="container minheight">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8 howitworks icon">
            <h1>Find Recruits</h1>
                <p>Save time, money, and travel expenses by viewing player profiles before seeing them in person. Survey player calendars to see the next time they are competing in your area. Analyze videos and stats to narrow down your list of potential recruits. </p>
 		<p>Search by:</p>
 		<ul>
 			<li>Position</li>
 			<li>Location</li>
 			<li>Graduation date</li>
 		</ul>            <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-list-alt logoBig"></span>
          <!--<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
       </div>
      </div>
    </div>
    <div id="learnMore" class="container gray">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 icon">
            <h1>The Recruit Chute Difference</h1>
        </div>
        
	 <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-phone logo"></span>
          <p>Access your profile, message other players and coaches, and upload new content all while on the go! Recruit Chute is mobile-friendly and available anywhere you go.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-education logo"></span>
          <p>We give high school athletes the opportunity to gain an education while competing in the sport they love. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4 icon">
          <span class="glyphicon glyphicon-piggy-bank logo"></span>
          <p>Recruit Chute keeps players and coaches connected to their communities. One percent of all revenue is donated to local youth sports programs. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
       </div>
      </div>
    </div>
<?php include('Assets/pageFooter.php');
