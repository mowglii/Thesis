<?php
	
	$food_sql = "SELECT* FROM food";
    $result_food_meal = mysqli_query($dbconnect,$food_sql);
    $result_food_sweet = mysqli_query($dbconnect,$food_sql);
    $result_food_drink = mysqli_query($dbconnect,$food_sql);
    $result_food_snack = mysqli_query($dbconnect,$food_sql);
    $result_food_fruit = mysqli_query($dbconnect,$food_sql);
    $result_food_etc = mysqli_query($dbconnect,$food_sql);

?>