<?php
    session_start();
    unset($_SESSION["user_id"]);

    require('dbconnect.php');

    require('dbfinduserid.php'); 
    require ('dbsaveweight.php');
    require ('dbshowuserweight.php');
    require ('calculate.php');


    $date_now = date("Y-m-d");

    $user_sql = "SELECT * FROM user WHERE user_id = " . $_SESSION["user_id"];
    $result_user = mysqli_query($dbconnect,$user_sql);
    $result_user2 = mysqli_query($dbconnect,$user_sql);


    $user_weight_sql = "SELECT user_weight_weight,user_weight_date FROM user_weight WHERE user_id = " . $_SESSION["user_id"] . " ORDER BY user_weight_id DESC LIMIT 1";
    $result_user_weight  = mysqli_query($dbconnect,$user_weight_sql);
    $result_user_weight2  = mysqli_query($dbconnect,$user_weight_sql);
    $count_user_weight = 0;
    $day_input = ""; // use in check repeat input
    while($obj = mysqli_fetch_array($result_user_weight)) {
        $count_user_weight++;
        $day_input = $obj["user_weight_date"];
    }
    echo "count_user_weight : " . $count_user_weight;





    // Check repeat input
    $input_weight_check_repeat = "disabled";
    if ($count_user_weight == 0) {
        $input_weight_check_repeat = "";
    }
    else {
        // check day
        if ($date_now != $day_input) {
            $input_weight_check_repeat = "";
        }
    }

?>






<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Weight</title>

    <link rel="stylesheet" href="themes/Thesis.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />
    <script src="themes/jquery-1.11.1.min.js"></script>
    <script src="themes/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/Chart.min.js"></script>

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</head>
<body>


<!-- PAGE WEEK -->
<div data-role="page" data-theme="a">      

    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <!-- <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li> -->
        </ul>
    </div>
    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>สมุดบันทึกน้ำหนัก</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>

        <a href="graph_weight_week.php" class="ui-btn ui-btn-inline ui-icon-bar ui-btn-icon-notext" data-ajax="false"></a>
    
    </div>
    <!-- End TOP MENU BAR -->



    <div data-role="content" >
        <div class="ui-content" id="input-weight-wrapper">
            <form action="input_weight.php" method="post" id="weight-now" data-ajax="false">
                
                <label class="float-left padding-top-15" ><h3>น้ำหนักวันนี้</h3></label>

                <input type="type" name="user_id" id="user_id" value="<?= $_SESSION["user_id"] ?>" style="display:none">
                <input type="date" name="user_weight_date" id="user_weight_date" value="<?= $date_now ?>" style="display:none" >

                <input type="number" min="0" max="300" step="0.01" name="user_weight_weight" id="user_weight_weight" class="ui-input-text">
                <label class="float-left " ><h3>กิโลกรัม</h3></label>
                <button type="submit" class="margin-top-25" <?= $input_weight_check_repeat ?> >ตกลง</button>
            </form>  
 
        </div>  

             <div class="head-table-custom">
                <div>ข้อมูลน้ำหนัก</div>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_each">
                <thead><tr></tr></thead>
                <tbody>
<?php

    while($weight_day = mysqli_fetch_array($result_userweight)) {
?>
                    <tr>
                        <td class="left"><?= $weight_day["user_weight_date"]; ?></td>
                        <td class="right"><b><?= $weight_day["user_weight_weight"]; ?> กิโลกรัม</b></td>
                    </tr>
<?php
    
    }
    //end while


?>

                </tbody>
            </table>
        </div>  




    <div data-role="footer" class="graph-footer" data-position="fixed">
<?php

    while($weight_info = mysqli_fetch_array($result_user)) {
?>
        <div>
            <p>เป้าหมาย</p>
            <h1><?= $weight_info["user_goal"]; ?></h1>
            <p>กก.</p>
        </div>
<?php
    
    }
    //end while

if ($count_user_weight == 0 ) {    
    while($weight_now = mysqli_fetch_array($result_user2)) {
?>
        <div>
            <p>ปัจจุบัน</p>
            <h1><?= $weight_now["user_weight"]; ?></h1>
            <p>กก.</p>
        </div>
<?php
    
    }//end while
}//end if

else {
    while($weight_now = mysqli_fetch_array($result_user_weight2)) {
?>
        <div>
            <p>ปัจจุบัน</p>
            <h1><?= $weight_now["user_weight_weight"]; ?></h1>
            <p>กก.</p>
        </div>
<?php
    
    }//end while
}//end else
?>
        <div>
            <p>เหลือเวลา</p>
            <h1><?= $time_rest ?></h1>
            <p>วัน</p>
        </div>


    </div>
    <!-- end footer -->


</div>


</body>
</html>


<script>


</script>