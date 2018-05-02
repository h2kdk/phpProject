<?php
include_once 'session/db_handler.php';
include 'users/useShoppingCart.php';
include 'header.php';


?>

<div class="container" style="width:700px;">
	<?php
    $productType = "";
    $brand = "";
	if(isset($_GET['showKeyboard'])) {
		$productType = "keyboard";
	}
	if(isset($_GET['showDrum'])) {
		$productType = "drum";
	}
	if(isset($_GET['showSoftware'])) {
		$productType = "software";
	}

	if(isset($_GET['showSheetmusic'])) {
		$productType = "sheetmusic";
	}

	if(isset($_GET['showGuitar'])) {
		$productType = "guitar";
	}
	if(isset($_GET['showYamaha'])) {
		$brand = "Yamaha";
	}

	if(isset($_GET['showCasio'])) {
		$brand = "Casio";
	}

	if(isset($_GET['showAlesis'])) {
		$brand = "Alesis";
	}
	if(isset($_GET['showBangor'])) {
		$brand = "Bangor";
	}

	$query  = "SELECT * FROM products WHERE productType = '$productType' OR brand = '$brand' ORDER BY id ASC";
	$result = mysqli_query( $dbc, $query );
	if ( mysqli_num_rows( $result ) > 0 ) {
		while ( $row = mysqli_fetch_array( $result ) ) {
			?>
            <div class="col-md-4">
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;"
                         align="center">
                        <img src="<?php echo $row["productType"]; ?>/<?php echo $row["image"]; ?>" class="img-responsive"/><br/>
                        <h4 class="text-info"><?php echo $row["productName"]; ?></h4>
                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                        <input type="text" name="quantity" class="form-control" value="1"/>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>"/>
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart"/>
                    </div>
                </form>
            </div>
			<?php

		}
	}

	elseif (!isset($_GET['showKeyboard'])
            && !isset($_GET['showDrum'])
	        && !isset($_GET['showSoftware'])
	        && !isset($_GET['showSheetmusic'])
	        && !isset($_GET['showGuitar'])
	        && !isset($_GET['showYamaha'])
	        && !isset($_GET['showCasio'])
	        && !isset($_GET['showAlesis'])
	        && !isset($_GET['showBangor'])
    ){
		$query  = "SELECT * FROM products ORDER BY id ASC";
		$result = mysqli_query( $dbc, $query );
		if ( mysqli_num_rows( $result ) > 0 ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				?>
                <div class="col-md-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;"
                             align="center">
                            <img src="<?php echo $row["productType"]; ?>/<?php echo $row["image"]; ?>" class="img-responsive"/><br/>
                            <h4 class="text-info"><?php echo $row["productName"]; ?></h4>
                            <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1"/>
                            <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>"/>
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart"/>
                        </div>
                    </form>
                </div>
				<?php

			}
		}
    }
    elseif(mysqli_num_rows( $result ) <= 0 ){
		echo "<h4>No products found!</h4>";
	}



	?>
    <a href="index.php?shoppingCart">Go to cart!</a>
</div>


