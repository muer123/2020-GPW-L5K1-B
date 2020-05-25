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

		<!--Chartist css-->
		<link rel="stylesheet" href="css/chartist.css">
		<link rel="stylesheet" href="css/chartist-plugin-tooltip.css">

		<!--Full calendar css-->
		<link rel="stylesheet" href="css/stylesheet1.css">
		
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
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion-ios-email-outline"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="img/head.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Stewart Ball</b>
													<p>Your template awesome</p>
												</div>
												<div class="time">6 hours ago</div>
											</div>

										</div>
									</a>
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="assets/img/avatar/avatar-2.jpeg.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Jonathan North</b>
													<p>Your Order Shipped.....</p>
												</div>
												<div class="time">45 mins ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets/img/avatar/avatar-4.jpeg.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Victor Taylor</b>
													<p>Hi!, I' am web developer</p>
												</div>
												<div class="time"> 8 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets/img/avatar/avatar-3.jpeg.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Ruth	Arnold</b>
													<p>Hi!, I' am web designer</p>
												</div>
												<div class="time"> 3 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets/img/avatar/avatar-5.jpeg.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Sam	Lyman</b>
													<p>Hi!, I' am java developer</p>
												</div>
												<div class="time"> 15 mintues ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg beep"><i class="ion-ios-bell-outline"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Notifications
									<div class="float-right">
										<a href="#">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-exclamation-triangle text-danger"></i>
										<div class="dropdown-item-desc">
											<b>Error message occurred....</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-warning"></i>
										<div class="dropdown-item-desc">
											<b> Adding new people</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-shopping-cart text-success"></i>
										<div class="dropdown-item-desc">
											<b>Your items Arrived</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-comment text-primary"></i>
										<div class="dropdown-item-desc">
											<b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="ion-arrow-expand"  id="fullscreen-button"></i>
							</a>
						</li>
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
									<span class="text-white app-sidebar__user-name mt-5">Enemy Lee</span><br>
									<span class="text-muted app-sidebar__user-name text-sm">CBC-Manager</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						<li>
							<a class="side-menu__item" href="index.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Overall</span></a>
						</li>
                        <li>
							<a class="side-menu__item" href="calendar.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Calendar</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
                                <li><a href="ticket.php" class="slide-item"> Ticket List</a></li>
								<li><a href="ticket-detail.php" class="slide-item"> Ticket Details</a></li>
								<li><a href="ticket-payment.php" class="slide-item"> Ticket Payment</a></li>
								<li><a href="analytics.php" class="slide-item"> Analytics</a></li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="table.html" class="slide-item">Basic Tables</a></li>
								<li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
							</ul>
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
					</ul>
				</aside>

				<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item active text-" aria-current="page">Dashboard 01</li>
                        </ol>

						<div class="row">
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div class="dash1">
													<h4 class="text-dark">675</h4>
													<small class="text-muted ">Posts</small>
												</div>
											</div>
											<div class="col-6">
												<div id="chart1" class="overflow-hidden"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div class="dash1">
													<h4 class="text-dark">875</h4>
													<small class="text-muted">Clicks</small>
												</div>
											</div>
											<div class="col-6">
												<div id="chart2" class="overflow-hidden"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div class="dash1">
													<h4 class="text-dark">976</h4>
													<small class="text-muted">Shares</small>
												</div>
											</div>
											<div class="col-6">
												<div id="chart3" class="overflow-hidden"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div class="dash1">
													<h4 class="text-dark">418</h4>
													<small class="text-muted">Remarks</small>
												</div>
											</div>
											<div class="col-6">
												<div id="chart4" class="overflow-hidden"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						

						<div class="row ">
							<div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Monthly Sales</h4>
									</div>
									<div class="card-body">
										<div id="bar-chart" class="overflow-hidden" > </div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Yearly Template Sales</h4>
									</div>
									<div class="card-body">
										<div id="sales-chart" class="overflow-hidden"> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Account Retention</h4>
									</div>
									<div class="card-body">
										<div id="index.php" class="overflow-hidden h-400 mx-auto text-center " ></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-xl-8 col-md-12 col-12 col-sm-12">
								<div class="card">
								<div class="pt-0 pb-0 pl-3 pr-3 card-body">
									<div class="row">
										<div class="col-xs-12 col-lg-5 cover-image weather-radius text-center position-relative transparent" data-image-src="img/weather.jpg">
											<div class="weather-shade">
												<i class="wi wi-day-sleet text-white"></i>
											</div>
											<div class="card-body mt-5 pt-5">
												<i class="vl_weather-day-rain text-light  mt-5 pt-5 d-block"></i>
											</div>
											<div class="bg-transparent border-0 text-light  pt-4">
												<h3 class="weight300">Sunny Day</h3>
											</div>
										</div>
										<div class="col-xs-12 col-lg-7 widgetb p-0">
											<div class="card-body p-4">
												<h4 class="mb-0">MONDAY <br/>
													<span class="text-muted h5"> 22  October</span>
												</h4>
												<div class="fs-45 text-primary pt-4 ">
													32<sup>o</sup>
													<span class="h3 ">Sunny</span>
												</div>
											</div>
											<div class="card-footer bg-white text-center ">
												<div class="row">
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">TUE</h6>
														<i class="fe fe-cloud-rain"></i>
														<p class="mb-0 text-muted">18<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">WED</h6>
														<i class="fe fe-cloud"></i>
														<p class="mb-0 text-muted">22<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">THU</h6>
														<i class="fe fe-cloud-snow"></i>
														<p class="mb-0 text-muted">15<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">FRI</h6>
														<i class="fe fe-cloud-rain"></i>
														<p class="mb-0 text-muted">19<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">SAT</h6>
														<i class="fe fe-cloud"></i>
														<p class="mb-0 text-muted">29<sup>o</sup>c</p>
													</div>
													<div class="col-sm-2 col-4 mt-2 pb-2">
														<h6 class="text-muted mb-3">SUN</h6>
														<i class="fe fe-cloud-snow"></i>
														<p class="mb-0 text-muted">17<sup>o</sup>c</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>

							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card">
									<div id="calendar-1"></div>
								</div>
							</div>
						</div>

					</section>
				</div>
			</div>
		</div>

		<!--Jquery.min js-->
		<script src="js/jquery.min.js"></script>

		<!--popper js-->
		<script src="js/popper.js"></script>

		<!--Tooltip js-->
		<script src="js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="js/bootstrap.min.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="js/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="js/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="js/sidemenu.js"></script>

		<!--mCustomScrollbar js-->
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- ECharts -->
		<script src="js/echarts.js"></script>

		<!--Min Calendar -->
		<script src="js/calendar.min.js"></script>
		<script src="js/custom_calendar.js"></script>

		<!--Morris js-->
		<script src="js/morris.min.js"></script>
		<script src="js/raphael.min.js"></script>	

		<!--Scripts js-->
		<script src="js/scripts.js"></script>

		<!--Dashboard js-->
		<script src="js/dashboard.js"></script>
		<script src="js/apexcharts.js"></script>
	</body>
</html>