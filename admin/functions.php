<?php

function confirmQuery($result){

    global $connection;
    if (!$result){
        die("Query Failed " . mysqli_error($connection));
    }
}

function redirect($location){

    header("Location: " . $location);
}

function insert_category(){

    global $connection;
    if (isset($_POST['submit_category'])){

        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)){

            echo "
            <div class='col-md-12'>
              <div class='alert alert-danger alert-dismissable fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>This field cannot be empty.!</strong>
              </div>
            </div>
            ";
        }
        else{
            $query  = "INSERT INTO categories(cat_title) ";
            $query .= "VALUES('{$cat_title}')";
            $create_category_query = mysqli_query($connection, $query);
            if (!$create_category_query){

                die("Query failed " . mysqli_error($connection));
            }
            else{
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
    while ($row = mysqli_fetch_assoc($select_categories)){

        $cat_id = $row['cat_id'];
        $cat_title = ucfirst($row['cat_title']);
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td>
                <a href='#' class='btn btn-primary btn-xs'><i class='fa fa-folder'></i> View
                </a>
              </td>";
        echo "<td>
                <a href='categories.php?edit={$cat_id}' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i div> Edit
                </a>
               </td>";
        echo "<td>
                <a href='categories.php?delete={$cat_id}' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete
                </a>
               </td>";
        echo "</tr>";
    }
}

function deleteCategories(){

    global $connection;

    if (isset($_GET['delete'])){

        $cat_id_delete = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$cat_id_delete} ";
        $delete_query = mysqli_query($connection, $query);
        redirect("categories.php");
    }
}

//function login_user($username, $password){
//
//    global $connection;
//
//    $username = trim($username);
//    $password = trim($password);
//
//    $username = mysqli_real_escape_string($connection, $username);
//    $password = mysqli_real_escape_string($connection, $password);
//
//    $query = "SELECT * FROM users WHERE username = '{$username}'";
//    $select_query = mysqli_query($connection, $query);
//    confirmQuery($select_query);
//
//    while ($row = mysqli_fetch_assoc($select_query)){
//
//        $db_user_id = $row['user_id'];
//        $db_username = $row['username'];
//        $db_user_password = $row['user_password'];
//        $db_user_firstname = $row['user_firstname'];
//        $db_user_lastname = $row['user_lastname'];
//        $db_user_role = $row['user_role'];
//    }
//
//    if (password_verify($password, $db_user_password)){
//
//        $_SESSION['username'] = $db_username;
//        $_SESSION['firstname'] = $db_user_firstname;
//        $_SESSION['lastname'] = $db_user_lastname;
//        $_SESSION['user_role'] = $db_user_role;
//        redirect("/Kwiqpick_Blog/admin/");
//    }
//    else{
//        redirect("/Kwiqpick_Blog/test.php");
//    }
//}
