<?php 

$con = mysqli_connect("localhost","root","","kitob");
// Check connection
if (mysqli_connect_errno())
{
	echo "Xato: ".mysqli_connect_error();
	exit;
}
