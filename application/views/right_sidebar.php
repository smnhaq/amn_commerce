 <div class="title_box">Search</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="keyword"/>
        <a href="http://www.free-css.com/" class="join">search</a> </div>
      <div class="shopping_cart">
        <div class="title_box">Shopping cart</div>
        <div class="cart_details"> <?php echo $this->cart->total_items();?> items <br />
          <span class="border_cart"></span> Total: <span class="price"><?php echo $this->cart->format_number($this->cart->total()); ?>&nbsp;Tk.</span> </div>
        <div class="cart_icon"><a href="<?php echo base_url()?>cart/show_cart"><img src="<?php echo base_url(); ?>images/shoppingcart.png" alt="" width="35" height="35" border="0" title="Show Cart" /></a></div>
      </div>
      <div class="title_box">What’s new</div>
      <div class="border_box">
        <div class="product_title"><a href="http://www.free-css.com/">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/p2.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        <li class="odd"><a href="http://www.free-css.com/">Bosch</a></li>
        <li class="even"><a href="http://www.free-css.com/">Samsung</a></li>
        <li class="odd"><a href="http://www.free-css.com/">Makita</a></li>
        <li class="even"><a href="http://www.free-css.com/">LG</a></li>
        <li class="odd"><a href="http://www.free-css.com/">Fujitsu Siemens</a></li>
        <li class="even"><a href="http://www.free-css.com/">Motorola</a></li>
        <li class="odd"><a href="http://www.free-css.com/">Phillips</a></li>
        <li class="even"><a href="http://www.free-css.com/">Beko</a></li>
      </ul>
      <div class="banner_adds"> <a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/bann1.jpg" alt="" border="0" /></a> </div>
   