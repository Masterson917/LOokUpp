<?php 

include("header.php");
include("connectdb.php");
 

 	session_start();
 	$username = $_SESSION['useruId'];
 	

 	$sql = "SELECT * FROM users WHERE name = '$username'";
 	$result = mysqli_query($conn, $sql);




 		while($row = mysqli_fetch_assoc($result)){
 			$pmail = $row['mail'];
 			$pgendr = $row['gender'];
 			$pUni = $row['University'];
 			$pnum = $row['numba'];
 			$pcor = $row['course'];
 			$prate = $row['rate'];
 			$plvl = $row['level'];
 			$prank = $row['occu'];

 		} 
 		
 


	
 	
 	


 	if(isset($_POST['logout'])){
	session_unset();
	session_destroy();

}

 	
?>



<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar" style = "background:#402B7C">
				<!-- SIDEBAR USERPIC -->
			<center>	
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
			</center>	
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name" style= "color:yellow">
						<?php echo " $username"; ?>
					</div>
					<div class="profile-usertitle-job" style= "color:yellow">
						<?php echo " $prank "; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div>
					<center><a href="profileset.php"><button name="editp" class=" btn btn-success" style = " background:yellow; color:purple; width:20%; padding:0%;" >Edit Profile</button></a>
					</center>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<center><ul class="nav" style="color:yellow;">
							<p><i class="fa fa-envelope"></i> <?php echo " $pmail "; ?></p>
							<p><i class="fas fa-graduation-cap"></i> <?php echo " $pUni "; ?></p>
							<p><i class="fas fa-venus-mars"></i></i> <?php echo " $pgendr "; ?></p>
							<p><i class="fas fa-phone-alt"></i></i> <?php echo " $pnum "; ?></p>
							<p><i class="fas fa-chalkboard-teacher"></i> <?php echo " $pcor "; ?></p>
							<p><i class="fas fa-chalkboard"></i> <?php echo " LEVEL $plvl "; ?></p>
							<p><i class="far fa-money-bill-alt"></i> <?php echo " $prate GHC"; ?></p>
							<h9 style="color:yellow;"> By using Lookupp you agree to our <a href = "about.php">terms and conditions</a>

						

					</ul></center>
				</div>
				<!-- END MENU -->
			</div>
		</div>
	</div>
</div>
	

	
