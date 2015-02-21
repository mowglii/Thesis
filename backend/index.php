<?php 
		session_start();
		session_destroy();

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
<body class="login-wrapper">

	<div class="container margin-top-100">
			<div>
					<div id="logo-wrapper-login">
						<img src="img/logo-.png" style="max-width:250px;">
					</div>
				<div class="col-md-6 col-md-push-3">
					<form action="index_.php" method="post">
						<div class="login-form">
				            <div class="form-group">
				              <input type="text" class="form-control login-field" placeholder="Username" id="login-name" name="admin_username"/>
				              
				            </div>

				            <div class="form-group">
				              <input type="password" class="form-control login-field" placeholder="Password" id="login-pass" name="admin_pass"/>
				              
				            </div>

				            <button type="submit" class="btn btn-default btn-block">ลงชื่อเข้าใช้งาน</button>
				        </div>
				    </form>
				</div>
			</div>


		</div>
</body>
</html>