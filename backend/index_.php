

<?php
	session_start();


	require('dbconnect.php');

	require('login.php');
	
	require('dbsavefood.php');
	require('dbaddfood.php');
	require('dbdeletefood.php');	

	require('head.php');

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


		<div id="content-wrapper">
			<div id="content container ">
				<ul class="nav nav-pills nav-justified">
			      <li role="presentation" class="active"><a href="index_.php">ข้อมูลอาหาร</a></li>
			      <li role="presentation"><a href="index_ex.php">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation"><a href="index_user.php">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>

	<div class="content-wrapper margin-bottom-100" id="food  container ">
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
					<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span> เพิ่มข้อมูล
				</a>
			</div>

			<table class="table table-striped table-hover col-md-12 table-condensed " id="no-more-tables">
		        <thead>
		        	<tr>
			            <th>#</th>

			            <th>ชื่ออาหาร</th>
			            <th class="numeric">ปริมาณ (กรัม)</th>
			            <th class="numeric">ค่าพลังงาน (แคลอรี่)</th>
			            <th class="numeric">ไขมัน (กรัม)</th>
			            <th class="numeric">คอเลสเตอรอล (มิลลิกรัม)</th>
			            <th class="numeric">โปรตีน (กรัม)</th>
			            <th class="numeric">แป้ง (กรัม)</th>
			            <th class="numeric">น้ำตาล (กรัม)</th>
			            <th class="numeric">เกลือ (มิลลิกรัม)</th>
			            <th class="numeric">วิตามิน เอ (%)</th>
			            <th class="numeric">วิตามิน บี1 (%)</th>
			            <th class="numeric">วิตามิน บี2 (%)</th>
			            <th class="numeric">แคลเซียม (%)</th>
			            <th class="numeric">เหล็ก (%)</th>
			            <th>บันทึก</th>
			            <th>ลบ</th>
		        	</tr>
		        </thead>
		        <tbody>
	<?php

        while($food = mysqli_fetch_array($result_food)) {


        ?>
        	<form action="index_.php" method="POST">
		        	<tr>
			            <th scope="row"><?= $food["food_id"]; ?></th>
			            <input type="text" name="food_id" value="<?= $food["food_id"]; ?>" class="hide">
			            <input type="text" name="food_type" value="<?= $food["food_type"]; ?>" class="hide">
			            <td class="numeric" data-title="ชื่ออาหาร">
			            	<input type="text" name="food_name" value="<?= $food["food_name"]; ?>">
			            </td>

			            <td class="numeric" data-title="ปริมาณ (กรัม)">
			            	<input type="text" name="food_weight" value="<?= $food["food_weight"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="ค่าพลังงาน (แคลอรี่)">
			            	<input type="text" name="food_kcal" value="<?= $food["food_kcal"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="ไขมัน (กรัม)">
			            	<input type="text" name="food_fat" value="<?= $food["food_fat"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="คอเลสเตอรอล (มิลลิกรัม)">
			            	<input type="text" name="food_cholesterol" value="<?= $food["food_cholesterol"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="โปรตีน (กรัม)">
			            	<input type="text" name="food_protein" value="<?= $food["food_protein"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="แป้ง (กรัม)">
			            	<input type="text" name="food_carbohydrate" value="<?= $food["food_carbohydrate"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="น้ำตาล (กรัม)">
			            	<input type="text" name="food_sugar" value="<?= $food["food_sugar"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="เกลือ (มิลลิกรัม)">
			            	<input type="text" name="food_salt" value="<?= $food["food_salt"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="วิตามิน เอ (%)">
			            	<input type="text" name="food_vita" value="<?= $food["food_vita"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="วิตามิน บี1 (%)">
			            	<input type="text" name="food_vitb1" value="<?= $food["food_vitb1"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="วิตามิน บี2 (%)">
			            	<input type="text" name="food_vitb2" value="<?= $food["food_vitb2"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="แคลเซียม (%)">
			            	<input type="text" name="food_calcium" value="<?= $food["food_calcium"]; ?>" class="input-width">
			            </td>
			            <td class="numeric" data-title="เหล็ก (%)">
			            	<input type="text" name="food_iron" value="<?= $food["food_iron"]; ?>" class="input-width">
			            </td>

			            <td><button onClick="alert('ทำการบันทึกข้อมูลเรียบร้อย')" name="food_save" id="save" class="new-btn" type="submit">
			            	<span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
			            	</button>
			            </td>
			</form>
			            <!-- Delete -->
			            <form action="index_.php" method="POST">
			            	<input type="text" name="food_id_delete" value="<?= $food["food_id"]; ?>" class="hide">
				            <td><button onClick="alert('ทำการลบข้อมูลเรียบร้อย')"  id="delete" class="new-btn">
				            	<span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
				            	</button>
				            </td>
			            </form>
			        </tr>
			
	<?php } ?>
		        </tbody>
		    </table>
		</div>
	</div>





	<script>
		$('.dropdown-toggle').dropdown();


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