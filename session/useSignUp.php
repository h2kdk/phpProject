<?php
session_start();
require_once 'db_handler.php';
include'../header.php';

$_SESSION["signUp_msg"]="";
$firstName = $lastName = $email = $address = $password = $confirmpassword = "";
$firstNameErr = $lastNameErr = $emailErr = $addressErr = $passwordErr = $confirmpasswordErr = "";

if (($_SERVER['REQUEST_METHOD'] == 'POST')
		&& ! empty( $_POST['firstName'] )
		&& ! empty( $_POST['lastName'] )
        && ! empty( $_POST['email'] )
        && ! empty( $_POST['phone'] )
        && ! empty( $_POST['password'] )
        && ! empty( $_POST['confirmpassword'] )
		&& ( $_POST['password'] ) == ( $_POST['confirmpassword'] )

)
	{
		$firstName       = $_POST['firstName'];
		$lastName        = $_POST['lastName'];
		$email           = $_POST['email'];
		$phone           = $_POST['phone'];
		$address         = $_POST['address'];
		$password        = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$role            = "normal";


		$q = "INSERT INTO userinfo (firstName, lastName, email, phone, address, password, role) VALUES ('$firstName', '$lastName', '$email', '$phone','$address','$password', '$role')";

		$result = mysqli_query( $dbc, $q );

		if ( mysqli_affected_rows( $dbc ) == 1 ) {
			$_SESSION["signUp_msg"] = "<br><b>Welcome ".$firstName."! Your profile had been created in  the system. </b><br>";
			header( "location: ../signIn.php" );

		} else {
			echo "<p>" . mysqli_error( $dbc ) . "</p>"; //only during  development
			$_SESSION["signUp_msg"] = "<br><p> Could not create user : " . $firstName . "</p>";
		}
	}
	else {
		$_SESSION["signUp_msg"] = "<br><b> Could not create user : " . $_POST['firstName'] . "</b>";
		header( "location: ../signUp.php" );
	}


