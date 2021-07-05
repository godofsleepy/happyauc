<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php echo site_url('asset/dist/css/blog.css') ?>" rel="stylesheet">
    <title>HappyAuc:)</title>
    <link rel="shortcut icon" href="<?php echo site_url("asset/img/H).png") ?>" />
    <style>
        body {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Nav -->
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
            <a class="navbar-brand" href="#">
                <img src=" <?php echo site_url("/asset/img/logo.png") ?>" width="120" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100 text-center" id="collapsingNavbar3">
                <ul style="padding-left: 16.5em" class="navbar-nav w-100 justify-content-center">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            List
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($status == "login") { ?>

                            <a class="nav-link dropdown-toggle" href="#" style="color: black;" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo site_url('asset/img/person.svg') ?>" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="<?php echo site_url('registitem') ?>">Add Auction</a>
                                <a class="dropdown-item" href="<?php echo site_url('home/logout') ?>"><b>logout</b></a>
                            </div>
                        <?php } else { ?>
                            <a class="nav-link" href="<?php echo site_url('login') ?>" style="color: black;"><b>Login</b></a>
                        <?php } ?>

                    </li>
                </ul>
            </div>
        </nav>