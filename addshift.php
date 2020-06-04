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
    $posa = $_POST['posa'];
    $posb = $_POST['posb'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    // 2. Do a query
    $query  = "INSERT INTO shift (posa, posb, name, price) "; 
    $query .= "VALUES ('$posa', '$posb', '$name', '$price') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addshift.php" method="post">
    Start Position: <input type="text" name="posa"> <br/>
    End Position: <input type="text" name="posb"> <br/>
    Name: <input type="text" name="name"> <br/>
    Price: <input type="text" name="price"> <br/>
    <input type="submit" name="submit">
</form>