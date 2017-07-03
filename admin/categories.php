<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Category</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>View all Categories</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!--Calling php function for inserting categories-->
                        <?php insert_category(); ?>

                        <form class="form-horizontal form-label-left" method="post"
                              id="add-category-form">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                       for="category">Add Category <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7
                                    col-xs-12" name="cat_title" placeholder="e.g Food"
                                           type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button class="btn btn-primary"
                                            type="reset">Reset</button>
                                    <button id="submit" name="submit_category"
                                            type="submit" class="btn
                                            btn-success">Add Category
                                    </button>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                        </form>
                        <?php
                        //update and include on clicking edit link
                        if (isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }
                        ?>

                        <table id="datatable-responsive" class="table table-striped
                        table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php findAllCategories(); ?>
                            <?php deleteCategories(); ?>

                            </tbody>
                        </table>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>