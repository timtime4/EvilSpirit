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
                <h1 class="page-header">Welcome, Rodney</h1>
                <ol class="breadcrumb">
                    <li >Home</li>
                    <li class=active ><a href="maintenanceSubWorkOrders.html">Work Orders</a>
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
                    <li class="dropdown list-unstyled">
                        <a href="maintenanceSubWorkOrders.html" class="list-group-item dropdown-toggle active" data-toggle="dropdown">Work Orders<b class="caret"></b></a>
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
                            </ul>
                            </li>
                        </a>
                    </li>
                    <a href="maintenanceSubWorkOrders.html" class="list-group-item">Houses</a>
                    <a href="maintenanceSubWorkOrders.html" class="list-group-item">Utility Info</a>
                    <a href="maintenanceSubWorkOrders.html" class="list-group-item">Campus Housing Information</a>
                </div>
            </div>
        </nav>

<div class="container">

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-9">
                <h3 class="page-header">Waiting Work Orders</h3>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Address and category 1</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Full Address, Category, Description, and all info, maybe map api
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Address and category 2</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Full Address, Category, Description, and all info, maybe map api
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Address and category 3</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Full Address, Category, Description, and all info, maybe map api
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
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