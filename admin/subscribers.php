<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Subscribers</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Time</th>
<!--                                <th>Delete</th>-->
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            $query = "SELECT * FROM subscribers";
                            $select_query = mysqli_query($connection, $query);
                            confirmQuery($select_query);
                            while ($row = mysqli_fetch_assoc($select_query)){

                                $subscriber_id = $row['subscriber_id'];
                                $subscriber_email = $row['subscriber_email'];
                                $subscriber_time = $row['subscriber_time'];

                                echo "<tr>";
                                echo "<td>{$subscriber_id}</td>";
                                echo "<td>{$subscriber_email}</td>";
                                echo "<td>{$subscriber_time}</td>";
//                                echo "<td>
//                                        <a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='subscribers.php?delete={$subscriber_id}' class='btn btn-danger'><i class='fa fa-trash-o'></i></a>
//                                        </td>";
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
//deleting post
if (isset($_GET['delete'])) {

$the_subscriber_id = $_GET['delete'];
$query = "DELETE FROM subscribers WHERE subscriber_id = {$the_subscriber_id}";
$delete_query = mysqli_query($connection, $query);
redirect("subscribers.php");
}
?>


<?php include "includes/footer.php"; ?>
