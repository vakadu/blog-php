<table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Image</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
        <th>Admin</th>
        <th>Subscriber</th>
        <th>Take Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM users";
    $select_users = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_users)){

        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];

        echo "<tr>";
        echo "<td>{$user_id}</td>";
        echo "<td>{$username}</td>";
        if (empty($user_image)){
            echo "<td><img src='../images/default_image.png' height='40px'></td>";
        }
        else{
            echo "<td><img src='../images/{$user_image}' height='40px'></td>";
        }
        echo "<td>{$user_firstname}</td>";
        echo "<td>{$user_lastname}</td>";
        echo "<td>{$user_email}</td>";
        echo "<td>{$user_role}</td>";
        echo "<td>
<a href='users.php?change_to_admin={$user_id}' class='btn btn-success btn-xs'><i class='fa fa-user'></i> Admin</a></td>";
        echo "<td><a href='users.php?change_to_subscriber={$user_id}' class='btn btn-success btn-xs'><i class='fa fa-user'></i> Subscriber</a> </td>";
        echo "<td>
                <ul class='take-action'>
                <li> <a href='users.php?source=edit_user&edit_user={$user_id}' class='btn btn-info'><i class='fa fa-pencil'></i>
            </a></li>
                <li><a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='users.php?delete={$user_id}' class='btn btn-danger'><i class='fa fa-trash-o'></i></a></li>
                </ul>
           </td>";
        echo "</tr>";
    }
    ?>

    </tbody>
</table>

<?php

if (isset($_GET['change_to_admin'])){

    $change_to_admin = $_GET['change_to_admin'];
    $query = "UPDATE users SET user_role = 'Admin' WHERE user_id = {$change_to_admin}";
    $admin_query = mysqli_query($connection, $query);
    redirect("users.php");
}

if (isset($_GET['change_to_subscriber'])){

    $change_to_subscriber = $_GET['change_to_subscriber'];
    $query = "UPDATE users SET user_role = 'Subscriber' WHERE user_id = {$change_to_subscriber}";
    $subscriber_query = mysqli_query($connection, $query);
    redirect("users.php");
}

//deleting user
if (isset($_GET['delete'])){

    $delete_user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$delete_user_id}";
    $delete_query = mysqli_query($connection, $query);
    redirect("users.php");
}
