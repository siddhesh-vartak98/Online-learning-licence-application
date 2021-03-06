<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
	<title>Motor Vehicles Department</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style4.css">
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Motor Vehicles Department</title>
		<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
</head>
<body>
  <header>
    <div class="primary_header">
      <a href="main.html"><img src="MVDMo_logo.jpg" id="HeaderMain1_DeptLogo" width="84" height="80" align="left"></a><img src="emblem_n.png" id="HeaderMain1_DeptLogo" width="84" height="80" align="right" />
        <span id="HeaderMain1_lbl_headTitle" class="title" style="text-align:left"><h1><a href="main.html">Online Learning Licence Application	<img src="maharashtralogo.png" id="HeaderMain1_DeptLogo" width="84" height="80" align="right" /> <br><h2>Mumbai</h2></a></h1></span>
      
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="rules.html">Rules</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li><a href="howtoapply.html">How to Apply</a></li> 
        <li><a href="login.php">Login<br>SignUp</a></li>
        <li><a href="olinks.html">Other Links</a></li>
      </ul>
    </nav>
  </header>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign up</a>
		</p>
	</form>
		<br><br><br>
            <footer class="secondary_header footer">
    <div class="copyright">&copy;2017 - <strong> This is the official website of Motor Vehicles Department, Maharashtra. All Rights Reserved.</strong></div>
  </footer>
</body>
</html>