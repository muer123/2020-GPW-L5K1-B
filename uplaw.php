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
    $s_id = $_POST['s_id'];
    $b_id = $_POST['b_id'];
    $d_id = $_POST['d_id'];
    $date = $_POST['date'];
    // $total = $_POST['total'];
    
    
    $query  = "UPDATE schedule SET "; 
    $query .= "s_id = '$s_id', "; 
    $query .= "b_id = '$b_id', ";
    $query .= "d_id = '$d_id', ";
    $query .= "date = '$date' ";
    // $query .= "total = '$total' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    die('Information has changed');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, s_id, b_id, d_id, date "; 
$query .= "FROM schedule ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="uplaw.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Shift ID: <input type="text" name="s_id" value="<?php echo $row["s_id"]; ?>"> <br/>
    Bus ID: <input type="text" name="b_id" value="<?php echo $row["b_id"]; ?>"> <br/>
    Driver ID: <input type="text" name="d_id" value="<?php echo $row["d_id"]; ?>"> <br/>
    Date: <input type="date" name="date" value="<?php echo $row["date"]; ?>"> <br/>
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);
?>