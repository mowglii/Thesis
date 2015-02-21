<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["admin_username"])){

		$admin_username = $_POST['admin_username'];
		$admin_pass = $_POST['admin_pass'];

		$admin_sql = " SELECT * FROM admin WHERE admin_username = '".$admin_username."' AND admin_pass = '" .$admin_pass . "'";

		$result_admin = mysqli_query($dbconnect,$admin_sql);
		$count_admin = 0;


		while($obj = mysqli_fetch_array($result_admin)) {
			$count_admin++;
		}
		if ($count_admin > 0) {
	        $_SESSION["admin"] = "Admin";
	        session_write_close();
	    }
	    else {
	    	header("location:index.php");
	    }
	
	}
?>