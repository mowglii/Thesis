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
            <!-- <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li> -->
        </ul>
    </div>
    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>ข้อมูลสารอาหาร</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>
    
    </div>
    <!-- End TOP MENU BAR -->



    <div >

        <div id="nuta_head">
        <?php

            while($nutation = mysqli_fetch_array($result_nuta3)) {

        ?>     
            <div class="nuta-box1"><h1 class="margin-left-25" >ค่าพลังงาน </h1></div>
            <div class="nuta-box2"><h1 class="margin-right-25"><?= $nutation["sum(food.food_kcal)"]; ?> Kcal</h1></div>
             
    
        <?php
            
            }
            //end while
        ?>

        </div>
    
        <div data-theme="c" style="margin-top:0px">
            
            <ul data-role="listview" id="nuta_table">
    <?php

        while($nutation = mysqli_fetch_array($result_nuta)) {
?>                  
                
                <li  class="bg-w">ปริมาณ (ก.)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_weight)"]; ?> </span>
                </li>
                <li>ไขมัน (ก.)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_fat)"]; ?> </span>
                </li>
                <li  class="bg-w">โคเลสเตอรอล (มก.)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_protein)"]; ?> </span>
                </li>
                <li>โปรตีน (ก.)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_carbohydrate)"]; ?> </span>
                </li>
                <li  class="bg-w">คาร์โบไฮเดรต (ก.)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_sugar)"]; ?> </span>
                </li>
                <li>น้ำตาล (ก.)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_salt)"]; ?> </span>
                </li>
                <li  class="bg-w">วิตามินเอ (%)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_vita)"]; ?> </span>
                </li>
                <li>วิตามินบี1 (%)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_vitb1)"]; ?> </span>
                </li>
                <li  class="bg-w">วิตามินบี2 (%)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_vitb2)"]; ?> </span>
                </li>
                <li>แคมเซียม (%)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_calcium)"]; ?> </span>
                </li>
                <li  class="bg-w">เหล็ก (%)
                    <span class="ui-li-aside"><?= $nutation["sum(food.food_iron)"]; ?> </span>
                </li>
            </ul>
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