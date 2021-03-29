<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "athletisize2";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
$conn2 = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
$conn3 = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn || !$conn2 || !$conn3) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
