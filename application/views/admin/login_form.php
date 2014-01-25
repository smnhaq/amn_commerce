<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Panel</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/admin_lib/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_css/theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>lib/admin_lib/font-awesome/css/font-awesome.css">

        <script src="<?php echo base_url(); ?>lib/admin_lib/jquery-1.7.2.min.js" type="text/javascript"></script>

        <style type="text/css">
            #line-chart {
                height:300px;
                width:800px;
                margin: 0px auto;
                margin-top: 1em;
            }
            .brand { font-family: georgia, serif; }
            .brand .first {
                color: #ccc;
                font-style: italic;
            }
            .brand .second {
                color: #fff;
                font-weight: bold;
            }
        </style>

    </head>

    <body class=""> 


        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav pull-right">

                </ul>
                <a class="brand" href="index.html"><span class="first">AMN</span> <span class="second">commerce</span></a>
            </div>
        </div>



        <div class="row-fluid">
            <div class="dialog">
                <div class="block">
                    <p class="block-heading">Sign In</p>
                    <div class="block-body">

                        <h5 style="color:red;">
                            <?php
                            $exception = $this->session->userdata('exception');
                            if (isset($exception)) {
                                echo $exception;
                                $this->session->unset_userdata('exception');
                            }
                            ?>

                        </h5>
                        <h5 style="color:green;">
                            <?php
                            $message = $this->session->userdata('message');
                            if (isset($message)) {
                                echo $message;
                                $this->session->unset_userdata('message');
                            }
                            ?>

                        </h5>
                        <form method="post" action="<?php echo base_url(); ?>admin_login/check_login">
                            <label>Email</label>
                            <input type="text" name="admin_email_address" value="" placeholder="Email" class="span12">
                            <label>Password</label>
                            <input type="password" name="admin_password" value="" placeholder="Password" class="span12">
                            <input type="submit" name="commit" value="Login" class="btn btn-primary pull-right">
                            <label class="remember-me"><input type="checkbox"> Remember me</label>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>

                <p><a href="reset-password.html">Forgot your password?</a></p>
            </div>
        </div>



        <script src="<?php echo base_url(); ?>lib/admin_lib/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
            $("[rel=tooltip]").tooltip();
            $(function() {
                $('.demo-cancel-click').click(function() {
                    return false;
                });
            });
        </script>

    </body>
</html>


