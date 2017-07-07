<?php include "includes/header.php"; ?>

<?php

if (isset($_GET['p_id'])){

    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
    $select_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_query)){

        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];

        $post_tags = explode(', ', $row['post_tags']);
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
                                <div class="col-md-12 blog-tags pull-right">

                                    <?php

                                    foreach ($post_tags as $post_tag) {
                                        echo '<a href="#">'.$post_tag.'</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pull-right">
                                    <div class="share-social-article">
                                        <a href="javascript:fbshareCurrentPage();" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.kwiqpick.com" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <?php

                if (isset($_POST['create_comment'])){

                    $the_post_id = $_GET['p_id'];
                    $comment_author = $_POST['name'];
                    $comment_email = $_POST['email'];
                    $comment_content = $_POST['content'];
                    $comment_date = date("F j, Y");

                    if (!empty($comment_author) && !empty($comment_email) && !empty
                        ($comment_content)){

                        $query  = "INSERT INTO comments(comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
                        $query .= "VALUES({$the_post_id}, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'Unapproved', '{$comment_date}')";
                        $insert_query = mysqli_query($connection, $query);
                        confirmQuery($insert_query);
                    }
                    else{
                        echo "<script>alert('Fields cannot be empty')</script>";
                    }
                }

                ?>

                <article class="article-item">
                    <div class="enter-media">
                        <div class="article-heading hasMargin">
                            <h2>
                                Leave a Reply
                            </h2>
                        </div>
                        <div class="article-body article-comments">
                            <form method="post" id="comment-form">
                                <div class="comment-form ">
                                    <p class="input-name"> NAME <span>*</span> </p>
                                    <input type="text" name="name" placeholder="" required>
                                    <p class="input-name"> E-MAIL <span>*</span> </p>
                                    <input type="email" name="email" placeholder=""
                                           required>
                                    <p class="input-name"> COMMENT <span>*</span> </p>
                                    <textarea placeholder="" name="content"
                                              required></textarea>
                                </div>
                                <div class="comment-submit">
                                    <button href="javascript:;" class="custom-buttons
                                    button-color" name="create_comment">Post
                                        Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>

                <article class="article-item">
                    <div class="enter-media">
                        <div class="article-heading hasMargin">
                            <h3>Comments</h3>
                        </div>
                        <div id="comments" class="comments-area">
                            <div class="comments-wrapper">
                                <ol class="comment-list">
                                    <li class="comment">
                                        <?php

                                        $query  = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                                        $query .= "AND comment_status = 'Approved' ";
                                        $query .= "ORDER BY comment_id DESC";
                                        $select_comment_query = mysqli_query($connection, $query);
                                        confirmQuery($select_comment_query);
                                        while ($row = mysqli_fetch_assoc($select_comment_query)) {

                                            $comment_author = $row['comment_author'];
                                            $comment_date = $row['comment_date'];
                                            $comment_content = $row['comment_content'];

                                            ?>
                                            <article>
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author"><?php echo $comment_author; ?></span>
                                                        <span class="comment-date"> <?php echo $comment_date; ?></span>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p><?php echo $comment_content; ?></p>
                                                    </div>
                                                </div>
                                            </article>
                                            <?php
                                        }
                                        ?>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            <?php include "includes/article_sidebar.php"; ?>
        </div>
    </div>
</section>

<script language="javascript">
    function fbshareCurrentPage()
    {window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '',
        'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
        return false; }
</script>

<?php include "includes/footer.php"; ?>