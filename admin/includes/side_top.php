<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-paw"></i>
                <span>Kwiqpick Blog</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <?php
                $query = "SELECT * FROM users WHERE username = '{$_SESSION['username']}'";
                $select_query = mysqli_query($connection, $query);
                confirmQuery($select_query);
                while ($row = mysqli_fetch_assoc($select_query)) {

                    $user_image = $row['user_image'];

                    ?>
                    <img src="../images/<?php echo $user_image; ?>" alt="No Image"
                         class="img-circle profile_img">
                    <?php
                }
                ?>
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo strtoupper($_SESSION['username'])?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>