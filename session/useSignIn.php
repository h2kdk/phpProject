<?php
/**
 * Created by PhpStorm.
 * User: hoang
 * Date: 26/03/2018
 * Time: 21:07
 */
session_start();
require_once 'db_handler.php';
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION["welcome_msg"] = "";
$_SESSION["action"] = "Sign In";
$_SESSION["actionFile"] = "session/signIn.php";
if (($_SERVER['REQUEST_METHOD'] == 'POST')
    && ! empty( $_POST['email'] )
    && ! empty( $_POST['password'] ))
{
	$q= "SELECT * FROM userinfo WHERE email = '$email' AND password ='$password'";
	$result= mysqli_query($dbc, $q);

	if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		header("location: ../index.php?userAccount");
		$_SESSION["user_id"] = $row['id'];
		$_SESSION["user_signedIn"] = $row["firstName"];
		$_SESSION["user_role"] = $row["role"];
		$_SESSION["welcome_msg"] = "Welcome ";
		$_SESSION["action"] = "Sign Out";
		$_SESSION["actionFile"] = "session/signOut.php";
	}
	else {
		header("location: ../signIn.php");
		$_SESSION["welcome_msg"] = "<br> <b>Invalid email or Password</b>";
	}

}



