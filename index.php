
<?php
	session_start();
	include_once 'session/db_handler.php';
    include 'header.php';
    include 'menu.php';
    include 'users/useShoppingCart.php';
    echo "<div class='container'>
			<div class='row'>
				<div class='col-3'>";
    include 'leftside_bar.php';
	echo "</div> <div class='col-9'>";
					include_once 'body.php';
	echo "</div>
			</div>
		</div>";
    include_once 'footer.html';




