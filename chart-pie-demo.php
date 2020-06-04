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

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Manager quantity", "Employee quantity"],
    datasets: [{

<?php	
$query  = "SELECT quantity "; 
$query .= "FROM staff_quantity ";


$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
//print_r($row);
		$a = $row['0'];	
		
$query  = "SELECT quantity "; 
$query .= "FROM staff_quantity ";
$query .= "WHERE id = 2";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
//print_r($row);
		$b = $row['0'];
		
echo "data: [" . $a . "," . $b . "],";

?>
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
