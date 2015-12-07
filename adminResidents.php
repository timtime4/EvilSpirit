<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHSB Ticket Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Campus Housing SB</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="adminAnalytics.html">Logout
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Welcome, Jeff</h1>
                <ol class="breadcrumb">
                    <li >Home</li>
                    <li class=active ><a href="adminResidents.html">Residents</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
        <!-- /.row -->

        <!-- Content Row -->
        <nav class="navbar-default sidebar" role="navigation">
            <!-- adminAnalytics Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="adminAnalytics.html" class="list-group-item">Analytics</a>
                    <li class="dropdown list-unstyled">
                        <a href="maintenanceSubWorkOrders.html" class="list-group-item dropdown-toggle" data-toggle="dropdown">Work Orders<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="maintenanceSubWorkOrders.html">View Submitted Work Orders</a>
                                </li>
                                <li>
                                    <a href="maintenanceWaitWorkOrders.html">View Waiting Work Orders</a>
                                </li>
                                <li>
                                    <a href="maintenanceClosedWorkOrders.html">View Closed Work Orders</a>
                                </li>
                                <li>
                                    <a href="createWorkOrder.html">Create Work Order</a>
                                </li>
                            </ul>
                            </li>
                        </a>
                    </li>
                    <li class="dropdown list-unstyled">
                        <a href="adminHouses.html" class="list-group-item dropdown-toggle" data-toggle="dropdown">Houses <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="adminHouses.html">View Houses</a>
                                </li>
                                <li>
                                    <a href="adminHouses.html">Add A House</a>
                                </li>
                                <li>
                                    <a href="adminHouses.html">Remove A House</a>
                                </li>
                                <li>
                                    <a href="adminHouses.html">Update A House</a>
                                </li>
                            </ul>
                            </li>
                        </a>
                    </li>
                    <li class="dropdown list-unstyled">
                        <a href="adminResidents.html" class="list-group-item dropdown-toggle active" data-toggle="dropdown">Residents <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="adminResidents.html">View Residents</a>
                                </li>
                                <li>
                                    <a href="adminResidents.html">Add A Resident</a>
                                </li>
                                <li>
                                    <a href="adminResidents.html">Remove A Resident</a>
                                </li>
                                <li>
                                    <a href="adminResidents.html">Update A Resident</a>
                                </li>
                            </ul>
                            </li>
                        </a>
                    </li>
                    <a href="adminUtility.html" class="list-group-item">Utility Info</a>
                    <a href="adminAnalytics.html" class="list-group-item">Print Lease Template</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="col-md-3 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>



        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
