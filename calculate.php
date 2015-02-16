

<?php

    require('dbshowuser.php');

            while($user = mysqli_fetch_array($result_user)) {

                $weight = intval($user["user_weight"]);
                $height = intval($user["user_height"]);
                $gender = $user["user_gender"];
                $mode = (double)$user["user_mode"];
                $activity = (double)$user["user_frequency"];
                $user_birthday = $user["user_birthday"];

                $bmi = $weight/(($height/100)*($height/100));
                $bmi_show = "";
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


                $cal = intval($bmr*$activity);

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


                if($bmi <= 16) {
                    $bmi_show = "ผอม อันตรายขั้นที่ 3";
                }
                else if($bmi <= 16.9) {
                     $bmi_show = "ผอม อันตรายขั้นที่ 2";
                }
                else if($bmi <= 18.4) {
                     $bmi_show = "ผอม อันตรายขั้นที่ 1";
                }
                else if($bmi < 18.5) {
                     $bmi_show = "ผอม ";
                }
                else if($bmi <= 22.9) {
                     $bmi_show = "ปรกติ ";
                }
                else if($bmi <= 23) {
                     $bmi_show = "น้ำหนักเกิน ";
                } 
                else if($bmi <= 24.9) {
                     $bmi_show = "อ้วน";
                }
                else if($bmi <= 29.9) {
                     $bmi_show = "โรคอ้วนขั้นที่ 1";
                }
                else if($bmi > 30) {
                     $bmi_show = "โรคอ้วนขั้นที่ 2 ";
                }


                $birthday = new DateTime($user_birthday);
                $to   = new DateTime('today');
                echo $birthday->diff($to)->y;



            }




?>