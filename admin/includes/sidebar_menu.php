
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li>
                <a href="index.php"><i class="fa fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-edit"></i> Posts
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="posts.php">View All Posts</a></li>
                    <li><a href="posts.php?source=add_post">Add Post</a></li>
                </ul>
            </li>
            <li>
                <a href="categories.php"><i class="fa fa-folder-o"></i>
                    Categories
                </a>
            </li>
            <li>
                <a href="comments.php"><i class="fa fa-comments-o"></i>
                    Comments
                </a>
            </li>
            <?php
            $query = "SELECT * FROM users";
            $select_query = mysqli_query($connection, $query);
            confirmQuery($select_query);
            while ($row = mysqli_fetch_assoc($select_query)) {

                $user_id = $row['user_id'];
                $username = $row['username'];
                $user_role = $row['user_role'];


                if ($username == $_SESSION['username'] && $_SESSION['user_role'] == 'Admin'){

                    echo "<li>
                            <a href='javascript:;'><i class='fa fa-users'></i> Users
                                <span class='fa fa-chevron-down'></span>
                            </a>
                            <ul class='nav child_menu'>
                                <li><a href='users.php'>View All Users</a></li>
                                <li><a href='users.php?source=add_user'>Add User</a></li>
                            </ul>
                           </li>";
                }
            }
            ?>

            <li>
                <a href="subscribers.php"><i class="fa fa-envelope"></i>
                    Subscribers
                </a>
            </li>
            <li>
                <a href="profile.php"><i class="fa fa-user-secret"></i>
                    Profile
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
</div>
</div>