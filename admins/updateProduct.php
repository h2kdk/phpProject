<?php
session_start();
include_once '../session/db_handler.php';

if ( ( $_SERVER['REQUEST_METHOD'] == 'POST' )) {
	$_SESSION["updateProduct_msg"] = $_POST['productName'];
	if(isset($_POST['update'])){
		$productTypeUpdate = $_POST['productType'];
		$brandUpdate       = $_POST['brand'];
		$productNameUpdate = $_POST['productName'];
		$imgUpdate         = $_POST['img'];
		$priceUpdate       = $_POST['price'];
		$id                = $_POST['updateId'];

		$q                 = "UPDATE products
				SET productType = '$productTypeUpdate',
					brand		= '$brandUpdate',
					productName = '$productNameUpdate',
					image		= '$imgUpdate',
					price 		= '$priceUpdate'
				WHERE id = '$id'
			";


		if ( mysqli_query( $dbc, $q ) ) {
			$_SESSION["updateProduct_msg"] = "<br><b>The product " . $_POST['productName'] . " had been updated in  the system. </b><br>";
			echo $id;
			header( "location: ../index.php?userAccount" );


		} else {
			echo "<p>" . mysqli_error( $dbc ) . "</p>"; //only during  development
			$_SESSION["updateProduct_msg"] = "<br><p> Could not update product : " . $_POST['productName'] . "</p>";
			header( "location: ../index.php?userAccount" );
		}
	}

	if(isset($_POST['remove'])){
		$id                = $_POST['updateId'];
		$q = "DELETE FROM products WHERE id= '$id'";
		if ( mysqli_query( $dbc, $q ) ) {
			$_SESSION["updateProduct_msg"] = "<br><b>The product " . $_POST['productName'] . " had been deleted in  the system. </b><br>";
			echo $id;
			header( "location: ../index.php?userAccount" );


		} else {
			echo "<p>" . mysqli_error( $dbc ) . "</p>"; //only during  development
			$_SESSION["updateProduct_msg"] = "<br><p> Could not delete product : " . $_POST['productName'] . "</p>";
			header( "location: ../index.php?userAccount" );
		}
	}
}


