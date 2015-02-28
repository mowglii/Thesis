<?php
    
    // Find user_register & user_weight
    $user_for_day_register_sql   = 'SELECT user_weight,user_register FROM user WHERE user_id=' . $_SESSION["user_id"];
    $result_user_for_day_register = mysqli_query($dbconnect,$user_for_day_register_sql);

    $user_weight_base = 0;
    $user_register = "";
    while($user_for_day = mysqli_fetch_array($result_user_for_day_register)) {

        $user_weight_base = $user_for_day["user_weight"];
        $user_register = $user_for_day["user_register"];
        
    }
    $user_register_ex = explode("-", $user_register);


    // Find date
    date_default_timezone_set('Asia/Bangkok');
    $now_day      = date('d');
    $now_month      = date('m');
    $now_year       = date('Y');
    $amount_day_in_month = date('t');
    $now_year_month = $now_year . "-" . $now_month;


    // Find weight where day
    $weight_db_sql   = 'SELECT user_weight_weight,user_weight_date FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' 
                        AND (user_weight_date = "' . $now_year_month . '-01" 
                        OR user_weight_date = "' . $now_year_month . '-02" 
                        OR user_weight_date = "' . $now_year_month . '-03" 
                        OR user_weight_date = "' . $now_year_month . '-04" 
                        OR user_weight_date = "' . $now_year_month . '-05" 
                        OR user_weight_date = "' . $now_year_month . '-06" 
                        OR user_weight_date = "' . $now_year_month . '-07" 
                        OR user_weight_date = "' . $now_year_month . '-08" 
                        OR user_weight_date = "' . $now_year_month . '-09" 
                        OR user_weight_date = "' . $now_year_month . '-10" 
                        OR user_weight_date = "' . $now_year_month . '-11" 
                        OR user_weight_date = "' . $now_year_month . '-12" 
                        OR user_weight_date = "' . $now_year_month . '-13" 
                        OR user_weight_date = "' . $now_year_month . '-14" 
                        OR user_weight_date = "' . $now_year_month . '-15" 
                        OR user_weight_date = "' . $now_year_month . '-16"
                        OR user_weight_date = "' . $now_year_month . '-17" 
                        OR user_weight_date = "' . $now_year_month . '-18" 
                        OR user_weight_date = "' . $now_year_month . '-19" 
                        OR user_weight_date = "' . $now_year_month . '-20" 
                        OR user_weight_date = "' . $now_year_month . '-21" 
                        OR user_weight_date = "' . $now_year_month . '-22" 
                        OR user_weight_date = "' . $now_year_month . '-23" 
                        OR user_weight_date = "' . $now_year_month . '-24" 
                        OR user_weight_date = "' . $now_year_month . '-25" 
                        OR user_weight_date = "' . $now_year_month . '-26" 
                        OR user_weight_date = "' . $now_year_month . '-27" 
                        OR user_weight_date = "' . $now_year_month . '-28" 
                        OR user_weight_date = "' . $now_year_month . '-29" 
                        OR user_weight_date = "' . $now_year_month . '-30" 
                        OR user_weight_date = "' . $now_year_month . '-31")';

    $result_weight_db = mysqli_query($dbconnect,$weight_db_sql);

    $weight_day[0] = null;
    $weight_day[1] = null;
    $weight_day[2] = null;
    $weight_day[3] = null;
    $weight_day[4] = null;
    $weight_day[5] = null;
    $weight_day[6] = null;
    $weight_day[7] = null;
    $weight_day[8] = null;
    $weight_day[9] = null;
    $weight_day[10] = null;
    $weight_day[11] = null;
    $weight_day[12] = null;
    $weight_day[13] = null;
    $weight_day[14] = null;
    $weight_day[15] = null;
    $weight_day[16] = null;
    $weight_day[17] = null;
    $weight_day[18] = null;
    $weight_day[19] = null;
    $weight_day[20] = null;
    $weight_day[21] = null;
    $weight_day[22] = null;
    $weight_day[23] = null;
    $weight_day[24] = null;
    $weight_day[25] = null;
    $weight_day[26] = null;
    $weight_day[27] = null;
    $weight_day[28] = null;
    $weight_day[29] = null;
    $weight_day[30] = null;

    // Set weight 
    while($user_w = mysqli_fetch_array($result_weight_db)) {

        for ($i=0; $i < 30; $i++) {

            $date = $now_year_month."-".($i+1);

            if ($user_w["user_weight_date"] == $date ) {
                $weight_day[$i] = $user_w["user_weight_weight"];
            }
        }
        
    }







    // Check day register 
    if ($user_register_ex[0] == $now_year) {
        if ($user_register_ex[1] == $now_month) {

            // Set weight
            for ($i=0; $i < 30; $i++) {

                
                $date = (int)$user_register_ex[2];
                if ( ($i+1) < $date && $weight_day[$i] == null) {
                    $weight_day[$i] = $user_weight_base;
                }
            }
        }
    }






    // Check day register - now
    if ($user_register_ex[0] <= $now_year) {
        if ($user_register_ex[1] <= $now_month) {

            // Set weight
            for ($i=0; $i < 30; $i++) {

                
                $date = (int)$now_day;
                if ( ($i+1) <= $date && $weight_day[$i] == null) {
                    $weight_day[$i] = $weight_day[$i-1];
                }
            }
        }
    }




?>