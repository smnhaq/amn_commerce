<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />

        <script type="text/javascript" src="<?php echo base_url(); ?>js/boxOver.js"></script>


        <!--For tabbed start here-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
        <script>
            $(function() {
                $("#tabs").tabs();
            });
            $(function() {
                $("#accordion").accordion();
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
                
                <div class="show_cart">
                    <div class="title_box">Shopping cart</div>
                    <div class="cart_details"> <?php echo $this->cart->total_items();?> items <br />
                        <span class="border_cart"></span> Total: <span class="price"><?php echo $this->cart->format_number($this->cart->total()); ?>&nbsp;Tk.</span> </div>
                    <div class="cart_icon"><a href="<?php echo base_url()?>cart/show_cart"><img src="<?php echo base_url(); ?>images/shoppingcart.png" alt="" width="35" height="35" border="0" /></a></div>
                </div>
                <div class="cart_content">
                    <?php echo $cartcontent; ?>
                </div>
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
