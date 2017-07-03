<?php

if (isset($_POST['create_post'])){

    $post_title = $_POST['title'];
    $post_category_id = $_POST['category'];
    $post_author = $_POST['author'];
    $post_status = $_POST['status'];
    $post_image = $_FILES['image']['name'];
    $post_tmp_image = $_FILES['image']['tmp_name'];
    $post_date = date('d-m-y');
    $post_tags = $_POST['tags'];
    $post_content = $_POST['content'];
    $post_content = str_replace("'", "''", $post_content);
    $post_comment_count = 0;

    move_uploaded_file($post_tmp_image, "../images/$post_image");

    $query  = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
    $query .= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";

    $insert_query = mysqli_query($connection, $query);
    if (!$insert_query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>{$post_title} post created!</strong>
              </div>
            </div>
            ";
    }
}

?>

<form class="form-horizontal form-label-left" action="" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="title" class="form-control col-md-7 col-xs-12"
                   name="title" placeholder="e.g Some title" type="text">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <select class="form-control" name="category">
                <option value="">Choose Category</option>
                <?php
                $query = "SELECT * FROM categories";
                $category_query = mysqli_query($connection, $query);
                if (!$category_query){

                    die("Query failed " . mysqli_error($connection));
                }
                while ($row = mysqli_fetch_assoc($category_query)){

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo "<option value='{$cat_id}'>{$cat_title}</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="text" id="author" name="author" class="form-control col-md-7
            col-xs-12" placeholder="Author Name">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <select class="form-control" name="status">
                <option value="draft">Select Status</option>
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="file" id="image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="text" id="tags" name="tags" class="form-control col-md-7
            col-xs-12" placeholder="Tags">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control col-md-7 col-xs-12" placeholder="Content"></textarea>
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button id="post-submit" name="create_post" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>