<?php
	include_once 'mysql/mysql.php';

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
    <title>GSWA</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
    <link rel="stylesheet" href="css/search.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/default.css" media="screen" title="no title" charset="utf-8">
    

    <link rel="icon" href="images/logo.png" type="image/gif">

</head>


<body id="body">
    <div class="holder-fluid gswa-header">
        <div class="holder navbar navbar-right " id="navbar">
            <div class="navbar-brand">
                <span>GSWA</span>
            </div>
            <div class="triangle"></div>
            <div class="navbar-icon">
                <a href="#" class="icon-android-menu">menu</a>
            </div>
            <ul class="navbar-menu">
            <li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="events.php">Events</a>
					</li>
					<li>
						<a href="advisor.php">Advisor</a>
					</li>
					<li>
						<a href="senior-council.php">Senior Council</a>
					</li>
					<li>
						<a href="executive-committee.php">Executive committee</a>
					</li>
					<li>
						<a href="#"> Members
							<span class="icon-ios-arrow-down"></span>
						</a>
						<ul class="fade-in">
                            <li>
								<a href="members.php">Enlist Members</a>
							</li>
							<li>
								<a href="login.php">Want to be Member</a>
							</li>
							<li> 
								<a href ="search.php">Search A Member</li>
							<li>
								<a href="online-portal/login.php">Online Portal</a>
							</li>
						</ul>
					</li>
					<li class="">
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="">
                        <a href="donation.php">Donation</a>
                    </li>
            </ul>
        </div>
    </div>
    <div class="holder-fluid" style="background: #f1f1f1;text-align: center;padding: 30px 0;box-shadow: inset 0px 0px 20px -2px #c4d0d9;">
		<div class="holder">
			<h3>Members</h3>
			<div class="breadcumb">
				<a href="index.php">Home</a>
				<a href="#">Members</a>
			</div>
		</div>
	</div>
    <div id="body">
    <div class="holder">

            <?php

            session_start();

            $con;
            mysqli_select_db($con, 'portal');
            if(isset($_POST['submit'])){
                $id = $_POST['id'];
                $sql = "select * from gswa_info where id = '$id'";
                $result = mysqli_query($con,$sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){  
                        $row = mysqli_fetch_assoc($result)              
                ?>
                <div style="">
                    <div style="display: inline-block;">
                    
                      <img style=" height: 500px; width:500px" src="<?php echo $row['image']?>" alt="avater">
                    </div>
                    <div style="display: inline-block;">
                     <h3 style="font-family:Time New Roman; padding:10px; margin-bottom: 15px;margin-left:0px;">Name : <?php echo $row['username']?></h3>
                     <h3 style="font-family:Time New Roman; padding:10px; margin-bottom: 15px;margin-left:0px;">Profession : <?php echo $row['profession']?></h3>
                     <h3 style="font-family:Time New Roman; padding:10px; margin-bottom: 15px;margin-left: 0px;">University : <?php echo $row['university']?></h3>
                     <h3 style="font-family:Time New Roman; padding:10px; margin-bottom: 15px;margin-left: 0px;">Mobile :<em style="color:#766A6A;"> <?php echo $row['mobile']?></em></h3>
                     <h3 style="font-family:Time New Roman; padding:10px; margin-bottom: 15px;margin-left: 0px;">Email :<em style="color:#766A6A;"> <?php echo $row['email']?></em></h3>
                    </div>
                </div>
                    <?php
                }
                else
                {
                    header("Location: redirect3.php");
                }
            
            }
        ?>
</div>
<div class="holder-fluid gswa-footer">
        <div class="holder">
            <p>&copy; Copyright 2022 - Gangachara Student Welfare Association (GSWA)</p>
            <br>
            <h5>Follow Us On</h5>
            <div class="list-inline">
                <ul class="list-inline">
                    <li>facebook</li>
                    <li>twitter</li>
                    <li>google+</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="js/default.js" charset="utf-8"></script>
</div>
</body>

</html>