<?php

	$userweight_sql = "SELECT * FROM user_weight WHERE user_id = " . $_SESSION["user_id"] . " ORDER BY user_weight_id DESC ";
	$result_userweight = mysqli_query($dbconnect,$userweight_sql);

?>