<?php
    session_start();
    // unset($_SESSION["user_id"]); 
    require('dbconnect.php');

    require('dbsaveinfo.php');
    require('dbsaveeatting.php');
    require('dbsaveactivities.php');
    
    require('dbfinduserid.php');
    require('dbshoweatting.php');
    require('dbshowactivities.php');

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
<!-- PAGE 2 -->
<div id="page2" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-gear ui-btn-icon-left" data-transition="slide">ตั้งค่า</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>MY WEIGHT</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul>
                <li><a href="#page1" >เมื่อวาน</a></li>
                <li><a href="#page2" class="ui-btn-active" >วันนี้</a></li>
                <li><a href="#page3" >พรุ่งนี้</a></li>
            </ul>
        </div>    
    </div> 
    <!-- End DAY BAR -->

    <div data-role="header"  >
        <div>  
            <?php  
                while($kcal = mysqli_fetch_array($result_allcal)) { 

                    // Set bar color
                    $cal   = intval($kcal["sum(food.food_kcal)"]);
                    $barColor = "progressbar-green";
                    if ($cal >= 1900) {
                        $barColor = "progressbar-red";
                    }
                    elseif ($cal >= 1700) {
                        $barColor = "progressbar-orange";
                    }
                    elseif ($cal >= 1500) {
                        $barColor = "progressbar-yellow";
                    }

                    // Set bar width
                    $maxCal = 2100;
                    $barWidth = intval( ($cal*100)/$maxCal );
                    if ($barWidth > 100) {
                        $barWidth = 100;
                    }

            ?>
                <div class="progressbar <?= $barColor ?>">
                    <div class="progressbar-inner" style="width:<?= $barWidth ?>%;">
                        <h1 class="kcal-show"><?= $cal ?> kcal</h1>
                    </div>
                </div>

            <?php
                }
            ?>

        </div>
    </div>
    <!-- End PROGRESS BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_white">
            <ul id="section">
                <li><a href="#" data-iconpos="top"><img src="img/min.png" ><br>Min</a></li>
                <li><a href="#" data-iconpos="top"><img src="img/max.png" ><br>Max</a></li>
            </ul>
        </div>    
    </div>
    <!-- End MIN & MAX  -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul id="section" class="nav-food">
                <li class="page_food_btn"><a href="#page_food" class="ui-btn-actives" >อาหาร</a></li>
                <li class="page_ex_btn"><a href="#page_ex" >ออกกำลังกาย</a></li>
            </ul>
            <ul id="section" class="nav-ex" style="display:none;">
                <li class="page_food_btn"><a href="#" >อาหาร</a></li>
                <li class="page_ex_btn"><a href="#" class="ui-btn-actives">ออกกำลังกาย</a></li>
            </ul>
        </div>    
    </div>
    <!-- End FOOD & EXERCISE MENU -->


    <div data-role="content" >
        
        <div id="page_food">

            <div class="head-table-custom">
                <div>อาหารเช้า</div>
                <a href="food_type.php?type=0" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_brakefast">
                <thead><tr></tr></thead>
                <tbody>

                    <?php
                        while($food = mysqli_fetch_array($result_eating)) {
                            if ($food["eating_meal"] == 0 && $food["eating_date"] == $now) {
                    ?>
                                <tr>
                                    <td class="left"><?= $food["food_name"]; ?></td>
                                    <td>1 ชิ้น</td>
                                    <td><?= $food["food_weight"]; ?> กรัม</td>
                                    <td class="right"><b><?= $food["food_kcal"]; ?> kcal</b></td>
                                </tr>

                    <?php
                            }// end if
                        }// end while
                    ?>
                </tbody>
            </table>
            <!-- End BRAKEFAST TABLE -->

            <div class="head-table-custom margin-top-25">
                <div>อาหารกลางวัน</div>
                <a href="food_type.php?type=1" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_lunch">
                <thead><tr></tr></thead>
                <tbody>
                    <?php
                        while($food = mysqli_fetch_array($result_eating2)) {
                            if ($food["eating_meal"] == 1 && $food["eating_date"] == $now) {
                    ?>
                                <tr>
                                    <td class="left"><?= $food["food_name"]; ?></td>
                                    <td>1 ชิ้น</td>
                                    <td><?= $food["food_weight"]; ?> กรัม</td>
                                    <td class="right"><b><?= $food["food_kcal"]; ?> kcal</b></td>
                                </tr>

                    <?php
                            }// end if
                        }// end while
                    ?>
                </tbody>
            </table>
            <!-- End LUNCH TABLE -->


            <div class="head-table-custom margin-top-25">
                <div>อาหารเย็น</div>
                <a href="food_type.php?type=2" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_dinner">
                <thead><tr></tr></thead>
                <tbody>
                    <?php
                        while($food = mysqli_fetch_array($result_eating3)) {
                            if ($food["eating_meal"] == 2 && $food["eating_date"] == $now) {
                    ?>
                                <tr>
                                    <td class="left"><?= $food["food_name"]; ?></td>
                                    <td>1 ชิ้น</td>
                                    <td><?= $food["food_weight"]; ?> กรัม</td>
                                    <td class="right"><b><?= $food["food_kcal"]; ?> kcal</b></td>
                                </tr>

                    <?php
                            }// end if
                        }// end while
                    ?>
                </tbody>
            </table>
            <!-- End DINNER TABLE -->


            <!-- <div class="head-table-custom margin-top-25">
                <div>อื่นๆ</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_each">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table> -->
            <!-- End EACH TABLE -->
        </div>
        <!-- End FOOD -->





         <div id="page_ex">
            <div class="head-table-custom">
                <div>ออกกำลังกาย</div>
                <a href="exercise.php" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_ex">
                <thead><tr></tr></thead>
                <tbody>
                    <?php
                        while($acti = mysqli_fetch_array($result_activities)) {
                            if ($acti["activities_date"] == $now) {
                    ?>

                        <tr>
                            <td class="left"><?= $acti["exer_name"] ?></td>
                            <td><?= $acti["activities_duration"] ?></td>
                            <td class="right"><b><?= $acti["exer_kcal"] ?> kcal</b></td>
                        </tr>

                    <?php
                            }// end if
                        }// end while
                    ?>
                </tbody>
            </table>

        <!-- End EXERCISE -->

    
