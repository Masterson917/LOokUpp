<?php

		include("header.php");
		include("connectdb.php");


		
?>







<div class="container">
    <div class="row profile">

  		<div class="col-md-3">
			<div class="profile-sidebar" style = "background:#402B7C">

			<center>

					<p><h4 style="color:yellow;"> Find a tutor</h4></p>
			<p><h6 style="color:yellow;"> DO NOT LEAVE ANY OF THE FIELDS EMPTY!</h6></p>
			<p><h6 style="color:yellow;"> scroll down after search to see list possible tutors!</h6></p>
				<br>



				<form name="findstud" action="findstud.php" method="post">
						
<select  name="gendr" class="browser-default" style="background:yellow; border-radius:25px;width:40%;margin:0 0 15px;">
    <option value="" disabled selected>Gender</option>
    <option value="male">male</option>
    <option value="female">female</option>
    
  </select>


<select name="univ" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>University</option>
    <option value="GTUC">GTUC</option>
    <option value="Legon">Legon</option>
    <option value="Ashesi">Ashesi</option>
    <option value="AIT">AIT</option>
    <option value="Lancaster University">Lancaster University</option>
    <option value="Central University">Central University</option>
    
  </select>

  <select name="lev" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>Level</option>
    <option value="100">100</option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
    
  </select>

  <select name="cours" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>Programming language</option>
    <option value="C#">C#</option>
    <option value="C++">C++</option>
    <option value="Java">Java</option>
    <option value="HTML/CSS">Html/css</option>
    <option value="JavaScript">Java Script</option>
    <option value="PHP">PHP</option>
    <option value="Python">Python</option>
    
    
  </select>

    <select name="chr" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>Rate</option>
    <option value="5">5GHC/HOUR</option>
    <option value="10">10GHC/HOUR</option>
    <option value="25">25GHC/HOUR</option>


    
  </select>

<button type="submit" name="findteach" style = " background:yellow; color:purple; border-radius:25px; width:20%; margin:0 0 15px;">Search</button>

<p><h9 style="color:yellow;"> By using Lookupp you agree to our <a href = "about.php">terms and conditions</a></h9></p>

			</center>
				</form>



						</div>
				</div>
			</div>
		</div>



		<?PHP
			

if(isset($_POST['findteach'])){

		$sgen = $_POST['gendr'];
		$suni = $_POST['univ'];
		$scor = $_POST['cours'];
		$slvl = $_POST['lev'];
		$schr = $_POST['chr'];
		

		$sql = "SELECT * FROM users WHERE University LIKE '$suni'  AND course LIKE '$scor' AND 
		gender LIKE '$sgen' AND level LIKE '$slvl'
		AND rate LIKE '$schr'";

		
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if($queryResults > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo"<center><div style ='border-radius:10px; margin:3%; color:yellow; padding:10px; background-color: #4800FF;  width:40%; font-family:Roboto, sans-sefif; width:80%;'>


									<h3>".$row['name']."</h3>

					

									<p style= 'text-align:center;' >studies at: ".$row['University']."<br>
									current level: ".$row['level']."<br>
									charge per hour: ".$row['rate']."GHC <br>
									codes in : ".$row['course']." <br>
									contact: ".$row['numba']."</p>
														
	
						</div><center>";
					
					
			}

		}else{
						echo "<center>no results found</center>" ;

					}

	}

	
		?>