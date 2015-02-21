<?php
	$now 		= date('Y-m-d');
	$yesterday  = date('Y-m-d',strtotime("-1 days"));

	// Eatting
	$activities_sql = 'SELECT exercise.exer_name, exercise.exer_kcal, activities.activities_duration, activities.activities_date
                       FROM activities
                       INNER JOIN exercise
                       ON activities.exer_id=exercise.exer_id
                       WHERE activities.user_id=' . $_SESSION["user_id"] . ' AND (activities.activities_date = "' . $now . '" ) ';

  $result_activities_yes_bar  = mysqli_query($dbconnect,$activities_sql);
  $result_activities_yes_list  = mysqli_query($dbconnect,$activities_sql);
  $result_activities_now_bar  = mysqli_query($dbconnect,$activities_sql);
  $result_activities_now_list  = mysqli_query($dbconnect,$activities_sql);
  
?>

