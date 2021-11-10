<?php 
	session_start();
	
	if(isset($_SESSION['unique_id']))
	{
		include "header.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `register` WHERE unique_id = '{$_SESSION['unique_id']}'";

		$query = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($query) > 0)
		
		{
              $row = mysqli_fetch_assoc($query);
			  $_SESSION['school'] = $row['school'];
        }
          
?>
<style>
a{
  border-radius:5px;
  color: #333;
  font-size: 19px;
  background: #7f00ff;
  cursor: pointer;
  
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

 
</style>
<body>

<div class="container">
  <center><h2>Welcome to <span style="color:#dd7ff3;"> <?php echo $_SESSION['school']; ?> chat application!</span></h2>
  <br><br>
	<label>Click below to Join the chat</label><br>
	<br><br>
	<button style=" background: orange; width:80px; height:30px"><a href="home.php">student</a></button>
	</br></br>
	<button style=" background: orange; width:80px; height:30px"class="btn-primary" ><a href="homelecturer.php">lecturer</a></button>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>