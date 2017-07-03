<?php

if (isset($_GET['edit_user'])){

    $edit_user = $_GET['edit_user'];

    $query = "SELECT * FROM users WHERE user_id = {$edit_user}";
    $select_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_query)){

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

if (isset($_POST['update_user'])){

    $user_firstname = $_POST['first_name'];
    $user_lastname = $_POST['last_name'];
    $username = $_POST['username'];
    $user_image = $_FILES['user_image']['name'];
    $user_tmp_image = $_FILES['user_image']['tmp_name'];
    $user_role = $_POST['role'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    //$user_password = password_hash($user_password, PASSWORD_BCRYPT);

    move_uploaded_file($user_tmp_image, "../images/$user_image");

    if (empty($user_image)){
        $query = "SELECT * FROM users WHERE user_id = $edit_user ";
        $select_image = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($select_image)){
            $user_image = $row['user_image'];
        }
    }

    $query  = "UPDATE users SET ";
    $query .= "user_firstname = '{$user_firstname}', ";
    $query .= "user_lastname = '{$user_lastname}', ";
    $query .= "username = '{$username}', ";
    $query .= "user_image = '{$user_image}', ";
    $query .= "user_role = '{$user_role}', ";
    $query .= "user_email = '{$user_email}', ";
    $query .= "user_password = '{$user_password}' ";
    $query .= "WHERE user_id = {$edit_user}";

    $update_query = mysqli_query($connection, $query);
    if (!$update_query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>{$username} has updated!</strong>
              </div>
            </div>
            ";
    }
}

?>

<form class="form-horizontal form-label-left" action="" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="firstname" class="form-control col-md-7 col-xs-12"
                   name="first_name" type="text" value="<?php echo $user_firstname; ?>">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="lastname" class="form-control col-md-7 col-xs-12"
                   name="last_name" type="text" value="<?php echo $user_lastname; ?>">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="username" class="form-control col-md-7 col-xs-12"
                   name="username" type="text" value="<?php echo $username; ?>">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <img src="../images/<?php echo $user_image; ?>" width="200" alt="Image not
            displayed" class="img-responsive">
            <input type="file" id="user_image" name="user_image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <select class="form-control" name="role">
                <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
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
            <input id="user_email" class="form-control col-md-7 col-xs-12"
                   name="user_email" type="email" value="<?php echo $user_email; ?>">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="password" class="form-control col-md-7 col-xs-12"
                   name="user_password" type="password" value="<?php echo $user_password; ?>">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button id="user-submit" name="update_user" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>