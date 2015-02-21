<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["exer_id"]) ) {

	if ( $_POST["exer_id"] != "" 
		&& $_POST["exer_name"] != "" 
		&& $_POST["exer_kcal"] != "" 
 
		) {

		$exer_id = intval($_POST["exer_id"]);
		$exer_name = $_POST["exer_name"];
		$exer_kcal = intval($_POST["exer_kcal"]);
		

	    $save_exer_sql = 'UPDATE exercise SET exer_name="'.$exer_name.'", exer_kcal='.$exer_kcal.'
	         WHERE exer_id='.$exer_id.' ';

	    $result_exer_user= mysqli_query($dbconnect,$save_exer_sql);
		// echo $add_eatting_sql;

	    if ($result_exer_user) {
		    // echo "Saved successfully";

		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($result_save_food);
		}
	}
	else {
		// echo "not isset food";
	}

	

}
else {
	// echo "not post";
}


?>