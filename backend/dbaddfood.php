<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["food_type2"])) {

	if ( $_POST["food_type2"] != "" 
		&& $_POST["food_name2"] != "" 
		&& $_POST["food_weight2"] != "" 
		&& $_POST["food_kcal2"] != ""
		&& $_POST["food_fat2"] != "" 
		&& $_POST["food_cholesterol2"] != "" 
		&& $_POST["food_protein2"] != "" 
		&& $_POST["food_carbohydrate2"] != "" 
		&& $_POST["food_sugar2"] != "" 
		&& $_POST["food_salt2"] != "" 
		&& $_POST["food_vita2"] != "" 
		&& $_POST["food_vitb12"] != "" 
		&& $_POST["food_vitb22"] != "" 
		&& $_POST["food_calcium2"] != "" 
		&& $_POST["food_iron2"] != "") {

		$food_type = $_POST["food_type2"];
		$food_name = $_POST["food_name2"];
		$food_weight = intval($_POST["food_weight2"]);
		$food_kcal = intval($_POST["food_kcal2"]);
		$food_fat = intval($_POST["food_fat2"]);
		$food_cholesterol = intval($_POST["food_cholesterol2"]);
		$food_protein = intval($_POST["food_protein2"]);
		$food_carbohydrate = intval($_POST["food_carbohydrate2"]);
		$food_sugar = intval($_POST["food_sugar2"]);
		$food_salt = intval($_POST["food_salt2"]);
		$food_vita = intval($_POST["food_vita2"]);
		$food_vitb1 = intval($_POST["food_vitb12"]);
		$food_vitb2 = intval($_POST["food_vitb22"]);
		$food_iron = intval($_POST["food_iron2"]);

	    $add_food_sql = 'INSERT INTO food ( food_type, food_name, food_weight, food_kcal, food_fat, food_cholesterol, food_protein, 
	    	food_carbohydrate, food_sugar, food_salt, food_vita, food_vitb1, food_vitb2, food_iron) 

	         VALUES ("' . $food_type . '", "' . $food_name . '", ' . $food_weight . ', ' . $food_kcal . ', ' . $food_fat . ',
	         	' . $food_cholesterol . ',' . $food_protein . ',' . $food_carbohydrate . ',' . $food_sugar . ',' . $food_salt . ',' . $food_vita . ',
	         	' . $food_vitb1 . ',' . $food_vitb2 . ',' . $food_iron . ')';


	    $result_add_food = mysqli_query($dbconnect,$add_food_sql);
		// echo $add_eatting_sql;

	    if ($result_add_food) {
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