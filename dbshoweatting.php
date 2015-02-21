<?php
	$now 		= date('Y-m-d');
	$yesterday  = date('Y-m-d',strtotime("-1 days"));

	// All cal
	$allcal_sql     = 'SELECT food.food_kcal, eating.eating_amount
                       FROM eating
                       INNER JOIN food
                       ON eating.food_id=food.food_id
                       WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $now . '"';
  $result_allcal_now  = mysqli_query($dbconnect,$allcal_sql);

  $allcalYes_sql     = 'SELECT food.food_kcal, eating.eating_amount
                     FROM eating
                     INNER JOIN food
                     ON eating.food_id=food.food_id
                     WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $yesterday . '"';
  $result_allcal_yes  = mysqli_query($dbconnect,$allcalYes_sql);


	// Eatting
	$eating_sql     = 'SELECT food.food_name, food.food_weight, food.food_kcal, eating.eating_date, eating.eating_meal, eating.eating_amount, food.food_unit
                       FROM eating
                       INNER JOIN food
                       ON eating.food_id=food.food_id
                       WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND (eating.eating_date = "' . $now . '"   ' . ' OR eating.eating_date = "' . $yesterday . '" ) ';

  $result_eating_yes  = mysqli_query($dbconnect,$eating_sql);
  $result_eating_now0  = mysqli_query($dbconnect,$eating_sql);
  $result_eating_now1  = mysqli_query($dbconnect,$eating_sql);
  $result_eating_now2  = mysqli_query($dbconnect,$eating_sql);

?>