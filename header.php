

<!doctype html>

	<head>
		<meta charset="UTF-8">
			
		<link rel="shortcut icon" href="LOGO.png"/>
		<Link rel="stylesheet" type="text/css" href="style.css">
		
		  <!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<script src="https://kit.fontawesome.com/91c20b7fd9.js" crossorigin="anonymous"></script>

		<title> Lookupp</title>
	<head>

	<body>

		<nav class = "purple darken-4">
			<div class="container">
				<a href = "success2.php" class="brandlogo" style ="color:yellow;"><img src ="Banner2.PNG" style = "padding: 1.5% 0 0; margin:auto;"></a>
				<a href = "" class="sidenav-trigger" data-target="mobile-menu">
					<i class ="material-icons">menu</i>
				</a>
				<ul class ="right hide-on-med-and-down">
					<li><a href="success2.php" style ="color:yellow;">Home</a></li>
					<li><a href="findstud.php" style ="color:yellow;">Find tutor</a></li>
					<li><a href="index.php" name ="logout" action ="logout.php" method="post" style ="color:yellow;">Log out</a></li>
				</ul>

				<ul class ="sidenav purple darken-4" id="mobile-menu">
					<li><a href="success2.php" style ="color:yellow;">Home</a></li>
					<li><a href="findstud.php" style ="color:yellow;">Find tutor</a></li>
					<li><a href="index.php" name ="logout" action ="logout.php" method="post" style ="color:yellow;">Log out</a></li>
				</ul>

			</div>
		</nav>

		<script src='https://code.jquery.com/jquery-3.3.1.min.js'>	</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
		</script>