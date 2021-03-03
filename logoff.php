<?php 
session_start();/*session started*/

session_unset();/*session unset*/

session_destroy();/*session destroyed*/

header('location:Userhome.php');/*changed file location*/
?>