<?php


require_once('db.php');
 
        $g=date("Y-1-1");
        $h=date("Y-m-d");
$sql="select * FROM (((schedule INNER JOIN shift ON schedule.s_id=shift.id) INNER JOIN driver ON schedule.d_id=driver.id) INNER JOIN bus ON schedule.b_id=bus.id)INNER JOIN ticket ON schedule.id=ticket.s_id where orderdate between '$g' and '$h' and level='0'";

$result = mysqli_query($connection, $sql);
if ($result->num_rows > 0) { $a=0;      
    while($row = $result->fetch_assoc()) {  
            $a=$a+$row['price']/2;  
    }  
} else {  
    $a=0;
    
        
}
$sql="select * FROM (((schedule INNER JOIN shift ON schedule.s_id=shift.id) INNER JOIN driver ON schedule.d_id=driver.id) INNER JOIN bus ON schedule.b_id=bus.id)INNER JOIN ticket ON schedule.id=ticket.s_id where orderdate between '$g' and '$h' and level='1'";

$result = mysqli_query($connection, $sql);
if ($result->num_rows > 0) { $aa=0;      
    while($row = $result->fetch_assoc()) {  
            $aa=$aa+$row['price'];  
    }  
} else {  
    $aa=0;
    
        
}
$sql="select * FROM (((schedule INNER JOIN shift ON schedule.s_id=shift.id) INNER JOIN driver ON schedule.d_id=driver.id) INNER JOIN bus ON schedule.b_id=bus.id)INNER JOIN ticket ON schedule.id=ticket.s_id where orderdate between '$g' and '$h' and level='0'";

$result = mysqli_query($connection, $sql);
if ($result->num_rows > 0) { $b=0;      
    while($row = $result->fetch_assoc()) {  
            $b=$b+1;  
    }  
} else {  
    $b=0;
    
        
}
$sql="select * FROM (((schedule INNER JOIN shift ON schedule.s_id=shift.id) INNER JOIN driver ON schedule.d_id=driver.id) INNER JOIN bus ON schedule.b_id=bus.id)INNER JOIN ticket ON schedule.id=ticket.s_id where orderdate between '$g' and '$h' and level='1'";

$result = mysqli_query($connection, $sql);
if ($result->num_rows > 0) { $bb=0;      
    while($row = $result->fetch_assoc()) {  
            $bb=$bb+1;  
    }  
} else {  
    $bb=0;}
 echo"
 <script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var horizontalBarChartData = {
			labels: ['Economic', 'Business'],
			datasets: [{
				label: 'Saled ticket income',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
                        $a,$aa
				]
			}, {
				label: 'Saled ticket number',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				data: [
                        $b,$bb
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myHorizontalBar = new Chart(ctx, {
				type: 'horizontalBar',
				data: horizontalBarChartData,
				options: {
					// Elements options apply to all of the options unless overridden in a dataset
					// In this case, we are setting the border of each horizontal bar to be 2px wide
					elements: {
						rectangle: {
							borderWidth: 2,
						}
					},
					responsive: true,
					legend: {
						position: 'right',
					},
					title: {
						display: true,
						text: 'Ticket sales information in current year'
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			horizontalBarChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myHorizontalBar.update();
		});

		var colorNames = Object.keys(window.chartColors);

		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[horizontalBarChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + (horizontalBarChartData.datasets.length + 1),
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				data: []
			};

			for (var index = 0; index < horizontalBarChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			horizontalBarChartData.datasets.push(newDataset);
			window.myHorizontalBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (horizontalBarChartData.datasets.length > 0) {
				var month = MONTHS[horizontalBarChartData.labels.length % MONTHS.length];
				horizontalBarChartData.labels.push(month);

				for (var index = 0; index < horizontalBarChartData.datasets.length; ++index) {
					horizontalBarChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myHorizontalBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			horizontalBarChartData.datasets.pop();
			window.myHorizontalBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			horizontalBarChartData.labels.splice(-1, 1); // remove the label first

			horizontalBarChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myHorizontalBar.update();
		});
	</script> 
 
  "  
       ;   
            
           
       
?>