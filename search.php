<?php include "includes/header.php"; ?>

<section class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <?php

                if (isset($_POST['submit'])) {

                    $search = trim($_POST['search']);
                    $query = "SELECT * FROM posts WHERE post_title LIKE '%$search%' OR post_author LIKE '%$search%' OR post_content LIKE '%$search%' OR post_tags LIKE '%$search%' ORDER BY post_id DESC";
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
             <strong>Oops!</strong> No results found.
        </div>';
                    } else {
                        while ($row = mysqli_fetch_assoc($search_query)) {
                            $post_title = $row['post_title'];
                            $post_category_id = $row['post_category_id'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = substr($row['post_content'], 0, 500) . " .....";
                            ?>

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
                                    <li><a href="authors_post.php?author=<?php echo
                                        $post_author?>&p_id=<?php echo $post_id; ?>" target="_blank"><i class="fa fa-user">&nbsp;</i> <?php echo $post_author; ?></a>
                                    </li>
                                    <?php
                                    $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
                                    $select_cat_query = mysqli_query($connection, $query);
                                    confirmQuery($select_cat_query);
                                    while ($row = mysqli_fetch_assoc($select_cat_query)){

                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];

                                        echo "<li><a href='category.php?category=$cat_id&title=$cat_title'><i class='fa fa-folder-open-o'>&nbsp;</i> {$cat_title}</a> </li>";
                                    }
                                    ?>
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
            </div>
<?php include "includes/article_sidebar.php"; ?>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>