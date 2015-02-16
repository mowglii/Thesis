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
			      <li role="presentation"><a href="#food">ข้อมูลอาหาร</a></li>
			      <li role="presentation"><a href="#exercise">ข้อมูลการออกกำลังกาย</a></li>
			      <li role="presentation" class="active"><a href="#user">ข้อมูลผู้ใช้งาน</a></li>
			    </ul>
			</div>
		</div>

	<div class="content-wrapper" id="food">
		<div id="content">
			<table class="table">
		        <thead>
		        	<tr>
			            <th>#</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Save</th>
			            <th>Delete</th>
		        	</tr>
		        </thead>
		        <tbody>
		        	<tr>
			            <th scope="row">1</th>
			            <td><input type="text" name="" value=""></td>
			            <td><input type="text" name="" value=""></td>
			            <td><button data-toggle="modal" href="#popSave" id="save" class="new-btn"><span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span></button></td>
			            <td><button data-toggle="modal" href="#popDel" id="delete" class="new-btn"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-top:5px; font-size:14px;"></span></button></td>
			        </tr>
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




	</script>
</body>
</html>