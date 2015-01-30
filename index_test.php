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
				<form action="save_db_info.php" method="post" name="info" id="info-calculate" >
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
			</form>
			
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
				<form action="save_db_info.php" method="post" name="info" id="info-calculate" >
					<label class="center"><h1>คุณต้องการลดน้ำหนักกี่กิโลกรัม ?</h1></label>
					<input type="number" min="0" max="200" name="weight_lose" id="weight_lose" value="" placeholder="ตัวอย่าง : 20 " >
				
					<a href="#page3" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next">ถัดไป</a>
				</form>
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
				<form action="save_db_info.php" method="post" name="info" id="info-calculate" >
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
				</form>
					
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
				<form action="save_db_info.php" method="post" name="info" id="info-calculate" >
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
				</form>
					
			</div>	
		</div>
	</div>


<script>


		document.getElementById("calulate_btn").onclick = function(){
			// Get value
			var gender 		= 0,
				birth 		= document.getElementById("birth").value,
				dateNow 	= new Date(),
				dateC		= dateNow.getFullYear() + "-" + (dateNow.getMonth()+1) + "-" + dateNow.getDate(),
				age			= dateDiff(birth, dateC),
				weight 		= document.getElementById("weight").value,
				height 		= document.getElementById("height").value,
				activity 	= 0,
				goal 		= document.getElementById("weight_lose").value,
				mode 		= 0;

			// Sex
			if(document.getElementById("male").checked){
				gender = document.getElementById("male").value;
			}
			else if(document.getElementById("female").checked){
				gender = document.getElementById("female").value;
			}
			// frequency
			if(document.getElementById("no_ex").checked){
				activity = document.getElementById("no_ex").value;
			}
			else if(document.getElementById("light_ex").checked){
				activity = document.getElementById("light_ex").value;
			}
			else if(document.getElementById("moderate_ex").checked){
				activity = document.getElementById("moderate_ex").value;
			}
			else if(document.getElementById("regularly_ex").checked){
				activity = document.getElementById("regularly_ex").value;
			}
			else if(document.getElementById("heavy_ex").checked){
				activity = document.getElementById("heavy_ex").value;
			}
			// Mode
			if(document.getElementById("mode_easy").checked){
				mode = document.getElementById("mode_easy").value;
			}
			else if(document.getElementById("mode_medium").checked){
				mode = document.getElementById("mode_medium").value;
			}
			else if(document.getElementById("mode_hard").checked){
				mode = document.getElementById("mode_hard").value;
			}
			else if(document.getElementById("mode_harder").checked){
				mode = document.getElementById("mode_harder").value;
			}


			// Calculate
			var bmi 			= weight/((height/100)*(height/100)),
				bmr 			= 0,
				calorie 		= 0,
				calorie_min 	= 0,
				calorie_max 	= 0,
				time 			= 0,
				time_month 		= 0,
				time_day		= 0;

			// BMR
			if(gender == "m") {
				bmr = (weight*13.75)+(height*0.003)-(6.755*age)+66.5;
			}
			else if(gender == "f") {
				bmr = (weight*9.563)+(height*1.85)-(4.676*age)+665.1;
			}
			// calorie
			calorie = bmr*frequency;
			// calorie_min & calorie_max
			if(mode == 0.25) {
				calorie_min = 1200;
			}
			else if(mode == 0.5) {
				calorie_min = 1000;
			}
			else if(mode == 0.75) {
				calorie_min = 800;
			}
			else if(mode == 1) {
				calorie_min = 800;
			}
			calorie_max = calorie-(mode*7700/7);

			// time

			time = parseInt(goal/(mode/7));
			time_month = parseInt(time/30);
			time_day = time-(time_month*30);


			// Output
			document.getElementById("bmi").innerHTML = bmi;
			document.getElementById("bmr").innerHTML = bmr;
			document.getElementById("calorie").innerHTML = calorie;
			document.getElementById("calorie_min").innerHTML = calorie_min;
			document.getElementById("calorie_max").innerHTML = calorie_max;
			document.getElementById("time_month").innerHTML = time_month;
			document.getElementById("time_day").innerHTML = time_day;
		};
	

		function dateDiff(myVar2, myVar1){

			var first_date = Date.parse(myVar1);
			var last_date = Date.parse(myVar2);
			var diff_date =  first_date - last_date;

			var num_years = diff_date/31557600000;
			var num_months = (diff_date % 31557600000)/2629800000;
			var num_days = ((diff_date % 31557600000) % 2629800000)/86400000;
			
			return Math.floor(num_years);
		}
	</script>

</body>
</html>

