<?php 
    require('dbconnect.php');
    require('dbfinduserid.php');

    $sql = "SELECT* FROM exercise";
    $result = mysqli_query($dbconnect,$sql);

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
<div id="exercise" data-role="page" data-theme="a">
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
        <h1>ออกกำลังกาย</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
        <a href="#" data-rel="search" data-icon="plus" data-iconpos="notext"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

       <div id="page_ex" data-role="content" >
        <div data-filter="true" data-filter-placeholder="Search">
            <div data-role="content" data-theme="b" id="food_meal_list">
                <ul data-role="listview" class="fff">

<?php

while($exercise = mysqli_fetch_array($result)) {


?>
                    <li data-exername="<?= $exercise["exer_name"]; ?>" data-exerkcal="<?= $exercise["exer_kcal"]; ?>" data-exerid="<?= $exercise["exer_id"]; ?>">
                        <a href="#">
                            <h1><?= $exercise["exer_name"]; ?></h1>
                            <span class="ui-li-aside"><p><?= $exercise["exer_kcal"]; ?> Kcal/min</p></span>
                            
                        </a>
                        <a href="#add_ex" class="add_exer_btn" data-icon="plus" data-iconpos="right" data-rel="popup" data-position-to="window" data-transition="slideup">add</a>
                    </li>

<?php
    

}
//end while


?>

                    
                </ul>
            </div>
        </div>
    </div>
    <!-- End Food Meal -->



        <!-- End EXERCISE -->


        <!-- POPUP -->
        <div data-role="popup" id="add_ex" data-position-to="window" data-theme="a">

            <a href="index2.php" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>

            <div data-role="header" ><h1>เวลาที่ใช้ในการออกกำลังกาย</h1></div>
            <div data-role="content">     
                <div>
                    <div id="tb_name">นั่งเฉยๆ</div> 
                    <div id="tb_kcal" >1.4 Kcal/นาที</div>      
                    <span class="clearfix"></span>

                </div>
                <form action="index2.php" method="post" name="formpop" id="add_exform" class="ui-content" data-ajax="false">

                    <input type="type" name="user_id" id="add_user_id" style="display:none">
                    <input type="type" name="exer_id" id="add_exer_id" style="display:none" >
                    <input type="type" name="activities_date" id="add_activities_date" style="display:none" >
                    
                    <input type="number" min="0" max="" name="activities_duration" id="add_activities_duration" value="">
                    <button type="submit" class="" data-theme="a">ตกลง</button>
                </form>
                

            </div>
        </div>



 
</div>




</body>
</html>


<script type="text/javascript">

$(".add_exer_btn").click(function() {
    var exerid = $(this).parent().attr('data-exerid');
    var exername = $(this).parent().attr('data-exername');
    var exerkcal = $(this).parent().attr('data-exerkcal');
    
    <?php $date = date('Y-m-d'); ?>

    
    $("#tb_name").text(exername);
    $("#tb_kcal").text(exerkcal+" kcal/นาที");

    $("#add_user_id").val(<?= $_SESSION["user_id"] ?>);
    $("#add_exer_id").val(exerid);
    $("#add_activities_date").val("<?= $date ?>");

});

</script>



<?php
mysqli_close($dbconnect);
?>