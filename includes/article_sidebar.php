<div class="col-md-4 blog-sidebar">
    <div class="blog-widget">
        <div class="well">
            <form action="search.php" method="post">
                <div class="input-group">
                    <input type="text" name="search" class="form-control"
                           placeholder="Search">
                    <span class="input-group-btn">
                        <button name="submit" class="btn btn-search"
                                type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['subscribe'])){

        $subscribe_email = trim($_POST['subscribe_email']);
        if (!empty($subscribe_email)){

            $select_query = "SELECT subscriber_id FROM subscribers WHERE subscriber_email = '{$subscribe_email}'";
            $select_query_db = mysqli_query($connection, $select_query);
            if (mysqli_num_rows($select_query_db) >= 1){

                echo "<script>alert('You have already subscribed')</script>";
            }
            else{
                $subscriber_time  = date("F j, Y");
                $query  = "INSERT INTO subscribers(subscriber_email, subscriber_time) ";
                $query .= "VALUES('{$subscribe_email}', '{$subscriber_time}')";
                $insert_query = mysqli_query($connection, $query);
                confirmQuery($insert_query);
                echo "<script>alert('Successfully added')</script>";
            }
        }
        else{
            echo "<script>alert('Subscriber field cannot be empty')</script>";
        }
    }
    ?>

    <div class="blog-widget color-widget">
        <h3>Get the Kwiqpick app</h3>
        <p>In July 2017</p>
        <a href="javascript:void(0);" target="_blank">
            <img src="images/google-play-badge.png" alt="Play Store">
        </a>
        <h3>Subscribe</h3>
        <p>Sign up to receive updates and latest new things from us everyday.
            And i will not spam promise.</p>
        <div class="widget-forms">
            <form class="subscribe-form" method="post">
                <input type="email" name="subscribe_email" placeholder="e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                <button type="submit" class="sidebar-button button-color" name="subscribe">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="blog-widget">
        <h3 class="hasMargin">Category</h3>
        <div class="widget-body">
            <ul class="widget-category">
                <?php
                $query = "SELECT * FROM categories";
                $select_categories = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($select_categories)){

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo "<li><a href='category.php?category=$cat_id&title=$cat_title'>{$cat_title}</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
<!--    <div class="blog-widget">-->
<!--        <h3 class="hasMargin">Tags</h3>-->
<!--        <div class="widget-body">-->
<!--            <div class="widget-tags">-->
<!--                <a href="javascript:;">Blog</a>-->
<!--                <a href="javascript:;">Pizza</a>-->
<!--                <a href="javascript:;">Burger</a>-->
<!--                <a href="javascript:;">Biriyani</a>-->
<!--                <a href="javascript:;">Momo</a>-->
<!--                <a href="javascript:;">Rasagulla</a>-->
<!--                <a href="javascript:;">Rolls</a>-->
<!--                <a href="javascript:;">Meals</a>-->
<!--                <a href="javascript:;">Chicken Curry</a>-->
<!--                <a href="javascript:;">Enjoy</a>-->
<!--                <a href="javascript:;">Ramen</a>-->
<!--                <a href="javascript:;">Unagi</a>-->
<!--                <a href="javascript:;">Food</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
