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
            <li><a href="index2.html" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>      

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>การตั้งค่า</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext"></a>
        <a href="#" data-rel="" data-icon="edit" data-iconpos="notext"></a>
    </div>
    <!-- End TOP MENU BAR -->

    <form action="index2.html" method="post" name="info" id="info-calculate">
    <!-- ==========CONTENT========== -->    
        <div data-role="content" data-theme="a">     

            <div id="setting-wrapper">
                <div id="content-wrapper" class="info-wrapper">
                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">น้ำหนัก</label>
                        <input type="number" min="0" max="500" step="1" name="weight" id="weight" value="" placeholder="น้ำหนัก" class="float-left" disabled="disabled">
                    </div>
                    <div class="input-style-wrapper clearfix" >
                        <label style="line-height:2em;">ส่วนสูง</label>
                        <input type="number" min="0" max="200" name="height" id="height" value="" placeholder="ส่วนสูง" class="float-left" disabled="disabled">
                    </div>
                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">วันเกิด</label>
                        <input type="date" name="birth" id="birth" value="" placeholder="ส่วนสูง" class="float-left" disabled="disabled">
                    </div>

                    <fieldset data-role="controlgroup" data-type="horizontal" data-theme="b" id="gender-radio">
                        <div class="radio-gender ui-corner float-left" >
                            <input type="radio" name="gender" id="female" value="f" class="custom" checked="checked" disabled="disabled">
                            <label for="female" class="">หญิง</label>
                         
                            <input type="radio" name="gender" id="male" value="m" class="custom" disabled="disabled">
                            <label for="male" class="" >ชาย</label>
                        </div> 
                    </fieldset>

                </div>
            </div>


            <div id="setting-wrapper">
                <div id="content-wrapper" class="info-wrapper">
                    <div class="input-style-wrapper clearfix">
                        <label style="line-height:2em;">ต้องการลด(กก.)</label>
                        <input type="number" min="0" max="500" step="1" name="weight" id="weight" value="" placeholder="น้ำหนัก" class="float-left" disabled="disabled">
                    </div>
                    <div>
                        <label>ความถี่ในการออกกำลังกาย</label>
                        <select data-theme="d" disabled="disabled">
                            <option>ไม่ได้ออกกำลังกายเลย - 1 วันต่อสัปดาห์</option>
                            <option>1-2 วัน ต่อสัปดาห์</option>
                            <option>3-5 วัน ต่อสัปดาห์</option>
                            <option>6-7 วันต่อสัปดาห์</option>
                            <option>เช้า-เย็น 6-7 วันต่อสัปดาห์</option>
                        </select>
                    </div>
                    <div >
                        <label>รูปแบบการลดน้ำหนัก</label>
                        <select data-theme="d" disabled="disabled">
                            <option>ง่าย (ลด 0.25 กิโลกรัม ต่อสัปดาห์)</option>
                            <option>ปานกลาง (ลด 0.5 กิโลกรัม ต่อสัปดาห์)</option>
                            <option>ยาก (ลด 0.75 กิโลกรัม ต่อสัปดาห์)   </option>
                            <option>6-7 วันต่อสัปดาห์</option>
                            <option>ยากมาก (ลด 1 กิโลกรัม ต่อสัปดาห์)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- end  -->
    </form>
    <div data-role="footer" class="graph-footer" data-position="fixed">
        <div>
            <p>BMI</p>
            <h1>33.3</h1>
            <p>โรคอ้วนขั้นที่1</p>
        </div>
        <div>
            <p>แคลอรี่ที่ได้รับ</p>
            <h1>2100</h1>
            <p>Kcal/วัน</p>
        </div>
        <div>
            <p>ไม่ควรได้รับเกิน</p>
            <h1>1800</h1>
            <p>Kcal/วัน</p>
        </div>
    </div>

</div>
    
</body>
</html>
