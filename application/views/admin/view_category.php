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

<div class="container-fluid">
    <div class="row-fluid">
        <form action="<?php echo base_url(); ?>super_admin/add_category_form">
            <div class="btn-toolbar">
                <button class="btn btn-primary"><i class="icon-plus"></i> New Category</button>
                <button class="btn">Import</button>
                <button class="btn">Export</button>
                <div class="btn-group">
                </div>
                <h4 id="user_success_msg" style="color:green;">
                    <?php
                    $success_message = $this->session->userdata('success_msg');
                    if (isset($success_message)) {
                        echo $success_message;
                        $this->session->unset_userdata('success_msg');
                    }
                    ?>
                </h4>
                <h4 id="user_success_msg" style="color:red;">
                    <?php
                    $errot_message = $this->session->userdata('error_message');
                    if (isset($errot_message)) {
                        echo $errot_message;
                        $this->session->unset_userdata('error_message');
                    }
                    ?>
                </h4>
            </div>
            <div class="well">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Images</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($all_category as $category) { ?>
                            <tr>
                                <td><?php echo $category->category_id; ?></td>
                                <td><?php echo $category->category_name; ?></td>
                                <td><?php echo $category->category_description; ?></td>
                                <td><img src="<?php echo $category->category_image; ?>" height="30px;" width="50px;"/></td>
                                <td>

                                    <?php
                                    if ($category->publication_status == 1) {
                                        echo 'Published';
                                    } else {
                                        echo 'Unpublished';
                                    }
                                    ?>



                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>super_admin/edit_category/<?php echo $category->category_id; ?>"><i class="icon-pencil"></i></a>
                                    <!--<a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>-->
                                    <a href="<?php echo base_url(); ?>super_admin/delete_category/<?php echo $category->category_id; ?>" onclick="return check_delete()"><i class="icon-remove"></i></a> 
                                </td>
                                <td>
                                    <?php if ($category->publication_status == 1) { ?>

                                        <a href="<?php echo base_url(); ?>super_admin/unpublished_category/<?php echo $category->category_id; ?>">Unpublished</a>
                                    <?php } else { ?>

                                        <a href="<?php echo base_url(); ?>super_admin/published_category/<?php echo $category->category_id; ?>">Published</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <ul>
                    
                    <li><a href="#">Prev</a></li>
                    <li><?php echo $this->pagination->create_links();?></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>

            <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
                </div>
                <div class="modal-footer">

                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
                </div>
            </div>



            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>

                <p>&copy; 2012 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
            </footer>
        </form>
    </div>
</div>




<script src="lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
                                    $("[rel=tooltip]").tooltip();
                                    $(function() {
                                        $('.demo-cancel-click').click(function() {
                                            return false;
                                        });
                                    });
</script>



