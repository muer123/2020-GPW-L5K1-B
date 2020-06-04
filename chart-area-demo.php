<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Group3666";
$dbname = "funeral_service";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}


?>

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,

<?php	

		
$query  = "SELECT price "; 
$query .= "FROM money ";


$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
//print_r($row);
		$a = $row['0'];
		
$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 2";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$b = $row['0'];
		
$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 3";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);		
		$c = $row['0'];
		
$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 4";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$d = $row['0'];
		
$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 5";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$e = $row['0'];
		
$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 6";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$f = $row['0'];

$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 7";
		
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$g = $row['0'];

$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 8";
	
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$h = $row['0'];				

$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 9";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$i = $row['0'];

$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 10";
	
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$j = $row['0'];

$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 11";
	
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$k = $row['0'];	

$query  = "SELECT price ";
$query .= "From money ";
$query .= "WHERE id = 12";
	
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
		$l = $row['0'];								
      echo "data: [" . $a . "," . $b . "," . $c . "," . $d . "," . $e . "," . $f . "," . $g . "," . $h . "," . $i . "," . $j . "," . $k . "," . $l . "],";
		
		?>	  
	  
	  
     
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '$' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
