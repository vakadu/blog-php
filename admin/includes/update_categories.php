<form class="form-horizontal form-label-left margintb20" method="post">
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12"
               for="update_category">Update Category <span
                    class="required">*</span>
        </label>
        <!--Editing categories-->
        <?php
        if (isset($_GET['edit'])){

            $cat_id = $_GET['edit'];
            $query = "SELECT * FROM categories WHERE cat_id = {$cat_id} ";
            $select_categories = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_categories)) {

                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php if (isset($cat_title)){echo $cat_title;} ?>"
                           type="text" class="form-control col-md-7 col-xs-12"
                           name="cat_title">
                </div>
                <?php
            }
        }
        ?>
        <!--Update query-->
        <?php
        if (isset($_POST['update_category'])){

            $cat_title_edit = $_POST['cat_title'];
            $query  = "UPDATE categories SET cat_title = '{$cat_title_edit}' WHERE cat_id 
                    = {$cat_id}";
            $update_query = mysqli_query($connection, $query);
            if (!$update_query){
                die("Query Failed " . mysqli_error($connection));
            }
        }
        ?>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button id="submit" name="update_category"
                    type="submit" class="btn btn-success">Update Category
            </button>
        </div>
    </div>
    <div class="ln_solid"></div>
</form>