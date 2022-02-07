<!doctype html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php
//connecting to database
 include("connectdb.php");	








 ?>


	<head>
		<meta charset="UTF-8">
			
			<link rel="shortcut icon" href="LOGO.png"/>
		<Link rel="stylesheet" type="text/css" href="style.css">
		<Link rel="stylesheet"  href="C:\Users\Masterson\Downloads\bootstrap-4.4.1">


		<title> Lookupp</title>
	<head>

	<body>
	<nav class = "purple darken-4 "><div style = "text-align:center;"><img src ="Banner2.PNG" style = "padding: 1.5% 0 0; margin:auto; "> </div></nav>

		<div id= "login" >
			<div class="for" id= "form">

				<?php

							$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

							if(strpos($fullUrl, "error=emptyfields&uname=") == true){
								echo" <p>Some fields are empty</p> ";	
								
							}else if(strpos($fullUrl, "error=invalidmail=") == true){
									echo" <p> Your email is invalid </p> ";	
								
							}else if(strpos($fullUrl, "error=invalidmail&uname=") == true){
									echo" <p> either the username is taken or your email is invalid</p>
										<p>try a different email or username</p>									
									 ";	
								
							}else if(strpos($fullUrl, "error=passmismatch=") == true){
									echo" <p>your passwords don't match </p> ";	
								
							}

						?>


				


				<form  action = "register.php" class="reg" id="register" method ="post">

				
				


					<input tpye ="text" name="uname" placeholder="name" />
					<input type ="text" name="mail"  placeholder="email" />
					<input type ="password" name="pass"  placeholder="password"/>
					<input type ="password" name="pass2"  placeholder="confirm password"/>
					
				

					<button type="submit" name="go">Sign up</button>

				</form>
				
				



				<form class="lo" id="log" action = "login.php" method = "post">

						<?php

							$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

							if(strpos($fullUrl, "error=emptyfields") == true){
								echo" <p>the fields are empty</p> ";	
								
							}else if(strpos($fullUrl, "error=wrongpass") == true){
									echo" <p> You've put in a wrong password </p> ";	
								
							}else if(strpos($fullUrl, "error=nouser") == true){
									echo" <p>No such user exists</p> ";	
								
							}

						?>




					<input type="text" name="desig" placeholder="username"/>
					<input type="password" name="passed" placeholder="password"/>
					<button type="submit" name = "ent">login</button>
					<p id="nr">Not registered?<a id="hu" href="#">Register</a></p>
				</form>




			</div>
				

		</div>
		
		<script src='https://code.jquery.com/jquery-3.4.1.min.js'>	</script>

		<script>
			$('#hu').click(function(){
				$('#register').animate({height: "toggle", opacity: "toggle" },"slow");
			});
		</script>






	</body>
</html>