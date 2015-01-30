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

</head>
<body>
<form action="index2.php" method="post" name="info" id="info-calculate" data-ajax="false">
<!-- PAGE 1 -->
	<!-- ==========HEADER========== -->	
	<div data-role="page" id="page1" data-theme="a">

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content-index">		

			<div id="img-logo">
				<img src="img/logo-.png">
			</div>
			<div class="ui-content">
				<div id="content-wrapper">
					<div class="input-style-wrapper clearfix">
						<label><img src="img/scale.png" class="input-img"></label>
						<input type="number" min="0" max="200" step="1" name="weight" id="weight" value="" placeholder="น้ำหนัก" class="float-left">
					</div>
					<div class="input-style-wrapper clearfix" >
						<label><img src="img/ruler.png" class="input-img"></label>
						<input type="number" min="0" max="300" name="height" id="height" value="" placeholder="ส่วนสูง" class="float-left">
					</div>
					<div class="input-style-wrapper clearfix">
						<label><img src="img/birthday.png" class="input-img"></label>
						<input type="date" name="birth" id="birth" value="" class="float-left">
					</div>

					
					<fieldset data-role="controlgroup" data-type="horizontal" data-theme="b" id="gender-radio">
						<!-- <label class=" input-style-wrapper"><img src="img/gender.png" class="input-img"></label> -->
						<div class="radio-gender ui-corner float-left" id="gender">
							
						    <input type="radio" name="gender" id="female" value="f" class="custom">
						    <label for="female" class="">หญิง</label>
						 
						    <input type="radio" name="gender" id="male" value="m" class="custom" >
						    <label for="male" class="">ชาย</label>
				    	</div>
					    
					</fieldset>
					<a href="#page2" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next">ถัดไป</a>
				</div>
			</div>
		</div>
		<!-- end  -->
	</div>

<!-- PAGE 2 -->

	<!-- ==========HEADER========== -->	
	<div data-role="page" id="page2" data-theme="a">
				
		<div data-role="header" data-position="fixed" data-fullscreen="false" data-add-back-btn="true">				
			<h1>ข้อมูลพื้นฐาน</h1>
			<a href="#"  data-rel="back" data-icon="carat-l" data-theme="a" data-iconpos="notext"></a>
		</div>

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content">		

			<div class="ui-content">

					<label class="center"><h1>คุณต้องการลดน้ำหนักกี่กิโลกรัม ?</h1></label>
					<input type="number" min="0" max="200" name="weight_lose" id="weight_lose" value="" placeholder="ตัวอย่าง : 20 " >

					<a href="#page3" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next">ถัดไป</a>
			</div>	
		</div>
	</div>


<!-- PAGE 3 -->

	<!-- ==========HEADER========== -->	
	<div data-role="page" id="page3" data-theme="a">
				
		<div data-role="header" data-position="fixed" data-fullscreen="false" data-add-back-btn="true">				
			<h1>ข้อมูลพื้นฐาน</h1>
			<a href="#"  data-rel="back" data-icon="carat-l" data-theme="a" data-iconpos="notext"></a>
		</div>

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content">		

			<div class="ui-content">

					<label class="center"><h1>คุณออกกำลังกายบ่อยแค่ไหน ใน 1 สัปดาห์ ?</h1></label>
					<fieldset data-role="controlgroup" data-type="vertical" data-theme="b" id="gender-radio">

					    <input type="radio" name="activity" id="no_ex" value="1.2" class="custom">
					    <label for="no_ex">ไม่ได้ออกกำลังกายเลย - 1 วันต่อสัปดาห์</label>
					 
					    <input type="radio" name="activity" id="light_ex" value="1.375" class="custom">
					    <label for="light_ex">1-2 วัน ต่อสัปดาห์</label>

					    <input type="radio" name="activity" id="moderate_ex" value="1.55" class="custom">
					    <label for="moderate_ex">3-5 วัน ต่อสัปดาห์	</label>
					 
					    <input type="radio" name="activity" id="regularly_ex" value="1.725" class="custom">
					    <label for="regularly_ex">6-7 วันต่อสัปดาห์</label>

					    <input type="radio" name="activity" id="heavy_ex" value="1.9" class="custom">
					    <label for="heavy_ex">เช้า-เย็น 6-7 วันต่อสัปดาห์</label>

					</fieldset>

					<a href="#page4" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next">ถัดไป</a>
			</div>	
		</div>
	</div>



<!-- PAGE 4 -->

	<!-- ==========HEADER========== -->	
	<div data-role="page" id="page4" data-theme="a">
				
		<div data-role="header" data-position="fixed" data-fullscreen="false" data-add-back-btn="true">				
			<h1>ข้อมูลพื้นฐาน</h1>
			<a href="#"  data-rel="back" data-icon="carat-l" data-theme="a" data-iconpos="notext"></a>
		</div>

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content">		

			<div class="ui-content">

					<label class="center"><h1>กรุณาเลือกรูปแบบการลดน้ำหนัก</h1></label>
					<fieldset data-role="controlgroup" data-type="vertical" data-theme="b" id="gender-radio">

					    <input type="radio" name="mode" id="mode_easy" value="0.25" class="custom">
					    <label for="mode_easy">
					    	ง่าย (ใช้เวลาทั้งหมด <span id="time_month"></span>เดือน <span id="time_day"></span> วัน)
					    </label>
					 
					    <input type="radio" name="mode" id="mode_medium" value="0.5" class="custom">
					    <label for="mode_medium">
					    	ปานกลาง (ใช้เวลาทั้งหมด <span id="time_month"></span>เดือน <span id="time_day"></span> วัน)
					    </label>

					    <input type="radio" name="mode" id="mode_hard" value="0.75" class="custom">
					    <label for="mode_hard">
					    	ยาก (ใช้เวลาทั้งหมด <span id="time_month"></span>เดือน <span id="time_day"></span> วัน)	
					    </label>
					 
					    <input type="radio" name="mode" id="mode_harder" value="1" class="custom">
					    <label for="mode_harder">
					    	ยากมาก (ใช้เวลาทั้งหมด <span id="time_month"></span>เดือน <span id="time_day"></span> วัน)
					    </label>

					</fieldset>

					<button type="submit" data-iconpos="right" data-icon="check" class="btn_next" id="calulate_btn">สำเร็จ</button>
			</div>	
		</div>
	</div>

</form>


</body>
</html>

