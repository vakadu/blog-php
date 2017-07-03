<?php
//make database and function files global to all
include "database.php";
include "../admin/functions.php";
?>

<?php

if (isset($_POST['login'])){

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

        redirect("../home.php");
    }
    elseif ($username == $db_username && $password == $db_password){

        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_role;
        redirect("../admin");
    }
    else{

        redirect("../home.php");
    }

//    login_user($_POST['username'], $_POST['password']);
}


