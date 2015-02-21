<?php

	$user_sql = "SELECT * FROM user WHERE user_id = " . $_SESSION["user_id"];
	$result_user = mysqli_query($dbconnect,$user_sql);
	$result_user2 = mysqli_query($dbconnect,$user_sql);
?>