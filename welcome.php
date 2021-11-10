
<?php 

session_start();
	if(isset($_SESSION['name']))
	{
		include "header.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `admin` WHERE name = '{$_SESSION['name']}'";

		$query = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($query) > 0)
		
		{
              $row = mysqli_fetch_assoc($query);
			  $_SESSION['school'] = $row['school'];
			 }
          
?>

<!doctype html>
<html>
<head>
<style>

.wrapper{
  background: #fff;
  max-width: 100%;
  width: 100%;
  border-radius: 16px;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
			  height:100%;
			  font-size: 20px;
}
</style>
</head>

<body>

<div class="wrapper">
	
	<!--This is header-->
	<center><header ><h1>Welcome to <?php echo ($_SESSION['school']);?></h1><h2> chat application</h2></header></center>
	<!--End of header-->
	
	
	<!--This is left sidebar-->
	<div class="left">
	<br>
		<h3 style="padding: 10px; text-decoration: underline; font-weight: bold; ">WELCOME CONTENT:</h3>
	<br>
	
		
		<button  style="vertical-align: middle" ><span><a href="welcome.php?view_student">VIEW STUDENT DETAILS</a></span></button></br></br>
		<button  style="vertical-align: middle" ><span><a href="welcome.php?delete">DELETE STUDENT</a></span></button></br></br>
		<button style="vertical-align: middle"><span><a href="welcome.php?viewfile">VIEW SHARED FILE </a></span></button></br></br>
		  <button style="vertical-align: middle"><span><a href="welcome.php?annoucement">POST ANNOUNCEMENTS</a></span></button></br></br>
		  <button style="vertical-align: middle"><span><a href="welcome.php?viewannouceadmin">VIEW ANNOUNCEMENTS</a></span></button></br></br>
		    <button style="vertical-align: middle"><span><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">LOGOUT</a></span></button>
		
	</div>
	
	<!--End of left sidebar-->
	

	
	<!--This is Content-->
	<div class="right">
	
	
	<h3 style="color: #16365d; text-align: right; font-size: 30px; "> Hello  <?php echo ($_SESSION['name']); ?>! </h3>
	<?php
	
		  
		  
	      if(isset($_GET['view_student'])){
			  
	      include("view_student.php");
		  }
		  
	      if(isset($_GET['edit'])){
			  
	      include("edit.php");
		  }
		  
		  
		
		  if(isset($_GET['delete'])){
			  
	      include("delete.php");
			  
          }
	
	      if(isset($_GET['viewfile'])){
			  
	      include("viewfile.php");
			  
          }
	  
	      if(isset($_GET['annoucement'])){
			  
	      include("annoucement.php");
			  
          }
		  
		  if(isset($_GET['viewannouceadmin'])){
			  
	      include("viewannouceadmin.php");
			  
          }
		  
}

		
         ?>

</div>


	
	<div align="center" style="background-color:#8b14c1; font-size: 20px; color: #fff; width:100%; bottom:0; " >
	<h5>(Xchat Chat Application)</h5>
	<h5><i>Contact Us: 0708572754 or 0786750099 / christinenandugga@gmail.com<i></h>
	</div>
	<!--End of Footer-->
	
				
 </div>
 
 </body>
 
 </html>