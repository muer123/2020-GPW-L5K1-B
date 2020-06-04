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

$deleteid = $_GET['id'];

$query  = "DELETE FROM ticket "; 
$query .= "WHERE id = $deleteid";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

Echo "Information has deleted";

mysqli_close($connection);
?>