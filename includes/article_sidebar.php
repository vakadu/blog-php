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
    <div class="blog-widget">
        <div class="well">
            <h3>Login</h3>
            <form action="includes/login.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                           placeholder="Username">
                </div>
                <div class="input-group">
                    <input type="password" name="password" class="form-control"
                           placeholder="Password">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" name="login" type="submit" >Login
                    </button>
                </span>
                </div>
            </form> <!-- search form end -->
        </div>
    </div>
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
            <form class="subscribe-form">
                <input type="text" placeholder="e-mail">
                <a href="" class="sidebar-button button-color">Subscribe</a>
            </form>
        </div>
    </div>
    <div class="blog-widget">
        <h3 class="hasMargin">Category</h3>
        <div class="widget-body">
            <ul>
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
    <!--                <div class="blog-widget">-->
    <!--                    <h3 class="hasMargin">Tags</h3>-->
    <!--                    <div class="widget-body">-->
    <!--                        <div class="widget-tags">-->
    <!--                            <a href="javascript:;">Blog</a>-->
    <!--                            <a href="javascript:;">Pizza</a>-->
    <!--                            <a href="javascript:;">Burger</a>-->
    <!--                            <a href="javascript:;">Biriyani</a>-->
    <!--                            <a href="javascript:;">Momo</a>-->
    <!--                            <a href="javascript:;">Rasagulla</a>-->
    <!--                            <a href="javascript:;">Rolls</a>-->
    <!--                            <a href="javascript:;">Meals</a>-->
    <!--                            <a href="javascript:;">Chicken Curry</a>-->
    <!--                            <a href="javascript:;">Enjoy</a>-->
    <!--                            <a href="javascript:;">Ramen</a>-->
    <!--                            <a href="javascript:;">Unagi</a>-->
    <!--                            <a href="javascript:;">Food</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
</div>
