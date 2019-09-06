<?php
$con = mysqli_connect("localhost","root","","agenciarodeo");

// Check connection
if (mysqli_connect_errno())//The mysqli_connect_errno() function returns the error code from the last connection error, if any.
{
	echo "Error al conectarse a  MySQL: " . mysqli_connect_error($con);
}
?>
