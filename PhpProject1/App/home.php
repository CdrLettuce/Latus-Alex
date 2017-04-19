<?php
include('appHeader2.php');
?>
<div  id='homeContainer' class="xtra-top-pad" ng-controller='homeController as ex'>

    <div class='row container-fluid'>
        <div class="col-lg-6 col-sm-6 col-sm-offset-1 home-container">
            <h4 data-toggle="collapse" data-target="#updateForm">
                <span class=""><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                Update your profile
            </h4>
			<hr>
            <form id="updateForm" class="collapse" method="" action="">
                <!-- Position select -->
                <div class="form-group col-md-6 col-sm-6 ">
                    <label class="cols-sm-2 control-label" for="position">Primary Position <!--(You can add more later!)--></label>
                    <div class="cols-sm-10">
                        <div class="input-group">	
                        <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <select id="position1" name="position1" ng-model='ex.item.position1' class="form-control">
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
				
				<!-- Position select -->
                <div class="form-group col-md-6 col-sm-6 ">
                    <label class="cols-sm-2 control-label" for="position">Secondary Position <!--(You can add more later!)--></label>
                    <div class="cols-sm-10">
                        <div class="input-group">	
                        <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <select id="position2" name="position2" ng-model='ex.item.position2' class="form-control">
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
				
				<!-- Position select -->
                <div class="form-group col-md-6 col-sm-6 ">
                    <label class="cols-sm-2 control-label" for="position">Tertiary Position <!--(You can add more later!)--></label>
                    <div class="cols-sm-10">
                        <div class="input-group">	
                        <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
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
                <!-- Profile Picture input 
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="Bio" class="control-label">Profile picture</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="file" class="" name="picture" id="picture" ng-model='ex.item.picture' accept="image/*"/>
                        </div>
                </div> -->
                <!-- Video input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="video" class="control-label">Video(URL)</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="video" id="video" ng-model='ex.item.video' placeholder='{{ex.info2.youtube_urls}}' />
                        </div>
                </div>
				<hr>
				<!-- High School input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="school" class="cols-sm-2 control-label">High School</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.school' placeholder="{{ex.info2.h_school}}"/>
                                </div>
                        </div>
                </div>
                <!-- GPA input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="gpa" class="control-label">GPA</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="gpa" id="gpa" ng-model='ex.item.gpa' placeholder="{{ex.info2.gpa}}"/>
                        </div>
                </div>
				<!-- Birth Date input (mm/yyyy)-->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="grad" class="cols-sm-2 control-label">Birth Date</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-birthday-cake fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="birth" id="birth" ng-model='ex.item.birth' placeholder="{{ex.info2.birth}}"/>
                                </div>
                        </div>
                </div>
                <!-- Graduation Date input (mm/yyyy)-->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="grad" class="cols-sm-2 control-label">Expected Graduation Date</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="grad" id="grad" ng-model='ex.item.grad' placeholder="{{ex.info2.graduation_date}}"/>
                                </div>
                        </div>
                </div>
				<hr>
                <!-- Height input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="height" class="control-label">Height(Feet' Inches")</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="height" id="height" ng-model='ex.item.height' placeholder="{{ex.info2.height}}"/>
                        </div>
                </div>
                <!-- Weight input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="weight" class="control-label">Weight(lbs)</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="weight" id="weight" ng-model='ex.item.weight' placeholder="{{ex.info2.weight}}"/>
                        </div>
                </div>
                <!-- Bench Press input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="weight" class="control-label">Bench Press(lbs)</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="bench" id="bench" ng-model='ex.item.bench' placeholder="{{ex.info2.bench}}"/>
                        </div>
                </div>
                <!-- Squat input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="weight" class="control-label">Squat(lbs)</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="squat" id="squat" ng-model='ex.item.squat' placeholder="{{ex.info2.squat}}"/>
                        </div>
                </div>
                <!-- Weight input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="weight" class="control-label">Mile Time(##:##)</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="mile" id="mile" ng-model='ex.item.mile' placeholder="{{ex.info2.mile}}"/>
                        </div>
                </div>
				<!-- Weight input -->
                <div class="form-group col-md-6 col-sm-6 ">
                        <label for="weight" class="control-label">40 Yard Dash(##:##)</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="yard" id="yard" ng-model='ex.item.yard' placeholder="{{ex.info2.yard}}"/>
                        </div>
                </div>
				<hr>
                <!-- Bio input -->
                <div class="form-group col-md-12">
                        <label for="Bio" class="control-label">Bio</label>
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <textarea  class="form-control" name="bio" id="bio" ng-model='ex.item.bio' placeholder="{{ex.info2.bio}}"></textarea>
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
                <div ng-show='ex.displaySearchResults' id='searchResults'>
                    <h4>Search Results: </h4>
                    <table class='table'>
                        <tr ng-repeat='item in ex.players track by $index'
                                            ng-show="item.subject==ex.subject.name">
                            <td class='col-xs-2'>
                                <i class="fa fa-id-card fa-3x" aria-hidden="true"></i>
                            </td>
                           <td class='col-xs-10'>
                                    <strong>{{item.first_name}} {{item.last_name}}</strong>
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
