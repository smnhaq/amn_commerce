<div class="oferta"> <img src="<?php echo base_url(); ?>images/p1.png" width="165" height="113" border="0" class="oferta_img" alt="" />
    <div class="oferta_details">
        <div class="oferta_title">Power Tools BST18XN Cordless</div>
        <div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div>
        <a href="http://www.free-css.com/" class="prod_buy">details</a> </div>
</div>
<div class="center_title_bar">Latest Products</div>

<!-- this div will display all products and products by category id... -->

<?php foreach ($all_product as $v_product) { ?>
    <div class="prod_box">
        <div class="center_prod_box">
            <div class="product_title"><a href="#"><?php echo $v_product->product_name; ?></a></div>
            <div class="product_img"><a href="<?php echo base_url(); ?>welcome/product_detail_by_product_id/<?php echo $v_product->product_id; ?>"><img src="<?php echo $v_product->product_image; ?>" height="100px;" width="100px;" alt="" border="0" /></a></div>
            <div class="prod_price"><span class="reduce"><?php echo $v_product->product_price; ?> TK</span> <span class="price"><?php echo $v_product->product_price; ?> TK</span></div>
        </div>
        <div class="prod_details_tab"> <a href="" class="prod_buy">Add to Cart</a> <a href="<?php echo base_url(); ?>welcome/product_detail_by_product_id/<?php echo $v_product->product_id; ?>" class="prod_details">Details</a> </div>
    </div>
<?php } ?>

<!-- products display div will ends here...  -->


<div class="center_title_bar">Recomended Products</div>
<div class="prod_box">
    <div class="center_prod_box">
        <div class="product_title"><a href="http://www.free-css.com/">Makita 156 MX-VL</a></div>
        <div class="product_img"><a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/p7.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
    </div>
    <div class="prod_details_tab"> <a href="http://www.free-css.com/" class="prod_buy">Add to Cart</a> <a href="http://www.free-css.com/" class="prod_details">Details</a> </div>
</div>
<div class="prod_box">
    <div class="center_prod_box">
        <div class="product_title"><a href="http://www.free-css.com/">Bosch XC</a></div>
        <div class="product_img"><a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/p1.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
    </div>
    <div class="prod_details_tab"> <a href="http://www.free-css.com/" class="prod_buy">Add to Cart</a> <a href="http://www.free-css.com/" class="prod_details">Details</a> </div>
</div>
<div class="prod_box">
    <div class="center_prod_box">
        <div class="product_title"><a href="http://www.free-css.com/">Lotus PP4</a></div>
        <div class="product_img"><a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>images/p3.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
    </div>
    <div class="prod_details_tab"> <a href="http://www.free-css.com/" class="prod_buy">Add to Cart</a> <a href="http://www.free-css.com/" class="prod_details">Details</a> </div>
</div>