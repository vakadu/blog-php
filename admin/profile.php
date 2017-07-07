<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<?php

if (isset($_SESSION['username'])){

    $username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '{$username}'";
    $profile_query = mysqli_query($connection, $query);
    confirmQuery($profile_query);
    while ($row = mysqli_fetch_assoc($profile_query)){

        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];
    }
}

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Profile</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <?php update_profile(); ?>

                        <form class="form-horizontal form-label-left" action="" method="post"
                              enctype="multipart/form-data">
                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <input id="firstname" class="form-control col-md-7 col-xs-12" name="first_name" type="text" value="<?php echo $user_firstname; ?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <input id="lastname" class="form-control col-md-7 col-xs-12" name="last_name" type="text" value="<?php echo $user_lastname; ?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <input id="username" class="form-control col-md-7 col-xs-12" name="username" type="text" value="<?php echo $username; ?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <?php
                                    if (empty($user_image)){
                                        echo "<img src='../images/default_image.png' width='200' alt='' class='img-responsive'>";
                                    }
                                    else{
                                        echo "<img src='../images/$user_image' width='200' alt='' class='img-responsive'>";
                                    }
                                    ?>
                                    <input type="file" id="user_image" name="user_image" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <select class="form-control" name="role">
                                        <option value="Subscriber"><?php echo $user_role; ?></option>
                                        <?php
                                        if ($user_role == 'Admin'){
                                            echo "<option value='Subscriber'>Subscriber</option>";
                                        }
                                        else {
                                            echo "<option value='Admin'>Admin</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <input id="user_email" class="form-control col-md-7 col-xs-12" name="user_email" type="email" value="<?php echo $user_email; ?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
                                    <input id="password" class="form-control col-md-7 col-xs-12" name="user_password" type="password" value="<?php echo $user_password; ?>">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-1">
                                    <button id="user-submit" name="update_profile" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
