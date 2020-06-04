<?php

require('db.php');

// 2. Do a query
$query  = "SELECT * FROM ticket "; 
$query .= "WHERE cilenti = $_GET[id]";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>


<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBC Reservation System</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<!--head-->
   <div class="header">
   		<div class="inner">
   			<div class="logo">
   <a href="interface.php" title="railway ticket"><img src="img/logo.jpg" width="350" height="60"/></a>
   			</div>
   			<div class="headlink">
   				<a href="login.php">Login</a>
   				&nbsp;|&nbsp;
   				<a href="register.php">Register</a>
   				
   				
   			</div>
   		</div>
   </div>
<!--head end-->
        
         <!-- Begin Page Content -->
        <div class="container-fluid">
            

<html>
    <head>
        <title>Ticket Information</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body bgcolor=" LightCyan">  
 <table width="80%" border="double" cellpadding="2" cellspacing="1" align="center" >
     <tr>
     <td>ID</td>
     <td>C_id</td>
     <td>S_id</td>
     <td>Level</td>
     <td>Orderdate</td>
     <td>Payment</td>
     </tr>          


<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["c_id"] . "</td>";
    echo "<td>" . $row["s_id"] . "</td>";
    echo "<td>" . $row["level"] . "</td>";
    echo "<td>" . $row["orderdate"] . "</td>";
    echo "<td>" . $row["payment"] . "</td>";
    echo "</tr>";
}
    
?>
    
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          </div>
        </div>
     </div>
     </div>
        </table>
          

<div class="foot">
      CBC-Booking System
</div>
</body>
        
<script src="js/jquery.min1.js"></script>
<script src="js/home.js"></script>

</html>