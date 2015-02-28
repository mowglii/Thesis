<?php 
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');
    require('dbfinduserid.php');


    $link_type = $_GET["type"];

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
    </div>    -->       

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>เพิ่มรายการอาหาร</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext" data-transition="slide"></a>
        
    </div>
    <!-- End TOP MENU BAR -->

	<div data-role="content" id="food_add">
		<form action="food_type.php?type=<?= $link_type ?>" method="POST" name="addform" onsubmit="return validateForm()" id="content-wrapper" data-ajax="false"> 

            <div >
	            	<label> ชื่ออาหาร </label> 
	            	 <input type="text" name="food_name2" value="" class="width100">
                     <input type="text" name="user_id2" value="<?= $_SESSION["user_id"] ?>" style="display:none">

                    <label >หน่วย (ตัวอย่าง : จาน) </label> 
                    <input type="text" name="food_unit2" value="" class="width100" >

	            	<label >ประเภทอาหาร </label>
                    <select name="food_type2" data-theme="d">
                        <option value="อาหารจานเดียว">อาหารจานเดียว</option>
                        <option value="ขนมขบเคี้ยว">ขนมขบเคี้ยว</option>
                        <option value="ของหวาน">ของหวาน</option>
                        <option value="น้ำ">น้ำ</option>
                        <option value="ผลไม้">ผลไม้</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select> 

            		<label >ปริมาณ (กรัม) </label> 
                    <input type="text" name="food_weight2" value="">
            		
    
            		<label >ค่าพลังงาน (แคลอรี่) </label> 
            		<input type="text" name="food_kcal2" value="" class="width100">

            </div>
            
            <div data-role="collapsible" id="nuta_food" data-theme="d" >
                <h3>ข้อมูลโภชนาการ</h3>
            		<label >ไขมัน (กรัม) </label> 
            		<input type="text" name="food_fat2" value="" class="width100">

            		<label>คอเลสเตอรอล (มิลลิกรัม)</label>  
            		<input type="text" name="food_cholesterol2" value="" class="width100">
            
            		<label>โปรตีน (กรัม) </label> 
					<input type="text" name="food_protein2" value="" class="width100">
            	
            		<label>แป้ง (กรัม)</label>  
            		<input type="text" name="food_carbohydrate2" value="" class="width100">	            
     

            		<label>น้ำตาล (กรัม) </label> 
            		<input type="text" name="food_sugar2" value="" class="width100">
           
            		<label>เกลือ (มิลลิกรัม) </label> 
            		<input type="text" name="food_salt2" value=""  class="width100">
            
            		<label class="col-lg-6 control-label">วิตามิน เอ (%) </label> 
            		<input type="text" name="food_vita2" value="" class="width100">
    
            		<label>วิตามิน บี1 (%) </label> 
            		<input type="text" name="food_vitb12" value="" class="width100">

            		<label class="col-lg-6 control-label">วิตามิน บี2 (%) </label> 
            		<input type="text" name="food_vitb22" value="" class="width100" >
            	
            	
            		<label>แคลเซียม (%) </label> 
            		<input type="text" name="food_calcium2" value="" class="width100" >
            
            		<label >เหล็ก (%) </label> 
            		<input type="text" name="food_iron2" value="" class="width100" >

                    <label >แหล่งอ้างอิง </label> 
                    <input type="text" name="food_ref2" value="" class="width100" >
            </div>

       		<button type="submit" value="" id="add">
       			<span aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
       			บันทึกข้อมูล
       		</button>
		</form>

	</div>

	<script>
		$('.dropdown-toggle').dropdown();

		function validateForm() {
		    var food_name2 = document.forms["addform"]["food_name2"].value;
		    var food_type2 = document.forms["addform"]["food_type2"].value;
		    var food_weight2 = document.forms["addform"]["food_weight2"].value;
		    var food_kcal2 = document.forms["addform"]["food_kcal2"].value;
		    


		    if (food_name2 == null || food_name2 == "" || food_type2 == null || food_type2 == "" || food_weight2 == null || food_weight2 == "" || food_kcal2 == null || food_kcal2 == "" ) {
		        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
		        return false;
		    }


		    
		}

	</script>
</body>
</html>