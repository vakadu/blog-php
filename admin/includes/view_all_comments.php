<?php

if (isset($_POST['checkBoxArray'])){

    foreach ($_POST['checkBoxArray'] as $commentValueId){

        $bulkOptions = $_POST['bulkOptions'];
        switch ($bulkOptions){

            case 'approved':
                $query = "UPDATE comments SET comment_status = '{$bulkOptions}' WHERE comment_id = {$commentValueId}";
                $approved_comments = mysqli_query($connection, $query);
                confirmQuery($approved_comments);
                break;

            case 'unapproved':
                $query = "UPDATE comments SET comment_status = '{$bulkOptions}' WHERE comment_id = {$commentValueId}";
                $unapproved_comments = mysqli_query($connection, $query);
                confirmQuery($unapproved_comments);
                break;

            case 'delete';
                $query = "DELETE FROM comments WHERE comment_id = {$commentValueId}";
                $delete_comment = mysqli_query($connection, $query);
                confirmQuery($delete_comment);
                break;
        }
    }
}

?>

<form action="" method="post">
    <div class="container" style="margin-left: 10px">
        <div class="row">
            <div class="col-xs-4" id="bulkOptionsContainer">
                <select name="bulkOptions" id="" class="form-control">
                    <option value="">Select Options</option>
                    <option value="approved">Approved</option>
                    <option value="unapproved">Unapproved</option>
                    <option value="delete">Delete</option>
                </select>
            </div>
            <div class="col-xs-4">
                <input type="submit" name="submit" class="btn btn-primary" value="Apply">
            </div>
        </div>
    </div>
    <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th><input type="checkbox" id="selectAllBoxes"></th>
            <th>ID</th>
            <th>Author</th>
            <th>Title</th>
            <th>Comment</th>
            <th>Email</th>
            <th>Status</th>
            <th>Date</th>
            <th>Take Action</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $query = "SELECT * FROM comments";
        $select_query = mysqli_query($connection, $query);
        confirmQuery($select_query);
        while ($row = mysqli_fetch_assoc($select_query)) {

            $comment_id = $row['comment_id'];
            $comment_post_id = $row['comment_post_id'];
            $comment_author = $row['comment_author'];
            $comment_email = $row['comment_email'];
            $comment_content = $row['comment_content'];
            $comment_status = $row['comment_status'];
            $comment_date = $row['comment_date'];

//        $comment_content = substr($comment_content, 0, 10) . " ...";

            echo "<tr>";
            ?>

            <td>
                <input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="<?php echo $comment_id; ?>">
            </td>

        <?php
            echo "<td>{$comment_id}</td>";
            echo "<td>{$comment_author}</td>";

            $query = "SELECT * FROM posts WHERE post_id = {$comment_post_id}";
            $select_post_id_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_post_id_query)) {

                $post_id = $row['post_id'];
                $post_title = $row['post_title'];

                echo "<td class='col-sm-2'><a href='../post.php?p_id={$post_id}' style='color: #169F85;' target='_blank'></i> {$post_title}</a></td>";
            }

            echo "<td class='more col-sm-2'>{$comment_content}</td>";
            echo "<td>{$comment_email}</td>";
            echo "<td>{$comment_status}</td>";
            echo "<td>{$comment_date}</td>";
            echo "<td><a href='comments.php?approve={$comment_id}' class='btn btn-success'><i class='fa fa-check'></i></a><br>
<a href='comments.php?unapprove={$comment_id}' class='btn btn-warning'><i class='fa fa-times'></i></a><br>
<a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='comments.php?delete={$comment_id}' class='btn btn-danger'><i
                 class='fa fa-trash-o'></i> 
                </a>
</td>";
        }

        ?>

        </tbody>
    </table>
</form>

<?php

if (isset($_GET['approve'])) {

    $the_comment_id = $_GET['approve'];
    $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id =  $the_comment_id";
    $approve_query = mysqli_query($connection, $query);
    redirect("comments.php");
}

if (isset($_GET['unapprove'])) {

    $the_comment_id = $_GET['unapprove'];
    $query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id =  $the_comment_id";
    $approve_query = mysqli_query($connection, $query);
    redirect("comments.php");
}

//deleting post
if (isset($_GET['delete'])) {

    $the_comment_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection, $query);
    redirect("comments.php");
}
