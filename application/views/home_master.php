<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />

        <script type="text/javascript" src="<?php echo base_url(); ?>js/boxOver.js"></script>


        <!--For tabbed start here-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/smoothness/jquery-ui.css">
        <script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
        <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
        <script>
            $(function() {
                $("#tabs").tabs();
            });
        </script>
        <!--tabbed end here-->


    </head>
    <body>
        <div id="main_container">
            <div id="header">
                <div class="top_right">
                    <div class="languages">
                        <div class="lang_text">Languages:</div>
                        <a href="http://www.free-css.com/" class="lang"><img src="<?php echo base_url(); ?>images/en.gif" alt="" border="0" /></a> <a href="http://www.free-css.com/" class="lang"><img src="<?php echo base_url(); ?>images/de.gif" alt="" border="0" /></a> </div>
                    <div class="big_banner"> <a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/banner728.jpg" alt="" border="0" /></a> </div>
                </div>
                <div id="logo"> <a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/logo.png" alt="" border="0" width="182" height="85" /></a> </div>
            </div>
            <div id="main_content">
                <div id="menu_tab">
                    <ul class="menu">
                        <li><a href="<?php echo base_url(); ?>" class="nav"> Home </a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.free-css.com/" class="nav">Products</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.free-css.com/" class="nav">Specials</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.free-css.com/" class="nav">My account</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.free-css.com/" class="nav">Sign Up</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.free-css.com/" class="nav">Shipping </a></li>
                        <li class="divider"></li>
                        <li><a href="contact.html" class="nav">Contact Us</a></li>
                        <li class="divider"></li>
                        <li><a href="details.html" class="nav">Details</a></li>
                    </ul>
                </div>
                <!-- end of menu tab -->
                <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
                <div class="left_content">
                    <?php echo $leftsidebar; ?>
                </div>
                <!-- end of left content -->
                <div class="center_content">
                    <?php echo $homecontent; ?>
                </div>
                <!-- end of center content -->
                <div class="right_content">
                    <?php echo $rightsidebar; ?> 
                </div>
                <!-- end of right content -->
            </div>
            <!-- end of main content -->
            <div class="footer">
                <div class="left_footer"> <img src="<?php echo base_url(); ?>images/footer_logo.png" alt="" width="89" height="42"/> </div>
                <div class="center_footer"> Template name. All Rights Reserved 2008<br />
                    <a href="http://csscreme.com"><img src="<?php echo base_url(); ?>images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
                    <img src="<?php echo base_url(); ?>images/payment.gif" alt="" /> </div>
                <div class="right_footer"> <a href="http://www.free-css.com/">home</a> <a href="http://www.free-css.com/">about</a> <a href="http://www.free-css.com/">sitemap</a> <a href="http://www.free-css.com/">rss</a> <a href="http://www.free-css.com/">contact us</a> </div>
            </div>
        </div>
        <!-- end of main_container -->
    </body>
</html>
