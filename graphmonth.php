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
            <li><a href="#" class="ui-btn ui-icon-lock ui-btn-icon-left" data-transition="slide">ลงชื่อออก</a></li>
        </ul>
    </div>    

    <div data-role="header" data-position="fixed" data-fullscreen="false" data-theme="a">
        <h1>MY WEIGHT</h1>
        <a href="#listpanel" data-icon="bars" data-iconpos="notext" class="ui-btn-left"></a>
         <a href="input_weight.php" class="ui-btn ui-icon-calendar ui-btn-icon-notext"></a>

        
    </div>
    <!-- End TOP MENU BAR -->


    <div data-role="content" style="background:#fff;">
        <div class="header-graph">
            <div data-role="controlgroup" data-type="horizontal">
                <a href="graphweek.php" data-role="button"   class="no-active" data-ajax="false">Week</a>
                <a href="graphmonth.php" data-role="button" data-ajax="false">Month</a>
            </div>
        </div>
        <div style="width: 100%">
            <canvas id="canvas" height="450" width="600"></canvas>
        </div>
        
    </div>



</div>


</body>
</html>


<script>
var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

    var barChartData = {
        labels : ["ปริมาณ","ค่าพลังงาน","ไขมัน","โคเลสเตอรอล","โปรตีน","คาร์โบไฮเดรต","น้ำตาล","โซเดียม","วิตามินเอ","วิตามินบี1","วิตามินบี2","แคมเซียม","เหล็ก"],
        datasets : [
            {
                fillColor : "#f05053",
                strokeColor : "#f05053",
                highlightFill: "#f05053",
                highlightStroke: "#f05053",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            },
            {
                fillColor : "#00cdc6",
                strokeColor : "#00cdc6",
                highlightFill : "#00cdc6",
                highlightStroke : "#00cdc6",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            }
        ]

    }
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }
</script>