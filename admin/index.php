<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dashboard</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row top_tiles">
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-edit"></i></div>

                                    <?php
                                    $post_count = recordCount('posts');
                                    echo "<div class='count'>{$post_count}</div>";
                                    ?>
                                    <h3>Posts</h3>
                                    <?php
                                    $query = "SELECT * FROM posts WHERE post_status = 'publish'";
                                    $select_query = mysqli_query($connection, $query);
                                    $publish_count = mysqli_num_rows($select_query);
                                    echo " <span class='count_bottom'><i class='green'>&nbsp;&nbsp;{$publish_count} </i>&nbsp; Posts Published</span>";
                                    ?>
                                    <br>
                                    <?php
                                    $query = "SELECT * FROM posts WHERE post_status = 'draft'";
                                    $select_query = mysqli_query($connection, $query);
                                    $count = mysqli_num_rows($select_query);
                                    echo " <span class='count_bottom'><i class='green'>&nbsp;&nbsp;{$count} </i>&nbsp; Posts Drafted</span>";
                                    ?>
                                </div>
                            </div>

                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-users"></i></div>
                                    <?php
                                    $user_count = recordCount('users');
                                    echo "<div class='count'>{$user_count}</div>";
                                    ?>
                                    <h3>Users</h3>
                                    <?php
                                    $query = "SELECT * FROM users WHERE user_role = 'admin'";
                                    $select_query = mysqli_query($connection, $query);
                                    $count = mysqli_num_rows($select_query);
                                    echo " <span class='count_bottom'><i class='green'>&nbsp;&nbsp;{$count} </i>&nbsp; Admins</span>";
                                    ?>
                                    <br>
                                    <?php
                                    $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
                                    $select_query = mysqli_query($connection, $query);
                                    $count = mysqli_num_rows($select_query);
                                    echo " <span class='count_bottom'><i class='green'>&nbsp;&nbsp;{$count} </i>&nbsp; Staff</span>";
                                    ?>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                                    <?php
                                    $count = recordCount('comments');
                                    echo "<div class='count'>{$count}</div>";
                                    ?>
                                    <h3>Comments</h3>
                                    <?php
                                    $query = "SELECT * FROM comments WHERE comment_status = 'approved'";
                                    $select_query = mysqli_query($connection, $query);
                                    $count = mysqli_num_rows($select_query);
                                    echo " <span class='count_bottom'><i class='green'>&nbsp;&nbsp;{$count} </i>&nbsp; Comments Approved</span>";
                                    ?>
                                    <br>
                                    <?php
                                    $query = "SELECT * FROM comments WHERE comment_status = 'unapproved'";
                                    $select_query = mysqli_query($connection, $query);
                                    $count = mysqli_num_rows($select_query);
                                    echo " <span class='count_bottom'><i class='green'>&nbsp;&nbsp;{$count} </i>&nbsp; Comments for Review</span>";
                                    ?>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-folder-o"></i></div>
                                    <?php
                                    $category_count = recordCount('categories');
                                    echo "<div class='count'>{$category_count}</div>";
                                    ?>
                                    <h3>Categories</h3>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa fa-envelope"></i></div>
                                    <?php
                                    $subscriber_count = recordCount('subscribers');
                                    echo "<div class='count'>{$subscriber_count}</div>";
                                    ?>
                                    <h3>Subscribers</h3>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
