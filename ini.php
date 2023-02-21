<?php
	$servername = "localhost";
	$username = "username";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password);
	$db = mysqli_select_db($conn,'db_admission');


?>