<?php
session_start();
include 'session/db_handler.php';
include_once 'header.php';

if(!isset($_SERVER['HTTP_REFERER'])){
	// redirect them to your desired location
	header('location: error.php');
	exit;
}
    echo $_SESSION["welcome_msg"].$_SESSION["user_signedIn"];
?>
<br>
<a href="<?php echo $_SESSION['actionFile'];?>"><?php echo $_SESSION['action'];?></a>

