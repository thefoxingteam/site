<?php

$dbhost = "sql3.freesqldatabase.com";
$dbuser = "sql3489147";
$dbpass = "FEUCZ5sSKt";
$dbname = "sql3489147";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>