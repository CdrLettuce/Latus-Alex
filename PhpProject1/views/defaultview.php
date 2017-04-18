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
          
          <h4>RecruitChute helps expand your network and makes you more visible to college and club recuiters. Once you create a profile, you can add stats, videos, and a calendar of upcoming games. All of your connections can see your profile and if a coach likes what they see, they may recruit you!!</h4>
        
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
        <div class="col-md-12 container howitworks icon">
            <h1>LOOKING FOR YOUR NEXT SUPERSTAR?</h1>
                <div class="row howitworks">
                    <div class="col-sm-offset-3 col-sm-6">
                        <h4>RecruitChute allows you to recruit whilst on the go! Have instant access to the tools that will allow you to search the nation for your next recruit based on position, stats, GPA, and much more. Save time and money by being able to view player profiles, analyze highlight tapes, synch calendars and discover new talent all at the touch of your fingertips</h4>
                    </div>
                </div>
            <h2>RecruitChute Services</h2>           
        </div>
          <div class="container services">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-2">
                        <h4>Narrow down your recruit targets with advanced search</h4>
                    </div>
                    <div class="col-sm-offset-1 col-sm-2">
                        <h4>Increase time efficiency by viewing player profiles before visits</h4>
                    </div>
                    <div class="col-sm-offset-1 col-sm-2">                
                        <h4>Recruit Smarter, Not Harder</h4>
                    </div>
                </div>
           </div>
      </div>
    </div>
    <div id="learnMore" class="container gray">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 icon">
            <h1>THE RECRUITCHUTE DIFFERENCE</h1>
            <h2>Our back four...</h1>
        </div>
        
        
	 <div class="col-sm-offset-0 col-sm-3 backFour icon">
          <i class="fa fa-mobile-phone fa-5x blue" aria-hidden="true"></i>
          <h4>Take RecruitChute with you, we're mobile friendly!</h4>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-sm-offset-0 col-sm-3 backFour icon">
          <i class="fa fa-graduation-cap fa-5x blue" aria-hidden="true"></i>
          <h4>Gain the ability to search the nation for unseen talent and rising stars</h4>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-sm-offset-0 col-sm-3 backFour icon">
          <i class="fa fa-globe fa-5x blue" aria-hidden="true"></i>
          <h4>We give high school athletes the encouragement and opportunity to gain an education because of the sport they love</h4>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-sm-offset-0 col-sm-3 backFour icon">
          <i class="fa fa-globe fa-5x blue" aria-hidden="true"></i>
          <h4>We're supporting the growth of soccer in the United States</h4>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
       </div>  
      </div>
    </div>
<?php include('Assets/pageFooter.php');
