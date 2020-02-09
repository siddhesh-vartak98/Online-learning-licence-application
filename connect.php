<?php

$user = 'root';
$pass = '';
$db = 'olrs';
$usernamesignup = "";
$emailsignup = "";
$contactsignup = "";
$aadhsignup = "";
$passwordsignup = "";

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to Connect");

	if(isset($_POST['signup']))	{
		$usernamesignup = mysql_real_escape_string($_POST['usernamesignup']);
		$emailsignup = mysql_real_escape_string($_POST['emailsignup']);
		$contactsignup = mysql_real_escape_string($_POST['contactsignup']);
		$aadhsignup = mysql_real_escape_string($_POST['aadhsignup']);
		$passwordsignup = mysql_real_escape_string($_POST['passwordsignup']);
		$passwordsignup_confirm = mysql_real_escape_string($_POST['passwordsignup_confirm']);
	}
		$password = md5('passwordsignup');
		$sql = "INSERT INTO login/signup (username, email, contact, aadhar, pass) 
				VALUES ('$usernamesignup', '$emailsignup', '$contactsignup', '$aadhsignup', '$password')";
		mysqli_query($db, $sql);
		echo 'Successfully Insereted';

?>