<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kharna-Admin Dashboard</title>

		<!--favicon -->
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

	</head>

	<body class="app ">

		<div id="spinner"></div>

		<div id="app">
			<div class="main-wrapper" >
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index.html">
						<img src="img/logo.png" class="header-brand-img" alt="Kharna-Admin  logo">
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
										<img alt="image" src="img/head2.jpg" class="rounded-circle dropdown-item-img">
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
										<img alt="image" src="img/head3.jpg" class="rounded-circle dropdown-item-img">
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
										<img alt="image" src="img/head4.jpg" class="rounded-circle dropdown-item-img">
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
										<img alt="image" src="img/head5.jpg" class="rounded-circle dropdown-item-img">
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
							<a class="side-menu__item" href="index.html"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Overall</span></a>
						</li>
                        <li>
							<a class="side-menu__item" href="calendar.php"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Calendar</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">Products</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
                                 <li><a href="ticket-list.php" class="slide-item"> Ticket List</a></li>
								<li><a href="food-list.php" class="slide-item"> Food List</a></li>
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                        </ol>

						<div class="section-body">
							<div class="row">
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="dash2 text-center">
												<div class="mb-0 ">
													<input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="45" data-width="120" data-height="120" data-fgColor="#f47b25">
												</div>
												<div class="">
													<small class="float-left text-muted">Orders</small>
													<h3 class="float-right mb-0">5678</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body ">
											<div class="dash2 text-center">
												<div class="mb-0">
													<input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="63" data-width="120" data-height="120" data-fgColor="#5d61bf">
												</div>

												<div class="">
													<small class="float-left text-muted">Avg Price</small>
													<h3 class="float-right mb-0">$786</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body ">
											<div class="dash2 text-center">
												<div class="mb-0 ">
													<input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value ="57" data-width="120" data-height="120" data-fgColor="#3ebaef"/>
												</div>
												<div class="">
													<small class="float-left text-muted">Product Sold</small>
													<h3 class="float-right mb-0">987</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body ">
											<div class="dash2 text-center">
												<div class="mb-0 ">
													<input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="78" data-width="120" data-height="120" data-fgColor="#31c92e">
												</div>
												<div class="">
													<small class="float-left text-muted">Revenue</small>
													<h3 class="float-right mb-0">$2,765</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="dash1">
														<h4>675</h4>
														<small class="text-muted">Posts</small>
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
														<h4>875</h4>
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
														<h4>976</h4>
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
														<h4>418</h4>
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

							<div class="row">
								<div class="col-lg-3 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="widget text-center">
												<small class="text-muted">Invoice</small>
												<h2 class="">$834</h2>
												<p class="mb-0"><span class="text-success"><i class="fa fa-chevron-circle-up text-success ml-1"></i> 3%</span>  last month</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="widget text-center">
												<small class="text-muted">Profits</small>
												<h2 class="">$68</h2>
												<p class="mb-0"><span class="text-danger"><i class="fa fa-chevron-circle-down text-danger ml-1"></i> 2%</span> last month</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="widget text-center">
												<small class="text-muted">Sales</small>
												<h2 class="">295</h2>
												<p class="mb-0"><span class="text-success"><i class="fa fa-chevron-circle-up text-success ml-1"></i> 5%</span> last month</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="widget text-center">
												<small class="text-muted">Expenses</small>
												<h2 class="">$851</h2>
												<p class="mb-0"><span class="text-danger"><i class="fa fa-chevron-circle-down text-danger ml-1"></i> 4%</span> last month</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
									<div class="card">
										<div class="card-body knob-chart">
											<div class="row mb-0">
												<div class="col-6">
													<div class="card-icon">
														<input type="text" class="knob" value="33" data-thickness="0.2" data-width="80" data-height="80" data-fgColor="#31c92e">
													</div>
												</div>
												<div class="col-6">
													<div class="dash3 text-center">
														<small class="text-muted mt-0">Members</small>
														<h2 class="text-dark mb-0">612</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
									<div class="card">
										<div class="card-body knob-chart">
											<div class="row mb-0">
												<div class="col-6">
													<div class="card-icon">
														<input type="text" class="knob" value="85" data-thickness="0.2" data-width="80" data-height="80" data-fgColor="#5d61bf">
													</div>
												</div>
												<div class="col-6">
													<div class="dash3 text-center">
														<small class="text-muted mt-0">Sales</small>
														<h2 class="text-dark mb-0">458</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
									<div class="card">
										<div class="card-body knob-chart">
											<div class="row mb-0">
												<div class="col-6">
													<div class="card-icon">
														<input type="text" class="knob" value="74" data-thickness="0.2" data-width="80" data-height="80" data-fgColor="#3ebaef">
													</div>
												</div>
												<div class="col-6">
													<div class="dash3 text-center">
														<small class="text-muted mt-0">Profits</small>
														<h2 class="text-dark mb-0">$152</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
									<div class="card">
										<div class="card-body knob-chart">
											<div class="row mb-0">
												<div class="col-6">
													<div class="card-icon">
														<input type="text" class="knob" value="45" data-thickness="0.2" data-width="80" data-height="80" data-fgColor="#f47b25">
													</div>
												</div>
												<div class="col-6">
													<div class="dash3 text-center">
														<small class="text-muted mt-0">Tax</small>
														<h2 class="text-dark mb-0">$876</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="text-center">
												<span class="text-muted">Earnings</span>
												<h4 class="mt-1">$8,976</h4>
												<div class="card-progressbar mb-0 mt-4">
													<div class="progress h-6">
													  <div class="progress-bar bg-success w-80" role="progressbar" ></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="text-center">
												<span class="text-muted">Visitors</span>
												<h4 class="mt-1">2,345</h4>
												<div class="card-progressbar mb-0 mt-4">
													<div class="progress h-6" style="height: 6px;">
													  <div class="progress-bar bg-primary w-60" role="progressbar"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class="text-center">
												<span class="text-muted">New Clients</span>
												<h4 class="mt-1">1,754</h4>
												<div class="card-progressbar mb-0 mt-4">
													<div class="progress h-6">
													  <div class="progress-bar bg-orange w-70" role="progressbar"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card">
										<div class="card-body">
											<div class=" text-center">
												<span class="text-muted">Views</span>
												<h4 class="mt-1">567</h4>
												<div class="card-progressbar mt-4 mb-0">
													<div class="progress h-6">
													  <div class="progress-bar bg-cyan w-60" role="progressbar"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card overflow-hidden">
										<div class="card-body text-center">
											<div class="">
												<span class="float-left text-muted">Orders</span>
												<h3 class="float-right mb-0">5678</h3>
											</div>
										</div>
										<div class="sparkline" data-type="bar" data-width="100%" data-height="60px" data-bar-Width="10" data-bar-Spacing="7" data-bar-Color="#f47b25">
											12,6,4, 10, 14, 9, 13, 18, 21, 7, 10 , 13, 18, 21, 7
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card overflow-hidden">
										<div class="card-body text-center">
											<div class="">
												<span class="float-left text-muted">Avg Price</span>
												<h3 class="float-right mb-0">$786</h3>

											</div>
										</div>
										<div class="sparkline" data-type="bar" data-width="100%" data-height="60px" data-bar-Width="10" data-bar-Spacing="7" data-bar-Color="#5d61bf">
											15, 17, 16, 11, 12, 15, 10, 19, 16, 13, 12, 15, 17, 16, 11
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card overflow-hidden">
										<div class="card-body text-center">
											<div class="">
												<span class="float-left text-muted">Product Sold</span>
												<h3 class="float-right mb-0">987</h3>

											</div>
										</div>
										<div class="sparkline" data-type="bar" data-width="100%" data-height="60px" data-bar-Width="10" data-bar-Spacing="7" data-bar-Color="#3ebaef">
											16, 13, 15, 14, 16, 17, 18, 19, 20, 21, 20, 16, 13, 15, 14
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card overflow-hidden">
										<div class="card-body text-center">
											<div class="">
												<span class="float-left text-muted">Revenue</span>
												<h3 class="float-right mb-0">$12,765</h3>
											</div>
										</div>
										<div class="sparkline" data-type="bar" data-width="100%" data-height="60px" data-bar-Width="10" data-bar-Spacing="7" data-bar-Color="#31c92e">
											19, 18, 16, 14, 12, 10, 11, 13, 15, 17,20, 19, 18, 16, 14
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-cyan text-white ">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-people-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Members</span>
														<h2 class="text-white mb-0">600</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-primary text-white">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-pie-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Sales</span>
														<h2 class="text-white mb-0">854</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-orange text-white">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-people-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Profits</span>
														<h2 class="text-white mb-0">98K</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-success text-white">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-people-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Taxes</span>
														<h2 class="text-white mb-0">876</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body box">
											<div class="img">
												<img src="img/head.jpg" alt="">
											</div>
											<h2>Jessica Lee<br><span>CBC Manager</span></h2>
											<p class="mb-3"> Strong executive ability and decision-making ability, and have rich management experience.</p>

											<ul class="icons">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body box">
											<div class="img">
												<img src="img/head2.jpg" alt="">
											</div>
											<h2>James	Berry<br><span>Graphic Developer</span></h2>
											<p  class="mb-3"> Graphic designers are visual communicators, who create visual concepts by hand or by using computer software.</p>

											<ul class="icons">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body box">
											<div class="img">
												<img src="img/head3.jpg" alt="">
											</div>
											<h2>Angela	Allan<br><span>Accountant</span></h2>
											<p  class="mb-3"> The primary task of accountants, which extends to all the others, is to prepare and examine financial records. Accountants perform overviews of the financial operations of a business in order to help it run efficiently.</p>

											<ul class="icons">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-primary">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-primary">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-secondary">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-secondary">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-success">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-success">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-danger">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-danger">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-warning">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-warning">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-info">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-info">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
									<div class="card card-dark">
										<div class="card-header">
											<h4>Card Title</h4>
										</div>
										<div class="card-body text-dark">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
										</div>
										<div class="card-footer">
											Card footer
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-sm-6 col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="float-right">
												<a data-collapse="#mycard-collapse" class="btn btn-icon"><i class="ion ion-minus"></i></a>
											</div>
											<h4>Show/Hide</h4>
										</div>
										<div class="collapse show" id="mycard-collapse">
											<div class="card-body">
												Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</div>
											<div class="card-footer">
												Card Footer
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-6">
									<div class="card" id="mycard-dimiss">
										<div class="card-header">
											<div class="float-right">
												<a data-dismiss="#mycard-dimiss" class="btn btn-icon"><i class="ion ion-close"></i></a>
											</div>
											<h4>Dismiss</h4>
										</div>
										<div class="card-body">
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</div>
										<div class="card-footer">
											Card Footer
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 col-md-12 col-12 col-sm-12">
									<div class="card">
										<div class="img-container">
											<img src="assets/img/news/img01.jpg" alt="">
											<div class="overlay text-center">
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-12 col-sm-12">
									<div class="card">
										<div class="img-container">
											<img src="assets/img/news/img02.jpg" alt="">
											<div class="overlay text-center">
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-12 col-sm-12">
									<div class="card">
										<div class="img-container">
											<img src="assets/img/news/img07.jpg" alt="">
											<div class="overlay text-center">
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="#" class="btn btn-primary">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-xl-4  col-12">
									<div class="card">
										<div class="card-header">
											<h4>Visitors List</h4>
										</div>
										<div class="card-body">
											<ul class="visitor list-unstyled list-unstyled-border">
												<li class="media">
													<img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-6.jpg" alt="avatar">
													<div class="media-body">
														<div class="float-right"><small>10-9-2018</small></div>
														<div class="media-title">Blake Vanessa</div>
														<small>sed do eiusmod tempor incididunt ut labore</small>
													</div>
												</li>
												<li class="media">
													<img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.jpeg.jpg" alt="avatar">
													<div class="media-body">
														<div class="float-right"><small>15-9-2018</small></div>
														<div class="media-title">Keith Rutherford</div>
														<small>sed do eiusmod tempor incididunt ut labore</small>
													</div>
												</li>
												<li class="media">
													<img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.jpeg.jpg" alt="avatar">
													<div class="media-body">
														<div class="float-right"><small>17-9-2018</small></div>
														<div class="media-title">Elizabeth Parsons</div>
														<small>sed do eiusmod tempor incididunt ut labore</small>
													</div>
												</li>
												<li class="media border-b0 mb-0 pb-0">
													<img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.jpeg.jpg" alt="avatar">
													<div class="media-body">
														<div class="float-right"><small>22-9-2018</small></div>
														<div class="media-title">Nicola Lambert</div>
														<small>sed do eiusmod tempor incididunt ut labore</small>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-4  col-12">
									<div class="card">
										<div class="card-header">
											<h4>Browsing Status</h4>
										</div>
										<div class="card-body">
											<div class="clearfix">
												<span class="float-left">Chrome</span>
												<small class="float-right">80%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" >
													<div class="progress-bar bg-cyan w-80" role="progressbar" ></div>
												</div>
											</div>
											<div class="clearfix mt-3">
												<span class="float-left">Firefox</span>
												<small class="float-right">70%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" >
													<div class="progress-bar bg-primary w-70" role="progressbar"></div>
												</div>
											</div>
											<div class="clearfix mt-3">
												<span class="float-left"> Safari</span>
												<small class="float-right">30%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" >
													<div class="progress-bar bg-orange w-30" role="progressbar"></div>
												</div>
											</div>
											<div class="clearfix mt-3">
												<span class="float-left">Opera</span>
												<small class="float-right">30%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" style="height:14px;">
													<div class="progress-bar bg-success w-30" role="progressbar"></div>
												</div>
											</div>
											<div class="clearfix mt-3">
												<span class="float-left">Microsoft Edge</span>
												<small class="float-right">40%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" >
													<div class="progress-bar bg-info w-40" role="progressbar"></div>
												</div>
											</div>
											<div class="clearfix mt-3">
												<span class="float-left">Internet Explore</span>
												<small class="float-right">60%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" >
													<div class="progress-bar bg-danger w-60" role="progressbar"></div>
												</div>
											</div>
											<div class="clearfix mt-3 ">
												<span class="float-left">Tor Browser</span>
												<small class="float-right">50%</small>
											</div>
											<div class="card-progressbar">
												<div class="progress h-14" >
													<div class="progress-bar bg-pink w-50" role="progressbar"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-4  col-12">
									<div class="card">
										<div class="card-header">
											<h4>Message Activity</h4>
										</div>
										<div class="card-body">
											<div class="direct-chat-messages">
												<div class="direct-chat-msg">
													<div class="direct-chat-info clearfix">
														<span class="direct-chat-name float-left">Jessica Lee</span>
														<span class="direct-chat-timestamp float-right">19 Sep 7:40 Am</span>
													</div>
													<img class="direct-chat-img" src="assets/img/avatar/avatar-1.jpeg.jpg"  alt="message user image">
													<div class="direct-chat-text">
														Hello. How are you today?
													</div>
												</div>

												<div class="direct-chat-msg right">
													<div class="direct-chat-info clearfix">
														<span class="direct-chat-name float-right">Nathan	Roberts</span>
														<span class="direct-chat-timestamp float-left">19 Sep 8:05 Am</span>
													</div>
													<img class="direct-chat-img" src="assets/img/avatar/avatar-2.jpeg.jpg"  alt="message user image">
													<div class="direct-chat-text">
														Hey! I'm fine. Thanks for asking!
													</div>
												</div>
												<div class="direct-chat-msg">
													<div class="direct-chat-info clearfix">
														<span class="direct-chat-name float-left">Jessica Lee</span>
														<span class="direct-chat-timestamp float-right">19 Sep 8:15 Am</span>
													</div>
													<img class="direct-chat-img" src="assets/img/avatar/avatar-1.jpeg.jpg"  alt="message user image">
													<div class="direct-chat-text">
														Sweet! So, what do you wanna do today?
													</div>
												</div>
												<div class="direct-chat-msg right mb-0">
													<div class="direct-chat-info clearfix">
														<span class="direct-chat-name float-right">Nathan	Roberts</span>
														<span class="direct-chat-timestamp float-left">19 Sep 8:20 Am</span>
													</div>
													<img class="direct-chat-img" src="assets/img/avatar/avatar-2.jpeg.jpg"  alt="message user image">
													<div class="direct-chat-text">
														Nah, I dunno.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>
				</div>
			</div>
		</div>

		<!--Jquery.min js-->
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="js/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="js/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="js/sidemenu.js"></script>

		<!--mCustomScrollbar js-->
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Jquery.knob js-->
		<script src="js/jquery.knob.js"></script>

		<!--Jquery.sparkline.min js-->
		<script src="js/jquery.sparkline.min.js"></script>
		<script src="js/othercharts.js"></script>

		<!--Scripts js-->
		<script src="js/scripts.js"></script>
		<script src="js/dataclick.js"></script>
		<script src="js/widgets.js"></script>
		<script src="js/apexcharts.js"></script>

	</body>
</html>