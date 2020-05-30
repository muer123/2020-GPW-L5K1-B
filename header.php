<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CBC Dashboard</title>

		<!--Favicon -->
		<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="css/sidemenu.css">
		
		<!--morris css-->
		<link rel="stylesheet" href="css/morris.css">


	</head>

	<body class="app ">

		<div id="spinner"></div>

		<div id="app">
			<div class="main-wrapper" >
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index.php">
						<img src="img/logo.jpg" class="header-brand-img" alt="Kharna-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-3">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a></li>
						</ul>
						<div class="search-element">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
							<img src="img/head.jpg" alt="profile-user" class="rounded-circle w-32">
							<div class="d-sm-none d-lg-inline-block">Enemy Lee</div></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="profile.php" class="dropdown-item has-icon">
									<i class="ion ion-android-person"></i> Profile
								</a>
								<a href="message.php" class="dropdown-item has-icon">
									<i class="ion-android-drafts"></i> Messages
								</a>
								<a href="setting.php" class="dropdown-item has-icon">
									<i class="ion ion-gear-a"></i> Settings
								</a>
								<a href="logout.php" class="dropdown-item has-icon">
									<i class="ion-ios-redo"></i> Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>

				<aside class="app-sidebar">
					<div class="app-sidebar__user">
					    <div class="dropdown">
							<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
								<img alt="image" src="img/head.jpg" class=" avatar-md rounded-circle">
								<span class="ml-2 d-lg-block">
									<span class="text-white app-sidebar__user-name mt-5">Anna</span><br>
									<span class="text-muted app-sidebar__user-name text-sm">CBC-Manager</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						
                        <li>
							<a class="side-menu__item" href="index.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
                        
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chartjs.php" class="slide-item">Chart Js</a></li>
								<li><a href="flotcharts.php" class="slide-item"> Flot Charts</a></li>
								<li><a href="barcharts.php" class="slide-item"> Bar Charts</a></li>
								<li><a href="chartist.php" class="slide-item"> Chartist</a></li>
								<li><a href="morris.php" class="slide-item"> Morris Charts</a></li>
							</ul>
						</li>
                        
						<li>
							<a class="side-menu__item" href="bus.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Bus</span></a>
						</li>
                        
                        <li>
							<a class="side-menu__item" href="shift.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Shift</span></a>
						</li>
                        
                        <li>
							<a class="side-menu__item" href="driver.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Driver Information</span></a>
						</li>
                        
                        <li>
							<a class="side-menu__item" href="schedule.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Schedule</span></a>
						</li>

                        <li>
							<a class="side-menu__item" href="client.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Client Information</span></a>
						</li>
                        
                        <li>
							<a class="side-menu__item" href="ticket.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Ticket</span></a>
						</li>
                        
                        	<li>
							<a class="side-menu__item" href="meal.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Meal</span></a>
						</li>
					</ul>
				</aside>
