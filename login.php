<?php

// make db conection
require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else { 
        // Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2. Prepare query
        $query  = "SELECT username, password "; 
        $query .= "FROM users ";
        $query .= "WHERE username = '$username' AND password = '$password' ";

        // 2. Execute query
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("You have entered valid use name and password");
        }

        // Save data to $row
        $row = mysqli_fetch_array($result);
        
        // Check how many answers did we get
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            // Start to use sessions
            session_start();
            
            // Create session variables
            $_SESSION['login_user'] = $username;
                header('Location: index.php');
            
        } else {
            echo "Login failed";
        }
        
        // 4. free results
        mysqli_free_result($result);
    }
}

// 5. close db connection
mysqli_close($connection);

?>

<?php

if (isset($error)) {
    echo "<span>" . $error ."</span>";
}

?>
<title>Chengdu Bus Company</title>
<center>
    <h2 style="font-family:verdana;color:black;font-size:40px;">Chengdu Bus Company</h2>
</center>
  
<html>
<head>
<style type="text/css">
body
  { 
    background-image:url(img/background.jpg);
    background-repeat:no-repeat;
    background-size:cover;
  }
  </head>
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body>

<div id="content">
    <div class="login-header">
        <img src="img/logo.jpg">
        
    <form action="login.php" method="POST">
    <div class="login-input-box">
         <span class="icon icon-user"></span>
    
    <input type="text" name="username" placeholder="Please enter your username"> <br/>
        
    <input type="password" name="password" placeholder="Please enter your password"> <br/>
        </div>
        
   <div class="login-button-box">        
    <input type="submit" name="submit" color="darkseagreen" value="Login">
        </div>
          </form>
            <div class="logon-box">
              <a href="recoverpw.php">Forgot your password?</a>
            <a href="register.php">Sign up</a>
          </div>
        </div>
    </div>
    </body>
</html>
    