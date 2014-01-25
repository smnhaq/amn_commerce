<div class="title_box">Categories</div>
<ul class="left_menu">
    <?php
    foreach ($all_category as $v_category) {
        ?>
        <li class="odd"><a href="<?php echo base_url(); ?>welcome/select_all_product_by_category_id/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
        <?php
    }
    ?>
</ul>
<div class="title_box">Special Products</div>
<div class="border_box">
    <div class="product_title"><a href="http://www.free-css.com/">Makita 156 MX-VL</a></div>
    <div class="product_img"><a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/p1.jpg" alt="" border="0" /></a></div>
    <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
</div>
<div class="title_box">Newsletter</div>
<div class="border_box">
    <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
    <a href="http://www.free-css.com/" class="join">subscribe</a> </div>
<div class="banner_adds"> <a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/bann2.jpg" alt="" border="0" /></a> </div>