<?php include "delete_post.php"; ?>

<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive
nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $query  = "SELECT posts.post_id, posts.post_author, posts.post_title, ";
    $query .= "posts.post_category_id, posts.post_status, posts.post_image, ";
    $query .= "posts.post_tags, posts.post_comment_count, posts.post_date, ";
    $query .= "categories.cat_id, categories.cat_title ";
    $query .= "FROM posts LEFT JOIN categories ON ";
    $query .= "posts.post_category_id = categories.cat_id ORDER BY posts.post_id DESC";

    $select_posts = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_posts)){

        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        //$post_content = $row['post_content'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];

        $category_id = $row['cat_id'];
        $category_title = $row['cat_title'];

        echo "<tr>";
        echo "<td>{$post_id}</td>";
        echo "<td>{$post_author}</td>";
        echo "<td>{$post_title}</td>";
        echo "<td>{$category_title}</td>";
        echo "<td>{$post_status}</td>";
        echo "<td><img src='../images/{$post_image}' height='40px'></td>";
        echo "<td>{$post_tags}</td>";
        echo "<td>{$post_comment_count}</td>";
        echo "<td>{$post_date}</td>";
        echo "<td>
                <a href='../post.php?p_id={$post_id}' class='btn btn-primary btn-xs'><i 
                class='fa fa-folder'></i> View
                </a>
              </td>";
        echo "<td>
                <a href='posts.php?source=edit_post&p_id={$post_id}' class='btn btn-info 
                btn-xs'><i class='fa fa-pencil'></i> Edit
                </a>
               </td>";
        echo "<td>
               <a rel='{$post_id}' href='javascript:void(0)' class='delete_post btn 
               btn-danger btn-xs' data-toggle='modal' data-target='.delete-modal'><i 
               class='fa fa-trash-o'></i> 
               Delete
                </a>
                <!--
                <a onclick=\"javascript: return confirm('Are you sure you want to delete')\"
                 href='posts.php?delete={}' class='btn btn-danger btn-xs'><i 
                 class='fa fa-trash-o'></i> Delete
                </a>
                -->
                
               </td>";
        echo "</tr>";
    }

    ?>

    </tbody>
</table>

<?php

//deleting post
if (isset($_GET['delete'])){

    $delete_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$delete_post_id}";
    $delete_query = mysqli_query($connection, $query);
    redirect("posts.php");
}
