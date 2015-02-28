<?php 
	require('dbconnect.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Weight : ADMIN</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="fonts/font.css" />


</head>
<body>
	<header>
		<div id="content">
			<div id="logo-wrapper">
				<img src="img/logo-.png" style="max-width:60px;"> <span style="margin-left:20px; font-size:22px;" >My Weight : ADMIN</span>
			</div>

			<div class="dropdown nav navbar-nav navbar-right">
				<button class="btn btn-personal dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" >
					ชื่อผู้ใช้งาน
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ออกจากระบบ</a></li>
				</ul>
			</div>
		</div>

	</header>


		<div id="content-wrapper">
			<div id="content">
				<ul class="nav nav-pills nav-justified">
			      <li role="presentation" class="active"><a href="index_.php">ข้อมูลอาหาร</a></li>
			      <li role="presentation"><a href="index_ex.php">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation"   ><a href="index_user.php">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>

	<div class="content-wrapper" id="food">
		<div id="content-form">
				<form action="index_.php" method="POST" name="addform" class="form-horizontal margin-top-50" onsubmit="return validateForm()">

		            <div class="form-coloum">
		            	<div class="form-group"> 
			            	<label class="col-lg-6 control-label"> ชื่ออาหาร </label> 
			            	<div class="col-lg-6"> <input type="text" name="food_name2" value="" class="width100"> </div>
			            </div>
			            <div class="form-group"> 
			            	<label class="col-lg-6 control-label"> หน่วย </label> 
			            	<div class="col-lg-6"> <input type="text" name="food_unit2" value="" class="width100"> </div>
			            </div>
			            <div class="form-group">
			            	<label class="col-lg-6 control-label">ประเภทอาหาร </label> 
			            	<div class="col-lg-6">
			            		<select name="food_type2" class="width100">
			                        <option value="อาหารจานเดียว">อาหารจานเดียว</option>
			                        <option value="ขนมขบเคี้ยว">ขนมขบเคี้ยว</option>
			                        <option value="ของหวาน">ของหวาน</option>
			                        <option value="น้ำ">เครื่องดื่ม</option>
			                        <option value="ผลไม้">ผลไม้</option>
			                        <option value="กับข้าว">กับข้าว</option>
									<option value="อื่นๆ">อื่นๆ</option>
			                    </select>
			            	</div>
			            </div>
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">ปริมาณ (กรัม) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_weight2" value="" class="width100"></div>
		            	</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">ค่าพลังงาน (แคลอรี่) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_kcal2" value="" class="width100"></div>
		            	</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">ไขมัน (กรัม) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_fat2" value="" class="width100"></div>
		           		</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">คอเลสเตอรอล (มิลลิกรัม)</label>  
		            		<div class="col-lg-6"><input type="text" name="food_cholesterol2" value="" class="width100"></div>
		            	</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">โปรตีน (กรัม) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_protein2" value="" class="width100"></div>
		            	</div>
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">แป้ง (กรัม)</label>  
		            		<div class="col-lg-6"><input type="text" name="food_carbohydrate2" value="" class="width100"></div>
		            	</div>		            
		            	
		            </div>

		            <div class="form-coloum">
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">น้ำตาล (กรัม) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_sugar2" value="" class="width100"></div>
		            	</div>
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">เกลือ (มิลลิกรัม) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_salt2" value=""  class="width100"></div>
		            	</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">วิตามิน เอ (%) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_vita2" value="" class="width100"></div>
		            	</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">วิตามิน บี1 (%) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_vitb12" value="" class="width100"></div>
		            	</div>

		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">วิตามิน บี2 (%) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_vitb22" value="" class="width100" ></div>
		            	</div>
		            	
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">แคลเซียม (%) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_calcium2" value="" class="width100" ></div>
		            	</div>
		            
		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">เหล็ก (%) </label> 
		            		<div class="col-lg-6"><input type="text" name="food_iron2" value="" class="width100" ></div>
		            	</div>

		            	<div class="form-group">
		            		<label class="col-lg-6 control-label">แหล่งอ้างอิง </label> 
		            		<div class="col-lg-6"><input type="text" name="food_ref2" value="" class="width100" ></div>
		            	</div>
		            	

		       		
		    
		       		</div>

		       		<button type="submit" value="" id="add" class="add-btn col-lg-6 float-right margin-top-50" onClick="alert('ทำการเพิ่มข้อมูลเรียบร้อย')" >
		       			<span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
		       			เพิ่มข้อมูล
		       		</button>
				</form>

		</div>
	</div>

	<script>
		$('.dropdown-toggle').dropdown();

		function validateForm() {
		    var food_name2 = document.forms["addform"]["food_name2"].value;
		    var food_type2 = document.forms["addform"]["food_type2"].value;
		    var food_unit2 = document.forms["addform"]["food_unit2"].value;
		    var food_weight2 = document.forms["addform"]["food_weight2"].value;
		    var food_kcal2 = document.forms["addform"]["food_kcal2"].value;
		    var food_fat2 = document.forms["addform"]["food_fat2"].value;
		    var food_cholesterol2 = document.forms["addform"]["food_cholesterol2"].value;
		    var food_protein2 = document.forms["addform"]["food_protein2"].value;
		    var food_carbohydrate2 = document.forms["addform"]["food_carbohydrate2"].value;
		    var food_sugar2 = document.forms["addform"]["food_sugar2"].value;
		    var food_salt2 = document.forms["addform"]["food_salt2"].value;
		    var food_vita2 = document.forms["addform"]["food_vita2"].value;
		    var food_vitb12 = document.forms["addform"]["food_vitb12"].value;
		    var food_vitb22 = document.forms["addform"]["food_vitb22"].value;
		    var food_calcium2 = document.forms["addform"]["food_calcium2"].value;
		    var food_iron2 = document.forms["addform"]["food_iron2"].value;


		    if (food_name2 == null || food_name2 == "" 
		    	|| food_type2 == null || food_type2 == "" 
		    	|| food_unit2 == null || food_unit2 == "" 
		    	|| food_weight2 == null || food_weight2 == "" 
		    	|| food_kcal2 == null || food_kcal2 == "" 
		    	|| food_fat2 == null || food_fat2 == "" 
		    	|| food_cholesterol2 == null || food_cholesterol2 == "" 
		    	|| food_protein2 == null || food_protein2 == "" 
		    	|| food_carbohydrate2 == null || food_carbohydrate2 == "" 
		    	|| food_sugar2 == null || food_sugar2 == "" 
		    	|| food_salt2 == null || food_salt2 == "" 
		    	|| food_vita2 == null || food_vita2 == "" 
		    	|| food_vitb12 == null || food_vitb12 == "" 
		    	|| food_vitb22 == null || food_vitb22 == "" 
		    	|| food_calcium2 == null || food_calcium2 == "" 
		    	|| food_iron2 == null || food_iron2 == "") {
		        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
		        return false;
		    }


		    
		}

	</script>
</body>
</html>