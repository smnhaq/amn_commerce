
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
    <li class="active">Users</li>
</ul>
<form id="tab" action="<?php echo base_url(); ?>super_admin/update_category" enctype="multipart/form-data" method="post" >
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="btn-toolbar">
                <button class="btn btn-primary"><i class="icon-save"></i> Save Category</button>            
            </div>
            <div class="well">           
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="home">
                        
                        <p>
                            (<span class="important">*</span>)<span> Required Field.</span>
                        </p>
                        <div id="user_registration">
                            <input class="right_label" type="hidden" name="category_id" value="<?php echo $category_by_id->category_id; ?>">
                            <input class="right_label" type="hidden" name="category_image" value="<?php echo $category_by_id->category_image; ?>">
                            <p>
                                <span class="left_label_width">Country Name</span>
                                <input class="right_label" type="text" name="category_name" value="<?php echo $category_by_id->category_name; ?>">
                                <span class="imp">*</span>
                            </p>

                            <p>
                                <span class="left_label_width">Country Short Description</span>
                                <textarea class="right_label" cols="5" rows="2" name="category_description"><?php echo $category_by_id->category_description; ?></textarea>
                                <span class="imp">*</span>
                            </p>
                            <p>
                                <span class="left_label_width">Image</span>
                                <input class="right_label" type="file" name="image"/>
                            </p>
                            <p>
                                <span class="left_label_width">Publication Status</span>
                                <input type="radio" name="publication_status" value="1" 
                                <?php
                                if ($category_by_id->publication_status == 1) {
                                    echo "checked=checked";
                                }
                                ?>> Published &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="publication_status" value="0" 
                                <?php
                                if ($category_by_id->publication_status == 0) {
                                    echo "checked=checked";
                                }
                                ?>> Unpublished
                            </p>

                        </div> 

                    </div>
                </div>

            </div>            

        </div>
    </div>
</form>
