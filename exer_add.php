<?php 
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');
    require('dbfinduserid.php');



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
    <!-- <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="graphweek.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutatuion.php" class="ui-btn ui-icon-bullets ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li> 
        </ul>
    </div> -->          

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>เพิ่มรายการออกกำลังกาย</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext" data-transition="slide"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

	<div data-role="content" id="food_add">
		<form action="index2.php" method="POST" name="addform" onsubmit="return validateForm()">
            <div id="content-wrapper">
	            	<label> ชื่อการออกกำลังกาย </label> 
	            	 <input type="text" name="exer_name3" value="" class="width100">
                     <input type="text" name="user_id3" value="<?= $_SESSION["user_id"] ?>" style="display:none">
                      <?php  $date = date('Y-m-d');     ?>
                     <input type="text" name="activities_date3" value="<?= $date?>" style="display:none">

                    <label >เวลาที่ใช้ในการออกกำลังกาย (นาที) </label> 

                    <input type="text" name="activities_duration3" value="" class="width100">

            		<label >ค่าพลังงาน (แคลอรี่) </label> 
            		<input type="text" name="exer_kcal3" value="" class="width100">

           		<button type="submit" value="" id="add" class="margin-top-25">
           			<span aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
           			บันทึกข้อมูล
           		</button>
            </div>
		</form>

	</div>

	<script>
		$('.dropdown-toggle').dropdown();

		function validateForm() {
		    var exer_name3 = document.forms["addform"]["exer_name3"].value;
		    var exer_kcal3 = document.forms["addform"]["exer_kcal3"].value;
		    


		    if (exer_name3 == null || exer_name3 == "" || exer_kcal3 == null || exer_kcal3 == "" ) {
		        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
		        return false;
		    }


		    
		}

	</script>
</body>
</html>