<?php

function confirmQuery($result)
{

    global $connection;
    if (!$result) {
        die("Query Failed " . mysqli_error($connection));
    }
}

function redirect($location)
{

    header("Location: " . $location);
}

function insert_category()
{

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

function findAllCategories()
{

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

function deleteCategories()
{

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
