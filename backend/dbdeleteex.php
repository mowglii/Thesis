<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["exer_id_delete"]) ) {
	
	if ( $_POST["exer_id_delete"] != "" ) {

		$ex_id = intval($_POST["exer_id_delete"]);

	$delete_ex_sql = 'DELETE FROM exercise WHERE exer_id = '.$ex_id;
	$result_delete_ex = mysqli_query($dbconnect,$delete_ex_sql);

		}
	}
?>