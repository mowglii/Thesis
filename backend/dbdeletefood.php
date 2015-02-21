<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["food_id_delete"]) ) {
	
	if ( $_POST["food_id_delete"] != "" ) {

		$food_id_delete = intval($_POST["food_id_delete"]);

	$delete_food_sql = 'DELETE FROM food WHERE food_id = '.$food_id_delete.'';
	$result_delete_food= mysqli_query($dbconnect,$delete_food_sql);

		}
	}
?>