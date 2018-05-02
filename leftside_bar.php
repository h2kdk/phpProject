<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container" style="width:700px;">
    <div class="row">
        <div class="col-5">
            <h3>Basket</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="20%">Item Name</th>
                        <th width="20%">Price</th>
                    </tr>
			        <?php
			        if(!empty($_SESSION["shopping_cart"]))
			        {
				        $total = 0;
				        foreach($_SESSION["shopping_cart"] as $keys => $values)
				        {
					        ?>
                            <tr>
                                <td><?php echo $values["item_name"]." x ".$values["item_quantity"]; ?></td>
                                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                            </tr>
					        <?php
					        $total = $total + ($values["item_quantity"] * $values["item_price"]);
				        }
				        ?>
                        <tr>
                            <td width="20%"><b>Total</b></td>
                            <td width="20%"><b>$ <?php echo number_format($total, 2); ?></b></td>
                        </tr>
				        <?php
			        }
			        ?>
                </table>
            </div>
            <h4>Brands</h4>
            <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <ul style="list-style-type:none">
                <li><a name="yamaha" href="index.php?showYamaha">Yamaha</a></li>
                <li><a name="casio" href="index.php?showCasio">Casio</a></li>
                <li><a name="alesis" href="index.php?showAlesis">Alesis</a></li>
                <li><a href="index.php?showBangor">Bangor</a></li>
            </ul>
            </form>
        </div>
    </div>
</div>

</body>
</html>