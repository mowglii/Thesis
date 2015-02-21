<?php

	$user_sql = "SELECT * FROM user WHERE user_id = " . $_SESSION["user_id"];
    $result_user_for_graph = mysqli_query($dbconnect,$user_sql);

    while($user = mysqli_fetch_array($result_user_for_graph)) {

        $weight                 = (double)$user["user_weight"];
        $mode                   = (double)$user["user_mode"];
        $weight_decress_in_day  = $mode/7;
        $goal                   = (double)$user["user_goal"];
        $register               = $user["user_register"];
        $day_register           = new DateTime($register);
        
        // Get lenght day
        $day_mon                = new DateTime($mon);
        $day_tue                = new DateTime($tue);
        $day_wed                = new DateTime($wed);
        $day_thu                = new DateTime($thu);
        $day_fri                = new DateTime($fri);
        $day_sat                = new DateTime($sat);
        $day_sun                = new DateTime($sun);
        $day_diff_mon           = $day_register->diff($day_mon)->d;
        $day_diff_tue           = $day_register->diff($day_tue)->d;
        $day_diff_wed           = $day_register->diff($day_wed)->d;
        $day_diff_thu           = $day_register->diff($day_thu)->d;
        $day_diff_fri           = $day_register->diff($day_fri)->d;
        $day_diff_sat           = $day_register->diff($day_sat)->d;
        $day_diff_sun           = $day_register->diff($day_sun)->d;

        // Set weight from lenght day
        $weight_graph_mon = $weight - ($weight_decress_in_day*$day_diff_mon);
        $weight_graph_tue = $weight - ($weight_decress_in_day*$day_diff_tue);
        $weight_graph_wed = $weight - ($weight_decress_in_day*$day_diff_wed);
        $weight_graph_thu = $weight - ($weight_decress_in_day*$day_diff_thu);
        $weight_graph_fri = $weight - ($weight_decress_in_day*$day_diff_fri);
        $weight_graph_sat = $weight - ($weight_decress_in_day*$day_diff_sat);
        $weight_graph_sun = $weight - ($weight_decress_in_day*$day_diff_sun);


        if ($day_mon <= $day_register) { $weight_graph_mon = $weight; }
        if ($day_tue <= $day_register) { $weight_graph_tue = $weight; }
        if ($day_wed <= $day_register) { $weight_graph_wed = $weight; }
        if ($day_thu <= $day_register) { $weight_graph_thu = $weight; }
        if ($day_fri <= $day_register) { $weight_graph_fri = $weight; }
        if ($day_sat <= $day_register) { $weight_graph_sat = $weight; }
        if ($day_sun <= $day_register) { $weight_graph_sun = $weight; }




        // Calculate Time rest
        $user_weight_now_sql = 'SELECT user_weight_weight FROM user_weight WHERE user_id = ' . $_SESSION["user_id"] . ' ORDER BY user_weight_id DESC LIMIT 1';
        $result_user_weight_now = mysqli_query($dbconnect,$user_weight_now_sql);
        $weight_update = 0;
        
        while($user = mysqli_fetch_array($result_user_weight_now)) {
            $weight_update = $user["user_weight_weight"];
        }

        
        $weight_now_diff = $weight-$weight_update;
        $time_rest        = intval(($goal-$weight_now_diff)/$weight_decress_in_day);

        // Weight now for show
        $weight_now_show = $weight;
        if ($weight_update != 0) {
            $weight_now_show = $weight_update;
        }
    }

?>