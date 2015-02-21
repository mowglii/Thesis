<?php
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');
    require('dbfinduserid.php');
    require ('dbshownutation.php');
    
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
        <h1>ข้อมูลสารอาหาร</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>
    
    </div>
    <!-- End TOP MENU BAR -->



    <div data-role="content">
    
             <div class="head-table-custom">
                <div>ข้อมูลสารอาหาร</div>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_each">
                <thead><tr></tr></thead>
                <tbody>
    <?php

        while($nutation = mysqli_fetch_array($result_nuta)) {
?>                  
                    <tr>
                        <td class="left">ปริมาณ (ก.)</td>

                        <td class="right"><?= $nutation["sum(food.food_weight)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">ค่าพลังงาน (แคลอรี่)</td>

                        <td class="right"><?= $nutation["sum(food.food_kcal)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">ไขมัน (ก.)</td>

                        <td class="right"><?= $nutation["sum(food.food_fat)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">โคเลสเตอรอล (มก.)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_cholesterol)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">โปรตีน (ก.)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_protein)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">คาร์โบไฮเดรต (ก.)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_carbohydrate)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">น้ำตาล (ก.)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_sugar)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">โซเดียม (มก.)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_salt)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">วิตามินเอ (%)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_vita)"]; ?></td>
                    </tr>

                    <tr>
                        <td class="left">วิตามินบี1 (%)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_vitb1)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">วิตามินบี2 (%)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_vitb2)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">แคมเซียม (%)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_calcium)"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">เหล็ก (%)</td>
     
                        <td class="right"><?= $nutation["sum(food.food_iron)"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<?php
    
    }
    //end while


?>
        </div>  



</div>


</body>
</html>


<script>


</script>