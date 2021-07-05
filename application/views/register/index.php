<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>HappyAuc:)</title>
    <link rel="shortcut icon" href="../asset/img/H).png" />
</head>

<body>
    <div class="container">

        <!-- Nav -->
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="../asset/img/logo.png" width="120" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
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
                        <a class="nav-link" href="#" style="color: black;"><b><i>Login</i></b></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div style="margin-top: 3rem" class="text-center">
            <p class="h3">Register</p>
            <form action="<?php echo site_url('register/insert') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idcard">IdCard</label>
                        <input name="idcard" type="number" class="form-control" id="idcard">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Date Birth</label>
                        <input name="datebirth" type="date" placeholder="DD" class="form-control" id="idcard">
                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="creditcard">Credit Card Number</label>
                        <input name="creditcard" type="number" class="form-control" id="creditcard">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>
                        <input name="phone" type="number" class="form-control" id="phone">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cardholder">Cardholder Name</label>
                        <input name="cardholder" type="text" class="form-control" id="cardholder">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputState">Expire</label>
                        <input name="monthcard" type="number" placeholder="MM" class="form-control" id="idcard">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputState">.</label>
                        <input name="yearcard" type="number" placeholder="YY" class="form-control" id="idcard">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Accept the license aggreement.
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Sign up</button>
            </form>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>