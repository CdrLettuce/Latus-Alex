<?php
include('Assets/pageHeader.php');
?>

<div  class="container topDiv center" style="margin-top: 70px; margin-bottom: 50px; padding-bottom: 35px; text-align: center; max-width: 80%;  ">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2>Thank you <?php echo ucfirst($_POST['first_name']); ?>!</h2>
          <p><a class="btn btn-primary btn-lg" href="recruitchute.io" role="button">Take me to my profile &raquo;</a></p>
        </div>
      </div>
</div>

<?php include('Assets/pageFooter.php');
