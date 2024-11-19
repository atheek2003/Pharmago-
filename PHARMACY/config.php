<?php
		$conn = mysqli_connect("localhost", "root", "", "pharmacy" , 3308);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>