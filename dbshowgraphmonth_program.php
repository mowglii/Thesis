<?php

	$user_sql = "SELECT * FROM user WHERE user_id = " . $_SESSION["user_id"];
    $result_user_for_graph = mysqli_query($dbconnect,$user_sql);

    while($user = mysqli_fetch_array($result_user_for_graph)) {

        $weight = (double)$user["user_weight"];
        $mode = (double)$user["user_mode"];
        $weight_decress_in_day  = $mode/7;
        $goal = (double)$user["user_goal"];
        $register = $user["user_register"];
        $day_register = new DateTime($register);
        
        // Get length day ($now_year_month from dbshowgraphmonth_userweight.php)
        $date_day1 = new DateTime($now_year_month."-01");
        $date_day2 = new DateTime($now_year_month."-02");
        $date_day3 = new DateTime($now_year_month."-03");
        $date_day4 = new DateTime($now_year_month."-04");
        $date_day5 = new DateTime($now_year_month."-05");
        $date_day6 = new DateTime($now_year_month."-06");
        $date_day7 = new DateTime($now_year_month."-07");
        $date_day8 = new DateTime($now_year_month."-08");
        $date_day9 = new DateTime($now_year_month."-09");
        $date_day10 = new DateTime($now_year_month."-10");
        $date_day11 = new DateTime($now_year_month."-11");
        $date_day12 = new DateTime($now_year_month."-12");
        $date_day13 = new DateTime($now_year_month."-13");
        $date_day14 = new DateTime($now_year_month."-14");
        $date_day15 = new DateTime($now_year_month."-15");
        $date_day16 = new DateTime($now_year_month."-16");
        $date_day17 = new DateTime($now_year_month."-17");
        $date_day18 = new DateTime($now_year_month."-18");
        $date_day19 = new DateTime($now_year_month."-19");
        $date_day20 = new DateTime($now_year_month."-20");
        $date_day21 = new DateTime($now_year_month."-21");
        $date_day22 = new DateTime($now_year_month."-22");
        $date_day23 = new DateTime($now_year_month."-23");
        $date_day24 = new DateTime($now_year_month."-24");
        $date_day25 = new DateTime($now_year_month."-25");
        $date_day26 = new DateTime($now_year_month."-26");
        $date_day27 = new DateTime($now_year_month."-27");
        $date_day28 = new DateTime($now_year_month."-28");
        $date_day29 = new DateTime($now_year_month."-29");
        $date_day30 = new DateTime($now_year_month."-30");
        $date_day31 = new DateTime($now_year_month."-31");

        $date_day1_diff = $day_register->diff($date_day1)->d;
        $date_day2_diff = $day_register->diff($date_day2)->d;
        $date_day3_diff = $day_register->diff($date_day3)->d;
        $date_day4_diff = $day_register->diff($date_day4)->d;
        $date_day5_diff = $day_register->diff($date_day5)->d;
        $date_day6_diff = $day_register->diff($date_day6)->d;
        $date_day7_diff = $day_register->diff($date_day7)->d;
        $date_day8_diff = $day_register->diff($date_day8)->d;
        $date_day9_diff = $day_register->diff($date_day9)->d;
        $date_day10_diff = $day_register->diff($date_day10)->d;
        $date_day11_diff = $day_register->diff($date_day11)->d;
        $date_day12_diff = $day_register->diff($date_day12)->d;
        $date_day13_diff = $day_register->diff($date_day13)->d;
        $date_day14_diff = $day_register->diff($date_day14)->d;
        $date_day15_diff = $day_register->diff($date_day15)->d;
        $date_day16_diff = $day_register->diff($date_day16)->d;
        $date_day17_diff = $day_register->diff($date_day17)->d;
        $date_day18_diff = $day_register->diff($date_day18)->d;
        $date_day19_diff = $day_register->diff($date_day19)->d;
        $date_day20_diff = $day_register->diff($date_day20)->d;
        $date_day21_diff = $day_register->diff($date_day21)->d;
        $date_day22_diff = $day_register->diff($date_day22)->d;
        $date_day23_diff = $day_register->diff($date_day23)->d;
        $date_day24_diff = $day_register->diff($date_day24)->d;
        $date_day25_diff = $day_register->diff($date_day25)->d;
        $date_day26_diff = $day_register->diff($date_day26)->d;
        $date_day27_diff = $day_register->diff($date_day27)->d;
        $date_day28_diff = $day_register->diff($date_day28)->d;
        $date_day29_diff = $day_register->diff($date_day29)->d;
        $date_day30_diff = $day_register->diff($date_day30)->d;
        $date_day31_diff = $day_register->diff($date_day31)->d;













        // Set weight from length day
        $weight_graph_day[0] = $weight - ($weight_decress_in_day*$date_day1_diff);
        $weight_graph_day[1] = $weight - ($weight_decress_in_day*$date_day2_diff);
        $weight_graph_day[2] = $weight - ($weight_decress_in_day*$date_day3_diff);
        $weight_graph_day[3] = $weight - ($weight_decress_in_day*$date_day4_diff);
        $weight_graph_day[4] = $weight - ($weight_decress_in_day*$date_day5_diff);
        $weight_graph_day[5] = $weight - ($weight_decress_in_day*$date_day6_diff);
        $weight_graph_day[6] = $weight - ($weight_decress_in_day*$date_day7_diff);
        $weight_graph_day[7] = $weight - ($weight_decress_in_day*$date_day8_diff);
        $weight_graph_day[8] = $weight - ($weight_decress_in_day*$date_day9_diff);
        $weight_graph_day[9] = $weight - ($weight_decress_in_day*$date_day10_diff);
        $weight_graph_day[10] = $weight - ($weight_decress_in_day*$date_day11_diff);
        $weight_graph_day[11] = $weight - ($weight_decress_in_day*$date_day12_diff);
        $weight_graph_day[12] = $weight - ($weight_decress_in_day*$date_day13_diff);
        $weight_graph_day[13] = $weight - ($weight_decress_in_day*$date_day14_diff);
        $weight_graph_day[14] = $weight - ($weight_decress_in_day*$date_day15_diff);
        $weight_graph_day[15] = $weight - ($weight_decress_in_day*$date_day16_diff);
        $weight_graph_day[16] = $weight - ($weight_decress_in_day*$date_day17_diff);
        $weight_graph_day[17] = $weight - ($weight_decress_in_day*$date_day18_diff);
        $weight_graph_day[18] = $weight - ($weight_decress_in_day*$date_day19_diff);
        $weight_graph_day[19] = $weight - ($weight_decress_in_day*$date_day20_diff);
        $weight_graph_day[20] = $weight - ($weight_decress_in_day*$date_day21_diff);
        $weight_graph_day[21] = $weight - ($weight_decress_in_day*$date_day22_diff);
        $weight_graph_day[22] = $weight - ($weight_decress_in_day*$date_day23_diff);
        $weight_graph_day[23] = $weight - ($weight_decress_in_day*$date_day24_diff);
        $weight_graph_day[24] = $weight - ($weight_decress_in_day*$date_day25_diff);
        $weight_graph_day[25] = $weight - ($weight_decress_in_day*$date_day26_diff);
        $weight_graph_day[26] = $weight - ($weight_decress_in_day*$date_day27_diff);
        $weight_graph_day[27] = $weight - ($weight_decress_in_day*$date_day28_diff);
        $weight_graph_day[28] = $weight - ($weight_decress_in_day*$date_day29_diff);
        $weight_graph_day[29] = $weight - ($weight_decress_in_day*$date_day30_diff);
        $weight_graph_day[30] = $weight - ($weight_decress_in_day*$date_day31_diff);



        // Set weight before day register = user_weight
        if ($date_day1 <= $day_register) { $weight_graph_day[0] = $weight; }
        if ($date_day2 <= $day_register) { $weight_graph_day[1] = $weight; }
        if ($date_day3 <= $day_register) { $weight_graph_day[2] = $weight; }
        if ($date_day4 <= $day_register) { $weight_graph_day[3] = $weight; }
        if ($date_day5 <= $day_register) { $weight_graph_day[4] = $weight; }
        if ($date_day6 <= $day_register) { $weight_graph_day[5] = $weight; }
        if ($date_day7 <= $day_register) { $weight_graph_day[6] = $weight; }
        if ($date_day8 <= $day_register) { $weight_graph_day[7] = $weight; }
        if ($date_day9 <= $day_register) { $weight_graph_day[8] = $weight; }
        if ($date_day10 <= $day_register) { $weight_graph_day[9] = $weight; }
        if ($date_day11 <= $day_register) { $weight_graph_day[10] = $weight; }
        if ($date_day12 <= $day_register) { $weight_graph_day[11] = $weight; }
        if ($date_day13 <= $day_register) { $weight_graph_day[12] = $weight; }
        if ($date_day14 <= $day_register) { $weight_graph_day[13] = $weight; }
        if ($date_day15 <= $day_register) { $weight_graph_day[14] = $weight; }
        if ($date_day16 <= $day_register) { $weight_graph_day[15] = $weight; }
        if ($date_day17 <= $day_register) { $weight_graph_day[16] = $weight; }
        if ($date_day18 <= $day_register) { $weight_graph_day[17] = $weight; }
        if ($date_day19 <= $day_register) { $weight_graph_day[18] = $weight; }
        if ($date_day20 <= $day_register) { $weight_graph_day[19] = $weight; }
        if ($date_day21 <= $day_register) { $weight_graph_day[20] = $weight; }
        if ($date_day22 <= $day_register) { $weight_graph_day[21] = $weight; }
        if ($date_day23 <= $day_register) { $weight_graph_day[22] = $weight; }
        if ($date_day24 <= $day_register) { $weight_graph_day[23] = $weight; }
        if ($date_day25 <= $day_register) { $weight_graph_day[24] = $weight; }
        if ($date_day26 <= $day_register) { $weight_graph_day[25] = $weight; }
        if ($date_day27 <= $day_register) { $weight_graph_day[26] = $weight; }
        if ($date_day28 <= $day_register) { $weight_graph_day[27] = $weight; }
        if ($date_day29 <= $day_register) { $weight_graph_day[28] = $weight; }
        if ($date_day30 <= $day_register) { $weight_graph_day[29] = $weight; }
        if ($date_day31 <= $day_register) { $weight_graph_day[30] = $weight; }




        // Calculate Time rest
        $user_weight_now_sql = 'SELECT user_weight_weight FROM user_weight WHERE user_id = ' . $_SESSION["user_id"] . ' ORDER BY user_weight_id DESC LIMIT 1';
        $result_user_weight_now = mysqli_query($dbconnect,$user_weight_now_sql);
        $weight_update = 0;
        
        while($user = mysqli_fetch_array($result_user_weight_now)) {
            $weight_update = $user["user_weight_weight"];
        }

        
        $weight_now_diff = $weight-$weight_update;
        if ($weight_update == 0) {
            $weight_now_diff = 0;
        }
        $time_rest        = intval(($goal-$weight_now_diff)/$weight_decress_in_day);

        // Weight now for show
        $weight_now_show = $weight;
        if ($weight_update != 0) {
            $weight_now_show = $weight_update;
        }
    }

?>