</div>

<!-- PAGE 1 -->
<div id="page1" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="b">
            <li><a href="index2.html">หน้าแรก</a></li>
            <li><a href="#">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="#">ข้อมูลสารอาหาร</a></li>
            <li><a href="#">ตั้งค่า</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>MY WEIGHT</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul>
                <li><a href="#page1"  class="ui-btn-active">เมื่อวาน</a></li>
                <li><a href="#page2" >วันนี้</a></li>
                <li><a href="#page3" >พรุ่งนี้</a></li>
            </ul>
        </div>    
    </div> 
    <!-- End DAY BAR -->

    <div data-role="header"  >
        <div>  
            <div class="progressbar progressbar-orange">
                <div class="progressbar-inner"><h1 class="kcal-show">1750 kcal</h1></div>

            </div>
        </div>
    </div>
    <!-- End PROGRESS BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_white">
            <ul id="section">
                <li><a href="#" data-iconpos="top"><img src="img/min.png" ><br>Min</a></li>
                <li><a href="#" data-iconpos="top"><img src="img/max.png" ><br>Max</a></li>
            </ul>
        </div>    
    </div>
    <!-- End MIN & MAX  -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul id="section">
                <li><a href="#page_food" class="ui-btn-active" >อาหาร</a></li>
                <li><a href="#page_ex" >ออกกำลังกาย</a></li>
            </ul>
        </div>    
    </div>
    <!-- End FOOD & EXERCISE MENU -->


    <div data-role="content" >

        <div>
            <div class="head-table-custom">
                <div>อาหารเช้า</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_brakefast">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                        <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End BRAKEFAST TABLE -->

            <div class="head-table-custom margin-top-25">
                <div>อาหารกลางวัน</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_lunch">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End LUNCH TABLE -->


            <div class="head-table-custom margin-top-25">
                <div>อาหารเย็น</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_dinner">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End DINNER TABLE -->


            <div class="head-table-custom margin-top-25">
                <div>อื่นๆ</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_each">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End EACH TABLE -->
        </div>
        <!-- End FOOD -->

        <div>

        </div>
        <!-- End EXERCISE -->
    </div>
    
</div>


