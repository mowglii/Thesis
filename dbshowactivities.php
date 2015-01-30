<?php
	$now 		= date('Y-m-d');
	$yesterday  = date('Y-m-d',strtotime("-1 days"));
	$tomorrow	= date('Y-m-d',strtotime("+1 days"));

	// Eatting
	$activities_sql = 'SELECT exercise.exer_name, exercise.exer_kcal, activities.activities_duration, activities.activities_date
                       FROM activities
                       INNER JOIN exercise
                       ON activities.exer_id=exercise.exer_id
                       WHERE activities.user_id=' . $_SESSION["user_id"] . ' AND (activities.activities_date = "' . $now . '"   ' . ' OR activities.activities_date = "' . $yesterday . '" ' . ' OR activities.activities_date = "' . $tomorrow . '") ';

  	$result_activities  = mysqli_query($dbconnect,$activities_sql);

?>

