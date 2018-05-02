<?php
/**
 * Created by PhpStorm.
 * User: hoang
 * Date: 26/03/2018
 * Time: 21:49
 */

   session_start();

   if(session_destroy()) {
	   header("Location: ../index.php");
   }
?>