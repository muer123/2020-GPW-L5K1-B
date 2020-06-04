<?php
$pagelevel= 1;
require_once('logincheck.php');
require_once('db.php');


$query  = "SELECT id, c_name, id_card, phone, buslevel, buscap, origion, terminus, payment, date, remark "; 
$query .= "FROM myticket";

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
   <!--middle-->
<div class="middle">
   <div class="cont">
         <div class="class">
         <ul>
           <h3 style="color:#FFF;">Column Sorting</h3>
           <a href="#" class="net"><li>Apply for booking</li></a>
           <a href="myticket.php" class="_all3"><li>My Ticket</li></a>
         </ul>
       </div>
       <!--guide-->
     <div class="class_a">
      <!--Apply for Booking-->
           <div class="all1">
             <h4 style="color:#fff">My Ticket</h4>
          
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Custoner Name</th>
                                    	<th>ID Card</th>
                                        <th>Phone</th>
                                        <th>Bus Level</th>
                                    	<th>Bus Capacity</th>
                                        <th>Origion Station</th>
                                        <th>Terminus</th>
                                    	<th>Payment</th>
                                        <th>Date</th>
                                    	<th>Remark</th>
                                    </thead>
<?php


while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["c_name"] . "</td>";
    echo "<td>" . $row["id_card"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["buslevel"] . "</td>";
    echo "<td>" . $row["buscap"] . "</td>";
    echo "<td>" . $row["origion"] . "</td>";
    echo "<td>" . $row["terminus"] . "</td>";
    echo "<td>" . $row["payment"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["remark"] . "</td>";
    echo "</tr>";
}
    
?>
</table>
                            
    </div>
        </div>
            </div>
                </div>
             </div>

  <!--middle end-->
<div class="foot">
      @2020 Chengdu Bus Company-Collect from CBS
</div>
</body>
<script src="js/jquery.min1.js"></script>
<script src="js/home.js"></script>

</html>