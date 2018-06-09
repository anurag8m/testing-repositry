<?php

//let's start the session
session_start();

   $new = "anurta";
//finally, let's store our posted values in the session variables
 $_SESSION['test'] = $_POST;

print_r($_SESSION);

?>