<!-- PAGE 3 -->
<div id="page3" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="b">
            <li><a href="index2.html">หน้าแรก</a></li>
            <li><a href="#">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="#">ข้อมูลสารอาหาร</a></li>
            <li><a href="#">ตั้งค่า</a></li>
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>MY WEIGHT</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul>
                <li><a href="#page1" >เมื่อวาน</a></li>
                <li><a href="#page2"  >วันนี้</a></li>
                <li><a href="#page3" class="ui-btn-active" >พรุ่งนี้</a></li>
            </ul>
        </div>    
    </div> 
    <!-- End DAY BAR -->

    <div data-role="header"  >
        <div>  
            <div class="progressbar progressbar-orange">
                <div class="progressbar-inner"><h1 class="kcal-show">1750 kcal</h1></div>

            </div>
        </div>
    </div>
    <!-- End PROGRESS BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_white">
            <ul id="section">
                <li><a href="#" data-iconpos="top"><img src="img/min.png" ><br>Min</a></li>
                <li><a href="#" data-iconpos="top"><img src="img/max.png" ><br>Max</a></li>
            </ul>
        </div>    
    </div>
    <!-- End MIN & MAX  -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul id="section">
                <li><a href="#page_food" class="ui-btn-active" >อาหาร</a></li>
                <li><a href="#page_ex" >ออกกำลังกาย</a></li>
            </ul>
        </div>    
    </div>
    <!-- End FOOD & EXERCISE MENU -->


    <div data-role="content" >
        <div>
            <div class="head-table-custom">
                <div>อาหารเช้า</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_brakefast">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                        <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End BRAKEFAST TABLE -->

            <div class="head-table-custom margin-top-25">
                <div>อาหารกลางวัน</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_lunch">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End LUNCH TABLE -->


            <div class="head-table-custom margin-top-25">
                <div>อาหารเย็น</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_dinner">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End DINNER TABLE -->


            <div class="head-table-custom margin-top-25">
                <div>อื่นๆ</div>
                <a href="#" data-role="button" data-icon="plus" data-iconpos="notext"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_each">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                    <tr>
                        <td class="left">ขนมปังสังขยา</td>
                        <td>1 ชิ้น</td>
                         <td>200 กรัม</td>
                        <td class="right"><b>230 kcal</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End EACH TABLE -->
        </div>
        <!-- End FOOD -->


    </div>
    
</div>


</body>
</html>








<script>
$('#page_ex').hide();
$('.nav-ex').hide();
$('.page_food_btn').click(function() {
    $('#page_food').show();
    $('.nav-food').show();
    $('#page_ex').hide();
    $('.nav-ex').hide();

});
$('.page_ex_btn').click(function() {
    $('#page_food').hide();
    $('.nav-food').hide();
    $('#page_ex').show();
    $('.nav-ex').show();

});



var countpage = false;
var windowNow = 2;
//Swipe page
$(document).ready(function() {

    $('.ui-page').on('touchstart', function(){
        // When user touches the slider handle, temporarily unbind the page turn handlers
        doUnbind();
    });

    $('.ui-page').on('mousedown', function(){
        // When user touches the slider handle, temporarily unbind the page turn handlers
        doUnbind();
    });

    $('.ui-page').on('touchend', function(){
        //When the user let's go of the handle, rebind the controls for page turn
        // Put in a slight delay so that the rebind does not happen until after the swipe has been triggered
        // setTimeout( function() {doBind();}, 100 );
        doBind();
    });

    $('.ui-page').on('mouseup', function(){
        //When the user let's go of the handle, rebind the controls for page turn
        // Put in a slight delay so that the rebind does not happen until after the swipe has been triggered
        // setTimeout( function() {doBind();}, 100 );
        doBind();
    });

    // Set the initial window (assuming it will always be #1
    window.now = 2;

    //get an Array of all of the pages and count
    windowMax = $('div[data-role="page"]').length; 

   doBind();
});
    // Functions for binding swipe events to named handlers
    function doBind() {
        countpage = false;
        $('div[data-role="page"]').on("swipeleft", turnPage); 
        $('div[data-role="page"]').on("swiperight", turnPageBack);

    }

    function doUnbind() {
        // $('div[data-role="page"]').die("swipeleft", turnPage);
        // $('div[data-role="page"]').die("swiperight", turnPageBack);
        // alert('s2');
    }

    // Named handlers for binding page turn controls
    function turnPage(){
        // Check to see if we are already at the highest numbers page    
        if (window.now < windowMax && countpage == false) {
            
            window.now++;
            $.mobile.changePage("#page"+window.now, "slide", false, true);
            countpage = true;
        }
        else {
            $('div[data-role="page"]').die("swipeleft", turnPage); 
        }
    }

    function turnPageBack(){
        // Check to see if we are already at the lowest numbered page
        if (window.now != 1 && countpage == false) {
            // alert(window.now);
            window.now--;
            $.mobile.changePage("#page"+window.now, "slide", true, false);
            countpage = true;
        }
        else {
            $('div[data-role="page"]').die("swiperight", turnPageBack);
        }
    }


 
 //Progress bar

$(document).ready(function(){ 

    $('.quarter').click(function(){
      $(this).parent().prev().children('span').css('width','25%');
      });
    $('.half').click(function(){
      $(this).parent().prev().children('span').css('width','50%');
      });
    $('.three-quarters').click(function(){
      $(this).parent().prev().children('span').css('width','75%');
      });
    $('.full').click(function(){
      $(this).parent().prev().children('span').css('width','100%');
      });  
});



</script>



<?php
mysqli_close($dbconnect);
?>