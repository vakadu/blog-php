<?php include "includes/header.php"; ?>

<?php

if (isset($_GET['p_id'])){

    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
    $select_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_query)){

        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];
    }
}

?>

<section class="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <article class="article-item">
                    <div class="enter-media">
                        <div class="article-heading">
                            <h2>
                                <a href="javascript:void(0);"><?php echo $post_title; ?></a>
                            </h2>
                            <div class="enter-date">
                                <ul>
                                    <li><a href="javascript:void(0)"> <i class="fa
                                    fa-calendar">&nbsp;&nbsp;<?php echo $post_date; ?></i></a> </li>
                                    <li><a href="javascript:void(0)"><i class="fa
                                    fa-user">&nbsp;</i> <?php echo $post_author; ?></a> </li>
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
                                <div class="col-md-5 blog-tags">
                                    <a href="javascript:;"><?php echo $post_tags; ?> </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="share-social-article">
                                        <a href="http://www.facebook.com/sharer.php?u=http://www.kwiqpick.com/business" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.kwiqpick.com" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article-item">
                    <div class="enter-media">
                        <div class="article-heading hasMargin">
                            <h2>
                                Leave a Reply
                            </h2>
                        </div>
                        <div class="article-body article-comments">
                            <form>
                                <div class="comment-form ">
                                    <p class="input-name"> NAME <span>*</span> </p>
                                    <input type="text" name="name" placeholder="">
                                    <p class="input-name"> E-MAIL <span>*</span> </p>
                                    <input type="text" name="name" placeholder="">
                                    <p class="input-name"> COMMENT</p>
                                    <textarea placeholder=""></textarea>
                                </div>
                                <div class="comment-submit">
                                    <a href="javascript:;" class="custom-buttons
                                    button-color">Post Comment</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
            <?php include "includes/article_sidebar.php"; ?>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>