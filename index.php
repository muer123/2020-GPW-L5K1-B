<?php

$pagelevel= 1;
require_once('logincheck.php');
require_once('db.php');

    
        

       
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Chengdu Bus System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
      <script src="js/Chart.min.js"></script>
      <script src="js/utils.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Content Information
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="bus.php">
                        <i class="pe-7s-user"></i>
                        <p>Bus</p>
                    </a>
                </li>
                <li>
                    <a href="client.php">
                        <i class="pe-7s-user"></i>
                        <p>Client</p>
                    </a>
                </li>
                <li class="active">
                    <a href="driver.php">
                        <i class="pe-7s-note2"></i>
                        <p>Driver</p>
                    </a>
                </li>
                <li>
                    <a href="meal.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Meal</p>
                    </a>
                </li>
                <li>
                    <a href="schedule.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Schedule</p>
                    </a>
                </li>
                <li>
                    <a href="shift.php">
                        <i class="pe-7s-bell"></i>
                        <p>Shift</p>
                    </a>
                </li>
                <li>
                    <a href="ticket.php">
                        <i class="pe-7s-bell"></i>
                        <p>Ticket</p>
                    </a>
                </li>
				<!-- <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Chengdu Bus System</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li>
                        <a href="logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      
      </div>  <div class="row" style="width:100%;">

          
          <canvas id="canvas" ></canvas>
         <?php
        require('opin.php');
             ?> </div></main>