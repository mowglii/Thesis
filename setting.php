<?php
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');
    require('dbfinduserid.php');
    require('dbshowuser.php');
    require('dbsavesetting.php');
    require('calculate.php');

    if($user_gender = 'f'){
        $user_gender = 'หญิง';
    }
    if ($user_gender = 'm') {
        $user_gender = 'ชาย';
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
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- SETTING -->
<div id="setting" data-role="page" data-theme="a">
    <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div> 
<form action="index2.html" method="post" name="info" id="info-calculate">
    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>แก้ไขข้อมูลส่วนตัว</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>
        <!-- <a href="#" type="submit" data-rel="" data-icon="check" data-iconpos="notext"></a> -->
       
    </div>
    <!-- End TOP MENU BAR -->

    
    <!-- ==========CONTENT========== -->    
        <div data-role="content" data-theme="a">     
<?php

    while($user = mysqli_fetch_array($result_user2)) {
        if($user["user_id"]==$_SESSION["user_id"]){
    ?>

            <div id="setting-wrapper">
                <div id="content-wrapper" class="info-wrapper">
                    <input type="number" min="0" max="500" step="1" name="user_id" id="weight" value="<?= $user["user_id"]; ?>"class="float-left" style="display:none">
                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">น้ำหนัก</label>
                        <input type="number" min="0" max="500" step="1" name="user_weight" id="weight" value="<?= $user["user_weight"]; ?>"class="float-left">
                    </div>
                    <div class="input-style-wrapper clearfix" >
                        <label style="line-height:2em;">ส่วนสูง</label>
                        <input type="number" min="0" max="200" name="height" id="user_height" value="<?= $user["user_height"]; ?>"  class="float-left">
                    </div>
                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">วันเกิด</label>
                        <input type="date" name="user_birthday" id="birth" value="<?= $user["user_birthday"]; ?>" class="float-left" disabled="disabled">
                    </div>

                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">เพศ</label>
                        <input type="text" name="birth" id="birth" value="<?= $user["user_gender"]; ?>" class="float-left" disabled="disabled">
                    </div>
                </div>
            </div>


            <div id="setting-wrapper">
                <div id="content-wrapper" class="info-wrapper">
                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">ต้องการลด(กก.)</label>
                        <input type="number" min="0" max="500" step="1" name="user_goal" id="goal" value="<?= $user["user_goal"]; ?>" class="float-left">
                    </div>
                    <div>
                        <label>ความถี่ในการออกกำลังกาย</label>
                        <select data-theme="d" >
                            <option value="1.2">ไม่ได้ออกกำลังกายเลย - 1 วันต่อสัปดาห์</option>
                            <option value="1.375">1-2 วัน ต่อสัปดาห์</option>
                            <option value="1.55">3-5 วัน ต่อสัปดาห์</option>
                            <option value="1.725">6-7 วันต่อสัปดาห์</option>
                            <option value="1.9">เช้า-เย็น 6-7 วันต่อสัปดาห์</option>
                        </select>
                    </div>
                    <div >
                        <label>รูปแบบการลดน้ำหนัก</label>
                        <select data-theme="d" >
                            <option value="0.25">ง่าย (ลด 0.25 กิโลกรัม ต่อสัปดาห์)</option>
                            <option value="0.5">ปานกลาง (ลด 0.5 กิโลกรัม ต่อสัปดาห์)</option>
                            <option value="0.75">ยาก (ลด 0.75 กิโลกรัม ต่อสัปดาห์) </option>
                            <option value="1">ยากมาก (ลด 1 กิโลกรัม ต่อสัปดาห์)</option>
                        </select>
                    </div>
                </div>
            </div>
            <button href="#" type="submit" data-icon="check" > บันทึกข้อมูล</button>
        </div>
        <!-- end  -->

    </form>

<?php
}
    }
        ?>


    <div data-role="footer" class="graph-footer" data-position="fixed">
        <div>
            <p>BMI</p>
            <h1><?= $bmi ?></h1>
            <p><?= $bmi_show ?></p>
        </div>
        <div>
            <p>แคลอรี่ที่ได้รับ</p>
            <h1><?=  $cal ?></h1>
            <p>Kcal/วัน</p>
        </div>
        <div>
            <p>ไม่ควรได้รับเกิน</p>
            <h1><?= $cal_max ?></h1>
            <p>Kcal/วัน</p>
        </div>
    </div>

</div>
    
</body>
</html>
