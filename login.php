<?php


require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else {

$username = $_POST['username'];
$password = $_POST['password'];
$pagelevel= $_POST['level'];


$query  = "SELECT username, password, level ";
$query .= "FROM user ";
$query .= "WHERE username = '$username' AND password = '$password' ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

        
$row = mysqli_fetch_array($result);
$numrows=mysqli_num_rows($result);
if ($numrows == 1) {

    session_start();
    
    $_SESSION['login_user'] = $username;
    $_SESSION['login_level'] = $row['level'];
    
    

    
       if  ($_SESSION['login_level'] == 1) {
                    header('location: index.php');
                } else if ($_SESSION['login_level'] == 2) {
                    header('location: home1.php');
                } else if ($_SESSION['login_level'] == 3) {
                    header('location: home2.php');      
                } else {
                    header('location:loginfailed.php');
            }
    
        } else {
            header('location:loginfailed.php');
        }

mysqli_free_result($result);
    }
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/login.css">
</head>
<body>
<!-- particles.js container -->
<form action="login.php" method="POST">
<div id="particles-js" style="display: flex;align-items: center;justify-content: center">
</div>
<div class="login-page">
   <div class="login-content">
     <div class="login-tit">Login</div>
     <div class="login-input">
     <input type="text" name="username" placeholder="username"> 
     </div>
     <div class="login-input">
     <input type="password" name="password" placeholder="password">
    </div>
    <div class="login-btn">
      <div class="login-btn-left">
      <button input type="submit" name="submit">Sign In</button>
      </div>
      <div class="login-btn-right" onClick="changeImg()">
        <img src="img/check.png" alt="" id="picture"> remember passowrd
      </div>
    </div>
   </div>
</div>
</form>

<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script>
  function changeImg(){
    let pic = document.getElementById('picture');
    console.log(pic.src)
    if(pic.getAttribute("src",2) =="img/check.png"){
      pic.src ="img/checked.png"
    }else{
      pic.src ="img/check.png"
    }
  }
</script>
</body>
</html>