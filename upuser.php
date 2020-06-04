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
    // $costb = $_POST['costb'];
    // $total = $_POST['total'];
    
    
    $query  = "UPDATE bus SET "; 
    $query .= "lisence = '$lisence', "; 
    $query .= "type = '$type' ";
    // $query .= "position = '$position' ";
    // $query .= "costb = '$costb', ";
    // $query .= "total = '$total' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    die('Information has changed');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, lisence, type "; 
$query .= "FROM bus ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upuser.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    LISENCE: <input type="text" name="lisence" value="<?php echo $row["lisence"]; ?>"> <br/>
    TYPE: <input type="text" name="type" value="<?php echo $row["type"]; ?>"> <br/>
    <!-- Position: <input type="text" name="position" value="<?php echo $row["position"]; ?>"> <br/> -->
     <!-- Transportation: <input type="text" name="costb" value="<?php echo $row["costb"]; ?>"> <br/>
     Total(thousand): <input type="text" name="total" value="<?php echo $row["total"]; ?>"> <br/> -->
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);
?>