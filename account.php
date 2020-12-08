<?php
if($menu="account");
require 'header.php';?>
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action="#"> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>Name<label>*</label></span>
						<input type="text" id="name"> 
					 </div>
					 <div>
						<span>Mobile<label>*</label></span>
						<input type="text" id="mob"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" id="mail"> 
					 </div>
					 <div>
						 <span>Security question<label>*</label></span>
						 <select class="form-select form-control" id="ques" name="que" >
							 <option value="1" class="que">Country you belong?</option>
							 <option value="2" class="que">Last name?</option>
							 <option value="3" class="que">Favorite pet?</option>
						 </select>
					 </div>
					 <div id="hide">
					 <span>Security Answer<label>*</label></span>
					 <input type="text" id="secans"> 
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
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="opass" onclick="return CheckPassword()">
							 </div>
					 </div>
				</form>
				<script>
					   function CheckPassword() 
        {
            var chk = $("#pass").val();
            var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
            if (chk.length <= 8 || chk.length >= 20) {
                alert("Password Must Contain 8 to 20 Characters Only !");
                $("#pass").val('');
                return false;
            } else {
                if (chk.match(passw)) {
                    return true;
                }
                else {
                    alert('Password Must Conatin  at least One Numeric Digit, One Uppercase and One Lowercase Letter !')
                    return false;
                }
            }
        }
				</script>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" id="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
<script src="reg.js"></script>
<?php
require 'footer.php';?>