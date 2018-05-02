<?php
include 'session/db_handler.php';
include 'header.php';

if(!isset($_SERVER['HTTP_REFERER'])){
	// redirect them to your desired location
	header('location: error.php');
	exit;
}

if(isset($_REQUEST['addProduct'])) {
	$_SESSION["addProduct_msg"] ="";
	if ( ( $_SERVER['REQUEST_METHOD'] == 'POST' )
	     && ! empty( $_POST['productType'] )
	     && ! empty( $_POST['brand'] )
	     && ! empty( $_POST['productName'] )
	     && ! empty( $_POST['img'] )
	     && ! empty( $_POST['price'] )
	) {
		$productType = $_POST['productType'];
		$brand       = $_POST['brand'];
		$productName = $_POST['productName'];
		$img         = $_POST['img'];
		$price       = $_POST['price'];


		$q = "INSERT INTO products (productType, brand, productName, image, price) VALUES ('$productType', '$brand', '$productName', '$img','$price')";

		$result = mysqli_query( $dbc, $q );

		if ( mysqli_affected_rows( $dbc ) == 1 ) {
			$_SESSION["addProduct_msg"] = "<br><b>The product" . $productName . " had been created in  the system. </b><br>";

		} else {
			echo "<p>" . mysqli_error( $dbc ) . "</p>"; //only during  development
			$_SESSION["addProduct_msg"] = "<br><p> Could not add product : " . $productName . "</p>";
		}
	}
}
?>


<div class="container" style="width:700px;">
	<?php
	echo $_SESSION["welcome_msg"].$_SESSION["user_signedIn"];
	?>
	<a href="<?php echo $_SESSION['actionFile'];?>"><?php echo $_SESSION['action'];?></a>

	<h3>Product Details</h3>
	<?php echo $_SESSION["updateProduct_msg"]; ?>
    <div class="table-responsive">
        <table class="table table-bordered">
			<tr>
				<th width="5%">Id</th>
				<th width="15%">Item Type</th>
				<th width="15%">Item Brand</th>
				<th width="30%">Item Name</th>
				<th width="10%">Image</th>
				<th width="10%">Price</th>
				<th width="40%">Action</th>
			</tr>
			<?php
			$query = "SELECT * FROM products ORDER BY id ASC";
			$result = mysqli_query($dbc, $query);
			if(mysqli_num_rows($result) > 0)
			{
			while($row = mysqli_fetch_array($result))
			{
			?>
                <form action="admins/updateProduct.php" method="POST">
			<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><input type="text" size="5" name="productType" value="<?php echo $row["productType"]; ?>"></td>
				<td><input type="text" size="5" name="brand" value="<?php echo $row["brand"]; ?>"></td>
				<td><input type="text" size="15" name="productName" value="<?php echo $row["productName"]; ?>"></td>
				<td><input type="text" size="8" name="img" value="<?php echo $row["image"]; ?>"></td>
				<td><input type="text" size="5" name="price" value="<?php echo $row["price"]; ?>"></td>
                <input type="hidden" name="updateId" value="<?php echo $row["id"]; ?>">
                <td>
                    <button type="submit" name="update" class="btn-primary">Update</button>
                    <button type="submit" name="remove"class="btn-danger">Remove</button>
                </td>
            </tr>
                </form>

				<?php
		}
	}
	?>
        </table>
    </div>
    <h3>Add New Product</h3>
    <form method="POST" action="admins/addProduct.php">
        <div class="form-group">
            <label>Type</label>
            <input required type="text" name="productType" class="form-control" placeholder="Product type (guitar, keyboard, drum, software of sheetmusic)">
            <label>Brand</label>
            <input required type="text" name="brand" class="form-control" placeholder="Product Brand">
            <label>Name</label>
            <input required type="text" name="productName" class="form-control" placeholder="Product Name">
            <label>Image source</label>
            <input required type="text" name="img" class="form-control" placeholder="Product Image">
            <label>Price</label>
            <input required type="text" name="price" class="form-control" placeholder="Product Price">
        </div>
            <button type="submit" class="btn btn-primary" name="addProduct">Add</button>
    </form>
    <?php echo $_SESSION["addProduct_msg"]; ?>
</div>
<br>
