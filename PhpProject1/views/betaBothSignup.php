<?php
include('Assets/pageHeader.php');
?>

<div  class="container topDiv center" style="margin-top: 70px; margin-bottom: 50px; padding-bottom: 35px; text-align: center; max-width: 80%; border-bottom: 1px solid #eee; ">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2>Recruit Chute is coming soon!</h2>
          <p>Select either player or coach below if you would like to be notified when Recruit Chute is ready.</p>
        </div>
      </div>
</div>

<div id="signup2" class="container signup">
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

<?php include('Assets/pageFooter.php');
