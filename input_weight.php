<?php
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');

    require('dbfinduserid.php');
    require ('dbshowuser.php');
    require ('dbshowuserweight.php');

    require ('dbsaveweight.php');

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
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>
    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>สมุดบันทึกน้ำหนัก</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>

        <a href="graph_weight.php" class="ui-btn ui-btn-inline ui-icon-bar ui-btn-icon-notext"></a>
    
    </div>
    <!-- End TOP MENU BAR -->



    <div data-role="content" >
        <div class="ui-content" id="input-weight-wrapper">
            <form action="" method="post" id="weight-now" >
                <label class="float-left" ><h3>น้ำหนักวันนี้</h3></label>

                <input type="number" min="0" max="300" name="user_weight_weight" id="user_weight" value="" class="ui-input-text">
                <input type="type" name="user_id" id="add_user_id" style="display:none">
                <input type="type" name="user_weight_id" id="add_weight_id" style="display:none" >
                <input type="type" name="user_weight_date" id="add_weight_date" style="display:none" >
                <label class="float-left" ><h3>กิโลกรัม</h3></label>
            </form>  

            <button type="submit" class="margin-top-25" >เพิ่ม </button>
        </div>  

             <div class="head-table-custom margin-top-25">
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
        <div>
            <p>ปัจจุบัน</p>
            <h1><?= $weight_info["user_weight"]; ?></h1>
            <p>กก.</p>
        </div>
        <div>
            <p>เหลือเวลา</p>
            <h1>92</h1>
            <p>วัน</p>
        </div>
    </div>
<?php
    
    }
    //end while


?>
</div>


</body>
</html>


<script>


</script>