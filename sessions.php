<?php


echo " This is the session of php";

session_start();
$_SESSION['username'] = "Dola";
$_SESSION['favcat'] = "Books";

echo "<br>We have save the session";






?>