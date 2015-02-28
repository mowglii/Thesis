<?php
    session_start();
    unset($_SESSION["user_id"]); 
    require('dbconnect.php');

    require('dbfinduserid.php');

    require('dbshowgraphweek_userweight.php');
    require('dbshowgraphweek_program.php');
    



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


<!-- PAGE MONTH -->
<div data-role="page" data-theme="a">
   <div data-role="panel" id="listpanel" data-display="push">
        <ul data-role="listview" data-theme="d">
            <li><a href="index2.php" class="ui-btn ui-icon-home ui-btn-icon-left" data-transition="slide">หน้าแรก</a></li>
            <li><a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-left" data-transition="slide">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="nutation.php" class="ui-btn ui-icon-pie ui-btn-icon-left" data-transition="slide">ข้อมูลสารอาหาร</a></li>
            <li><a href="setting.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-transition="slide">แก้ไขข้อมูลส่วนตัว</a></li>
            <!-- <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li> -->
        </ul>
    </div>    

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>สมุดบันทึกน้ำหนัก</h1>
        <a href="input_weight.php" data-icon="carat-l" data-iconpos="notext" class="ui-btn-left" data-transition="slide"> </a>
    </div>
    <!-- End TOP MENU BAR -->


    <div data-role="content" style="background:#fff;">
        <div class="header-graph">
            <div data-role="controlgroup" data-type="horizontal">
                <a href="graph_weight_week.php" data-role="button" data-ajax="false">สัปดาห์</a>
                <a href="graph_weight_month.php" data-role="button" class="no-active" data-ajax="false">เดือน</a>
            </div>
        </div>
        <div style="width: 100%">
            <canvas id="canvas" height="700" width="600"></canvas>
        </div>
        
    </div>


    <div data-role="footer" class="graph-footer" data-position="fixed" >
        <div>
            <p>เป้าหมาย</p>
            <h1><?= $goal ?></h1>
            <p>กก.</p>
        </div>
        <div>
            <p>ปัจจุบัน</p>
            <h1><?= $weight_now_show ?></h1>
            <p>กก.</p>
        </div>
        <div>
            <p>เหลือเวลา</p>
            <h1><?= $time_rest ?></h1>
            <p>วัน</p>
        </div>
    </div>

</div>


</body>
</html>


<script>
    var date = "<?= $nameDay ?>";
    if (date == "Monday") {
        data_weight = [<?= $weight_mon ?>];
    }
    else if (date == "Tuesday") {
        data_weight = [<?= $weight_mon ?>, <?= $weight_tue ?>];
    }
    else if (date == "Wednesday") {
        data_weight = [<?= $weight_mon ?>, <?= $weight_tue ?>, <?= $weight_wed ?>];
    }
    else if (date == "Thursday") {
        data_weight = [<?= $weight_mon ?>, <?= $weight_tue ?>, <?= $weight_wed ?>, <?= $weight_thu ?>];
    }
    else if (date == "Friday") {
        data_weight = [<?= $weight_mon ?>, <?= $weight_tue ?>, <?= $weight_wed ?>, <?= $weight_thu ?>, <?= $weight_fri ?>];
    }
    else if (date == "Saturday") {
        data_weight = [<?= $weight_mon ?>, <?= $weight_tue ?>, <?= $weight_wed ?>, <?= $weight_thu ?>, <?= $weight_fri ?>, <?= $weight_sat ?>];
    }
    else {
        data_weight = [<?= $weight_mon ?>, <?= $weight_tue ?>, <?= $weight_wed ?>, <?= $weight_thu ?>, <?= $weight_fri ?>, <?= $weight_sat ?>, <?= $weight_sun ?>];
    }

    var data = {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        datasets: [
            {
                label: "Program graph",
                fillColor: "rgba(220,220,220,0)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [<?= $weight_graph_mon ?>, <?= $weight_graph_tue ?>, <?= $weight_graph_wed ?>, <?= $weight_graph_thu ?>, <?= $weight_graph_fri ?>, <?= $weight_graph_sat ?>, <?= $weight_graph_sun ?>]
            },
            {
                label: "Your graph",
                fillColor: "rgba(151,187,205,0)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: data_weight
            }
        ]
    };
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.graph = new Chart(ctx).Line(data, {
            responsive : true
        });
    }

</script>