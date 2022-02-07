<?php

		include("header.php");
		include("connectdb.php");

if(isset($_POST['edits'])){

 session_start();
 $sql= "UPDATE users 
        SET numba = '$_POST[number]', gender = '$_POST[gengr]' , course = '$_POST[course]' , University = '$_POST[uni]' , rate = '$_POST[money]', level ='$_POST[level]',occu = '$_POST[rank]' 
        WHERE id = '$_SESSION[userId]';";
 $result = mysqli_query($conn,$sql);

 echo "<center>profile has been saved</center>";
	
}

?>

<div class="container">
    <div class="row profile">

  		<div class="col-md-3">
			<div class="profile-sidebar" style = "background:#402B7C">
<center>

<form  action = "profileset.php" class="edits" method ="post" enctype="multipart/form-data">


	<input type="text" name="number" placeholder="contact" style=" text-align:center; background:yellow; border-radius:25px;width:40%;margin:0 0 15px;" >


    <select  name="rank" class="browser-default" style="background:yellow; border-radius:25px;width:40%;margin:0 0 15px;">
    <option value="" disabled selected>Occupation</option>
    <option value="STUDENT">Student</option>
    <option value="TUTOR">Tutor</option>
    
  </select>

  <select  name="gengr" class="browser-default" style="background:yellow; border-radius:25px;width:40%;margin:0 0 15px;">
    <option value="" disabled selected>Gender</option>
    <option value="male">male</option>
    <option value="female">female</option>
    
  </select>


<select name="uni" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>University</option>
    <option value="GTUC">GTUC</option>
    <option value="Legon">Legon</option>
    <option value="Ashesi">Ashesi</option>
    <option value="AIT">AIT</option>
    <option value="Lancaster University">Lancaster University</option>
    <option value="Central University">Central University</option>
  </select>

  <select name="level" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>Level</option>
    <option value="100">100</option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
    
  </select>

  <br>

 <p> <label> The following fields are reserved for tutors, kindly refrain from filling them if they don't apply to you.</label><p>
<p><label> kindly choose a programming language you would like to teach</label><p>
  <select name="course" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>Programming language</option>
    <option value="C#">C#</option>
    <option value="C++">C++</option>
    <option value="Java">Java</option>
    <option value="HTML/CSS">Html/css</option>
    <option value="JavaScript">Java Script</option>
    <option value="PHP">PHP</option>
    <option value="Python">Python</option>
    
  </select>

<p><label> kindly choose your charge per hour</label><p>
    <select name="money" class="browser-default" style="background:yellow; border-radius:25px; width:40%; margin:0 0 15px;">
    <option value="" disabled selected>Rate</option>
    <option value="5">5GHC/HOUR</option>
    <option value="10">10GHC/HOUR</option>
    <option value="25">25GHC/HOUR</option>


    
  </select>


  

 
  <button  type="submit" name="edits" style = " background:yellow; color:purple; border-radius:25px; width:20%; margin:0 0 15px;">Save</button>

</form>
</center>
			</div>
		</div>

	</div>
</div>