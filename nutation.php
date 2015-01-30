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
            <li><a href="setting.php" class="ui-btn ui-icon-gear ui-btn-icon-left" data-transition="slide">ตั้งค่า</a></li>
        </ul>
    </div>
    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>ข้อมูลสารอาหาร</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>
        <!-- <a href="graphweek.html" class="ui-btn ui-btn-inline ui-icon-bar ui-btn-icon-notext"></a> -->
        <a href="graphpieday.html" class="ui-btn ui-btn-inline ui-icon-pie ui-btn-icon-notext"></a>
    
    </div>
    <!-- End TOP MENU BAR -->



    <div data-role="content">
    
             <div class="head-table-custom">
                <div>ข้อมูลสารอาหาร</div>
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



</div>


</body>
</html>


<script>


</script>