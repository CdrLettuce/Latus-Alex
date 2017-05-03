<?php
include('appHeader2.php');
?>
<div  id='homeContainer' class="xtra-top-pad" ng-controller='homeController as ex'>

    <div class='row container-fluid'>
        <div class="col-lg-6 col-sm-6 col-sm-offset-1 home-container">
            <div  id='update-profile-header' data-toggle="collapse" data-target="#updateForm">
                <h4 class="col-sm-11">
                    <span class=""><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                    Update your profile
                </h4>
                <h4 class="col-sm-1"><i class="fa fa-caret-square-o-down fa" aria-hidden="true"></i></h4>
            </div>
			<hr>
            <form id="updateForm" class="collapse" method="" action="">
                <!-- Position current -->
                <div class="form-group col-md-4 col-sm-4 ">
                    <p><b>Primary Position:</b></p>
                </div>
                <div class="form-group col-md-3 col-sm-3 ">
                    <p>{{ex.info2.position}}</p>
                </div>
                <div class='row container-fluid'>
                    <!-- Position select -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                                <select id="position1" name="position1" ng-model='ex.item.position1' class="form-control">
                                    <option value="0">Select new position</option>
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
                </div>
                
                <div class='row container-fluid'>
                    <!-- Position 2 current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Secondary Position:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info3.position}}</p>
                    </div>

                    <!-- Position 2 select -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                            <select id="position2" name="position2" ng-model='ex.item.position2'  class="form-control">
                                    <option value="0">Select new position</option>
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
                </div>
                
                <div class='row container-fluid'>
		
                    <!-- Position 3 current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Tertiary Position:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info4.position}}</p>
                    </div>
                    <!-- Position 3 select -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                                <select id="position3" name="position3" ng-model='ex.item.position3' class="form-control">
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
                </div>
                <!--Profile Picture input-->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="Bio" class="control-label">Profile picture</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="file" class="" name="picture" id="picture" ng-model='ex.item.picture' accept="image/*"/>
                        </div>
                </div>
                <div class='row container-fluid'>
                    <!-- High School current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Profile Picture:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.picture}}</p>
                    </div>   
                    <!-- High School input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.picture'/>
                                    </div>
                            </div>
                    </div>
                </div>
				
                <hr>
                
                <div class='row container-fluid'>
                    <!-- High School current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>High School:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.h_school}}</p>
                    </div>   
                    <!-- High School input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.school'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- GPA current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>GPA:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.gpa}}</p>
                    </div>
                    <!-- GPA input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="gpa" id="gpa" ng-model='ex.item.gpa' />
                        </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- GPA current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Graduation Year:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.graduation_date}}</p>
                    </div>
                    <!-- Graduation Date input (mm/yyyy)-->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="grad" id="grad" ng-model='ex.item.grad'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <hr>              
                
                <div class='row container-fluid'>
                    <!-- Birth Date  current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Birth Date:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.dob}}</p>
                    </div>
                    <!-- Birth Date input (mm/yyyy)-->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-birthday-cake fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="birth" id="birth" ng-model='ex.item.birth'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Height current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Height:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.height_feet}}'{{ex.info2.height_inches}}"</p>
                    </div>
                    <!-- Height feet input -->
                    <div class="form-group col-md-2 col-sm-2 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="feet" id="feet" ng-model='ex.item.feet'/>
                            </div>
                    </div>
                    <!-- Height inches input -->
                    <div class="form-group col-md-2 col-sm-2 ">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="inches" id="inches" ng-model='ex.item.inches'/>
                        </div>
                    </div>      
                </div>
                
                <div class='row container-fluid'>
                    <!-- Weight current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Weight:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.weight}}</p>
                    </div>
                    <!-- Weight input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="weight" id="weight" ng-model='ex.item.weight'/>
                            </div>
                    </div>
                </div>
                
                <hr>
                
                <div class='row container-fluid'>
                    <!-- Bench Press current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Bench Press (lbs):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.bench}}</p>
                    </div>
                    <!-- Bench Press input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="bench" id="bench" ng-model='ex.item.bench' />
                        </div>
                    </div>
                </div>
             
                <div class='row container-fluid'>
                    <!-- Squat current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Squat (lbs):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.squat}}</p>
                    </div>
                    <!-- Squat input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="squat" id="squat" ng-model='ex.item.squat' />
                        </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Mile current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Mile Time(Ex: 06:20:00):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.mile_time}}</p>
                    </div>
                    <!-- mile input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="mile" id="mile" ng-model='ex.item.mile'/>
                        </div>
                    </div>
                </div>
				
                <div class='row container-fluid'>
                    <!-- Bench Press current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>40 Yard Dash Time(Ex: 00:04:58):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.dash_time}}</p>
                    </div>
                    <!-- 40 input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="yard" id="yard" ng-model='ex.item.yard'/>
                        </div>
                    </div>
                </div>
                
		<hr>
                
                <div class='row container-fluid'>
                    <!-- Video URL current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Video (URL):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.youtube_urls}}</p>
                    </div>
                    <!-- Video input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-film fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="video" id="video" ng-model='ex.item.video' />
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Bio current -->
                    <div class="form-group col-md-2 col-sm-2 ">
                        <p><b>Biography:</b></p>
                    </div>
                    <div class="form-group col-md-10 col-sm-10 ">
                        <p>{{ex.info2.bio}}</p>
                    </div>
                </div>
                <div class='row container-fluid'>
                    <!-- Bio input -->
                    <div class="form-group col-md-12">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <textarea  class="form-control" name="bio" id="bio" ng-model='ex.item.bio'></textarea>
                            </div>
                    </div>
                </div>
                
		<hr>
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

                <!-- Next Button -->
                <div class="form-group">
                    <p><button type='button' class='btn btn-primary btn-lg btn-block' ng-click='ex.addPlayerInfo(ex.item)'>Submit</button></p>
                    <!--<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">-->
                </div>		
            </form>
        </div>  
        <div class="col-sm-4 ">
            <div class="home-container search">
                <h4>
                    <span class=""><i class="fa fa-search fa" aria-hidden="true"></i></span>
                    Search
                </h4>	
                <!-- Search input -->
                <div class="form-group ">
                    <div class="form-group col-md-6 col-sm-6">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="searchfirst" id="searchfirst" ng-model='ex.item.searchfirst' placeholder="First Name"/>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="searchlast" id="searchlasst" ng-model='ex.item.searchlast' placeholder="Last Name"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <p><button type='button' class='btn btn-primary btn-lg btn-block login-button' ng-click='ex.searchForPlayer(ex.item)'>Search</button></p>
                </div>
                <p><a href="#/search">Advanced Search</a></p>
                <h3 class='col-xs-12' ng-show="ex.noResults">
                    No players found!
                </h3>
                <div ng-show='ex.displaySearchResults' id='searchResults'>
                    <h4>Search Results: </h4>
                    <table class='table'>
                        <tr ng-repeat='item in ex.players track by $index'
                                            ng-show="item.subject==ex.subject.name">
                            <td class='col-xs-2'>
                                <a ng-click='ex.viewProfile(item.user_id)'>
                                    <i class="fa fa-id-card fa-3x" aria-hidden="true"></i>
                                </a>
                            </td>
                           <td class='col-xs-10'>
                                    <a ng-click='ex.viewProfile(item.user_id)'>
                                        <strong>{{item.first_name}} {{item.last_name}}</strong>
                                    </a>
                                    <p> {{item.product_description}}</p>
                                    <p>{{item.unit_price}}</p>
                         
                            </td>
                        </tr>
                    </table>
                </div>          
            </div> 
        </div>
    </div>
</div>

</div>

</div>
