<?php

if (isset($_POST['create_user'])){

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

    $query  = "INSERT INTO users(username, user_firstname, user_lastname, user_image, user_role, user_email, user_password) ";
    $query .= "VALUES('{$username}', '{$user_firstname}', '{$user_lastname}', '{$user_image}', '{$user_role}', '{$user_email}', {$user_password})";

    $insert_query = mysqli_query($connection, $query);
    if (!$insert_query){

        die("Query failed " . mysqli_error($connection));
    }
    else{
        echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert'
                aria-label='close'>&times;                 </a>
                <strong>User with {$username} is created!</strong>
              </div>
            </div>
            ";
    }
}

?>

<form class="form-horizontal form-label-left" action="" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">First
            Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="firstName" class="form-control col-md-7 col-xs-12"
                   name="first_name" placeholder="e.g Vinod" type="text">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Last Name
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="lastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" placeholder="e.g Kumar" type="text">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="username" name="username" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span
                class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="image" name="user_image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control" name="role">
                <option value="subscriber">Select Status</option>
                <option value="admin">Admin</option>
                <option value="subscriber">Subscriber</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="email" id="email" name="user_email" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu10@gmail.com">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_password">Password
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="password" id="user_password" name="user_password"
                   class="form-control col-md-7 col-xs-12" placeholder="e.g abc123">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button id="post-submit" name="create_user" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>