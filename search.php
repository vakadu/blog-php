<?php include "includes/header.php"; ?>

<?php

$per_page = 5;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "";
}
if ($page == "" || $page == 1) {
    $page_1 = 0;//for index page
} else {
    $page_1 = ($page * $per_page) - $per_page;//it will give us five every page
}

$post_query_count = "SELECT * FROM posts";
$find_count = mysqli_query($connection, $post_query_count);
$count = mysqli_num_rows($find_count);
$count = ceil($count / $per_page);//for making number integer

if (isset($_POST['submit'])) {

    $search = $_POST['search'];
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search' ORDER BY post_id DESC LIMIT $page_1, $per_page";
    $search_query = mysqli_query($connection, $query);
    if (!$search_query) {
        die("Query Failed " . mysqli_error($connection));
    }
    $count = mysqli_num_rows($search_query);
    if ($count == 0) {
        echo
        '<div class="alert alert-danger alert-dismissable text-center">
             <a href="#" class="close" data-dismiss="alert" 
             aria-label="close">&times;</a>
             <strong>Error!</strong> No results found.
        </div>';
    } else {
        while ($row = mysqli_fetch_assoc($search_query)) {
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = substr($row['post_content'], 0, 500) . " .....";
            ?>

<section class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <article class="article-item">
                    <div class="enter-media">
                        <div class="article-heading">
                            <h2>
                                <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo
                                    $post_title; ?></a>
                            </h2>
                            <div class="enter-date">
                                <ul>
                                    <li><a href="javascript:void(0)"> <i class="fa
                                        fa-calendar">&nbsp;&nbsp;<?php echo $post_date ?></i></a></li>
                                    <li><a href="#"><i class="fa
                                        fa-user">&nbsp;</i> <?php echo $post_author; ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="article-body">
                            <img src="images/<?php echo $post_image; ?>" alt="Image">
                            <p>
                                <?php echo $post_content; ?>
                            </p>
                        </div>
                        <div class="article-footer">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <a href="post.php?p_id=<?php echo $post_id; ?>"
                                       class="button blog-button">Read More</a>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="share-social-article">
                                        <a href="javascript:;"><i class="fa
                                            fa-facebook"></i></a>
                                        <a href="javascript:;"><i class="fa
                                            fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            <?php
        }
    }
}
?>
    <div class="article-pagination">
        <ul>
            <?php
            for ($i = 1; $i <= $count; $i++) {
                if ($i == $page) {
                    echo "<li><a class='active' href='home.php?page={$i}'>{$i}</a> </li>";
                } else {
                    echo "<li><a href='home.php?page={$i}'>{$i}</a></li>";
                }
            }
            ?>
        </ul>
    </div>
    </div>

<?php include "includes/article_sidebar.php"; ?>

<?php include "includes/footer.php"; ?>