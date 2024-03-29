<?php
$user = 'root';
$password = '';
$database = 'hms';
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
$sql = "SELECT * FROM patient_data ORDER BY ap_date ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">


<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="one.css">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<head>
    <title>SRM HOSPITAL:Patient Portal</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm nav-dark fixed-top">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="#"><img src="img/logo.png" height="50" width="60"
                alt="SRM HOSPITAL"></a>
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span>
                        Home</a></li>
                <li class="nav-item"> <a class="nav-link" href="aboutus.html"><span class="fa fa-info fa-lg"></span>
                        About</a></li>
                <li class="nav-item"> <a class="nav-link" href="menu.html"><span class="fa fa-list fa-lg"></span> Menu</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="contactus.html"><span
                            class="fa fa-address-book fa-lg"></span> Contact</a></li>
            </ul>
            <span class="navbar-text login-mo">
                <a id="logmod" href="index.html">
                    <span class="fa fa-sign-in"></span> Log Out

                </a>
            </span>
        </div>
    </div>

</nav>
<header class="jumbotron">
    <div class="container">
        <div class="row row-header">
            <div class="col-12 col-sm-10">
                <h1>SRM HOSPITAL</h1>
             
                <h6>Below is the full patient details and status </h6>
            </div>
            <div class="col-12 col-sm align-self-center">
                <img src="img/logo.png" class="img-fluid">
            </div>
        </div>
    </div>
</header>



<div class=" row row-content ">
    <div class="offset-1 col-12 offset-sm-2 col-sm-9">
        <h2>Details &amp; Status</h2>
        <div class="table-responsive">
            <section>
                <table  style="  border-left: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    padding: 10px;" class="table table-striped ">
                    <tr class="table-primary">
                        <th>Patient Name</th>
                        <th>Patient Gender</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
    
                    <?php
                        while($rows=$result->fetch_assoc())
                        {
                     ?>
    
                    <tr>
                        <td class="table-success"><?php echo $rows['patient_name'] ;?></td>
                        <td class="table-warning"><?php echo $rows['patient_gender'];?></td>
                        <td class="table-danger"><?php echo $rows['ap_date'];?></td>
                        <td class="table-info"><?php echo $rows['ap_time'];?></td>
                    </tr>
    
                    <?php
                        }
                     ?>
                </table>
            </section>  
        </div>
    </div>
    <div class="col-21 col-sm-3"></div>
</div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="contactus.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-5">
                <h5>Our Address</h5>
                <address>
                  SRM  UNIVERSITY<br>
                  KATTANKULATHUR,TAMIL NADU<br>
                  INDIA<br>
                  <span class="fa fa-phone fa-md"></span>: +123 456 7890<br>
                  <span class="fa fa-fax fa-md">: +098 765 4321<br>
                    <span class="fa fa-envelope fa-md">: <a href="mailto:srmhospital@srm.com">srmhospital@srm.com</a>
               </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center">
                <div class="text-center">
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><span class="fa fa-google-plus fa-lg"></span></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><span class="fa fa-facebook fa-lg"></span></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><span class="fa fa-linkedin fa-lg"></span></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><span class="fa fa-twitter fa-lg"></span></a>
                    <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><span class="fa fa-youtube fa-lg"></span></a>
                    <a class="btn btn-social-icon" href="mailto:"><span class="fa fa-envelope-o fa-lg"></span></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <p>© Copyright 2021 SRM HOSPITAL</p>
            </div>
        </div>
    </div>
</footer>

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>