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
});
