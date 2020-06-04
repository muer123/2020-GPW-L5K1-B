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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // 2. Do a query
    $query  = "INSERT INTO driver (fname, lname) "; 
    $query .= "VALUES ('$fname', '$lname') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addtable.php" method="post">
    Fname: <input type="text" name="fname"> <br/>
    <!-- Phone: <input type="text" name="phone"> <br/> -->
    Lname: <input type="text" name="lname"> <br/>
    <input type="submit" name="submit">
</form>
      