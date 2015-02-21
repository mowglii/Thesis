<?php

    // Find date
    $nameDay    = date('l');

    if ($nameDay == "Monday") {
        $mon_l        = date('Y-m-d',strtotime("-7 days"));
        $tue_l        = date('Y-m-d',strtotime("-6 days"));
        $wed_l        = date('Y-m-d',strtotime("-5 days"));
        $thu_l        = date('Y-m-d',strtotime("-4 days"));
        $fri_l        = date('Y-m-d',strtotime("-3 days"));
        $sat_l        = date('Y-m-d',strtotime("-2 days"));
        $sun_l        = date('Y-m-d',strtotime("-1 days"));

        $mon        = date('Y-m-d');
        $tue        = date('Y-m-d',strtotime("+1 days"));
        $wed        = date('Y-m-d',strtotime("+2 days"));
        $thu        = date('Y-m-d',strtotime("+3 days"));
        $fri        = date('Y-m-d',strtotime("+4 days"));
        $sat        = date('Y-m-d',strtotime("+5 days"));
        $sun        = date('Y-m-d',strtotime("+6 days"));
    }
    elseif($nameDay == "Tuesday") {
        $mon_l        = date('Y-m-d',strtotime("-8 days"));
        $tue_l        = date('Y-m-d',strtotime("-7 days"));
        $wed_l        = date('Y-m-d',strtotime("-6 days"));
        $thu_l        = date('Y-m-d',strtotime("-5 days"));
        $fri_l        = date('Y-m-d',strtotime("-4 days"));
        $sat_l        = date('Y-m-d',strtotime("-3 days"));
        $sun_l        = date('Y-m-d',strtotime("-2 days"));

        $mon        = date('Y-m-d',strtotime("-1 days"));
        $tue        = date('Y-m-d');
        $wed        = date('Y-m-d',strtotime("+1 days"));
        $thu        = date('Y-m-d',strtotime("+2 days"));
        $fri        = date('Y-m-d',strtotime("+3 days"));
        $sat        = date('Y-m-d',strtotime("+4 days"));
        $sun        = date('Y-m-d',strtotime("+5 days"));
    }
    elseif($nameDay == "Wednesday") {
        $mon_l        = date('Y-m-d',strtotime("-9 days"));
        $tue_l        = date('Y-m-d',strtotime("-8 days"));
        $wed_l        = date('Y-m-d',strtotime("-7 days"));
        $thu_l        = date('Y-m-d',strtotime("-6 days"));
        $fri_l        = date('Y-m-d',strtotime("-5 days"));
        $sat_l        = date('Y-m-d',strtotime("-4 days"));
        $sun_l        = date('Y-m-d',strtotime("-3 days"));

        $mon        = date('Y-m-d',strtotime("-2 days"));
        $tue        = date('Y-m-d',strtotime("-1 days"));
        $wed        = date('Y-m-d');
        $thu        = date('Y-m-d',strtotime("+1 days"));
        $fri        = date('Y-m-d',strtotime("+2 days"));
        $sat        = date('Y-m-d',strtotime("+3 days"));
        $sun        = date('Y-m-d',strtotime("+4 days"));
    }
    elseif($nameDay == "Thursday") {
        $mon_l        = date('Y-m-d',strtotime("-10 days"));
        $tue_l        = date('Y-m-d',strtotime("-9 days"));
        $wed_l        = date('Y-m-d',strtotime("-8 days"));
        $thu_l        = date('Y-m-d',strtotime("-7 days"));
        $fri_l        = date('Y-m-d',strtotime("-6 days"));
        $sat_l        = date('Y-m-d',strtotime("-5 days"));
        $sun_l        = date('Y-m-d',strtotime("-4 days"));

        $mon        = date('Y-m-d',strtotime("-3 days"));
        $tue        = date('Y-m-d',strtotime("-2 days"));
        $wed        = date('Y-m-d',strtotime("-1 days"));
        $thu        = date('Y-m-d');
        $fri        = date('Y-m-d',strtotime("+1 days"));
        $sat        = date('Y-m-d',strtotime("+2 days"));
        $sun        = date('Y-m-d',strtotime("+3 days"));
    }
    elseif($nameDay == "Friday") {
        $mon_l        = date('Y-m-d',strtotime("-11 days"));
        $tue_l        = date('Y-m-d',strtotime("-10 days"));
        $wed_l        = date('Y-m-d',strtotime("-9 days"));
        $thu_l        = date('Y-m-d',strtotime("-8 days"));
        $fri_l        = date('Y-m-d',strtotime("-7 days"));
        $sat_l        = date('Y-m-d',strtotime("-6 days"));
        $sun_l        = date('Y-m-d',strtotime("-5 days"));

        $mon        = date('Y-m-d',strtotime("-4 days"));
        $tue        = date('Y-m-d',strtotime("-3 days"));
        $wed        = date('Y-m-d',strtotime("-2 days"));
        $thu        = date('Y-m-d',strtotime("-1 days"));
        $fri        = date('Y-m-d');
        $sat        = date('Y-m-d',strtotime("+1 days"));
        $sun        = date('Y-m-d',strtotime("+2 days"));
    }
    elseif($nameDay == "Saturday") {
        $mon_l        = date('Y-m-d',strtotime("-12 days"));
        $tue_l        = date('Y-m-d',strtotime("-11 days"));
        $wed_l        = date('Y-m-d',strtotime("-10 days"));
        $thu_l        = date('Y-m-d',strtotime("-9 days"));
        $fri_l        = date('Y-m-d',strtotime("-8 days"));
        $sat_l        = date('Y-m-d',strtotime("-7 days"));
        $sun_l        = date('Y-m-d',strtotime("-6 days"));

        $mon        = date('Y-m-d',strtotime("-5 days"));
        $tue        = date('Y-m-d',strtotime("-4 days"));
        $wed        = date('Y-m-d',strtotime("-3 days"));
        $thu        = date('Y-m-d',strtotime("-2 days"));
        $fri        = date('Y-m-d',strtotime("-1 days"));
        $sat        = date('Y-m-d');
        $sun        = date('Y-m-d',strtotime("+1 days"));
    }
    else {
        $mon_l        = date('Y-m-d',strtotime("-13 days"));
        $tue_l        = date('Y-m-d',strtotime("-12 days"));
        $wed_l        = date('Y-m-d',strtotime("-11 days"));
        $thu_l        = date('Y-m-d',strtotime("-10 days"));
        $fri_l        = date('Y-m-d',strtotime("-9 days"));
        $sat_l        = date('Y-m-d',strtotime("-8 days"));
        $sun_l        = date('Y-m-d',strtotime("-7 days"));

        $mon        = date('Y-m-d',strtotime("-6 days"));
        $tue        = date('Y-m-d',strtotime("-5 days"));
        $wed        = date('Y-m-d',strtotime("-4 days"));
        $thu        = date('Y-m-d',strtotime("-3 days"));
        $fri        = date('Y-m-d',strtotime("-2 days"));
        $sat        = date('Y-m-d',strtotime("-1 days"));
        $sun        = date('Y-m-d');
    }

    echo $mon . ", ";
    echo $tue . ", ";
    echo $wed . ", ";
    echo $thu . ", ";
    echo $fri . ", ";
    echo $sat . ", ";
    echo $sun . ", ";



    // Find weight in db
    $weight_mon_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $mon_l . '"';
    $weight_tue_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $tue_l . '"';
    $weight_wed_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $wed_l . '"';
    $weight_thu_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $thu_l . '"';
    $weight_fri_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $fri_l . '"';
    $weight_sat_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $sat_l . '"';
    $weight_sun_sql_l     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $sun_l . '"';

    $weight_mon_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $mon . '"';
    $weight_tue_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $tue . '"';
    $weight_wed_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $wed . '"';
    $weight_thu_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $thu . '"';
    $weight_fri_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $fri . '"';
    $weight_sat_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $sat . '"';
    $weight_sun_sql     = 'SELECT user_weight_weight FROM user_weight WHERE user_id=' . $_SESSION["user_id"] . ' AND user_weight_date = "' . $sun . '"';


    $result_weight_mon_l  = mysqli_query($dbconnect,$weight_mon_sql_l);
    $result_weight_tue_l  = mysqli_query($dbconnect,$weight_tue_sql_l);
    $result_weight_wed_l  = mysqli_query($dbconnect,$weight_wed_sql_l);
    $result_weight_thu_l  = mysqli_query($dbconnect,$weight_thu_sql_l);
    $result_weight_fri_l  = mysqli_query($dbconnect,$weight_fri_sql_l);
    $result_weight_sat_l  = mysqli_query($dbconnect,$weight_sat_sql_l);
    $result_weight_sun_l  = mysqli_query($dbconnect,$weight_sun_sql_l);

    $result_weight_mon  = mysqli_query($dbconnect,$weight_mon_sql);
    $result_weight_tue  = mysqli_query($dbconnect,$weight_tue_sql);
    $result_weight_wed  = mysqli_query($dbconnect,$weight_wed_sql);
    $result_weight_thu  = mysqli_query($dbconnect,$weight_thu_sql);
    $result_weight_fri  = mysqli_query($dbconnect,$weight_fri_sql);
    $result_weight_sat  = mysqli_query($dbconnect,$weight_sat_sql);
    $result_weight_sun  = mysqli_query($dbconnect,$weight_sun_sql);



    // Convert weight into double
    $weight_mon_l = 0;
    $weight_tue_l = 0;
    $weight_wed_l = 0;
    $weight_thu_l = 0;
    $weight_fri_l = 0;
    $weight_sat_l = 0;
    $weight_sun_l = 0;

    $weight_mon = 0;
    $weight_tue = 0;
    $weight_wed = 0;
    $weight_thu = 0;
    $weight_fri = 0;
    $weight_sat = 0;
    $weight_sun = 0;


    while($obj = mysqli_fetch_array($result_weight_mon_l)) {
        $weight_mon_l = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_tue_l)) {
        $weight_tue_l = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_wed_l)) {
        $weight_wed_l = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_thu_l)) {
        $weight_thu_l = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_fri_l)) {
        $weight_fri_l = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_sat_l)) {
        $weight_sat_l = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_sun_l)) {
        $weight_sun_l = (double)$obj["user_weight_weight"];
    }

    while($obj = mysqli_fetch_array($result_weight_mon)) {
        $weight_mon = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_tue)) {
        $weight_tue = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_wed)) {
        $weight_wed = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_thu)) {
        $weight_thu = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_fri)) {
        $weight_fri = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_sat)) {
        $weight_sat = (double)$obj["user_weight_weight"];
    }
    while($obj = mysqli_fetch_array($result_weight_sun)) {
        $weight_sun = (double)$obj["user_weight_weight"];
    }

    echo $weight_mon . ", ";
    echo $weight_tue . ", ";
    echo $weight_wed . ", ";
    echo $weight_thu . ", ";
    echo $weight_fri . ", ";
    echo $weight_sat . ", ";
    echo $weight_sun . ", ";


    // Check not input weight in day
    if ($weight_tue_l == 0) { $weight_tue_l = $weight_mon_l; }
    if ($weight_wed_l == 0) { $weight_wed_l = $weight_tue_l; }
    if ($weight_thu_l == 0) { $weight_thu_l = $weight_wed_l; }
    if ($weight_fri_l == 0) { $weight_fri_l = $weight_thu_l; }
    if ($weight_sat_l == 0) { $weight_sat_l = $weight_fri_l; }
    if ($weight_sun_l == 0) { $weight_sun_l = $weight_sat_l; }

    // If last week weight = 0, change 0 into weight in table user
    if ($weight_sun_l == 0) {
        echo "Last week weight = 0, change 0 into weight in table user.";

        $user_weight_sql     = 'SELECT user_weight FROM user WHERE user_id=' . $_SESSION["user_id"];
        $result_user_weight  = mysqli_query($dbconnect,$user_weight_sql);

        while($obj = mysqli_fetch_array($result_user_weight)) {
            $weight_sun_l = (double)$obj["user_weight"];
        }
        echo "Weight change into " . $weight_sun_l . "kg. ";
    }

    // Check not input weight in day
    if ($weight_mon == 0) { $weight_mon = $weight_sun_l; }
    if ($weight_tue == 0) { $weight_tue = $weight_mon; }
    if ($weight_wed == 0) { $weight_wed = $weight_tue; }
    if ($weight_thu == 0) { $weight_thu = $weight_wed; }
    if ($weight_fri == 0) { $weight_fri = $weight_thu; }
    if ($weight_sat == 0) { $weight_sat = $weight_fri; }
    if ($weight_sun == 0) { $weight_sun = $weight_sat; }

    echo $weight_mon . ", ";
    echo $weight_tue . ", ";
    echo $weight_wed . ", ";
    echo $weight_thu . ", ";
    echo $weight_fri . ", ";
    echo $weight_sat . ", ";
    echo $weight_sun . ", ";

?>