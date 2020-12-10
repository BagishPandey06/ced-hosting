<!--
Au
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
<?php
if($menu="account");
require 'header.php';?>
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action="account.php" method="post"  > 
				 <div class="register-top-grid">
					<h3>personal information<small style="font-size:15px;color:#e7663f ;float:right">*Feilds are mandatory to be filled</small></h3>
					
					 <div>
					 
						<span>Name<label>*</label></span>
						<input type="text" id="name" required> 
					 </div>
					 <div>
						<span>Mobile<label>*</label></span>
						<input type="text" id="mob" placeholder="10-11 digits Mobile no. only" required> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" id="mail" required> 
					 </div>
					 <div>
						 <span>Security question<label>*</label></span>
						 <select class="form-select form-control" style="width:96%" id="ques" name="que" >
						 <option value="0">Select your security question?</option>
							 <option value="1" class="que">What was your childhood nickname?</option>
							 <option value="2" class="que">What is the name of your favourite childhood friend?</option>
							 <option value="3" class="que">What was your favourite place to visit as a child?</option>
							 <option value="4" class="que">What was your dream job as a child?</option>
							 <option value="5" class="que">What is your favourite teacher's nickname?</option>
						 </select>
					 </div>
					 <div id="hide">
					 <span>Security Answer<label>*</label></span>
					 <input type="text" id="ans" required> 
					 </div>
					
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
							
								<span>Password<label>*</label></span>
								<input type="password" id="pass">
								<small style="font-size:10px;color:#585CA7;font-weight:bold;letter-spacing:.1rem"><ul>
								<li>Password shouldn't contain space</li>
								<li>Password must contain 8-16 variable</li>
							 <li>Combination of UPPERCASE, lowercase, special character and numeric value.</li></ul></small>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="repass">
							 </div>
					 </div>
				</form>
				
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="button" onclick="return validate()" id="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
<script>
function validate(){
       var name=($("#name").val()).trim(); 
       var mob=($("#mob").val()).trim(); 
       var mail=($("#mail").val()).trim(); 
	   var ques=($("#ques").val()).trim();	   
       var ans=($("#ans").val()).trim();
       var pass=($("#pass").val()).trim();
       var repass=($("#repass").val()).trim();
       var chkname=/^([a-zA-Z]+\s?)*$/;
	   var chkpass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-/s])\S{8,16}$/;
	   if(mob.length==10){
		var chkmob=/^[1-9]{1}[0-9]{9}$/;
	   } else if( mob.length==11) {
		var chkmob=/^(0)?[1-9]{1}[0-9]{9}$/;
	   }
       
	   var chkmail=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
	   var chkans=/^([a-zA-Z0-9]?)*$/;
       if(name==""||mob==""||mail==""||ques==""||ans==""||pass==""||repass==""){
           alert("All feild are mandatory to be filled !!");
           return false;
       } else if(!(name.match(chkname))) {
           alert("please enter valid name");
           return false;
       } else if(!(mob.match(chkmob))) {
		alert("please enter valid mobile no.");
		return false;
       } else if(!(mail.match(chkmail))) {
		alert("please enter valid Mail ");
		return false;
       } else if(!(pass.match(chkpass))) {
		alert("please enter password again with Combination of UPPERCASE, lowercase, special character and numeric value.(8-16 character) ");
		return false;
       } else if(ques=='0') {
		alert("please select security question?");
		return false;
       }else if(!(ans.match(chkans))) {
		alert("Please enter valid Answer");
		return false;
       }else if(pass!=repass) {
		   alert("Password and repassword should match");
		   $("#pass").val('');
		   $("#repass").val('');
		   return false;
	   }
	   insert();
	}
	
	function insert(){
       
	   name=$("#name").val().trim();
	   mob=$("#mob").val().trim();
	   mail=$("#mail").val().trim();
	   pass=$("#pass").val().trim();
	    ques=$("#ques").val().trim();
	   ans=$("#ans").val().trim();
	    
	   $.ajax({
		  
		   url: "helper.php",
		type: "post",
		data:{
			name: name,
			mob: mob,
			mail: mail,
			pass: pass,
			ques: ques,
			ans: ans,
			action: "sign"
	   },dataType: 'html',
	   success: function (result) {
		 if(result=='inserted'){
			 //alert("sigind up sucessfully ");
			 window.location.href="login.php";
		 } else if(result == 'sameemail') {
			 alert('Email  already exists');
		 } else if(result == 'samemob') {
			 alert('mobile no. already exists');
		 }
	   }
	   });
   }
   
				</script>
<script src="reg.js"></script>
<?php
require 'footer.php';?>