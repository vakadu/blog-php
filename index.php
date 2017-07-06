<?php include "includes/header.php"; ?>

<section class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <?php

                $per_page = 5;
                if (isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = "";
                }
                if ($page == "" || $page == 1){
                    $page_1 = 0;//for index page
                }
                else{
                    $page_1 = ($page * $per_page) - $per_page;//it will give us five every page
                }

                $post_query_count = "SELECT * FROM posts";
                $find_count = mysqli_query($connection, $post_query_count);
                $count = mysqli_num_rows($find_count);
                $count = ceil($count / $per_page);//for making number integer


                $query = "SELECT * FROM posts WHERE post_status = 'publish' ORDER BY post_date DESC LIMIT $page_1, $per_page";
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
                                <a href="post.php?p_id=<?php echo $post_id; ?>" target="_blank"><?php echo $post_title; ?></a>
                            </h2>
                            <div class="enter-date">
                                <ul>
                                    <li><a href="javascript:void(0)"> <i class="fa
                                    fa-calendar">&nbsp;&nbsp;<?php echo $post_date?></i></a></li>
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
                                       class="button blog-button" target="_blank">Read More</a>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="share-social-article">
                                        <a href="http://www.facebook.com/sharer.php?u=http://localhost/Kwiqpick_Blog/post.php?p_id=<?php echo $post_id; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://localhost/Kwiqpick_Blog/post.php?p_id=<?php echo $post_id; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <?php
                }
                ?>
                <div class="article-pagination">
                    <ul>
                        <?php
                        for ($i = 1; $i <= $count; $i++){
                            if ($i == $page){
                                echo "<li><a class='active' href='index.php?page={$i}'>{$i}</a> </li>";
                            }
                            else{
                                echo "<li><a href='index.php?page={$i}'>{$i}</a></li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <?php include "includes/article_sidebar.php"; ?>

        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
