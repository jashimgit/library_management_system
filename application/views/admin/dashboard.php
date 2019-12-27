<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Library Management</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Fonts api  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- BootStrap css and Font Awesome css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.css') ?>">
    <!-- jQuery  -->
    <script src="<?php echo base_url('assets/lib/jquery-1.11.1.min.js') ?>" type="text/javascript"></script>
    <!-- Data Tables  -->
    <script src="<?php echo base_url('assets/DataTable/jquery.dataTables.js') ?>" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTable/jquery.dataTables.css') ?>" />
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/theme.css') ?>" />
</head>

<body class=" theme-blue">

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header custommenu">
            <a href="<?php echo 'admin'; ?>"></a><?php echo $title; ?>
        </div>

        <div class="navbar-collapse collapse" style="height: 1px;">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>User
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="./">My Account</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Admin Panel</li>
                        <li><a href="./">Users</a></li>
                        <li><a tabindex="-1" href="<?php echo 'admin-logout'; ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    </div>


    <div class="sidebar-nav">
        <ul>
            <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i>Dashboard<i class="fa fa-collapse"></i></a>
            </li>
            <li>
                <ul class="dashboard-menu nav nav-list collapse in">
                    <li><a href="add-student"><span class="fa fa-caret-right"></span>Add Student</a></li>
                    <li><a href="studentlist.html"><span class="fa fa-caret-right"></span>Student List</a></li>

                    <li><a href="add-department"><span class="fa fa-caret-right"></span>Add Department</a></li>
                    <li><a href="dep-list"><span class="fa fa-caret-right"></span>Department List</a></li>

                    <li><a href="add-author"><span class="fa fa-caret-right"></span>Add Author</a></li>
                    <li><a href="author-list"><span class="fa fa-caret-right"></span>Author List</a></li>

                    <li><a href="add-book"><span class="fa fa-caret-right"></span>Add Book</a></li>
                    <li><a href="book-list"><span class="fa fa-caret-right"></span>Book List</a></li>

                    <li><a href="issuebook.html"><span class="fa fa-caret-right"></span>Issue Book</a></li>
                    <li><a href="listed.html"><span class="fa fa-caret-right"></span>Edit List</a></li>

                </ul>
            </li>
        </ul>

    </div>

    <div class="content">
        <div class="main-content">


            <?php echo $content; ?>


            <div style="clear:both;" />
        </div>
    </div>
    <footer class="footoption">
        <p>&copy; <a href="http://www.trainingwithliveproject.com/" target="_blank">Training with live project</a></p>
    </footer>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>