<?php

function confirmQuery($result){

    global $connection;
    if (!$result) {
        die("Query Failed " . mysqli_error($connection));
    }
}

function redirect($location){

    header("Location: " . $location);
}

function set_message($message){

    if(!empty($message)){

        $_SESSION['message'] = $message;
    }
    else{
        $message = "";
    }
}
function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function validation_errors($error_message){
    $alert_error_message = "
    <div class='alert alert-danger alert-dismissible' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <strong>Warning!</strong>
    {$error_message}
    </div>
    ";
    return $alert_error_message;
}

//Add post
function add_post(){

    global $connection;
    if (isset($_POST['create_post'])){

        $post_title = $_POST['title'];
        $post_category_id = $_POST['category'];
        $post_author = $_POST['author'];
        $post_status = $_POST['status'];
        $post_image = $_FILES['image']['name'];
        $post_tmp_image = $_FILES['image']['tmp_name'];
        $post_date  = date("F j, Y");
        $post_tags = $_POST['tags'];
        $post_content = $_POST['content'];
        $post_content = str_replace("'", "''", $post_content);
        $post_comment_count = 0;
        $post_tags = explode(",", $post_tags);
        $post_tags = implode(", ", $post_tags);

        move_uploaded_file($post_tmp_image, "../images/$post_image");

        $query  = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
        $query .= "VALUES({$post_category_id}, '{$post_title}', '{$post_author}', '{$post_date}', '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";

        $insert_query = mysqli_query($connection, $query);
        if (!$insert_query){

            die("Query failed " . mysqli_error($connection));
        }
        else{
            echo "
            <div class='col-md-12 col-xs-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 </a>
                <strong>{$post_title} post created!</strong>
              </div>
            </div>
            ";
        }
    }
}

function add_post_category(){

    global $connection;
    $query = "SELECT * FROM categories";
    $category_query = mysqli_query($connection, $query);
    if (!$category_query){

        die("Query failed " . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($category_query)){

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<option value='{$cat_id}'>{$cat_title}</option>";
    }
}

//Add User
function add_user(){

    global $connection;
    if (isset($_POST['create_user'])){

        $user_firstname = $_POST['first_name'];
        $user_lastname = $_POST['last_name'];
        $username = $_POST['username'];
        $user_image = $_FILES['user_image']['name'];
        $user_tmp_image = $_FILES['user_image']['tmp_name'];
        $user_role = $_POST['role'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_password = password_hash($user_password, PASSWORD_BCRYPT);

        move_uploaded_file($user_tmp_image, "../images/$user_image");

        $query  = "INSERT INTO users(username, user_firstname, user_lastname, user_image, user_role, user_email, user_password) ";
        $query .= "VALUES('{$username}', '{$user_firstname}', '{$user_lastname}', '{$user_image}', '{$user_role}', '{$user_email}', '{$user_password}')";

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
}

function login_user(){

    global $connection;
    if (isset($_POST['login_submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "SELECT * FROM users WHERE username = '{$username}'";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query){
            die("Failed " . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($select_query)){

            $db_id = $row['user_id'];
            $db_username = $row['username'];
            $db_password = $row['user_password'];
            $db_user_firstname = $row['user_firstname'];
            $db_user_lastname = $row['user_lastname'];
            $db_role = $row['user_role'];
        }

        if ($username !== $db_username && $password !== $db_password){

            redirect("../index.php");
        }
        elseif (password_verify($password, $db_password)){

            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['user_role'] = $db_role;
            redirect("../admin");
        }
        else{

            redirect("../index.php");
        }

//    login_user($_POST['username'], $_POST['password']);
    }
}

function insert_category(){

    global $connection;
    if (isset($_POST['submit_category'])) {

        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)) {

            echo "
            <div class='col-md-12'>
              <div class='alert alert-danger alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>This field cannot be empty.!</strong>
              </div>
            </div>
            ";
        } else {
            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUES('{$cat_title}')";
            $create_category_query = mysqli_query($connection, $query);
            if (!$create_category_query) {

                die("Query failed " . mysqli_error($connection));
            } else {
                echo "
            <div class='col-md-12'>
              <div class='alert alert-success alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Category inserted successfully.!</strong>
              </div>
            </div>
            ";
            }
        }
    }
}

function findAllCategories(){

    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_categories)) {

        $cat_id = $row['cat_id'];
        $cat_title = ucfirst($row['cat_title']);
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td>
                <a href='categories.php?edit={$cat_id}' class='btn btn-info'><i class='fa fa-pencil'></i>
                </a>
                <a onclick=\"javascript:; return confirm('Are you sure you want to delete')\" href='categories.php?delete={$cat_id}' class='btn btn-danger'><i class='fa fa-trash-o'></i>
                </a>
               </td>";
        echo "</tr>";
    }
}

function deleteCategories(){

    global $connection;

    if (isset($_GET['delete'])) {

        $cat_id_delete = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$cat_id_delete} ";
        $delete_query = mysqli_query($connection, $query);
        redirect("categories.php");
    }
}

function update_profile(){

    global $connection;
    if (isset($_POST['update_profile'])) {

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

        if (empty($user_image)) {
            $query = "SELECT * FROM users WHERE username = '{$username}'";
            $select_image = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($select_image)) {
                $user_image = $row['user_image'];
            }
        }

        $query = "UPDATE users SET ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "username = '{$username}', ";
        $query .= "user_image = '{$user_image}', ";
        $query .= "user_role = '{$user_role}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_password = '{$user_password}' ";
        $query .= "WHERE username = '{$username}'";

        $update_query = mysqli_query($connection, $query);
        if (!$update_query) {

            die("Query failed " . mysqli_error($connection));
        } else {
            echo "
                        <div class='col-md-12 col-xs-12'>
                            <div class='alert alert-success alert-dismissable fade in'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;                 
                                </a>
                                <strong>{$username} has updated!</strong>
                            </div>
                        </div>
                        ";
        }
    }
}

function recordCount($table){

    global $connection;
    $query = "SELECT * FROM " . $table;
    $select_query = mysqli_query($connection, $query);
    $count_rows = mysqli_num_rows($select_query);
    return $count_rows;
}
