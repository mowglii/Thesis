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
        <ul data-role="listview" data-theme="b">
            <li><a href="index2.html">หน้าแรก</a></li>
            <li><a href="#">สมุดบันทึกน้ำหนัก</a></li>
            <li><a href="#">ข้อมูลสารอาหาร</a></li>
            <li><a href="#">ตั้งค่า</a></li>
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
                <a href="graphweek.html" data-role="button" class="no-active">Week</a>
                <a href="#" data-role="button">Month</a>
            </div>
        </div>
        <div class="graph">
            <canvas id="canvas" height="300" width="450"></canvas>
        </div>
        
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
var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

    var barChartData = {
        labels : ["month1","month2","month3","month4","month5"],
        datasets : [
            {
                fillColor : "#f05053",
                strokeColor : "#f05053",
                highlightFill: "#f05053",
                highlightStroke: "#f05053",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            },
            {
                fillColor : "#00cdc6",
                strokeColor : "#00cdc6",
                highlightFill : "#00cdc6",
                highlightStroke : "#00cdc6",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            }
        ]

    }
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
        });
    }

