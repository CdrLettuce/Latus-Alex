/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

'use strict';
$(document).ready(function(){
	// define base url
	// var base_url = 'http://washington.uww.edu/cs482/butlersj02/week5example2/';
        var base_url = 'http://recruitchute.io/';
        // $('#customer-name').hide();
        /*
	        $('#sign-in').on('click', function(){
                // read username and pwd
                console.log("HEY man");
                var username = $('#username').val();
                var pwd = $('#pwd').val();
                // send a request to authenticate the user
                $.ajax({
                        method : 'post',
                        url : base_url+'login/checkLogin',
                        dataType: 'JSON',
                        data : {username: username, pwd: pwd},
                        success: function(response){
                                console.log("HEY man");
                                console.log(response);
                                var customer_name = response.last_name +', '+ response.first_name
                                // display customer's name
                                $('#user').text(customer_name);
                                $('#customer-name').show();
                                // login information
                                $('#lg-box').hide();
                                // display the 'sign out' link
                                $('#sign-out').show();
                        }, error : function(err){
                                console.log(err);
                        }
                });
        });
	
	$('#sign-out').on('click', function(){
		// hide user name
		$('#user').text('');
		$('#customer-name').hide();
		// display sign in box
		$('#lg-box').show();
		// reset previous password
		$('#pwd').val('');
	});
        
        */

        $('#playersignup').on('click', function(){
                console.log("HELLO!");
                $.ajax({
                        method : 'get',
                        url : base_url+'pp/playerSignup',
                        dataType: 'JSON',
                        success: function(response){
                                console.log("hello");
                                console.log(response);
                        }, error: function(err){
                                console.log(err);
                        }
                });

        });
    popUpFunction();


        
       
        
        
	$('#verify').on("keyup", function validate() {
           				 var pass = $("#password").val();
           				 var valid = $("#verify").val();
                                         
                                         
            
           			 if(pass > valid){
               				$("#verify").css("borderColor", "#ff0000");
                			$("#message").html("Passwords Do Not Match");
          			  }
            			else if(pass < valid){
                			$("#verify").css("borderColor", "#ff0000");
               				$("#message").html("Passwords Do Not Match");
           		 }else{ 
				$("#message").html("");
                   		 $("#verify").css("borderColor", "#3fdd13");
              		  }
           		 });
           
       /* $('#signupFormCoach').on("sumbit", function checkFields() {
                             var first = $('#fname').val();
                             var last = $('#lname').val();
                             var email = $('#email').val();
                             var phone = $('#phone').val();
                             var pass= $('#password').val();
                             var vaild= $('#verify').val();
                             var level= $('#level').val();
                             var state= $('#state').val();
                             var city= $('#city').val();
                             var zip = $('#zip').val();
                             var epattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                             var ppattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
                            if(first.length()===0){
                                alert("Enter your first name");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                                }
                            if(last.length()===0){
                                alert("Enter your last name");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                                }
                            if(!epattern.test(email)){
                                alert("Enter a vaild email!");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                                
                            }
                            if(!ppattern.test(phone)){
                                alert("Enter your valid phone number");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                            }
                            if(pass.length()===0){
                                             alert("Enter a password");
                                             $('#signupFormCoach').submit(function(e){
                                             e.preventDefault();
                                             });
                                         }
                            if(valid.length()===0){
                                             alert("Verify your password");
                                             $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                                         }
                            if(pass > valid){
               				alert("Your passwords do not match");
                                        $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
          			  }
            			else if(pass < valid){
                			alert("Your passwords do not match");
                                        $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                                }
                            if(level===""){
                                alert("Select a coaching level");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
                            if(city.length()===0){
                                alert("Enter your city");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
                            if(state===""){
                                alert("Select your state");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
                            if(zip.length()<5){
                                alert("Enter a vailid zip code");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
        }); */
    
    
    /* $('#signupFormPlayer').on("sumbit", function checkFields() {
                             var first = $('#fname').val();
                             var last = $('#lname').val();
                             var email = $('#email').val();
                             var phone = $('#phone').val();
                             var pass= $('#password').val();
                             var vaild= $('#verify').val();
                             var gender= $('#gender').val();
                             var state= $('#state').val();
                             var city= $('#city').val();
                             var zip = $('#zip').val();
                             var epattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                             var ppattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
                            if(first.length()===0){
                                alert("Enter your first name");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                                }
                            if(last.length()===0){
                                alert("Enter your last name");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                                }
                            if(!epattern.test(email)){
                                alert("Enter a vaild email!");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                                
                            }
                            if(!ppattern.test(phone)){
                                alert("Enter your valid phone number");
                                $('#signupFormCoach').submit(function(e){
                                    e.preventDefault();
                                });
                            }
                            if(pass.length()===0){
                                             alert("Enter a password");
                                             $('#signupFormCoach').submit(function(e){
                                             e.preventDefault();
                                             });
                                         }
                            if(valid.length()===0){
                                             alert("Verify your password");
                                             $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                                         }
                            if(pass > valid){
               				alert("Your passwords do not match");
                                        $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
          			  }
            			else if(pass < valid){
                			alert("Your passwords do not match");
                                        $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                                }
                            if(level===""){
                                alert("Select a coaching level");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
                            if(city.length()===0){
                                alert("Enter your city");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
                            if(state===""){
                                alert("Select your state");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
                            if(zip.length()<5){
                                alert("Enter a vailid zip code");
                                $('#signupFormCoach').submit(function(e){
                                                e.preventDefault();
                                            });
                            }
        }); */
                                
});
