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
    $phone = $_POST['phone'];
    $lname = $_POST['lname'];
    // $costb = $_POST['costb'];
    // $total = $_POST['total'];
    
    
    $query  = "UPDATE client SET "; 
    $query .= "fname = '$fname', "; 
    $query .= "phone = '$phone', ";
    $query .= "lname = '$lname' ";
    // $query .= "costb = '$costb', ";
    // $query .= "total = '$total' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    die('Information has changed');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, fname, phone, lname "; 
$query .= "FROM client ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upclient.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Fname: <input type="text" name="fname" value="<?php echo $row["fname"]; ?>"> <br/>
    Phone: <input type="text" name="phone" value="<?php echo $row["phone"]; ?>"> <br/>
    Lname: <input type="text" name="lname" value="<?php echo $row["lname"]; ?>"> <br/>
     <!-- Transportation: <input type="text" name="costb" value="<?php echo $row["costb"]; ?>"> <br/>
     Total(thousand): <input type="text" name="total" value="<?php echo $row["total"]; ?>"> <br/> -->
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);
?>