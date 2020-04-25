


<html>
    <head>
<link href="dashboard.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
        
         <script src="js/bootstrap.min.js"></script>
    
        <script src="unit.js"></script>
        <style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
        
        </head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CD Bus Company</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="li.php">
              <span data-feather="file"></span>
             Bus road
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="work.php">
              <span data-feather="shopping-cart"></span>
              Bus orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer.php">
              <span data-feather="users"></span>
              Othe
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inter.php">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="report.php">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="month.php">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quarter.php">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="social.php">
              <span data-feather="file-text"></span>
              Employee information
            </a>
          </li>
          <li class="nav-item">
              <?php
          $date = date("Y",strtotime("-1 years"));
             echo" <a class='nav-link' href='$date.php'> ";
            ?> 
              <span data-feather="file-text"></span>
                Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
        
     <div class="row">

          
          <canvas id="pie-graph"></canvas>
         
        </div>  
     
   
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    

    <script src="analysis.js"></script>
    
  </body>
</html>
