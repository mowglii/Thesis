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
				<button class="btn btn-personal dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
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
			      <li role="presentation"><a href="index_.php">ข้อมูลอาหาร</a></li>
			      <li role="presentation"  class="active"><a href="index_ex.php">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation" ><a href="index_user.php">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>

	<div class="content-wrapper" id="food">
		<div id="content-form2">
			<form action="index_ex.php" method="POST" name="addform" class="form-horizontal margin-top-50" onsubmit="return validateForm()">
	            	<div class="form-group"> 
		            	<label class="col-lg-4 control-label"> รายการการออกกำลังกาย </label> 
		            	<div class="col-lg-8"> <input type="text" name="exer_name2" value="" class="width100"> </div>
		            </div>
		            <div class="form-group">
		            	<label class="col-lg-4 control-label"> ค่าพลังงาน (แคลอรี่/นาที) </label> 
		            	<div class="col-lg-8"><input type="text" name="exer_kcal2" value="" class="width100"> </div>
		            </div>

	       		<button type="submit" value="" id="add" class=" add-btn new-btn float-right" onClick="alert('ทำการเพิ่มข้อมูลเรียบร้อย')">
	       			<span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
	       			เพิ่มข้อมูล
	       		</button>
			</form>
		</div>
	</div>

	<script>
		$('.dropdown-toggle').dropdown();

		function validateForm() {
		    var exer_name = document.forms["addform"]["exer_name"].value;
		    var exer_kcal = document.forms["addform"]["exer_kcal"].value;



		    if (exer_name == null || exer_name == "" || exer_kcal == null || exer_kcal == "" ) {
		        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
		        return false;
		    }


		    
		}

	</script>
</body>
</html>