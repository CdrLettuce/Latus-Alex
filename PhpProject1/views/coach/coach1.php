<?php
include('Assets/pageHeader.php');
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Signing up as a coach!</h1>
			<p>You must finish the sign up process & make changes to your profile for it to go live</p>
		</div>
	</div>
        <!--
	<nav id="mainForm" class="navbar navbar-default">
	<div class="container-fluid col-lg-8 col-lg-offset-4">
		<ul class="nav navbar-nav">
		
			<li class="active"><a href="<?php echo HOME;?>signup/coachSignup1">School / Club</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup2">About You</a></li>
			<li><a href="<?php echo HOME;?>signup/coachSignup3">Account info</a></li>
			<p class="navbar-text">Finished!</p>
		
		</ul>
	</div>
	</nav>
        -->
	<div class="container">
		<form class="" method="post" action="<?php echo HOME;?>signup/coachSignupFinal">		
                        <!-- First name and Last name inputs -->
			<div class="form-group">
				<label for="firstName" class="cols-sm-2 control-label">First Name</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="lastName" class="cols-sm-2 control-label">Last Name</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name"/>
					</div>
				</div>	
			</div>
			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Email</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
					</div>
				</div>	
			</div>
                        
			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="password" id="password"  placeholder="Enter a password"/>
					</div>
				</div>	
			</div>
			<div class="form-group">
				<label for="email" class="cols-sm-2 control-label">Confirm Password</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="verify" id="verify"  placeholder="Re-type your password"/>
					</div>
				</div>	
			</div>
                        <hr>
                        <!--Bio Input-->
                        <div class="form-group">
				<label class="cols-sm-2 control-label" for="state">Which state are you based out of?</label>
				<div class="cols-sm-10">
					<div class="input-group">		
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<select id="state" name="state" class="form-control">
							<option value="0">Select a State</option>
							<option value="1">Alabama</option>
							<option value="2">Alaska</option>
							<option value="3">Arizona</option>
							<option value="4">Arkansas</option>
							<option value="5">California</option>
							<option value="6">Colorado</option>
							<option value="7">Connecticut</option>
							<option value="8">Delaware</option>
							<option value="9">Florida</option>
							<option value="10">Georgia</option>
							<option value="11">Hawaii</option>
							<option value="12">Idaho</option>
							<option value="13">Illinois</option>
							<option value="14">Indiana</option>
							<option value="15">Iowa</option>
							<option value="16">Kansas</option>
							<option value="17">Kentucky</option>
							<option value="18">Louisiana</option>
							<option value="19">Maine</option>
							<option value="20">Maryland</option>
							<option value="21">Massachusetts</option>
							<option value="22">Michigan</option>
							<option value="23">Minnesota</option>
							<option value="24">Mississippi</option>
							<option value="25">Missouri</option>
							<option value="26">Montana</option>
							<option value="27">Nebraska</option>
							<option value="28">Nevada</option>
							<option value="29">New Hampshire</option>
							<option value="30">New Jersey</option>
							<option value="31">New Mexico</option>
							<option value="32">New York</option>
							<option value="33">North Carolina</option>
							<option value="34">North Dakota</option>
							<option value="35">Ohio</option>
							<option value="36">Oklahoma</option>
							<option value="37">Oregon</option>
							<option value="38">Pennsylvania</option>
							<option value="39">Rhode Island</option>
							<option value="40">South Carolina</option>
							<option value="41">South Dakota</option>
							<option value="42">Tennessee</option>
							<option value="43">Texas</option>
							<option value="44">Utah</option>
							<option value="45">Vermont</option>
							<option value="46">Virginia</option>
							<option value="47">Washington</option>
							<option value="48">West Virginia</option>
							<option value="49">Wisconsin</option>
							<option value="50">Wyoming</option>
						</select>
					</div>			
				</div>					
			</div>
                        <!-- School input -->
			<div class="form-group">
				<label for="school" class="cols-sm-2 control-label">Name of School or Club</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<select id="level" name="level" class="form-control">
                                                    <option value="1">Select your college</option>
                                                    <option value="2">Alverno College</option>
                                                    <option value="3">Beloit College</option>
                                                    <option value="4">Cardinal Stritch College</option>
                                                    <option value="5">Carroll College</option>
                                                    <option value="6">Carthage College</option>
                                                    <option value="7">Concordia University-Wisconsin</option>
                                                    <option value="8">Edgewood College</option>
                                                    <option value="9">Lakeland College</option>
                                                    <option value="10">Lawrence University</option>
                                                    <option value="11">Maranatha Baptist Bible College</option>
                                                    <option value="12">Marian College of Fond du Lac</option>
                                                    <option value="13">Marquette University</option>
                                                    <option value="14">Medical College of Wisconsin</option>
                                                    <option value="15">Milwaukee School of Engineering</option>
                                                    <option value="16">Mount Mary College</option>
                                                    <option value="17">Mount Senario College</option>
                                                    <option value="18">Northland College</option>
                                                    <option value="19">Ripon College</option>
                                                    <option value="20">St. Norbert College</option>
                                                    <option value="21">Silver Lake College</option>
                                                    <option value="22">University of Wisconsin Eau Claire</option>
                                                    <option value="23">University of Wisconsin Green Bay</option>
                                                    <option value="24">University of Wisconsin LaCrosse</option>
                                                    <option value="25">University of Wisconsin Madison</option>
                                                    <option value="26">University of Wisconsin Milwaukee</option>
                                                    <option value="27">University of Wisconsin Oshkosh</option>
                                                    <option value="28">University of Wisconsin Parkside</option>
                                                    <option value="29">University of Wisconsin Platteville</option>
                                                    <option value="30">University of Wisconsin River Falls</option>
                                                    <option value="31">University of Wisconsin Stevens Point</option>
                                                    <option value="32">University of Wisconsin Stout</option>
                                                    <option value="33">University of Wisconsin Superior</option>
                                                    <option value="34">University of Wisconsin Whitewater</option>
                                                    <option value="35">Viterbo College</option>
                                                    <option value="36">Wisconsin Lutheran College</option>
                                                    <option value="37">Wisconsin School of Professional Psychology</option>
                                                    <option value="38">Select your club</option>
                                                    <option value="39">ACE Soccer Club</option>
                                                    <option value="40">Appleton Soccer Club</option>
                                                    <option value="41">Baraboo Soccer Club</option>
                                                    <option value="42">Bavarian Soccer Club</option>
                                                    <option value="43">Beaver Dam United Soccer Club</option>
                                                    <option value="44">Belleville Bulldogs Soccer Club</option>
                                                    <option value="45">Brookfield Soccer Association</option>
                                                    <option value="46">Burlington Youth Soccer Club</option>
                                                    <option value="47">Capital East Soccer Club</option>
                                                    <option value="48">Chequamegon Bay Soccer Club</option>
                                                    <option value="49">Chippewa Strikers Soccer Club</option>
                                                    <option value="50">Coulee Region United Soccer Association</option>
                                                    <option value="51">Croatian Eagles Soccer Club</option>
                                                    <option value="52">Delavan Soccer Club</option>
                                                    <option value="53">East Troy Youth Soccer</option>
                                                    <option value="54">Elkhorn Youth Soccer EYSC</option>
                                                    <option value="55">Elm Grove Soccer Club</option>
                                                    <option value="56">FC Green Bay</option>
                                                    <option value="57">FC Menasha</option>
                                                    <option value="58">FC Milwaukee</option>
                                                    <option value="59">Fond du Lac Soccer Association</option>
                                                    <option value="60">Fox Valley Unified Soccer Club</option>
                                                    <option value="61">Grafton Soccer Club</option>
                                                    <option value="62">Green Bay Lightning Soccer Club Inc.</option>
                                                    <option value="63">Hartford United Soccer Club</option>
                                                    <option value="64">Howard FC</option>
                                                    <option value="65">Hudson Soccer Association</option>
                                                    <option value="66">Iowa County Youth Soccer Association</option>
                                                    <option value="67">Kiel Soccer Club</option>
                                                    <option value="68">Kimberly Area Soccer Association</option>
                                                    <option value="69">Madison Celtics Youth Soccer Club</option>
                                                    <option value="70">Madison FC</option>
                                                    <option value="71">Marathon County (MC) United Soccer Club</option>
                                                    <option value="72">Marshfield Youth Soccer Association</option>
                                                    <option value="73">McFarland Soccer Association</option>
                                                    <option value="74">Menomonee Falls Soccer Club</option>
                                                    <option value="75">Mequon United Soccer Club</option>
                                                    <option value="76">Middleton Yahara Soccer Club (MYSC)</option>
                                                    <option value="77">Milton Soccer Club</option>
                                                    <option value="78">Milwaukee Kickers Soccer Club</option>
                                                    <option value="79">Monona Grove Soccer Club</option>
                                                    <option value="80">Mount Horeb Youth Soccer Club</option>
                                                    <option value="81">Neenah Soccer Club</option>
                                                    <option value="82">New Richmond Soccer Club</option>
                                                    <option value="83">Norski Soccer Club</option>
                                                    <option value="84">North Shore United Soccer Club</option>
                                                    <option value="85">Oak Creek Soccer Club</option>
                                                    <option value="86">Oregon Soccer Club</option>
                                                    <option value="87">Pewaukee Sussex United Soccer Club</option>
                                                    <option value="88">Plymouth Soccer Club</option>
                                                    <option value="89">Polonia Youth Soccer Club</option>
                                                    <option value="90">Port Washington Soccer Club</option>
                                                    <option value="91">Portage Youth Soccer Association</option>
                                                    <option value="92">Poynette Area Youth Soccer Organization</option>
                                                    <option value="93">Price Soccer Club</option>
                                                    <option value="94">Racine Area Soccer Association</option>
                                                    <option value="95">Red Cedar Soccer Club</option>
                                                    <option value="96">Red Star SC</option>
                                                    <option value="97">Regent Soccer Club</option>
                                                    <option value="98">Rhinelander Soccer Club</option>
                                                    <option value="99">Rice Lake Soccer Asociation</option>
                                                    <option value="100">Rock Soccer Club</option>
                                                    <option value="101">SC Waukesha, Inc.</option>
                                                    <option value="102">Sockers FC Wisconsin</option>
                                                    <option value="103">Somerset Soccer Club</option>
                                                    <option value="104">South Milwaukee Girls Travel</option>
                                                    <option value="105">Stoughton Area Youth Soccer Association</option>
                                                    <option value="106">Sun Prairie Soccer Club</option>
                                                    <option value="107">Sussex Soccer Club</option>
                                                    <option value="108">Synergy Soccer Club</option>
                                                    <option value="109">Thunder Area Soccer Kids</option>
                                                    <option value="110">Tomah Youth Soccer Assocation</option>
                                                    <option value="111">United Hurricanes Soccer Club</option>
                                                    <option value="112">United Serbian Youth Soccer Club</option>
                                                    <option value="113">United Soccer of Allouez</option>
                                                    <option value="114">Wales Soccer</option>
                                                    <option value="115">Watertown Soccer Club</option>
                                                    <option value="116">Waunakee Area Soccer Club</option>
                                                    <option value="117">Whitewater Youth Soccer Club</option>
                                                    <option value="118">Williams Bay Soccer Club</option>
                                                    <option value="119">Wisconsin Rapids Kickers</option>
                                                </select>
					</div>
				</div>
                        </div>
			<div class="form-group">
  				<label class="cols-sm-2 control-label" for="state">What level do you coach?</label>
		  		<div class="cols-sm-10">
					<div class="input-group">	
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
	 					<select id="level" name="level" class="form-control">
							<option value="1">Select level</option>
							<option value="2">Club</option>
							<option value="3">College</option>
							<option value="4">High School</option>				
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
						
			<!-- City Input -->
			<div class="form-group">
				<label for="city" class="cols-sm-2 control-label">City</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="city" id="city"  placeholder="Enter city"/>
					</div>
				</div>	
			</div>
			
			<div class="form-group">
				<label for="zip" class="cols-sm-2 control-label">Zip Code</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="zip" id="zip"  placeholder="Ex: 55555" pattern="\d{5}"/>
					</div>
				</div>
			</div>
                        <div class="form-group">
				<label for="phone" class="cols-sm-2 control-label">Phone Number</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="phone" id="phone"  placeholder="Ex: 555-555-5555" pattern="\d{3}[\-]\d{3}[\-]\d{4}"/>
					</div>
				</div>
			</div>
                        
                        
			<hr>
			<!-- Next Button -->
			<div class="form-group">
                            <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">
                        </div>
		</form>
	</div>

<?php include('Assets/pageFooter.php');
