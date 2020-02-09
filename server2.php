<?php 
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$pfname = "";
	$plname = "";
	$gender = "";
	$age = "";
	$addrl1 = "";
	$addrl2 = "";
	$city = "";
	$state = "";
	$postal = "";
	$cno = "";
	$ano = "";
	$dob = "";
	$email = "";
	$cardno = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['apsubmit'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$pfname = mysqli_real_escape_string($db, $_POST['pfname']);
		$plname = mysqli_real_escape_string($db, $_POST['plname']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$age = mysqli_real_escape_string($db, $_POST['age']);
		$addrl1 = mysqli_real_escape_string($db, $_POST['addrl1']);
		$addrl2 = mysqli_real_escape_string($db, $_POST['addrl2']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$postal = mysqli_real_escape_string($db, $_POST['pincode']);
		$cno = mysqli_real_escape_string($db, $_POST['cno']);
		$ano = mysqli_real_escape_string($db, $_POST['addharno']);
		$dob = mysqli_real_escape_string($db, $_POST['dob']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$cardno = mysqli_real_escape_string($db, $_POST['cardno']);
	}

		if (empty($fname)) { array_push($errors, "Full Name is required"); }
		if (empty($lname)) { array_push($errors, "Username is required"); }
		if (empty($pfname)) { array_push($errors, "Email is required"); }
		//if (empty($ano) || strlen($ano)!=12) { array_push($errors, "Aadhar No is not Correct"); }
		if (empty($cardno)) { array_push($errors, "Kindly enter the card number for payment"); }
		
		if (count($errors) == 0) {
			$query = "INSERT INTO applicants (fname, lname, pfname, plname, gender, age, addrl1, addrl2, city, state, pincode, cno, addharno, dob, email, cardno) 
					  VALUES('$fname', '$lname', '$pfname', '$plname', '$gender', '$age', '$addrl1', '$addrl2', '$city', '$state', '$postal', '$cno', '$ano', '$dob', '$email', '$cardno')";
			mysqli_query($db, $query);
			header('location: auth1.html');
		}
			
?>			
			

		