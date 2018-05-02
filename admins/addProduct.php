<?php
session_start();
include_once '../session/db_handler.php';


$_SESSION["addProduct_msg"] ="";
if ( ( $_SERVER['REQUEST_METHOD'] == 'POST' )
//     && !empty( $_POST['productType'] )
//     && !empty( $_POST['brand'] )
//     && !empty( $_POST['productName'] )
//     && !empty( $_POST['img'] )
//     && !empty( $_POST['price'] )
) {
	$productType = $_POST['productType'];
	$brand       = $_POST['brand'];
	$productName = $_POST['productName'];
	$img         = $_POST['img'];
	$price       = $_POST['price'];


	$q = "INSERT INTO products (productType, brand, productName, image, price) VALUES ('$productType', '$brand', '$productName', '$img','$price')";

	$result = mysqli_query( $dbc, $q );

	if ( mysqli_affected_rows( $dbc ) == 1 ) {
		$_SESSION["addProduct_msg"] = "<br><b>The product " . $_POST['productName'] . " had been created in  the system. </b><br>";
		echo "succeeded";
		header( "location: ../index.php?userAccount" );


	} else {
		echo "<p>" . mysqli_error( $dbc ) . "</p>"; //only during  development
		$_SESSION["addProduct_msg"] = "<br><p> Could not add product : " . $productName . "</p>";
		header( "location: ../index.php?userAccount" );
	}
}
//else{
//	header( "location: ../index.php?userAccount" );
//
//}


