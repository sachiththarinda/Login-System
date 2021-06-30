<?php
   
$Servername ="localhost";
$dBUsername = "root";
$dBPassword ="";
$dBName ="loginsystemtut";

$conn = mysqli_connect($Servername,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
	die("connection failed: ".mysqli_connect_error());
}