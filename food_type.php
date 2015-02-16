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
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
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
                    <a href="#food_type_sweet">
                        <img src="img/sweet.jpg">
                        <h1>ของหวาน</h1>
                    </a>
                </li>
                <li id="snack">
                    <a href="#food_type_snack">
                        <img src="img/snack.jpg">
                        <h1>ขนมขบเคี้ยว</h1>
                    </a>
                </li>
                <li id="fruit">
                    <a href="#food_type_fruit">
                        <img src="img/fruit.jpg">
                        <h1>ผลไม้</h1>
                    </a>
                </li>
                <li id="drink">
                    <a href="#food_type_drink">
                        <img src="img/drink.jpg">
                        <h1>เครื่องดื่ม</h1>
                    </a>
                </li>
                <li id="etc">
                    <a href="#food_type_etc">
                        <img src="img/etc.jpg">
                        <h1>อื่นๆ</h1>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>








<!-- FOOD TYPE MEAL 1-->
<div id="food_type_meal" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        
        <h1>อาหารจานเดียว</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">
<?php

        while($food = mysqli_fetch_array($result_food_meal)) {

            if ($food["food_type"] == "อาหารจานเดียว") {


        ?>

        <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
            <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                <img src="img/meal.jpg" >
                <h1 class="food_name_width"><?= $food["food_name"]; ?></h1>
                <span class="ui-li-aside"><h1><?= $food["food_kcal"]; ?> Kcal</h1></span>
                
            </a>
            <a href="#add_meal" class="add_food_btn1" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

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

        <div data-role="popup" id="add_meal" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name1">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal1" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id1" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id1" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date1" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal1" style="display:none;">
                    <input type="number" name="food_value" id="food_value1" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>
</div>



<!-- FOOD TYPE SWEET 2-->
<div id="food_type_sweet" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        
        <h1>ของหวาน</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">
<?php

        while($food = mysqli_fetch_array($result_food_sweet)) {

            if ($food["food_type"] == "ของหวาน") {


        ?>

        <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
            <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                <img src="img/sweet.jpg" >
                <h1 class="food_name_width"><?= $food["food_name"]; ?></h1>
                <span class="ui-li-aside"><h1><?= $food["food_kcal"]; ?> Kcal</h1></span>
                
            </a>
            <a href="#add_sweet" class="add_food_btn2" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

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

        <div data-role="popup" id="add_sweet" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name2">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal2" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id2" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id2" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date2" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal2" style="display:none;">
                    <input type="number" name="food_value" id="food_value2" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>
</div>







<!-- FOOD TYPE SNACK 3-->
<div id="food_type_snack" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        
        <h1>ขนมขบเคี้ยว</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">
<?php

        while($food = mysqli_fetch_array($result_food_snack)) {

            if ($food["food_type"] == "ขนมขบเคี้ยว") {


        ?>

        <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
            <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                <img src="img/drink.jpg" >
                <h1 class="food_name_width"><?= $food["food_name"]; ?></h1>
                <span class="ui-li-aside"><h1><?= $food["food_kcal"]; ?> Kcal</h1></span>
                
            </a>
            <a href="#add_snack" class="add_food_btn3" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

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

        <div data-role="popup" id="add_snack" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name3">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal3" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id3" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id3" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date3" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal3" style="display:none;">
                    <input type="number" name="food_value" id="food_value3" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>
</div>




<!-- FOOD TYPE FRUIT 4-->
<div id="food_type_fruit" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        
        <h1>ผลไม้</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">
<?php

        while($food = mysqli_fetch_array($result_food_fruit)) {

            if ($food["food_type"] == "ผลไม้") {


        ?>

        <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
            <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                <img src="img/drink.jpg" >
                <h1 class="food_name_width"><?= $food["food_name"]; ?></h1>
                <span class="ui-li-aside"><h1><?= $food["food_kcal"]; ?> Kcal</h1></span>
                
            </a>
            <a href="#add_fruit" class="add_food_btn4" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

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

        <div data-role="popup" id="add_fruit" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name4">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal4" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id4" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id4" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date4" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal4" style="display:none;">
                    <input type="number" name="food_value" id="food_value4" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>
</div>




<!-- FOOD TYPE DRINK 5 -->
<div id="food_type_drink" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        
        <h1>เครื่องดื่ม</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">
<?php

        while($food = mysqli_fetch_array($result_food_drink)) {

            if ($food["food_type"] == "น้ำ") {


        ?>

        <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
            <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                <img src="img/drink.jpg" >
                <h1 class="food_name_width"><?= $food["food_name"]; ?></h1>
                <span class="ui-li-aside"><h1><?= $food["food_kcal"]; ?> Kcal</h1></span>
                
            </a>
            <a href="#add_drink" class="add_food_btn5" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

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

        <div data-role="popup" id="add_drink" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name5">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal5" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id5" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id5" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date5" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal5" style="display:none;">
                    <input type="number" name="food_value" id="food_value5" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>



<!-- FOOD TYPE ETC 6 -->
<div id="food_type_etc" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left">หน้าแรก</a></li>
            <li><a href="graphweek" class="ui-btn ui-icon-calendar ui-btn-icon-left">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        
        <h1>อื่นๆ</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
  
    </div>
    <!-- End TOP MENU BAR -->

    <div id="food_meal" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">
<?php

        while($food = mysqli_fetch_array($result_food_etc)) {

            if ($food["food_type"] == "อื่นๆ") {


        ?>

        <li data-foodname="<?= $food["food_name"]; ?>" data-foodkcal="<?= $food["food_kcal"]; ?>" data-foodid="<?= $food["food_id"]; ?>">
            <a href="food_detail.php?id=<?= $food["food_id"]; ?>">
                <img src="img/etc.jpg" >
                <h1 class="food_name_width"><?= $food["food_name"]; ?></h1>
                <span class="ui-li-aside"><h1><?= $food["food_kcal"]; ?> Kcal</h1></span>
                
            </a>
            <a href="#add_etc" class="add_food_btn6" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>

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

        <div data-role="popup" id="add_etc" data-position-to="window" data-theme="a">

            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เพิ่มรายการอาหาร</h1></div>
            <div data-role="content">     

                <form action="index2.php" method="post" name="formpop" id="add_foodform" class="ui-content" >
                    <div>
                        <div id="tb_name6">กระเพาะปลา  (1 ชาม)</div> 
                        <div id="tb_kcal6" >150 Kcal</div>      
                        <span class="clearfix"></span>

                    </div>
                    <input type="type" name="user_id" id="add_user_id6" style="display:none;">
                    <input type="type" name="food_id" id="add_food_id6" style="display:none;">
                    <input type="type" name="eating_date" id="eating_date6" style="display:none;">
                    <input type="type" name="eating_meal" id="eating_meal6" style="display:none;">
                    <input type="number" name="food_value" id="food_value6" value="">
                    <button type="submit" class="" data-theme="a" >ตกลง</button>
                </form>
                

            </div>
        </div>
</div>

</body>
</html>



<script type="text/javascript">

$(".add_food_btn1").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name1").text(foodname);
    $("#tb_kcal1").text(foodkcal+" kcal");
    
    $("#add_user_id1").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id1").val(foodid);
    $("#eating_date1").val("<?= $date ?>");
    $("#eating_meal1").val(<?= $_GET['type'] ?>);

});


$(".add_food_btn2").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name2").text(foodname);
    $("#tb_kcal2").text(foodkcal+" kcal");
    
    $("#add_user_id2").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id2").val(foodid);
    $("#eating_date2").val("<?= $date ?>");
    $("#eating_meal2").val(<?= $_GET['type'] ?>);

});

$(".add_food_btn3").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name3").text(foodname);
    $("#tb_kcal3").text(foodkcal+" kcal");
    
    $("#add_user_id3").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id3").val(foodid);
    $("#eating_date3").val("<?= $date ?>");
    $("#eating_meal3").val(<?= $_GET['type'] ?>);

});

$(".add_food_btn4").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name4").text(foodname);
    $("#tb_kcal4").text(foodkcal+" kcal");
    
    $("#add_user_id4").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id4").val(foodid);
    $("#eating_date4").val("<?= $date ?>");
    $("#eating_meal4").val(<?= $_GET['type'] ?>);

});

$(".add_food_btn5").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name5").text(foodname);
    $("#tb_kcal5").text(foodkcal+" kcal");
    
    $("#add_user_id5").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id5").val(foodid);
    $("#eating_date5").val("<?= $date ?>");
    $("#eating_meal5").val(<?= $_GET['type'] ?>);

});


$(".add_food_btn6").click(function() {
    var foodid = $(this).parent().attr('data-foodid');
    var foodname = $(this).parent().attr('data-foodname');
    var foodkcal = $(this).parent().attr('data-foodkcal');
    
    <?php $date = date('Y-m-d'); ?>

    // alert("user_id : <?= $_SESSION["user_id"] ?>, food_id : " + id + ", eating_date : <?= $date ?>, eating_meal : <?= $_GET['type'] ?>");
    $("#tb_name6").text(foodname);
    $("#tb_kcal6").text(foodkcal+" kcal");
    
    $("#add_user_id6").val(<?= $_SESSION["user_id"] ?>);
    $("#add_food_id6").val(foodid);
    $("#eating_date6").val("<?= $date ?>");
    $("#eating_meal6").val(<?= $_GET['type'] ?>);

});
</script>


<?php
mysqli_close($dbconnect);
?>