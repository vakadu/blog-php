<?php include "includes/header.php"; ?>

<section class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <?php

                if (isset($_GET['p_id'])){

                    $the_p_id = $_GET['p_id'];
                    $post_author = $_GET['author'];
                }

                $query = "SELECT * FROM posts WHERE post_author = '{$post_author}'";
                $select_all_posts = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($select_all_posts)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'], 0, 500) . " [.....]";
                    $post_status = $row['post_status'];

                    ?>
                    <article class="article-item">
                        <div class="enter-media">
                            <div class="article-heading">
                                <h2>
                                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                                </h2>
                                <div class="enter-date">
                                    <ul>
                                        <li><a href="javascript:void(0)"> <i class="fa
                                    fa-calendar">&nbsp;&nbsp;<?php echo $post_date?></i></a></li>
                                        <li><a href="authors_post.php?author=<?php echo
                                            $post_author?>&p_id=<?php echo $post_id; ?>"><i
                                                    class="fa fa-user">&nbsp;</i> <?php echo $post_author; ?></a>
                                        </li>
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
                ?>
            </div>
            <?php include "includes/article_sidebar.php"; ?>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>