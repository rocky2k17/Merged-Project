<?php
    session_start();
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
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
  
    
    <div align = "center">
        <div  class="Card">
            <div class="CardInner">
                <form action="searching.php" method = "post" enctype = "multipart/form-data">
                    <label>Search a member </label>
                        <div class="container">
                            <div class="Icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            </div>
                            <div class="InputContainer">
                                <input type="text" name="username" id="name" placeholder="Search a member......" required/>
                    
                            </div>
                            <div class = "InputContainer">
                            <input type = "submit" name = "submit" value="submit" onclick = "this.value=''" >
                            </div>
                </form>
             </div>
      </div>
    </div>
</div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>


    <div class="holder-fluid gswa-footer">
        <div class="holder">
            <p>&copy; Copyright 2022 - Gangachara Student Welfare Association (GSWA)</p>
            <br>
            <h5>Follow Us On</h5>
            <div class="list-inline">
                <ul class="list-inline">
                     <li> <a href="https://www.facebook.com/gswabd1" target="_blank">facebook</a> </li>
                    <li>twitter</li>
                    <li>google+</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="js/default.js" charset="utf-8"></script>

</body>

</html>