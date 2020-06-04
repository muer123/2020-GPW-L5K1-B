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
    // $total = $_POST['total'];
    
    
    $query  = "UPDATE ticket SET "; 
    $query .= "c_id = '$c_id', "; 
    $query .= "s_id = '$s_id', ";
    $query .= "level = '$level', ";
    $query .= "orderdate = '$orderdate' ";
    // $query .= "total = '$total' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    die('Information has changed');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, c_id, s_id, level, orderdate "; 
$query .= "FROM ticket ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upshift.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Client ID: <input type="text" name="c_id" value="<?php echo $row["c_id"]; ?>"> <br/>
    Schedule ID: <input type="text" name="s_id" value="<?php echo $row["s_id"]; ?>"> <br/>
    Level: <input type="text" name="level" value="<?php echo $row["level"]; ?>"> <br/>
    Order Date: <input type="date" name="orderdate" value="<?php echo $row["orderdate"]; ?>"> <br/>
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);
?>