<div class="bieudo">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script type="text/javascript" >
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([['Danh muc', 'So luong san pham'],
   <?php
   $tongdm=count($listthongke);
   $i=1;
    foreach ($listthongke as $bieudo) {
        extract($bieudo);
        if($i==$tongdm) $dauphay="";
        else $dauphay=",";
        echo "['".$bieudo['tendm']."', ".$bieudo['countsp']."]" .$dauphay ;
        $i+=1;
    }
   ?>
//   ['Contry', 'Mhl'],
//   ['Italy',54.8],
//   ['France',48.6],
//   ['Spain',44.4],
//   ['USA',23.9],
//   ['Argentina',14.5]
]);

var options = {
  title:'Thống kê sản phẩm theo danh mục'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
</div>
/////
<!-- <!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Italy',54.8],
  ['France',48.6],
  ['Spain',44.4],
  ['USA',23.9],
  ['Argentina',14.5]
]);

var options = {
  title:'World Wide Wine Production'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

</body>
</html> -->