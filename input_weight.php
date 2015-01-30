<?php


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
    <script src="js/Chart.min.js"></script>

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</head>
<body>


<!-- PAGE WEEK -->
<div data-role="page" data-theme="a">      

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
        <h1>สมุดบันทึกน้ำหนัก</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>
        <!-- <a href="graphweek.html" class="ui-btn ui-btn-inline ui-icon-bar ui-btn-icon-notext"></a> -->
        <a href="graphweek.html" class="ui-btn ui-btn-inline ui-icon-bar ui-btn-icon-notext"></a>
    
    </div>
    <!-- End TOP MENU BAR -->



    <div data-role="content">
        <div class="ui-content" id="input-weight-wrapper">
            <div data-role="fieldcontain"  id="weight-now" >
                <label class="float-left" ><h3>น้ำหนักวันนี้</h3></label>

                <input type="number" min="0" max="300" name="weight"value="" class="ui-input-text">
                <label class="float-left" ><h3>กิโลกรัม</h3></label>
            </div>  

            <button type="submit" class="margin-top-25" >เพิ่ม </button>
        </div>  

             <div class="head-table-custom margin-top-25">
                <div>ข้อมูลน้ำหนัก</div>
                <span class="clearfix"></span>
            </div>
            <table data-role="table" class="ui-table table-custom" id="tb_each">
                <thead><tr></tr></thead>
                <tbody>
                    <tr>
                        <td class="left">14/01/2015</td>
                        <td class="right"><b>85 กิโลกรัม</b></td>
                    </tr>
                    <tr>
                        <td class="left">13/01/2015</td>
                        <td class="right"><b>85 กิโลกรัม</b></td>
                    </tr>
                    <tr>
                        <td class="left">12/01/2015</td>
                        <td class="right"><b>85 กิโลกรัม</b></td>
                    </tr>
                </tbody>
            </table>
        </div>  




    <div data-role="footer" class="graph-footer" data-position="fixed">
        <div>
            <p>เป้าหมาย</p>
            <h1>57</h1>
            <p>กก.</p>
        </div>
        <div>
            <p>ปัจจุบัน</p>
            <h1>75</h1>
            <p>กก.</p>
        </div>
        <div>
            <p>เหลือเวลา</p>
            <h1>92</h1>
            <p>วัน</p>
        </div>
    </div>

</div>


</body>
</html>


<script>


</script>