<?php
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');

    

    require('dbsaveinfo.php');
    require('dbsaveeatting.php');
    require('dbsaveactivities.php');

    require('dbaddexer.php');


    require('dbfinduserid.php');
    require('dbshoweatting.php');
    require('dbshowactivities.php');



    require('calculate.php');



    $step1 = intval($cal_max) ;
    $step2 = intval($cal_max/3) ;
    $step3 = intval($cal_max/2) ;
    

    // kcal bar calulate
    $cal_sum_yes = 0;
    $cal_sum_now = 0;

    // Yesterday
    while($kcal = mysqli_fetch_array($result_allcal_yes)) { 
        $cal_sum_yes += intval($kcal["food_kcal"]) * intval($kcal["eating_amount"]);
    }
    // Now
    while($kcal = mysqli_fetch_array($result_allcal_now)) { 
        $cal_sum_now += intval($kcal["food_kcal"]) * intval($kcal["eating_amount"]);
    }

    $cal_yes = $cal_sum_yes;
    $cal_now = $cal_sum_now;



    // Set bar color        
    $barColor_yes = "progressbar-green";
    $barColor_now = "progressbar-green";

    // Yesterday
    if ($cal_yes >= $step1) {
        $barColor_yes = "progressbar-red";
    }
    elseif ($cal_yes >= $step2) {
        $barColor_yes = "progressbar-orange";
    }
    elseif ($cal_yes >= $step3) {
        $barColor_yes = "progressbar-yellow";
    }
    // Now
    if ($cal_now >= $step1) {
        $barColor_now = "progressbar-red";
    }
    elseif ($cal_now >= $step2) {
        $barColor_now = "progressbar-orange";
    }
    elseif ($cal_now >= $step3) {
        $barColor_now = "progressbar-yellow";
    }


    // Set eat bar width
    $barWidth_yes = 0;
    $barWidth_now = 0;


    // Yesterday
    if ($cal_yes>=0) {
        $barWidth_yes = intval( ($cal_yes*100)/$cal_max ) ;
    } 
    if ($barWidth_yes > 100) {
        $barWidth_yes = 100;
    }
    // Now
    if ($cal_now>=0) {
        $barWidth_now = intval( ($cal_now*100)/$cal_max ) ;
    } 
    if ($barWidth_now > 100) {
        $barWidth_now = 100;
    }


    // exer bar calulate
    $sum_exer_yes = 0;
    $sum_exer_now = 0;

    // Yesterday
    while($activity = mysqli_fetch_array($result_activities_yes_bar)) {
        if ($activity["activities_date"] == $yesterday) {
            $sum_exer_yes += intval($activity["activities_duration"])*(double)$activity["exer_kcal"];
        }
    }
    // Now
    while($activity = mysqli_fetch_array($result_activities_now_bar)) {
        if ($activity["activities_date"] == $now) {
            $sum_exer_now += intval($activity["activities_duration"])*(double)$activity["exer_kcal"];
        }
    }


    // Set eat bar width
    $barWidth_exer_yes = 0;
    $barWidth_exer_now = 0;
    $exer_max = 500;

    // Yesterday
    if ($sum_exer_yes>=0) {
        $barWidth_exer_yes = intval( ($sum_exer_yes*100)/$exer_max );

    } 
    if ($sum_exer_yes > 500) {
        $barWidth_exer_yes = 500;
    }

    // Now
    if ($sum_exer_now>=0) {
        $barWidth_exer_now = intval( ($sum_exer_now*100)/$exer_max );

    } 
    if ($sum_exer_now > 500) {
        $barWidth_exer_now = 500;
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
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <!-- <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li> -->
        </ul>
    </div>          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>MY WEIGHT</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" ></a>
        
    </div>
    <!-- End TOP MENU BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_black">
            <ul>
                <!-- <li><a href="#page1" class="btn_yesterday" data-transition="fade">เมื่อวาน</a></li> -->
                <?php  $date = date('Y-m-d');  ?>
                <li><a href="#page2" class="btn_now ui-btn-active" data-transition="fade">วันนี้ : <?= $date ?></a></li>
            </ul>
        </div>    
    </div> 
    <!-- End DAY BAR -->

    <div data-role="header"  >
        <div>  
            <div class="progressbar <?= $barColor_now ?>">
                <div class="progressbar-inner" style="width:<?= $barWidth_now ?>%;">
                    <h1 class="kcal-show">ได้รับ : <?= $cal_now ?> kcal</h1>
                </div>
            </div>


            <div class="progressbar progressbar-green progressbar-height">
                <div class="progressbar-inner" style="width:<?= $barWidth_exer_now ?>%;">
                    <p class="kcal-show-ex">เผาผลาญ : <?= $sum_exer_now ?> kcal</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End PROGRESS BAR -->

    <div data-role="header" >
        <div data-role="navbar" data-position="fixed" data-fullscreen="true" data-id="mynav" id="btn_white">
            <div class="ui-grid-b">
              <div class="ui-block-a min" >Min : <?=  $cal_min ?></div>
              <div class="ui-block-b" ><img src="img/mmm.png" ></div>
              <div class="ui-block-c max" >Max : <?=  $cal_max ?></div>
            </div>
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
                <a href="food_type.php?type=0" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false" data-transition="slide"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_brakefast">
                <thead><tr></tr></thead>
                <tbody>

                    <?php
                        while($food = mysqli_fetch_array($result_eating_now0)) {
                            if ($food["eating_meal"] == 0 && $food["eating_date"] == $now) {
                    ?>
                                <tr>
                                    <td class="left"><?= $food["food_name"]; ?></td>
                                    <td><?= $food["eating_amount"]; ?> <?= $food["food_unit"]; ?></td>
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
                <a href="food_type.php?type=1" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false" data-transition="slide"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_lunch">
                <thead><tr></tr></thead>
                <tbody>
                    <?php
                        while($food = mysqli_fetch_array($result_eating_now1)) {
                            if ($food["eating_meal"] == 1 && $food["eating_date"] == $now) {
                    ?>
                                <tr>
                                    <td class="left"><?= $food["food_name"]; ?></td>
                                    <td><?= $food["eating_amount"]; ?> <?= $food["food_unit"]; ?></td>
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
                <a href="food_type.php?type=2" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false" data-transition="slide"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_dinner">
                <thead><tr></tr></thead>
                <tbody>
                    <?php
                        while($food = mysqli_fetch_array($result_eating_now2)) {
                            if ($food["eating_meal"] == 2 && $food["eating_date"] == $now) {
                    ?>
                                <tr>
                                    <td class="left"><?= $food["food_name"]; ?></td>
                                    <td><?= $food["eating_amount"]; ?> <?= $food["food_unit"]; ?></td>
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


            

        </div>
        <!-- End FOOD -->





         <div id="page_ex">
            <div class="head-table-custom">
                <div>ออกกำลังกาย</div>
                <a href="exercise.php" data-role="button" data-icon="plus" data-iconpos="notext" data-ajax="false" data-transition="slide"></a>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_ex">
                <thead><tr></tr></thead>
                <tbody>
                    <?php
                        while($activity = mysqli_fetch_array($result_activities_now_list)) {
                            if ($activity["activities_date"] == $now) {
                                $sum_cal = intval($activity["activities_duration"])*(double)$activity["exer_kcal"];
                    ?>

                        <tr>
                            <td class="left"><?= $activity["exer_name"] ?></td>
                            <td><?= $activity["activities_duration"] ?> นาที</td>
                            <td class="right"><b><?= $sum_cal ?> kcal</b></td>
                        </tr>

                    <?php
                            }// end if
                        }// end while
                    ?>
                </tbody>
            </table>

        <!-- End EXERCISE -->

    
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



/*
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
    }*/


 
 //Progress bar

// $(document).ready(function(){ 

//     $('.quarter').click(function(){
//       $(this).parent().prev().children('span').css('width','25%');
//       });
//     $('.half').click(function(){
//       $(this).parent().prev().children('span').css('width','50%');
//       });
//     $('.three-quarters').click(function(){
//       $(this).parent().prev().children('span').css('width','75%');
//       });
//     $('.full').click(function(){
//       $(this).parent().prev().children('span').css('width','100%');
//       });  
// });



</script>



<?php
mysqli_close($dbconnect);
?>