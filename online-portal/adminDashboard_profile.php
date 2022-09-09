<?php
session_start();


if(!isset($_SESSION["email"]))
{
	header("location:login.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Online News Portal</title>
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="adminDashboard.css" rel="stylesheet" >
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" >
</head>
<body>
	<header>
		<div class="left_area"><a href="index.php" style="text-decoration:none;font-family: Time New Roman; "><h3 style="color: #1DC4E7;"><span>Online </span>News Portal</h3></a> </div>
		<div class="right_area"><a href="logout.php" class="logout_btn">Logout</a></div> 

	</header>
	<style type="text/css">
		.profile{
		   background-color: var(--white);
		   box-shadow: var(--box-shadow);
		   text-align: center;
		   width: 250px;
		   border-radius: 5px;
			}
			.profile img{
			   height: 150px;
			   width: 150px;
			   border-radius: 50%;
			   object-fit: cover;
			   margin-bottom: 5px;
			}


	</style>

	<div class="sidebar">
		<center >
			<div class="profile">
				<?php
					include 'config.php';
					$email=$_SESSION["email"];
					$select = mysqli_query($conn, "select * from user_form where email='".$email."' ") or die('query failed');
					if(mysqli_num_rows($select) > 0){
					$fetch = mysqli_fetch_assoc($select);
					}
					if($fetch['image'] == ''){
					echo '<img src="images/default-avatar.png">';
					}else{
					echo '<img src="uploaded_img/'.$fetch['image'].'">';
					}
					?> 
			</div>
			<h4>Admin</h4>
		</center>
		<a href="adminDashboard_profile.php" style="background-color:#3399ff;"><i class="fas fa-user"></i><span>Profile</span></a>
		<a href="adminDashboard_myposts.php"><i class="fas fa-table"></i><span>My Posts</span></a>
		<a href="adminDashboard_newpost.php"><i class="fas fa-file"></i><span>Add New Post</span></a>
		<a href="email.php"><i class="fas fa-mail-bulk"></i><span>Send Mail</span></a>
	</div>
	<div class="content"> 
		<h1 style="color:#1DC4E7;">Your Profile</h1><br>
		<?php

		$ServerName="localhost";
		$UserName="root";
		$Password="";
		$dbName="portal";

		$connect=mysqli_connect($ServerName,$UserName,$Password,$dbName);

		if($connect===false)
		{
			die("connection error");
		}
		$email=$_SESSION["email"];
		$sql="select * from user_form where email='".$email."' ";
		$result=mysqli_query($connect,$sql);
		$total_rows=mysqli_num_rows($result);

		if($total_rows>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row["email"]==$email)
				{
					?>
					<h1>Username : </h1>
					<p id="name"><?php echo $row["name"];?></p>
					<br>
					<?php
				}

			}
		}
		?>

		<h1>Email : </h1>
		<p id="email"><?php echo $_SESSION["email"] ?></p>
		<br>

	</div>




</body> 
</html>