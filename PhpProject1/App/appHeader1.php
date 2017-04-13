<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://recruitchute.io/index.php">RecruitChute</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" action="<?php echo HOME;?>login/checkLogin" method="post">
                <!--<button type="submit" id='sign-in' class="btn btn-success">Sign in</button>-->
                <a class="btn btn-success" id="" href="<?php echo HOME;?>App/router.html#/login" role="button">Sign In</a>
                <!--<button type="submit" class="btn btn-danger">Sign up</button>-->
                <a class="btn btn-danger" id="" href="../pp/bothSignup" role="button">Sign Up</a>
              </form>
            </div><!--/.navbar-collapse -->
          </div>
        </nav>