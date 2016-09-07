<?php
require_once('auth.php');
?>



<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login</title>



    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>

</head>

<body>

<div id="wrapper">

<!--Nav Top -->
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Admin Panel</a>
    </div>


    <div class="header-right">

        <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
        <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
        <!-- <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a> -->
        <a href="index.php">logout</a></p>

    </div>
</nav>
<!-- /. NAV TOP  -->





<!--Nav Side Bar -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="img/2.jpg" class="img-thumbnail" />

                    <div class="inner-text">
                        Nadee Sansari
                        <br />
                        <small>online</small>
                    </div>
                </div>

            </li>



            <li>
                <a class="active-menu" href="home.php" ><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>




            <li>
                <a href="#"><i class="fa fa-desktop "></i>User Details <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="adminDetails.php"><i class="fa fa-toggle-on"></i>Admin Details</a>
                    </li>
                    <li>
                        <a href="researchersDetails.php"><i class="fa fa-bell "></i>Researchers Details</a>
                    </li>
                    <li>
                        <a href="publicDetails.php"><i class="fa fa-circle-o "></i>Public Viewers Details</a>
                    </li>


                </ul>
            </li>





            <li>
                <a href="#"><i class="fa fa-yelp "></i>Reaserch Details <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="listOfResearch.php"><i class="fa fa-coffee"></i>list of Research</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-flash "></i>More details of Research</a>
                    </li>
                    <li>
                        <a href="component.html"><i class="fa fa-key "></i>Components</a>
                    </li>
                    <li>
                        <a href="researchDetails.php"><i class="fa fa-send "></i>Add New Research Details</a>
                    </li>




                </ul>
            </li>




            <li>
                <a href="table.html"><i class="fa fa-flash "></i>Thread Details </a>

            </li>




            <li>
                <a href="#"><i class="fa fa-bicycle "></i>Login Forms <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="form.html"><i class="fa fa-desktop "></i>Basic Login Form</a>
                    </li>
                    <li>
                        <a href="newAccountt.php"><i class="fa fa-code "></i>Create New Account Form</a>
                    </li>


                </ul>
            </li>





            <li>
                <a href="gallery.html"><i class="fa fa-anchor "></i>Insert Info Forms</a>
            </li>


            <li>
                <a href="error.html"><i class="fa fa-bug "></i>Map Details</a>
            </li>


            <li>
                <a href="login.html"><i class="fa fa-sign-in "></i>Test 1</a>
            </li>




            <li>
                <a href="blank.html"><i class="fa fa-square-o "></i>Test 2</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->






<div id="page-wrapper">
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" style="color: #500a6f">DASHBOARD</h1>
        <h1 class="page-subhead-line">This site is use only Administer of web site,otherwise ..........</h1>

    </div>
</div>
<!-- /. ROW  -->




<div class="row">
    <div class="col-md-4">
        <div class="main-box mb-red">
            <a href="#">
                <i class="fa fa-bolt fa-5x"></i>
                <h5> 230 different type of bats</h5>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-box mb-dull">
            <a href="#">
                <i class="fa fa-plug fa-5x"></i>
                <h5>3 Admin</h5>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-box mb-pink">
            <a href="#">
                <i class="fa fa-dollar fa-5x"></i>
                <h5>20 Researchers</h5>
            </a>
        </div>
    </div>

</div>
<!-- /. ROW  -->






<div class="row">
    <div class="col-md-12">
        


            </div>

        </div>
        <!-- /. ROW  -->











<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</div>





</body>
</html>