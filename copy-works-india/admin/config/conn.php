<?php
error_reporting(0);
session_start();
$ses_id = session_id();

$host = 'localhost';
$username = 'copyworksindia_copyworkindia';
$password = '2BJsWU2QCaX+';
$dbName = 'copyworksindia_copyworkindia';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}

//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://copyworksindia.com/admin';
$site = 'https://copyworksindia.com/';

?>