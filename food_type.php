<?php 
    require('dbconnect.php');
    require('dbfinduserid.php');
    require('dbshowfood.php');
    
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

<!-- PAGE_FOOD_TYPE -->
<div id="page_food_type" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-gear ui-btn-icon-left" data-transition="slide">ตั้งค่า</a></li>
        </ul>
    </div>            

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>อาหาร</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
        <a href="#" data-rel="search" data-icon="plus" data-iconpos="notext"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

    <div data-filter="true" data-filter-placeholder="Search">
        <div data-role="content" data-theme="b" id="food_type">
            <ul data-role="listview" class="fff">
                <li id="meal" >
                    <a href="#food_type_meal">
                        <img src="img/meal.jpg">
                        <h1>อาหารจานเดียว</h1>
                    </a>
                </li>
                <li id="sweet">
                    <a href="#">
                        <img src="img/sweet.jpg">
                        <h1>ของหวาน</h1>
                    </a>
                </li>
                <li id="snack">
                    <a href="#">
                        <img src="img/snack.jpg">
                        <h1>ขนมขบเคี้ยว</h1>
                    </a>
                </li>
                <li id="fruit">
                    <a href="#">
                        <img src="img/fruit.jpg">
                        <h1>ผลไม้</h1>
                    </a>
                </li>
                <li id="drink">
                    <a href="#">
                        <img src="img/drink.jpg">
                        <h1>เครื่องดื่ม</h1>
                    </a>
                </li>
                <li id="etc">
                    <a href="#">
                        <img src="img/etc.jpg">
                        <h1>อื่นๆ</h1>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>








<!-- FOOD TYPE MEAL -->
<div id="food_type_meal" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="#" class="ui-btn ui-icon-bullets ui-btn-icon-left">ข้อมูลสารอาหาร</a></li>
            <li><a href="#" class="ui-btn ui-icon-gear ui-btn-icon-left">ตั้งค่า</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>อาหารจารเดียว</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">

<?php

while($food = mysqli_fetch_array($result_food)) {

    if ($food["food_type"] == "อาหารจานเดียว") {


?>
                    <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
                        <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                            <img src="img/meal.jpg" >
                            <h1><?= $food["food_name"]; ?></h1>
                            <span class="ui-li-aside"><p><?= $food["food_kcal"]; ?> Kcal</p></span>
                            
                        </a>
                        <a href="#add_food" class="add_food_btn" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

                    </li>

<?php
    
    }
    //end if
}
//end while


?>

                    
                </ul>
            </div>
        </div>
    </div>
    <!-- End Food Meal -->


    <!-- POPUP -->

        <div data-role="popup" id="add_food" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal" style="display:none;">
                    <input type="number" name="food_value" id="food_value" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>
</div>















</body>
</html>



<script type="text/javascript">

$(".add_food_btn").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name").text(foodname);
    $("#tb_kcal").text(foodkcal+" kcal");
    $("#add_user_id").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id").val(foodid);
    $("#eating_date").val("<?= $date ?>");
    $("#eating_meal").val(<?= $_GET['type'] ?>);

});

</script>


<?php
mysqli_close($dbconnect);
?>