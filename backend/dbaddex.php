<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["exer_name2"])) {

	if ( $_POST["exer_name2"] != "" 
		&& $_POST["exer_kcal2"] != "" ){

		$exer_name = $_POST["exer_name2"];
		$exer_kcal = $_POST["exer_kcal2"];


	    $add_exer_sql = 'INSERT INTO exercise ( exer_name, exer_kcal) 

	         VALUES ("' . $exer_name . '", ' . $exer_kcal . ')';


	    $result_add_exer = mysqli_query($dbconnect,$add_exer_sql);
		// echo $add_eatting_sql;

	    if ($result_add_exer) {
		    // echo "Saved successfully";
		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($result_add_food);
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