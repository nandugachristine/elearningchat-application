<?php include "header.php"; ?>
<style
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </style>

<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$ran_id = rand(time(), 100000000);
		
	
		
		$sql = "SELECT * FROM `register` where email = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['name'] = $row['lname'];
			$_SESSION['school'] = $row['school'];
			$_SESSION['unique_id'] = $row['unique_id'];
			
			header('Location: welcomeuser.php');
		}
		else
		{
			echo "<script> alert('Invalid login details'); </script>";
			header("refresh:2; url= login.php");
		}
	}
?>

<div class="wrapper" style ="height:auto;">
    <section class="form login">
  <center><header>Login form </button></header></center></br>
  <form method="post" action="" name = "myform" onsubmit = "return validateemail()">
    
	 <div class="error-text"></div>
	<div class="field input">
      <label style ="font-size: 16px;" >Email:</label>
	  
     
        <input type="email" placeholder="Enter email" name="email" required>
     
    </div>
	</br>
	
   <div class="field input">
          <label style ="font-size: 16px;">Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
		  <i class="fas fa-eye"></i>
        </div>
		 </br>
		
    
<div class="field button">	
      
     <input type="submit" name="submit" value="Continue to Chat">
      </div>
	
	
	
  </form>
  <script src="login.js"></script>
<script src="pass-show-hide.js"></script>
  <div class="link">Not yet signed up? <a href="register.php"> Signup now</a></div>
  <center><p style ="font-size: 16px;"> or</p></center>
  </br>
  <center><button style=" background: orange; width:80px; height:30px"><a  href="login_admin.php">Admin</a></center>
    </section>


</body>
</html>
