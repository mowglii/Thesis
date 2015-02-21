<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["user_id_delete"]) ) {
	
	if ( $_POST["user_id_delete"] != "" ) {

		$user_id = intval($_POST["user_id_delete"]);

	$delete_user_sql = 'DELETE FROM user WHERE user_id = '.$user_id.'';
	$result_delete_user = mysqli_query($dbconnect,$delete_user_sql);

		}
	}
?>