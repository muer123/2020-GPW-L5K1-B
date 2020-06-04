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
    
    
    $query  = "UPDATE meal SET "; 
    $query .= "t_id = '$t_id', "; 
    $query .= "f_id = '$f_id' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    die('Information has changed');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, t_id, f_id "; 
$query .= "FROM meal ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upservice.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Ticket ID: <input type="text" name="t_id" value="<?php echo $row["t_id"]; ?>"> <br/>
    Food ID: <input type="text" name="f_id" value="<?php echo $row["f_id"]; ?>"> <br/>
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);
?>