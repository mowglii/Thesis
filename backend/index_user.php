<?php 
	session_start();
	require('dbconnect.php');
	require('dbsaveuser.php');
	require('dbdeleteuser.php');
	require('head.php');
	

	$user_sql = "SELECT* FROM user " ;
	$result_user = mysqli_query($dbconnect,$user_sql);


?>


		<div id="content-wrapper">
			<div id="content  container ">
				<ul class="nav nav-pills nav-justified">
			      <li role="presentation"><a href="index_.php">ข้อมูลอาหาร</a></li>
			      <li role="presentation"><a href="index_ex.php">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation"   class="active"><a href="index_user.php">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>
<div class="content-wrapper margin-bottom-100" id="food  container ">
		<div id="content">

			<div class="nav navbar-nav navbar-right margin-top-50 margin-bottom-25" > 
				<a href="infouser.php" id="add" class="add-btn" target="_blank">
					<span class="glyphicon glyphicon-alert" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span> ข้อมูลเพิ่มเติม
				</a>
			</div>

	<table class="table table-striped table-hover margin-bottom-25 col-md-12 table-condensed " id="no-more-tables">
		        <thead>
		        	<tr>
			            <th>#</th>

			            <th class="numeric">น้ำหนัก</th>
			            <th class="numeric">ส่วนสูง</th>
			            <th class="numeric">วันเกิด</th>
			            <th class="numeric">เพศ</th>
			            <th class="numeric">การออกกำลังกาย</th>
			            <th class="numeric">เป้าหมาย</th>
			            <th class="numeric">ระดับความยาก</th>
			            <th>บันทึก</th>
			            <th>ลบ</th>
		        	</tr>
		        </thead>
		        <tbody>
	<?php

        while($user = mysqli_fetch_array($result_user)) {


        ?>
        	
		        	<tr>
		        		<!-- Update -->
		        		<form action="index_user.php" method="POST">
				            <th scope="row"><?= $user["user_id"]; ?></th>
				            <input type="text" name="user_id" value="<?= $user["user_id"]; ?>" class="hide">
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_weight" value="<?= $user["user_weight"]; ?>"></td>
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_height" value="<?= $user["user_height"]; ?>" ></td>
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_birthday" value="<?= $user["user_birthday"]; ?>" ></td>
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_gender" value="<?= $user["user_gender"]; ?>"> </td>
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_frequency" value="<?= $user["user_frequency"]; ?>"> </td>
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_goal" value="<?= $user["user_goal"]; ?>" ></td>
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="user_mode" value="<?= $user["user_mode"]; ?>"></td>
		

				            <td><button id="save" class="new-btn" onClick="alert('ทำการบันทึกข้อมูลเรียบร้อย')" type="submit">
				            	<span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
				            	</button>
				            </td>
			            </form>

			            <!-- Delete -->
			            <form action="index_user.php" method="POST">
			            	<input type="text" name="user_id_delete" value="<?= $user["user_id"]; ?>" class="hide">
				            <td><button id="delete" class="new-btn" onClick="alert('ทำการลบข้อมูลเรียบร้อย')" >
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



	</script>
</body>
</html>