<?php
	date_default_timezone_set('Asia/Bangkok');
	$date_register = date('Y-m-d');

	require('dbconnect.php');
	$user_sql = 'SELECT * FROM user';
    $result_user_sql = mysqli_query($dbconnect,$user_sql);
    $check_user = false;
    while($row = mysqli_fetch_array($result_user_sql)) {
    	$check_user = true;
    }

    if ($check_user) {
    	echo "<script>window.location='http://su13540215.2th.asia/work/thesis/index2.php';</script>";
    }
    

?>


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
						 
						    <input type="radio" name="gender" id="male" value="m" class="custom">
						    <label for="male" class="">ชาย</label>
				    	</div>
					    
					</fieldset>
					<a href="#page2" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next" data-transition="slide">ถัดไป</a>
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
			<a href="#"  data-rel="back" data-icon="carat-l" data-theme="a" data-iconpos="notext" data-transition="slide"></a>
		</div>

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content">		

			<div class="ui-content">

					<label class="center"><h1>คุณต้องการ <br>ลดน้ำหนักกี่กิโลกรัม ?</h1></label>
					<input type="number" min="0" max="200" name="weight_lose" id="weight_lose" value="" placeholder="ตัวอย่าง : 20 " >

					<a href="#page3" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next" data-transition="slide">ถัดไป</a>
			</div>	
		</div>
	</div>


<!-- PAGE 3 -->

	<!-- ==========HEADER========== -->	
	<div data-role="page" id="page3" data-theme="a">
				
		<div data-role="header" data-position="fixed" data-fullscreen="false" data-add-back-btn="true">				
			<h1>ข้อมูลพื้นฐาน</h1>
			<a href="#"  data-rel="back" data-icon="carat-l" data-theme="a" data-iconpos="notext" data-transition="slide"></a>
		</div>

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content">		

			<div class="ui-content">

					<label class="center"><h1>คุณออกกำลังกายบ่อยแค่ไหน<br> ใน 1 สัปดาห์ ?</h1></label>
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

					<a href="#page4" id="calulate_btn" data-role="button" data-iconpos="right" data-icon="carat-r" class="btn_next" data-transition="slide">ถัดไป</a>
			</div>	
		</div>
	</div>



<!-- PAGE 4 -->

	<!-- ==========HEADER========== -->	
	<div data-role="page" id="page4" data-theme="a">
				
		<div data-role="header" data-position="fixed" data-fullscreen="false" data-add-back-btn="true">				
			<h1>ข้อมูลพื้นฐาน</h1>
			<a href="#"  data-rel="back" data-icon="carat-l" data-theme="a" data-iconpos="notext" data-transition="slide"></a>
		</div>

		<!-- ==========CONTENT========== -->	
		<div data-role="content" data-theme="a" id="content">		

			<div class="ui-content">

					<label class="center"><h1>กรุณาเลือกรูปแบบการลดน้ำหนัก</h1></label>
					<fieldset data-role="controlgroup" data-type="vertical" data-theme="b" id="gender-radio">

					    <input type="radio" name="mode" id="mode_easy" value="0.25" class="custom">
					    <label for="mode_easy">
					    	ง่าย (ใช้เวลาทั้งหมด <span id="time_month1" style="color:#f05053;"></span> เดือน <span id="time_day1" style="color:#f05053;"></span> วัน)
					    </label>
					 
					    <input type="radio" name="mode" id="mode_medium" value="0.5" class="custom">
					    <label for="mode_medium">
					    	ปานกลาง (ใช้เวลาทั้งหมด <span id="time_month2" style="color:#f05053;"></span> เดือน <span id="time_day2" style="color:#f05053;"></span> วัน)
					    </label>

					    <input type="radio" name="mode" id="mode_hard" value="0.75" class="custom">
					    <label for="mode_hard">
					    	ยาก (ใช้เวลาทั้งหมด <span id="time_month3" style="color:#f05053;"></span> เดือน <span id="time_day3" style="color:#f05053;"></span> วัน)	
					    </label>
					 
					    <input type="radio" name="mode" id="mode_harder" value="1" class="custom">
					    <label for="mode_harder">
					    	ยากมาก (ใช้เวลาทั้งหมด <span id="time_month4" style="color:#f05053;"></span> เดือน <span id="time_day4" style="color:#f05053;"></span> วัน)
					    </label>

					</fieldset>

					<input type="type" name="date_register" value="<?= $date_register ?>" style="display:none;">
					<button type="button" onclick="validateForm()" data-iconpos="right" data-icon="check" class="btn_next" id="calulate_btn">สำเร็จ</button>
			</div>	
		</div>
	</div>

</form>

<script>
function validateForm() {
	var weight = document.getElementById("weight").value;
	var height = document.getElementById("height").value;
	var birth = document.getElementById("birth").value;
	var weight_lose = document.getElementById("weight_lose").value;
	var sex = "";
	var frequency = 0;
	var mode = 0;
	
	if(document.getElementById("female").checked){
		sex = document.getElementById("female").value;
	}
	else if(document.getElementById("male").checked){
		sex = document.getElementById("male").value;
	}

	if(document.getElementById("no_ex").checked){
		frequency = document.getElementById("no_ex").value;
	}
	else if(document.getElementById("light_ex").checked){
		frequency = document.getElementById("light_ex").value;
	}
	else if(document.getElementById("moderate_ex").checked){
		frequency = document.getElementById("moderate_ex").value;
	}
	else if(document.getElementById("regularly_ex").checked){
		frequency = document.getElementById("regularly_ex").value;
	}
	else if(document.getElementById("heavy_ex").checked){
		frequency = document.getElementById("heavy_ex").value;
	}

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




	if (weight != "" && height != "" && birth != "" && weight_lose != "" && sex != "" && frequency != 0 && mode != 0) {
		document.getElementById("info-calculate").submit();
	}
	else {
		alert("กรุณากรอกข้อมูลให้ครบถ้วน");
	}

}

