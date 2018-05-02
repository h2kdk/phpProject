<?php
    include 'session/db_handler.php';
    include_once 'header.php';


?>

<?php
if (isset($_GET["userAccount"])){
	if ($_SESSION["user_role"]=="normal"){
		include 'userAccount.php';
	}
	else if ($_SESSION["user_role"]=="admin"){
		include 'adminAccount.php';
	}
	else{
	    echo "Welcome to Music Land <br>";
	    echo "<a href='signIn.php'>Sign In</a> to see your rewards, exclusive offers and more. Don't have an account? 
                <a href='signUp.php'>Create one</a>";
    }
}
else if (isset($_GET["shoppingCart"])){
    include 'users/shoppingCart.php';
}
else{
	include 'productPage.php';
}


