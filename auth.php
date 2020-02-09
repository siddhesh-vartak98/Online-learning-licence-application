<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Motor Vehicles Department</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header>
    <div class="primary_header">
      <a href="main.html"><img src="MVDM_logo.png" id="HeaderMain1_DeptLogo" width="84" height="80" align="left" /></a>
        <span id="HeaderMain1_lbl_headTitle" class="title" style="text-align:left"><h1><a href="main.html">Online Learning Licence Application<br><h2>Mumbai</h2></a></h1></span>
      
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="rules.html">Rules</a></li>
        <li><a href="contactus.html">Contact Us</a></li> 
        <li><a href="login.php">Login<br>SignUp</a></li>
        <li><a href="olinks.html">Other Links</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section >
    
    	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		<font size="+2">Welcome <?php echo $_SESSION['username']; ?></font>
    <div class="w3-container">
    <a href="application.php">
    <p><button class="w3-button w3-cyan">Click to Apply</button></p></a><br>
			
			<p> <a href="login.php?logout='1'" style="color: red;"><p><button class="w3-button w3-cyan">Logout</button></p></a> </p>
		<?php endif ?>
	</div>
    </div>
  </section>
  <footer class="secondary_header footer">
    <div class="copyright">&copy;2017 - <strong> This is the official website of Motor Vehicles Department, Maharashtra. All Rights Reserved.</strong></div>
  </footer>
</div>
</body>
</html>
