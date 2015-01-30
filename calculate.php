

<?php

    require('dbshowuser.php');

            while($user = mysqli_fetch_array($result_user)) {

                $weight = intval($user["user_weight"]);
                $height = intval($user["user_height"]);
                $gender = $user["user_gender"];
                $mode = (double)$user["user_mode"];
                $activity = (double)$user["user_frequency"];


                $age = 22;
                $bmr = 0;
                $cal = 0;
                $cal_min = 0;
                $cal_max = 0;

                if($gender == "m") {
                    $bmr = ($weight*13.75)+($height*0.003)-(6.755*$age)+66.5;
                }
                else if($gender == "f") {
                    $bmr = ($weight*9.563)+($height*1.85)-(4.676*$age)+665.1;
                }


                $cal = $bmr*$activity;

                if($mode == 0.25) {
                    $cal_min = 1200;
                }
                else if($mode == 0.5) {
                    $cal_min = 1000;
                }
                else if($mode == 0.75) {
                    $cal_min = 800;
                }
                else if($mode == 1) {
                    $cal_min = 800;
                }
                $cal_max = intval($cal-($mode*7700/7)); 
            }

?>