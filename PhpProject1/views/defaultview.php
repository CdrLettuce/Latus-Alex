<?php
include('Assets/pageHeader.php');
?>
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron minheight">
      <div class="container">
        <h1>Recruit Smarter, Not Harder</h1>
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
          <span class="glyphicon glyphicon-user logo blue"></span>
          <p>Find the perfect college team for YOU. Create a profile, upload video highlights, pictures and stats, then connect with college coaches across the nation to show why their team needs YOU!</p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>signup/playerSignup1" role="button">Player Sign Up &raquo;</a></p>
        </div>
        <div class="col-md-6 icon">
          <h2>Coaches</h2>
          <span class="glyphicon glyphicon-list-alt logo blue"></span>
          <p>Find the perfect players for your college team. Search the nation for specific players based on age, location, position, academic performance, and much more! </p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>signup/coachSignup1" role="button">Coach Sign Up &raquo;</a></p>
       </div>
      </div>
    </div>
    <div id="playerInfo" class="minheight player">
      
      <div class="row">
        <div class="col-md-12">
             <b><h1>How it works</h1></b>
        </div>              
        <div class="col-sm-offset-3 col-sm-6 playerInfo">
          
          <p>RecruitChute helps expand your network and makes you more visible to college and club recuiters. Once you create a profile, you can add stats, videos, and a calendar of upcoming games. All of your connections can see your profile and if a coach likes what they see, they may recruit you!! </p>
        
       </div>
          
          <div class="col-md-12">
              <h2> Be proactive and connect with: </h2>           
          </div>
          <div class="container">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <h3>College Coaches</h3>
                    </div>
                    <div class="col-sm-offset-1 col-sm-2">
                        <h3>High School Coaches</h3>
                    </div>
                    <div class="col-sm-offset-1 col-sm-2">                
                        <h3>Teammates</h3>
                    </div>
                </div>
           </div>
      </div>
    </div>
    <div id="coachInfo" class="minheight">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 howitworks icon">
            <h1>LOOKING FOR YOUR NEXT SUPERSTAR?</h1>
                <p>RecruitChute allows you to recruit whilst on the go! Have instant access to the tools that will allow you to search the nation for your next recruit based on position, stats, GPA, and much more. Save time and money by being able to view player profiles, analyze highlight tapes, synch calendars and discover new talent all at the touch of your fingertips</p>
                <h2>RecruitChute Services</h2>           
        </div>
          <div class="container">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <h3>Narrow down your recruit targets with advanced search</h3>
                    </div>
                    <div class="col-sm-offset-1 col-sm-2">
                        <h3>Increase time efficiency by viewing player profiles before visits</h3>
                    </div>
                    <div class="col-sm-offset-1 col-sm-2">                
                        <h3>Recruit Smarter, Not Harder</h3>
                    </div>
                </div>
           </div>
      </div>
    </div>
    <div id="learnMore" class="container gray">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 icon">
            <h1>The RecruitChute Difference</h1>
        </div>
        
	 <div class="col-md-4 icon">
          <i class="fa fa-mobile-phone fa-5x blue" aria-hidden="true"></i>
          <p>Access your profile, message other players and coaches, and upload new content all while on the go! RecruitChute is mobile-friendly and available anywhere you go.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4 icon">
          <i class="fa fa-graduation-cap fa-5x blue" aria-hidden="true"></i>
          <p>We give high school athletes the opportunity to gain an education while competing in the sport they love. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4 icon">
          <i class="fa fa-globe fa-5x blue" aria-hidden="true"></i>
          <p>RecruitChute keeps players and coaches connected to their communities. One percent of all revenue is donated to local youth sports programs. </p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
       </div>
      </div>
    </div>
<?php include('Assets/pageFooter.php');
