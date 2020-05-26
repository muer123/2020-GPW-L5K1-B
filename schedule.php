<?php
            
                


include("header.php");


?>


<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item active text-" aria-current="page">Dashboard 01</li>
                        </ol>

						
					</section>
				</div>
<html>
    <head>
        <title>CBC</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body bgcolor=" LightCyan">      
        <h1 style="text-align:center">CBC Staff Schedule</h1>
        <hr/>
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="card-body">
              <div class="table-responsive">
               <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                <td>ID</td>
                <td>Shift ID</td>     
                <td>Bus ID</td>  
                <td>Driver ID</td> 
                <td>Date</td>
             </thead>

<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["s_id"] . "</td>";
    echo "<td>" . $row["b_id"] . "</td>";
    echo "<td>" . $row["d_id"] . "</td>";
    echo "<td>" . $row["d_id"] . "</td>";
    echo "</tr>";
}
    
?>
    
<?php

include("footer.php");

?>