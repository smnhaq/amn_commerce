<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/admin_lib/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_css/theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>lib/admin_lib/font-awesome/css/font-awesome.css">

        <script src="<?php echo base_url(); ?>lib/admin_lib/jquery-1.7.2.min.js" type="text/javascript"></script>

        <script type="text/javascript">
         function check_delete() {
                var chk = confirm("Are you sure to delete this user?")
                if (chk) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

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

                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $this->session->userdata('admin_name'); ?> 
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>super_admin/logout.html">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <a class="brand" href="index.html"><span class="first">ASA</span> <span class="second">University</span></a>
            </div>
        </div>




        <div class="sidebar-nav">
            <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li><a href="<?php echo base_url();?>super_admin.html">Home</a></li>
                <li><a href="<?php echo base_url();?>super_admin/view_category">Category Managenet</a></li>
                <li><a href="<?php echo base_url();?>super_admin/view_product">Product Management</a></li>
                <li><a href="#">Test Page 3</a></li>

            </ul>

            <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Save / Update Pages<span class="label label-info">+3</span></a>
            <ul id="accounts-menu" class="nav nav-list collapse">
                <li ><a href="#">Test Page 1</a></li>
                <li ><a href="#">Test Page 2</a></li>
                <li ><a href="#">Test Page 3</a></li>    
            </ul>

            <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Error Pages <i class="icon-chevron-up"></i></a>
            <ul id="error-menu" class="nav nav-list collapse">
                <li ><a href="403.html">403 page</a></li>
                <li ><a href="404.html">404 page</a></li>
                <li ><a href="500.html">500 page</a></li>
                <li ><a href="503.html">503 page</a></li>
            </ul>

            <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Legal</a>
            <ul id="legal-menu" class="nav nav-list collapse">
                <li ><a href="privacy-policy.html">Privacy Policy</a></li>
                <li ><a href="terms-and-conditions.html">Terms and Conditions</a></li>
            </ul>

            <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
            <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
        </div>



        <div class="content">

            
            
            <?php echo $admin_maincontent; ?>
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



