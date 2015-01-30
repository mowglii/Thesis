<?php
// echo isset($_SESSION["user_id"]);
	if(isset($_SESSION["user_id"]) != 1) {

		$sql = 'SELECT * FROM user ORDER BY user_id DESC LIMIT 1';
	    $result = mysqli_query($dbconnect,$sql);
	    while($row = mysqli_fetch_array($result)) {
	    	$_SESSION["user_id"] = $row["user_id"];
	    }
	    echo "create session : " . $_SESSION["user_id"];
	    // echo isset($_SESSION["user_id"]);
	    session_write_close();
    }    

?>