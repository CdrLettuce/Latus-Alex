<?php
include('appHeader1.php');
?>


<div  class = "container-fluid top-marg" ng-controller='loginController as lc'>

    <div class = "row">

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
        
