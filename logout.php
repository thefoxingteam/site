<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);	

}

header('Content-type: text/html; charset=utf-8');
header('Location: index.php');
die;