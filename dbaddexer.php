<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["exer_name3"]) && isset($_POST["activities_date3"]) && isset($_POST["user_id3"]) ){

	if ($_POST["exer_name3"] != ""
		&& $_POST["exer_kcal3"] != "" 
		&& $_POST["user_id3"] != ""
		&& $_POST["activities_date3"] != ""
		&& $_POST["activities_duration3"] != "") {

		$exer_name3 = $_POST["exer_name3"];
		$exer_kcal3 = intval($_POST["exer_kcal3"]);
		$user_id3 = intval($_POST["user_id3"]);
		$activities_date3 = $_POST["activities_date3"];

		$activities_duration3 = intval($_POST["activities_duration3"]);

		$exer_kcal3 = intval($exer_kcal3/$activities_duration3);

	    $add_exer_sql = 'INSERT INTO exercise ( exer_kcal, exer_name, user_id) 
			VALUES ( '. $exer_kcal3 .' , "' . $exer_name3 . '" , ' . $user_id3 . ' )';

	   
			
	    $result_add_exer = mysqli_query($dbconnect,$add_exer_sql);
		echo $add_exer_sql;

	    if ($result_add_exer) {
		    echo "Saved successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($result_add_exer);
		}




		// Select exer_id 

		$exer_id_sql = 'SELECT exer_id FROM exercise WHERE user_id ='. $user_id3 .' ORDER BY exer_id DESC LIMIT 1' ;
		$result_exer_id = mysqli_query($dbconnect,$exer_id_sql);
		$exer_id3 = 0;
		while ($exer_id_fetch = mysqli_fetch_array($result_exer_id)) {
			$exer_id3 = intval($exer_id_fetch["exer_id"]);
		}

		


		$add_act_sql = 'INSERT INTO activities ( activities_date, exer_id, user_id, activities_duration) 
			VALUES ( "' . $activities_date3 . '",' . $exer_id3 . ',' . $user_id3 . ',' . $activities_duration3 . ' )';

		$result_add_act = mysqli_query($dbconnect,$add_act_sql);

		if ($result_add_act) {
		    echo "Saved successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($result_add_act);
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