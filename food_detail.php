<?php 
    require('dbconnect.php');

    // $sql = "SELECT* FROM food";
    $sql = "SELECT* FROM food WHERE food_id = " . $_GET["id"];
    $result = mysqli_query($dbconnect,$sql);
    
    // echo $_GET["id"];

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

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

   

</head>
<body>

    <!-- FOOD DETAIL -->
<div id="food_detail" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek.php" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutatuion.php" class="ui-btn ui-icon-bullets ui-btn-icon-left">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>ข้อมูลอาหาร</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

<?php

// output data of each row
while($food = mysqli_fetch_array($result)) {


?>

    <div data-role="content" id="detail">
            <div class="head-table-custom">
                <div id="tb_name"><?= $food["food_name"]; ?> (<?= $food["food_weight"]; ?> กรัม)</div> 
                <div id="tb_kcal" ><?= $food["food_kcal"]; ?> Kcal</div>      
                <span class="clearfix"></span>

            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_detail">
                <thead>
                    <tr></tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="left">ไขมัน (ก.)</td>

                        <td class="right"><?= $food["food_fat"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">โคเลสเตอรอล (มก.)</td>
     
                        <td class="right"><?= $food["food_cholesterol"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">โปรตีน (ก.)</td>
     
                        <td class="right"><?= $food["food_protein"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">คาร์โบไฮเดรต (ก.)</td>
     
                        <td class="right"><?= $food["food_carbohydrate"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">น้ำตาล (ก.)</td>
     
                        <td class="right"><?= $food["food_sugar"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">โซเดียม (มก.)</td>
     
                        <td class="right"><?= $food["food_salt"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">วิตามินเอ (%)</td>
     
                        <td class="right"><?= $food["food_vita"]; ?></td>
                    </tr>

                    <tr>
                        <td class="left">วิตามินบี1 (%)</td>
     
                        <td class="right"><?= $food["food_vitb1"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">วิตามินบี2 (%)</td>
     
                        <td class="right"><?= $food["food_vitb2"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">แคมเซียม (%)</td>
     
                        <td class="right"><?= $food["food_calcium"]; ?></td>
                    </tr>
                    <tr>
                        <td class="left">เหล็ก (%)</td>
     
                        <td class="right"><?= $food["food_iron"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<?php
    
    }
    //end while


?>
        
</div>

</body>
</html>


<?php
mysqli_close($dbconnect);
?>