<?php
include('appHeader2.php');
?>
<div class="top-marg" ng-controller='homeController as ex'>
    <div class='row container-fluid'>
        <div class='col-lg-12 center-text'>
                <h2>Recruit Chute Application Home</h2>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
                
            </div>
        </div>
        <div class="col-lg-8">
            <div data-toggle="collapse" data-target="#hsearch" class="home-container">
                <h3>Search
                    <span id="search" class="glyphicon glyphicon-plus"></span>
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
                
            </div>
        </div>
    </div>
    <div id="hsearch" class="collapse" class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="data-container">
                <form class="" method="post" action="<?php echo HOME;?>signup/playerSignupFinal">		
                    <!-- Search input -->
                    <div class="form-group ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="search" id="search"  placeholder="Type a players first and last name to search"/>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="submit" name="Submit" value="Search" class="btn btn-primary btn-lg btn-block login-button">
                    </div>
                </form>   
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div data-toggle="collapse" data-target="#hprofile" class="home-container">
                <h3>Complete your profile
                     <span id="complete-profile" class="glyphicon glyphicon-plus"></span>
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
    </div>
    <div id="hprofile" class="collapse" class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="data-container">
                <form class="" method="post" action="<?php echo HOME;?>signup/playerSignupFinal">
                    <!-- Position select -->
                    <div class="form-group ">
                        <label class="cols-sm-2 control-label" for="position">Primary Position (You can add more later!)</label>
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <select id="position" name="position" ng-model='ex.item.position' class="form-control">
                                    <option value="0">Select position</option>
                                    <option value="1">Goalkeeper</option>
                                    <option value="2">Right Back</option>
                                    <option value="3">Left Back</option>
                                    <option value="4">Sweeper</option>
                                    <option value="5">Stopper</option>
                                    <option value="6">Right Midfielder</option>
                                    <option value="7">Left Midfielder</option>
                                    <option value="8">Defensive Midfielder</option>
                                    <option value="9">Striker</option>
                                    <option value="10">Forward</option>				
                            </select>
                            </div>			
                        </div>					
                    </div>
                    <!-- Profile Picture input -->
                    <div class="form-group ">
                            <label for="Bio" class="control-label">Profile picture</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="profile-picture" id="profile-picture" ng-model='ex.item.picture' />
                            </div>
                    </div> 
                    <!-- Bio input -->
                    <div class="form-group ">
                            <label for="Bio" class="control-label">Bio</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <textarea  class="form-control" name="bio" id="bio" ng-model='ex.item.bio' placeholder="Tell us more about yourself!"></textarea>
                            </div>
                    </div>     
                    <!-- Video input -->
                    <div class="form-group ">
                            <label for="video" class="control-label">Video</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="video" id="video" ng-model='ex.item.video' placeholder="Enter a youtube video url (Ex: https://youtube.com/watch?2aa-7ks9 )"/>
                            </div>
                    </div>
                    <!-- Height input -->
                    <div class="form-group ">
                            <label for="height" class="control-label">Height</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="height" id="height" ng-model='ex.item.height' placeholder="Enter your height"/>
                            </div>
                    </div>
                    <!-- Weight input -->
                    <div class="form-group ">
                            <label for="weight" class="control-label">Weight</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="weight" id="weight" ng-model='ex.item.weight' placeholder="Enter your weight"/>
                            </div>
                    </div>
                    <hr>
                    <!-- High School input -->
                    <div class="form-group ">
                            <label for="school" class="cols-sm-2 control-label">High School</label>
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.school' placeholder="Enter school"/>
                                    </div>
                            </div>
                    </div>
                    <!-- GPA input -->
                    <div class="form-group ">
                            <label for="gpa" class="control-label">GPA</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="gpa" id="gpa" ng-model='ex.item.gpa' placeholder="Enter your current GPA"/>
                            </div>
                    </div>
                    <!-- Graduation Date input (mm/yyyy)-->
                    <div class="form-group ">
                            <label for="grad" class="cols-sm-2 control-label">Expected Graduation Date</label>
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="grad" id="grad" ng-model='ex.item.grad' placeholder="Ex: 12/9999"/>
                                    </div>
                            </div>
                    </div>
                    <!-- School input
                    <div class="form-group">
                            <label for="school" class="cols-sm-2 control-label">Name of School or Club</label>
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <select id="level" name="level" class="form-control">
                                                <option value="0">Select your college</option>
                                                <option value="1">Alverno College</option>
                                                <option value="2">Beloit College</option>
                                                <option value="3">Cardinal Stritch College</option>
                                                <option value="4">Carroll College</option>
                                                <option value="5">Carthage College</option>
                                                <option value="6">Concordia University-Wisconsin</option>
                                                <option value="7">Edgewood College</option>
                                                <option value="8">Lakeland College</option>
                                                <option value="9">Lawrence University</option>
                                                <option value="10">Maranatha Baptist Bible College</option>
                                                <option value="11">Marian College of Fond du Lac</option>
                                                <option value="12">Marquette University</option>
                                                <option value="13">Medical College of Wisconsin</option>
                                                <option value="14">Milwaukee School of Engineering</option>
                                                <option value="15">Mount Mary College</option>
                                                <option value="16">Mount Senario College</option>
                                                <option value="17">Northland College</option>
                                                <option value="18">Ripon College</option>
                                                <option value="19">St. Norbert College</option>
                                                <option value="20">Silver Lake College</option>
                                                <option value="21">University of Wisconsin Eau Claire</option>
                                                <option value="22">University of Wisconsin Green Bay</option>
                                                <option value="23">University of Wisconsin LaCrosse</option>
                                                <option value="24">University of Wisconsin Madison</option>
                                                <option value="25">University of Wisconsin Milwaukee</option>
                                                <option value="26">University of Wisconsin Oshkosh</option>
                                                <option value="27">University of Wisconsin Parkside</option>
                                                <option value="28">University of Wisconsin Platteville</option>
                                                <option value="29">University of Wisconsin River Falls</option>
                                                <option value="30">University of Wisconsin Stevens Point</option>
                                                <option value="31">University of Wisconsin Stout</option>
                                                <option value="32">University of Wisconsin Superior</option>
                                                <option value="33">University of Wisconsin Whitewater</option>
                                                <option value="34">Viterbo College</option>
                                                <option value="35">Wisconsin Lutheran College</option>
                                                <option value="36">Wisconsin School of Professional Psychology</option>
                                                <option value="37">Select your club</option>
                                                <option value="38">ACE Soccer Club</option>
                                                <option value="39">Appleton Soccer Club</option>
                                                <option value="40">Baraboo Soccer Club</option>
                                                <option value="41">Bavarian Soccer Club</option>
                                                <option value="42">Beaver Dam United Soccer Club</option>
                                                <option value="43">Belleville Bulldogs Soccer Club</option>
                                                <option value="44">Brookfield Soccer Association</option>
                                                <option value="45">Burlington Youth Soccer Club</option>
                                                <option value="46">Capital East Soccer Club</option>
                                                <option value="47">Chequamegon Bay Soccer Club</option>
                                                <option value="48">Chippewa Strikers Soccer Club</option>
                                                <option value="49">Coulee Region United Soccer Association</option>
                                                <option value="50">Croatian Eagles Soccer Club</option>
                                                <option value="51">Delavan Soccer Club</option>
                                                <option value="52">East Troy Youth Soccer</option>
                                                <option value="53">Elkhorn Youth Soccer EYSC</option>
                                                <option value="54">Elm Grove Soccer Club</option>
                                                <option value="55">FC Green Bay</option>
                                                <option value="56">FC Menasha</option>
                                                <option value="57">FC Milwaukee</option>
                                                <option value="58">Fond du Lac Soccer Association</option>
                                                <option value="59">Fox Valley Unified Soccer Club</option>
                                                <option value="60">Grafton Soccer Club</option>
                                                <option value="61">Green Bay Lightning Soccer Club Inc.</option>
                                                <option value="62">Hartford United Soccer Club</option>
                                                <option value="63">Howard FC</option>
                                                <option value="64">Hudson Soccer Association</option>
                                                <option value="65">Iowa County Youth Soccer Association</option>
                                                <option value="66">Kiel Soccer Club</option>
                                                <option value="67">Kimberly Area Soccer Association</option>
                                                <option value="68">Madison Celtics Youth Soccer Club</option>
                                                <option value="69">Madison FC</option>
                                                <option value="70">Marathon County (MC) United Soccer Club</option>
                                                <option value="71">Marshfield Youth Soccer Association</option>
                                                <option value="72">McFarland Soccer Association</option>
                                                <option value="73">Menomonee Falls Soccer Club</option>
                                                <option value="74">Mequon United Soccer Club</option>
                                                <option value="75">Middleton Yahara Soccer Club (MYSC)</option>
                                                <option value="76">Milton Soccer Club</option>
                                                <option value="77">Milwaukee Kickers Soccer Club</option>
                                                <option value="78">Monona Grove Soccer Club</option>
                                                <option value="79">Mount Horeb Youth Soccer Club</option>
                                                <option value="80">Neenah Soccer Club</option>
                                                <option value="81">New Richmond Soccer Club</option>
                                                <option value="82">Norski Soccer Club</option>
                                                <option value="83">North Shore United Soccer Club</option>
                                                <option value="84">Oak Creek Soccer Club</option>
                                                <option value="85">Oregon Soccer Club</option>
                                                <option value="86">Pewaukee Sussex United Soccer Club</option>
                                                <option value="87">Plymouth Soccer Club</option>
                                                <option value="88">Polonia Youth Soccer Club</option>
                                                <option value="89">Port Washington Soccer Club</option>
                                                <option value="90">Portage Youth Soccer Association</option>
                                                <option value="91">Poynette Area Youth Soccer Organization</option>
                                                <option value="92">Price Soccer Club</option>
                                                <option value="93">Racine Area Soccer Association</option>
                                                <option value="94">Red Cedar Soccer Club</option>
                                                <option value="95">Red Star SC</option>
                                                <option value="96">Regent Soccer Club</option>
                                                <option value="97">Rhinelander Soccer Club</option>
                                                <option value="98">Rice Lake Soccer Asociation</option>
                                                <option value="99">Rock Soccer Club</option>
                                                <option value="100">SC Waukesha, Inc.</option>
                                                <option value="101">Sockers FC Wisconsin</option>
                                                <option value="102">Somerset Soccer Club</option>
                                                <option value="103">South Milwaukee Girls Travel</option>
                                                <option value="104">Stoughton Area Youth Soccer Association</option>
                                                <option value="105">Sun Prairie Soccer Club</option>
                                                <option value="106">Sussex Soccer Club</option>
                                                <option value="107">Synergy Soccer Club</option>
                                                <option value="108">Thunder Area Soccer Kids</option>
                                                <option value="109">Tomah Youth Soccer Assocation</option>
                                                <option value="110">United Hurricanes Soccer Club</option>
                                                <option value="111">United Serbian Youth Soccer Club</option>
                                                <option value="112">United Soccer of Allouez</option>
                                                <option value="113">Wales Soccer</option>
                                                <option value="114">Watertown Soccer Club</option>
                                                <option value="115">Waunakee Area Soccer Club</option>
                                                <option value="116">Whitewater Youth Soccer Club</option>
                                                <option value="117">Williams Bay Soccer Club</option>
                                                <option value="118">Wisconsin Rapids Kickers</option>
                                            </select>
                                    </div>
                            </div>
                    </div>			
                    <div class="form-group">
                            <label class="cols-sm-2 control-label" for="state">Which gender do you coach?</label>
                            <div class="cols-sm-10">
                                    <div class="input-group">	
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <select id="gender" name="gender" class="form-control">
                                                    <option value="1">Select gender</option>
                                                    <option value="2">Mens</option>
                                                    <option value="3">Womens</option>
                                                    <option value="4">Both</option>							
                                            </select>
                                    </div>
                            </div>
                    </div>
                    -->		
                    <hr>
                    <!-- Next Button -->
                    <div class="form-group">
                        <p><button type='button' class='btn btn-primary btn-lg btn-block' ng-click='ex.addPlayerInfo(ex.item)'>Submit</button></p>
                        <!--<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">-->
                    </div>		
		</form>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
        <!--update profile success message -->
        <div class='row container-fluid success-message' ng-show='ex.displaySuccessMessage'>
            <div class='col-xs-11' >
                    {{ex.success_message}}
            </div>
            <div class='col-xs-1'>
                    <span class="glyphicon glyphicon-remove-circle" ng-click="ex.displaySuccessMessage=false"></span>
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div data-toggle="collapse" data-target="#hnews" class="home-container">
                <h3>Recruit Chute News
                    <span id="news" class="glyphicon glyphicon-plus"></span>
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="no-show">
                
            </div>
        </div>
    </div>
    <div id="hnews" class="collapse" class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="data-container">
                <h3>There is no news! 
                    
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
    </div>
</div>

</div>

</div>
