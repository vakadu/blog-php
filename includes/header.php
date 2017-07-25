<?php
//make database and function files global to all
include "database.php";
include "admin/functions.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<head>
    <title>Kwiqpick | Blog</title>
    <!-- Kwiqpick Blog Page -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Kwiqpick">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" lang="en" content="Kwiqpick">
    <meta name="keywords" lang="en" content="Kwiqpick, blog, landing blog page,
    mobile-landing page, responsive, responsive blog page,
    fully responsive">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!--Custom Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!--Kwiqpick blog css-->
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

<header id="header">
    <div class="nav-container">
        <div class="container">
            <div class="row">
                <nav class="main-navigation">
                    <div class="col-md-3">
                        <div class="kwiqpick-logo">
                            <a href="index.php">
                                <img src="images/KWIQPICK_Logo_1150x250.png" alt="Kwiqpick">
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>



<!--<nav id="mainNav" class="navbar navbar-custom">-->
<!--    <div class="container">-->
<!--        <!-- Brand and toggle get grouped for better mobile display -->
<!--        <div class="navbar-header page-scroll">-->
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
<!--                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>-->
<!--            </button>-->
<!--            <a class="navbar-brand kwiqpick-logo" href="index.php"><img src="images/KWIQPICK_Logo_1150x250.png"></a>-->
<!--        </div>-->
<!---->
<!--        <!-- Collect the nav links, forms, and other content for toggling -->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li class="hidden">-->
<!--                    <a href="#page-top"></a>-->
<!--                </li>-->
<!--                --><?php
//
//                $query = "SELECT * FROM categories ORDER BY cat_id DESC LIMIT 4";
//                $select_query = mysqli_query($connection, $query);
//                confirmQuery($select_query);
//                while ($row = mysqli_fetch_assoc($select_query)){
//
//                    $cat_id = $row['cat_id'];
//                    $cat_title = $row['cat_title'];
//
//                    echo "<li> <a class='active' href='category.php?category=$cat_id&title=$cat_title'>{$cat_title}</a></li>";
//                }
//
//                ?>
<!--            </ul>-->
<!--        </div>-->
<!--        <!-- /.navbar-collapse -->
<!--    </div>-->
<!--    <!-- /.container-fluid -->
<!--</nav>-->