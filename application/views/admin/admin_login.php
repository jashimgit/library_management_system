<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Library Management</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.css') ?>">

    <script src="<?php echo base_url('assets/lib/jquery-1.11.1.min.js') ?>" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/theme.css') ?>" />
</head>

<body class=" theme-blue">

    <div class="navbar navbar-default loginnav">
        Library Management
    </div>

    <div class="dialog loginform">
        <div class="panel panel-default">
            <p class="panel-heading no-collapse">Sign In</p>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php  }    ?>
            <div class="panel-body">
                <form action="admin-login" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control span12" name="user_email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control span12 form-control" name="user_password">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>

    <div class="footenote">
        <h2>Training with live project</h2>
    </div>
</body>

</html>