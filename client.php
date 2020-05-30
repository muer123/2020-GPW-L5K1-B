<?php
require('db.php');
require('header.php');

// 2. Do a query
$query  = "SELECT id, fname, phone, lname "; 
$query .= "FROM client";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}
?>

    <html>
    <head>
        <title>Chengdu Bus Company</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body bgcolor=" LightCyan">      
        <h1 style="text-align:center">CBC Client Information</h1>
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
                <td>Fname</td>     
                <td>Phone</td>  
                <td>Lname</td>
                <td>Ticket</td>       
                <td>Delete</td>     
             </thead>

<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["fname"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["lname"] . "</td>";
    echo "<td><a href='tick.php?id=" . $row["id"] . "'>Ticket</a></td>";
    echo "<td><a href='deleteclient.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
}
    
?>
    
        
<a href="addclient.php">Add New Client!</a>
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            
            
<!--Jquery.min js-->
		<script src="js/jquery.min.js"></script>

		<!--popper js-->
		<script src="js/popper.js"></script>

		<!--Tooltip js-->
		<script src="js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="js/bootstrap.min.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="js/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="js/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="js/sidemenu.js"></script>

		<!--mCustomScrollbar js-->
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- ECharts -->
		<script src="js/echarts.js"></script>

		<!--Morris js-->
		<script src="js/morris.min.js"></script>
		<script src="js/raphael.min.js"></script>	

		<!--Scripts js-->
		<script src="js/scripts.js"></script>

		<!--Dashboard js-->
		<script src="js/dashboard.js"></script>
		<script src="js/apexcharts.js"></script>