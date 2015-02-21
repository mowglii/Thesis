<?php 
	session_start();
	require('dbconnect.php');
	require('dbsaveex.php');
	require('dbaddex.php');
	require('dbdeleteex.php');
	require('head.php');
	

	$exercise_sql = "SELECT* FROM exercise " ;
	$result_exercise = mysqli_query($dbconnect,$exercise_sql);


?>


		<div id="content-wrapper">
			<div id="content container ">
				<ul class="nav nav-pills nav-justified">
			      <li role="presentation"><a href="index_.php">ข้อมูลอาหาร</a></li>
			      <li role="presentation" class="active"><a href="index_ex.php">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation"   ><a href="index_user.php">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>
<div class="content-wrapper margin-bottom-100" id="food container ">
		<div id="content">

			<div class="nav navbar-nav navbar-right margin-top-50 margin-bottom-25" > 
				<a href="addex.php" id="add" class="add-btn" target="_blank">
					<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span> เพิ่มข้อมูล
				</a>
			</div>

	<table class="table table-striped table-hover  margin-bottom-25 col-md-12 table-condensed " id="no-more-tables" >
		        <thead>
		        	<tr>
			            <th>#</th>

			            <th>รายการออกกำลังกาย</th>
			            <th class="numeric">ค่าพลังงานที่ใช้ (แคลอรี่/นาที)</th>
			            <th>บันทึก</th>
			            <th>ลบ</th>

		        	</tr>
		        </thead>
		        <tbody>
	<?php

        while($exercise = mysqli_fetch_array($result_exercise)) {


        ?>
        	
		        	<tr>
		        		<!-- Update -->
		        		<form action="index_ex.php" method="POST">
				            <th scope="row"><?= $exercise["exer_id"]; ?></th>
				            <input type="text" name="exer_id" value="<?= $exercise["exer_id"]; ?>" class="hide">
				            <td class="numeric" data-title="รายการออกกำลังกาย"><input type="text" name="exer_name" value="<?= $exercise["exer_name"]; ?>" ></td>
				            <td class="numeric" data-title="ค่าพลังงานที่ใช้ (แคลอรี่/นาที)"><input type="text" name="exer_kcal" value="<?= $exercise["exer_kcal"]; ?>" ></td>
		

				            <td><button id="save" class="new-btn" name="exer_save" onClick="alert('ทำการบันทึกข้อมูลเรียบร้อย')" type="submit" >
				            	<span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span>
				            	</button>
				            </td>
			            </form>

			            <!-- Delete -->
			            <form action="index_ex.php" method="POST">
			            	<input type="text" name="exer_id_delete" value="<?= $exercise["exer_id"] ?>" class="hide">
				            <td><button id="delete" class="new-btn" name="exer_del" onClick="alert('ทำการลบข้อมูลเรียบร้อย')" >
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