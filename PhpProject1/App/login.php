        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://recruitchute.io/index.php" style='padding-top:10px;'><img src="../Assets/images/logo_trans.png" alt="logo" height="73" width="213"></a>
                </div>
                <div class="container">
                    <div id="navbar" class="navbar-collapse collapse link2">
                        <form class="navbar-form navbar-right" action="<?php echo HOME;?>login/checkLogin" method="post">
                            <!--<button type="submit" id='sign-in' class="btn btn-success">Sign in</button>-->
                            <a class="btn btn-success" id="" href="javascript:window.location.reload(true)" role="button">Sign In</a>
                            <!--<button type="submit" class="btn btn-danger">Sign up</button>-->
                            <a class="btn btn-danger" id="" href="http://recruitchute.io/pp/bothSignup" role="button">Sign Up</a>
                        </form>
                    </div><!--/.navbar-collapse -->
                </div>
            </div>
        </nav>
<div  class = "container-fluid top-marg" ng-controller='loginController as lc'>

    <div class = "row">
        <!--Modal for sent confirmation-->
        <div id="modalConfirm" class="modal">
            <!-- Modal content -->
            <div class="modal-confirm">
                <div class="modal-body">
                    <span class="close"><i class="fa fa-window-close" aria-hidden="true"></i></span>
                    <h3>Incorrect login information, please try again</h3>
                </div>
            </div>
        </div>  

        <!--Login Module-->
        <div id = "login-holder">
            <div id = "login-jumbotron" class = "col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 well">

                <p>
                    <span class = "col-sm-offset-1 col-sm-10 h2">
                        Please Sign In
                    </span>
                </p>
                <div ng-show="lc.error" class="alert alert-danger">{{lc.error}}</div>
                <!-- Login Form Module -->
                <form name='form' class="form-horizontal" ng-submit="lc.login()" role="form">
                    <!--Username / Password -->
                    <div class="form-group" >
                        <label for="username" >Email Address</label>
                        <div class="col-sm-offset-1 col-sm-10">
                            <input type="text" placeholder="Enter your email address" name="username" id="username" class="form-control" ng-model="lc.user.username" required autofocus/>
                        </div>
                    </div>
                    <!--Password-->
                    <div class="form-group" >
                        <label for="pwd">Password</label>
                        <div class="col-sm-offset-1 col-sm-10">
                            <input type="password" name='password' class="form-control" id="pwd" placeholder="Password" ng-model="lc.user.password" required />
							
							                      </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 right-align">
                            <button type="submit"  class="btn btn-primary"  >
                                <span class = "glyphicon glyphicon-ok"></span>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- End Login Form Module -->

            </div>
        </div>