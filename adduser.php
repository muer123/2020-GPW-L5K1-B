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
    $lisence = $_POST['lisence'];
    $type = $_POST['type'];
    // $position = $_POST['position'];
    // 2. Do a query
    $query  = "INSERT INTO bus (lisence, type) "; 
    $query .= "VALUES ('$lisence', '$type') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="adduser.php" method="post">
    LISENCE: <input type="text" name="lisnece"> <br/>
    TYPE: <input type="text" name="type"> <br/>
    <!-- Positon: <input type="text" name="position"> <br/> -->
    <!-- Run out time: <input type="date" name="runtime"> <br/> -->
    <input type="submit" name="submit">
</form>
      