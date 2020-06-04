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
    // 2. Do a query
    $query  = "INSERT INTO schedule (s_id, b_id, d_id, date) "; 
    $query .= "VALUES ('$s_id', '$b_id', '$d_id', '$date') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addlaw.php" method="post">
    Shift ID: <input type="text" name="s_id"> <br/>
    Bus ID: <input type="text" name="b_id"> <br/>
    Driver ID: <input type="text" name="d_id"> <br/>
    Date: <input type="date" name="date"> <br/>
    <input type="submit" name="submit">
</form>