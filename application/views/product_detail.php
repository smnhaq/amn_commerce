<div class="outer_product_name">
    <div class="product_name"><?php echo $product_detail->product_name; ?></div>
</div>
<div class="product_box">
    <div class="product_image float_left"><img src="<?php echo $product_detail->product_image; ?>" height="200px;" width="200px;" alt="" border="0" /></div>
    <div class="product_detail float_right">
        <ul class="ul_pro_detail">
            <li><span class="left_pro code">Product Code:</span>&nbsp;&nbsp;<span class="right_pro"></span></li>
            <li><span class="left_pro available">Availability:</span>&nbsp;&nbsp;<span class="right_pro"></span></li>
            <li><span class="left_pro price1">Price:</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="right_pro price2"><?php echo $product_detail->product_price; ?>&nbsp;Tk.</span></li>
            <li><span class="left_pro qty">Quantity:</span>&nbsp;&nbsp;<span><input type="text"/></span>
                <span class="right_pro_btn"><a href="<?php echo base_url();?>cart/add_to_cart/<?php echo $product_detail->product_id;?>"><input type="submit" value="Add to Cart"/></a></span>
            </li>
        </ul>
    </div>

</div>
   
<div class="detail_tabbed">

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Product Details</a></li>
        <li><a href="#tabs-2">Reviews</a></li>
    </ul>
    <div id="tabs-1">
        <p><?php echo $product_detail->product_description; ?></p>
    </div>
    <div id="tabs-2">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
</div>
    
    </div>