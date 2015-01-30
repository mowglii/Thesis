<?php
	$now 		= date('Y-m-d');
	$yesterday  = date('Y-m-d',strtotime("-1 days"));
	$tomorrow	= date('Y-m-d',strtotime("+1 days"));

	// All cal
	$allcal_sql     = 'SELECT sum(food.food_kcal)
                       FROM eating
                       INNER JOIN food
                       ON eating.food_id=food.food_id
                       WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $now . '"';
  $result_allcal  = mysqli_query($dbconnect,$allcal_sql);

  $allcalYes_sql     = 'SELECT sum(food.food_kcal)
                     FROM eating
                     INNER JOIN food
                     ON eating.food_id=food.food_id
                     WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $yesterday . '"';
  $result_allcalYes  = mysqli_query($dbconnect,$allcalYes_sql);

  $allcalTom_sql     = 'SELECT sum(food.food_kcal)
                     FROM eating
                     INNER JOIN food
                     ON eating.food_id=food.food_id
                     WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $tomorrow . '"';
  $result_allcalTom  = mysqli_query($dbconnect,$allcalTom_sql);



	// Eatting
	$eating_sql     = 'SELECT food.food_name, food.food_weight, food.food_kcal, eating.eating_date, eating.eating_meal
                       FROM eating
                       INNER JOIN food
                       ON eating.food_id=food.food_id
                       WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND (eating.eating_date = "' . $now . '"   ' . ' OR eating.eating_date = "' . $yesterday . '" ' . ' OR eating.eating_date = "' . $tomorrow . '") ';

  $result_eating  = mysqli_query($dbconnect,$eating_sql);
  $result_eating2  = mysqli_query($dbconnect,$eating_sql);
  $result_eating3  = mysqli_query($dbconnect,$eating_sql);

?>