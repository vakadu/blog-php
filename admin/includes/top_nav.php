<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php
                        $query = "SELECT * FROM users WHERE username = '{$_SESSION['username']}'";
                        $select_query = mysqli_query($connection, $query);
                        confirmQuery($select_query);
                        while ($row = mysqli_fetch_assoc($select_query)) {

                            $user_image = $row['user_image'];

                            if (empty($user_image)){
                                echo "<img src='../images/default_image.png' alt=''>" . $_SESSION['username'];
                            }
                            else{
                                echo "<img src='../images/$user_image' alt=''>" . $_SESSION['username'];
                            }
                        }
                        ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="profile.php"> Profile</a></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out
                        pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->