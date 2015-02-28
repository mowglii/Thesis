<?php
	$now 		= date('Y-m-d');
	$yesterday  = date('Y-m-d',strtotime("-1 days"));
	$tomorrow	= date('Y-m-d',strtotime("+1 days"));

	// All nuta
	$allnuta_sql     = 'SELECT *
                       FROM eating
                       INNER JOIN food
                       ON eating.food_id=food.food_id
                       WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $now . '"';
  $result_allnuta  = mysqli_query($dbconnect,$allcal_sql);



	// nuta
	$nuta_sql     = 'SELECT sum(food.food_kcal), sum(food.food_weight), sum(food.food_fat), sum(food.food_cholesterol), sum(food.food_protein), sum(food.food_carbohydrate), sum(food.food_sugar), sum(food.food_salt), sum(food.food_vita), sum(food.food_vitb1), sum(food.food_vitb2), sum(food.food_calcium), sum(food.food_iron), eating.eating_date, eating.eating_meal
                       FROM eating
                       INNER JOIN food
                       ON eating.food_id=food.food_id
                       WHERE eating.user_id=' . $_SESSION["user_id"] . ' AND eating.eating_date = "' . $now . '" ';

  $result_nuta  = mysqli_query($dbconnect,$nuta_sql);
  if ($result_nuta) {
    echo "success" ;
  }
  $result_nuta1  = mysqli_query($dbconnect,$nuta_sql);
  $result_nuta2  = mysqli_query($dbconnect,$nuta_sql);
  $result_nuta3  = mysqli_query($dbconnect,$nuta_sql);

?>