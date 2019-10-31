<?php
$servername = "188.166.253.168";
$username = "kitti_bc";
$password = "kitti1234bc";
$dbname = "kitti_bc";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection
if($conn)
{
	//echo "MySQL Connected";
}
else
{
    echo "MySQL Connect Failed : Error : ".mysql_error();
}
?>
