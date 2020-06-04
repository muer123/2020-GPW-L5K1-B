<?php
$dbhost = "localhost";
 $dbuser = "b16b45c83359";
 $dbpass = "f353276dbc3931ea";
 $dbname = "l5k1b";


$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}

if ($_POST['submit']) {
    $id = $_POST['id'];
    $c_id = $_POST['c_id'];
    $s_id = $_POST['s_id'];
    $level = $_POST['level'];
    $orderdate = $_POST['orderdate'];
    // 2. Do a query
    $query  = "INSERT INTO ticket (c_id, s_id, level, orderdate) "; 
    $query .= "VALUES ('$c_id', '$s_id', '$level', '$orderdate') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addticket.php" method="post">
    Client ID: <input type="text" name="c_id"> <br/>
    Schedule ID: <input type="text" name="s_id"> <br/>
    Level: <input type="text" name="level"> <br/>
    Order Date: <input type="date" name="orderdate"> <br/>
    <input type="submit" name="submit">
</form>