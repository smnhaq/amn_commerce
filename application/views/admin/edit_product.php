<div class="header">
    <div class="stats">
        <p class="stat"><span class="number">53</span>tickets</p>
        <p class="stat"><span class="number">27</span>tasks</p>
        <p class="stat"><span class="number">15</span>waiting</p>
    </div>

    <h1 class="page-title"><?php echo $title; ?></h1>
</div>

<ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li class="active">Dashboard</li>
</ul>

<div class="container-fluid">
    <div class="row-fluid">
        <form action="<?php echo base_url(); ?>super_admin/update_product" enctype="multipart/form-data" method="post">


            <div class="btn-toolbar">
                <button class="btn btn-primary"><i class="icon-save"></i> Save</button>            
            </div>
            <div class="well">           
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="home">
                        <h4 id="user_success_msg" style="color:green;">
                            <?php
//                            $success_message = $this->session->userdata('csuccess_msg');
//                            if (isset($success_message)) {
//                                echo $success_message;
//                                $this->session->unset_userdata('csuccess_msg');
//                            }
                            ?>
                        </h4>
                        <p>
                            (<span class="imp">*</span>)<span> Required Field.</span>
                        </p><br/>
                        <div id="user_registration">

                            <p>
                                <input type="hidden" name="product_id" value="<?php echo $product_info->product_id; ?>">
                                <span class="left_label_width">Product Name</span>
                                <input class="right_label" type="text" required="1" name="product_name"  value="<?php echo $product_info->product_name; ?>">
                                <span class="imp">*</span>
                            </p>
                            <p>
                                <span class="left_label_width">Category Name</span>
                                <select class="right_label" name="category_id">
                                    <option value=" ">Select category . . </option>
                                    <?php
                                    foreach ($all_category as $v_category) {
                                        ?>   
                                        <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                    <?php }
                                    ?>
                                </select>
                                <span class="imp">*</span>
                            </p>

                            <p>
                                <span class="left_label_width">Product Description</span>
                                <textarea class="right_label" cols="5" rows="2" name="product_description"><?php echo $product_info->product_description; ?></textarea>
                                <span class="imp">*</span>
                            </p>
                            <p>
                                <span class="left_label_width">Product Quantity</span>
                                <input class="right_label" type="number" required="1" name="product_quantity"  value="<?php echo $product_info->product_quantity; ?>">
                                <span class="imp">*</span>
                            </p>
                            <p>
                                <span class="left_label_width">Product Price</span>
                                <input class="right_label" type="text" required="1" name="product_price"  value="<?php echo $product_info->product_price; ?>">
                                <span class="imp">*</span>
                            </p>
                            <p>
                                <input type="hidden" name="product_image" value="<?php echo $product_info->product_image; ?>">
                                <span class="left_label_width">Product Image</span>
                                <img src="<?php echo $product_info->product_image; ?>" height="30px;" width="50px;"/>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="right_label" type="file" name="image"/> 
                            </p>
                            <p>
                                <span class="left_label_width">Publication Status</span>
                                <input type="radio" name="publication_status" value="1" 
                                <?php
                                if ($product_info->publication_status == 1) {
                                    echo "checked='checked'";
                                }
                                ?>>Publish &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="publication_status" value="0" 
                                <?php
                                if ($product_info->publication_status == 0) {
                                    echo "checked='checked'";
                                }
                                ?>>Unpublish
                            </p>


                        </div> 

                    </div>
                </div>

            </div>  

        </form>
    </div>
</div>







<footer>
    <hr>

    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>

    <p>&copy; 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
</footer>