<?php 
  //$ServiceID = 312;
  if($_SERVER["REQUEST_METHOD"] == "GET" )
  {
    if (isset($_GET["serviceID"])) {
        $ServiceID = $_GET["serviceID"];

    } else {
        $ServiceID = 300;
        //$ServiceID = $_GET["serviceID"];
    }
  }
      include $_SERVER["DOCUMENT_ROOT"] ."/inc/db_conn.php"; 
      require_once $_SERVER["DOCUMENT_ROOT"] ."/inc/tasks.php";
      $ServiceTypeObject = new TaskObject;
      $ServiceType = $ServiceTypeObject->get_ServiceType($ServiceID);
      foreach ($ServiceType as $row){
        $activityObject  = new TaskObject;
        $activity = $activityObject->get_activity($row['SERVICE_TYPE_ID']);
        $TotalTime = 0;
        foreach ($activity as $act){
            $TimeObject = new TaskObject;
            $TTime = $TimeObject->get_userLog('bluckett', 'test', 'test', $act['ACTIVITY_ID']);
            foreach($TTime as $t){
                $TotalTime = $TotalTime + $t['TimeTotal'];
            }
        }
        $return[]=array('st'=>$row['SERVICE_TYPE_NAME'],
                    'count'=>$TotalTime,
                    'color'=>"#3880aa"
                    );
        };

$json_array = json_encode($return);
?>
<script src="amcharts.js" type="text/javascript"></script>
<!--<link rel="stylesheet" href="css/style.css" type="text/css">-->
<script src="serial.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
  //  alert("the page has loaded...");
});
            var chart;
            var chartData = <?php echo $json_array ?>;
           // alert("testing!");

            AmCharts.ready(function () {
            //    alert("in amchart ready");
               LoadChart();
            });
            LoadChart();
            function LoadChart(){
           //     alert("in load chart");
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "st";
                chart.startDuration = 1;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.labelRotation = 25; // this line makes category values to be rotated
                categoryAxis.gridAlpha = 0;
                categoryAxis.fillAlpha = 1;
                categoryAxis.fillColor = "#FAFAFA";
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.dashLength = 5;
                valueAxis.title = "Total Hours";
                valueAxis.axisAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "count";
                graph.colorField = "color";
                graph.balloonText = "<b>[[category]]: [[value]]</b>";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";

                // WRITE
             //   alert("here");
                chart.write("chartdiv");
              //  alert(chart.write);
              //  alert("here2");
            }
        </script>
<div id="chartdiv" style="width: 800px; height: 400px;"></div>