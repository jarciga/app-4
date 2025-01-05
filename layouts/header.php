<?php
/**
 * Created by AnchetaCorp.
 * User: steve
 * Date: 7/11/2017
 * Time: 10:15 AM
*/

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artecy Employee Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--datetime picker -->
    <link href="css/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- datatable -->
    <link href="css/datatable/jquery.dataTables.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/datetimepicker/moment.js"></script>
	
	<link href="css/flashloader.css" rel="stylesheet">
	
<!-- toast -->

 <link href="css/jquery.toast.css" rel="stylesheet">

    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }


    </style>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation"
         style="margin-bottom: 0;background-color:#0a840d !important;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php" style="color:#fff !important;">Artecy EMS</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
		<li>
				<a href="home.php" style="color:white !important;"><i class="fa fa-users fa-fw"></i> Employees</a>
				
			</li>
			<?php  if($_SESSION['admin']=="1"){?>
				<li>
				<a href="users.php" style="color:white !important;"><i class="fa fa-user fa-fw"></i> Users</a>
				</li>
				<?php }?>
			
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff !important;">
                  <?php if( isset($_SESSION['data']))echo $_SESSION['data']; ?>   <i class="fa fa-user fa-fw"></i>&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="change.php"><i class="fa fa-sign-out fa-fw"></i> Change Password</a>
                    <li class="divider"></li>
                    <li><a href="destroy.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
			
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        
        <!-- /.navbar-static-side -->
    </nav>
	