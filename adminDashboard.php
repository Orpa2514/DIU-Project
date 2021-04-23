<?php 
include 'db.php';
include 'action.php';
session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		session_destroy();
		header('location: adminDashboard.php');
		}
 ?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="images/diuIcon.png" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin Dashboard</title>

<!---chart start here --->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Africa', 'Asia'],
          ['2018',  1000,      400],
          ['2019',  1170,      460],
          ['2020',  660,       1120],
          ['2021',  1030,      660]
        ]);

        var options = {
          title: 'Web Users',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#ffff99'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<!---chart End here --->

  </head>
  <body>

<header class="sticky-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <a class="navbar-brand" href="#">
        <img class="logo" src="images/diuIcon.png " height="40" width="40">
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 m-auto">
            <li class="nav-item active">
                <a class="nav-link mr-3" href="adminDashboard.php">Home</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="notes.php">Notices</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="adminUser.php">Admin</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="index.php">chatroom</a>
            </li>

        
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="studentUser.php">Student</a>
            </li>


            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="adminlogout.php">Log out

                </a>
            </li>
        </ul>

</nav>

</header>

<br>
<div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <div class="card card-primary bg-info mb-1 text-white text-center mb-5 shadow-lg">
                    <div class="card-block">
                        <div></div>
                        <h3 class="mt-2">Admin Account</h3>
                        <h1 class="display-4"><i class="fas fa-users-cog text-warning"></i></h1>
                        <h1 class="display-5"><?php

                            $sql = mysqli_query($con, "SELECT * FROM  admin_account ORDER BY id DESC LIMIT 1");
                            $print_data = mysqli_fetch_array($sql);
                            echo $print_data[0];
                            ?>
                        </h1>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="card card-primary bg-info mb-1 text-white text-center mb-5 shadow-lg">
                    <div class="card-block">
                        <div></div>
                        <h3 class="mt-2">student Accounts</h3>
                        <h1 class="display-4"><i class="fas fa-chalkboard-teacher text-warning"></i></h1>
                        <h1 class="display-5"><?php

                            $sql = mysqli_query($con, "SELECT * FROM  user ORDER BY id DESC LIMIT 1");
                            $print_data = mysqli_fetch_array($sql);
                            echo $print_data[0];
                            ?>
                        </h1>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="card card-primary bg-info mb-1 text-white text-center mb-5 shadow-lg">
                    <div class="card-block">
                        <div></div>
                        <h3 class="mt-2">Notices</h3>
                        <h1 class="display-4"><i class="fas fa-exclamation-circle text-warning"></i></h1>
                        <h1 class="display-5"><?php

                            $sql = mysqli_query($con, "SELECT * FROM  notices ORDER BY id DESC LIMIT 1");
                            $print_data = mysqli_fetch_array($sql);
                            echo $print_data[0];
                            ?>
                        </h1>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="card card-primary bg-info mb-1 text-white text-center mb-5 shadow-lg">
                    <div class="card-block">
                        <div></div>
                        <h3 class="mt-2">New Student </h3>
                        <h1 class="display-4"><i class="fas fa-users-cog text-warning"></i></h1>
                        <h1 class="display-5"><?php

                            $sql = mysqli_query($con, "SELECT * FROM   newstudents ORDER BY id DESC LIMIT 1");
                            $print_data = mysqli_fetch_array($sql);
                            echo $print_data[0];
                            ?>
                        </h1>
                    </div>
                </div>

            </div>


        </div>
</div>

<!---------Start chart----------->
<div  id="chart_div" style="width: 100%; height: 500px;">

</div>
<!---------End chart----------->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->


    <div class="card bg-warning text-center  ">

    <div class="card-footer text-white">
        <p class="lead"> All Rights Reserved @ Nucmaan Abdihakiin  & Ayesha Rahman Orpa</p>
    </div>
</div>
  </body>
</html>