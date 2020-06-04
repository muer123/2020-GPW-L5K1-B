<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header('location: login.php');
}

if($_SESSION['login_level'] >= $pagelevel) {
//    echo "yay";
} else {
    header ('location:loginfailed.php');
}

?>