document.getElementById("calulate_btn").onclick = function(){
	// Get value
	var sex 		= 0,
		bdath 		= document.getElementById("birth").value,
		dateNow 	= new Date(),
		dateC		= dateNow.getFullYear() + "-" + (dateNow.getMonth()+1) + "-" + dateNow.getDate(),
		age			= dateDiff(bdath, dateC),
		weight 		= document.getElementById("weight").value,
		height 		= document.getElementById("height").value,
		frequency 	= 0,
		goal 		= document.getElementById("weight_lose").value,
		mode1 		= document.getElementById("mode_easy").value,
		mode2 		= document.getElementById("mode_medium").value,
		mode3 		= document.getElementById("mode_hard").value,
		mode4 		= document.getElementById("mode_harder").value;

	console.log("age : " + age);
	console.log("weight : " + weight);
	console.log("height : " + height);
	console.log("goal : " + goal);
	console.log("mode1 : " + mode1);
	console.log("mode2 : " + mode2);
	console.log("mode3 : " + mode3);
	console.log("mode4 : " + mode4);

	// Sex
	if(document.getElementById("female").checked){
		sex = document.getElementById("female").value;
	}
	else if(document.getElementById("male").checked){
		sex = document.getElementById("male").value;
	}
	console.log("sex : " + sex);
	// frequency
	if(document.getElementById("no_ex").checked){
		frequency = document.getElementById("no_ex").value;
	}
	else if(document.getElementById("light_ex").checked){
		frequency = document.getElementById("light_ex").value;
	}
	else if(document.getElementById("moderate_ex").checked){
		frequency = document.getElementById("moderate_ex").value;
	}
	else if(document.getElementById("regularly_ex").checked){
		frequency = document.getElementById("regularly_ex").value;
	}
	else if(document.getElementById("heavy_ex").checked){
		frequency = document.getElementById("heavy_ex").value;
	}
	console.log("frequency : " + frequency);

	// Calculate
	var bmi 			= weight/((height/100)*(height/100)),
		bmr 			= 0,
		calorie 		= 0,
		calorie_min1 	= 1200,
		calorie_max1 	= 0,
		calorie_min2 	= 1000,
		calorie_max2 	= 0,
		calorie_min3 	= 800,
		calorie_max3 	= 0,
		calorie_min4 	= 800,
		calorie_max4 	= 0,
		time 			= 0,
		time_month1 	= 0,
		time_day1		= 0,
		time_month2 	= 0,
		time_day2		= 0,
		time_month3 	= 0,
		time_day3		= 0,
		time_month4 	= 0,
		time_day4		= 0;

	// BMR
	if(sex == "m") {
		bmr = (weight*13.75)+(height*0.003)-(6.755*age)+66.5;
	}
	else if(sex == "f") {
		bmr = (weight*9.563)+(height*1.85)-(4.676*age)+665.1;
	}
	// calorie
	calorie = bmr*frequency;

	// calorie_max
	calorie_max1 = calorie-(mode1*7700/7);
	calorie_max2 = calorie-(mode2*7700/7);
	calorie_max3 = calorie-(mode3*7700/7);
	calorie_max4 = calorie-(mode4*7700/7);

	// time
	time 		= parseInt(goal/(mode1/7));
	time_month1 = parseInt(time/30);
	time_day1 	= time-(time_month1*30);

	time 		= parseInt(goal/(mode2/7));
	time_month2 = parseInt(time/30);
	time_day2 	= time-(time_month2*30);

	time 		= parseInt(goal/(mode3/7));
	time_month3 = parseInt(time/30);
	time_day3 	= time-(time_month3*30);

	time 		= parseInt(goal/(mode4/7));
	time_month4 = parseInt(time/30);
	time_day4 	= time-(time_month4*30);



	// Output
	document.getElementById("time_month1").innerHTML 	= time_month1;
	document.getElementById("time_day1").innerHTML 		= time_day1;
	document.getElementById("time_month2").innerHTML 	= time_month2;
	document.getElementById("time_day2").innerHTML 		= time_day2;
	document.getElementById("time_month3").innerHTML 	= time_month3;
	document.getElementById("time_day3").innerHTML 		= time_day3;
	document.getElementById("time_month4").innerHTML 	= time_month4;
	document.getElementById("time_day4").innerHTML 		= time_day4;
};

function dateDiff(myVar2, myVar1){

	// var myVar1 = document.getElementById('date1').value;//prompt("Enter a start date: ")
	// var myVar2 = document.getElementById('date2').value;//prompt("Enter a end date: ")

	var first_date = Date.parse(myVar1);
	var last_date = Date.parse(myVar2);
	var diff_date =  first_date - last_date;

	var num_years = diff_date/31557600000;
	var num_months = (diff_date % 31557600000)/2629800000;
	var num_days = ((diff_date % 31557600000) % 2629800000)/86400000;

	// var result ="";

	// result +=(" " + Math.floor(num_years) + " ปี\n");
	// result +=(" " + Math.floor(num_months) + " ดือน\n");
	// result +=(" " + Math.floor(num_days) + " วัน");
	
	return Math.floor(num_years);
}


</script>
</body>
</html>

