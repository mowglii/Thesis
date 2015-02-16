<?php 
	require('dbconnect.php');
	require('dbsavefood.php');
	require('dbaddfood.php');


	if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['type'])) {
		
		$type = $_GET['type'];
		
		if ($type == 'เครื่องดื่ม') {
			$type = 'น้ำ';
		}
	    $food_sql = "SELECT* FROM food WHERE food_type = '". $type ."'";



	    // Check all
	    if ($type == 'ทั้งหมด') {
			$food_sql = "SELECT* FROM food";
		}
	}
	else {
		$food_sql = "SELECT* FROM food";
	}

	
	$result_food = mysqli_query($dbconnect,$food_sql);
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
			      <li role="presentation" class="active"><a href="#food">ข้อมูลอาหาร</a></li>
			      <li role="presentation"><a href="#exercise">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation"><a href="#user">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>

	<div class="content-wrapper margin-bottom-100" id="food">
		<div id="content">
			<div class="nav navbar-nav navbar-right margin-top-50 margin-bottom-25" > 
				ประเภทอาหาร
				<select class="select_type_food"> 
					<option>เลือกประเภทอาหาร</option>
					<option>ทั้งหมด</option>
					<option>อาหารจานเดียว</option>
					<option>ของหวาน</option>
					<option>ขนมขบเคี้ยว</option>
					<option>ผลไม้</option>
					<option>เครื่องดื่ม</option>
				</select>
				<a href="addfood.php" id="add" class="add-btn">
					<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span> เพิ่มรายการอาหาร
				</a>
			</div>

			<table class="table table-striped table-hover">
		        <thead>
		        	<tr>
			            <th>#</th>

			            <th>ชื่ออาหาร</th>
			            <th>ปริมาณ (กรัม)</th>
			            <th>ค่าพลังงาน (แคลอรี่)</th>
			            <th>ไขมัน (กรัม)</th>
			            <th>คอเลสเตอรอล (มิลลิกรัม)</th>
			            <th>โปรตีน (กรัม)</th>
			            <th>แป้ง (กรัม)</th>
			            <th>น้ำตาล (กรัม)</th>
			            <th>เกลือ (มิลลิกรัม)</th>
			            <th>วิตามิน เอ (%)</th>
			            <th>วิตามิน บี1 (%)</th>
			            <th>วิตามิน บี2 (%)</th>
			            <th>แคลเซียม (%)</th>
			            <th>เหล็ก (%)</th>
			            <th>บันทึก</th>
			            <th>ลบ</th>
		        	</tr>
		        </thead>
		        <tbody>
	<?php

        while($food = mysqli_fetch_array($result_food)) {


        ?>
        	<form action="index.php" method="POST">
		        	<tr>
			            <th scope="row"><?= $food["food_id"]; ?></th>
			            <input type="text" name="food_id" value="<?= $food["food_id"]; ?>" class="hide">
			            <input type="text" name="food_type" value="<?= $food["food_type"]; ?>" class="hide">
			            <td><input type="text" name="food_name" value="<?= $food["food_name"]; ?>"></td>
			            <td><input type="text" name="food_weight" value="<?= $food["food_weight"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_kcal" value="<?= $food["food_kcal"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_fat" value="<?= $food["food_fat"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_cholesterol" value="<?= $food["food_cholesterol"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_protein" value="<?= $food["food_protein"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_carbohydrate" value="<?= $food["food_carbohydrate"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_sugar" value="<?= $food["food_sugar"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_salt" value="<?= $food["food_salt"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_vita" value="<?= $food["food_vita"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_vitb1" value="<?= $food["food_vitb1"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_vitb2" value="<?= $food["food_vitb2"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_calcium" value="<?= $food["food_calcium"]; ?>" class="input-width"></td>
			            <td><input type="text" name="food_iron" value="<?= $food["food_iron"]; ?>" class="input-width"></td>

			            <td><button data-toggle="modal" href="#popSave" id="save" class="new-btn">
			            	<span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
			            	</button>
			            </td>
			            <td><button data-toggle="modal" href="#popDel" id="delete" class="new-btn">
			            	<span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
			            	</button>
			            </td>
			        </tr>
			</form>
	<?php } ?>
		        </tbody>
		    </table>
		</div>
	</div>




	
<!-- POPUP -->
	<div id="popSave" class="modal modal-wide fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">คุณได้ทำการบันทึกข้อมูลเรียบร้อยแล้ว</h4>
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-modal" data-dismiss="modal">ตกลง</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div id="popDel" class="modal modal-wide fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">คุณได้ทำการลบข้อมูลเรียบร้อยแล้ว</h4>
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-modal" data-dismiss="modal">ตกลง</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->




	<script>
		$('.dropdown-toggle').dropdown();

		$(".modal-wide").on("show.bs.modal", function() {
		  var height = $(window).height() - 200;
		  $(this).find(".modal-body").css("max-height", height);
		});


		$(".select_type_food").change(function () {
			var url = "";
			$( ".select_type_food option:selected" ).each(function() {
				url += "?type=" + $( this ).text();
			});
			document.location.href = url;
		})




	</script>
</body>
</html>