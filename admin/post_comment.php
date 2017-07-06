<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Comments</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
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

                                $query = "SELECT * FROM comments WHERE comment_post_id = " . mysqli_real_escape_string($connection, $_GET['id']) . " ";
                                $select_comment_query = mysqli_query($connection, $query);
                                confirmQuery($select_comment_query);
                                while ($row = mysqli_fetch_assoc($select_comment_query)) {

                                    $comment_id = $row['comment_id'];
                                    $comment_post_id = $row['comment_post_id'];
                                    $comment_author = $row['comment_author'];
                                    $comment_email = $row['comment_email'];
                                    $comment_content = $row['comment_content'];
                                    $comment_status = $row['comment_status'];
                                    $comment_date = $row['comment_date'];

                                    echo "<tr>";
                                    echo "<td>{$comment_id}</td>";
                                    echo "<td>{$comment_author}</td>";

                                    $query = "SELECT * FROM posts WHERE post_id = {$comment_post_id}";
                                    $select_post_id_query = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($select_post_id_query)) {

                                        $post_id = $row['post_id'];
                                        $post_title = $row['post_title'];

                                        echo "<td><a href='../post.php?p_id={$post_id}'> {$post_title}</a></td>";
                                    }

                                    echo "<td class='more col-sm-2'>{$comment_content}</td>";
                                    echo "<td>{$comment_email}</td>";
                                    echo "<td>{$comment_status}</td>";
                                    echo "<td>{$comment_date}</td>";
                                    echo "<td>
                                    <a href='post_comment.php?approve={$comment_id}&id=". $_GET['id'] ."' class='btn btn-success'><i class='fa fa-check'></i> </a>
                                    <br>
                                    <a href='post_comment.php?unapprove={$comment_id}&id=". $_GET['id'] ."' class='btn btn-success'><i class='fa fa-times'></i></a>
                                    <br>
                                    <a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='post_comment.php?delete={$comment_id}&id=". $_GET['id'] ."' class='btn btn-danger'><i class='fa fa-trash-o'></i></a>
                                    </td>";
                                    echo "</tr>";
                                }

                                ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

if (isset($_GET['approve'])) {

    $the_comment_id = $_GET['approve'];
    $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id =  $the_comment_id";
    $approve_query = mysqli_query($connection, $query);
    redirect("post_comment.php?id=". $_GET['id']. "");
}

if (isset($_GET['unapprove'])) {

    $the_comment_id = $_GET['unapprove'];
    $query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id =  $the_comment_id";
    $approve_query = mysqli_query($connection, $query);
    redirect("post_comment.php?id=". $_GET['id']. "");
}

//deleting post
if (isset($_GET['delete'])) {

    $the_comment_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection, $query);
    redirect("post_comment.php?id=". $_GET['id']. "");
}

?>

<?php include "includes/footer.php"; ?>
