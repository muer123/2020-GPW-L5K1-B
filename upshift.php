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
    // $total = $_POST['total'];
    
    
    $query  = "UPDATE shift SET "; 
    $query .= "posa = '$posa', "; 
    $query .= "posb = '$posb', ";
    $query .= "name = '$name', ";
    $query .= "price = '$price' ";
    // $query .= "total = '$total' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    die('Information has changed');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, posa, posb, name, price "; 
$query .= "FROM shift ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upshift.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Start Position: <input type="text" name="posa" value="<?php echo $row["posa"]; ?>"> <br/>
    End Position: <input type="text" name="posb" value="<?php echo $row["posb"]; ?>"> <br/>
    Name: <input type="text" name="name" value="<?php echo $row["name"]; ?>"> <br/>
    Price: <input type="text" name="price" value="<?php echo $row["price"]; ?>"> <br/>
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);
?>