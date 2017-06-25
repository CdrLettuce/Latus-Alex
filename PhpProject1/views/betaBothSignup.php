<?php
include('Assets/pageHeader.php');
?>

<div id="signup2" class="container signup top-marg">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 center-text">
            <b><h1></h1></b>
        </div>
        <div class="col-md-12 center-text">
            <b><h1>Sign Up </h1></b>
        </div>
        <div class="col-md-6 icon">
          <h2>Players</h2>
          <span class="glyphicon glyphicon-user logo"></span>
          <p>Find the perfect college team for you. Create a profile and show off your skills by adding pictures, videos, and stats.</p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>signup/playerSignup1" role="button">Player Sign Up &raquo;</a></p>
        </div>
        <div class="col-md-6 icon">
          <h2>Coaches</h2>
          <span class="glyphicon glyphicon-list-alt logo"></span>
          <p>Find the best players for your college team. Search for players based on location, skill, and academic performance. </p>
          <p><a class="btn btn-primary" id="" href="<?php echo HOME;?>signup/coachSignup1" role="button">Coach Sign Up &raquo;</a></p>
       </div>
      </div>
    </div>

<?php include('Assets/pageFooter.php');
