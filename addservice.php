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
    $t_id = $_POST['t_id'];
    $f_id = $_POST['f_id'];
    // 2. Do a query
    $query  = "INSERT INTO meal (t_id, f_id) "; 
    $query .= "VALUES ('$t_id', '$f_id') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addservice.php" method="post">
    Ticket ID: <input type="text" name="t_id"> <br/>
    Food ID: <input type="text" name="f_id"> <br/>
    <input type="submit" name="submit">
</form>