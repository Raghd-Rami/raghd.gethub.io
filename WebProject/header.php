<?php session_start();
// ob_start();
include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="icon" href="../WebProject/assets/images/book-icon.jpg" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <label id="mainlogo">Book Store</label>
        <ul class="nav-links">
            <li><a class="hovering" href="index.php">Home</a></li>

            <?php if (isset($_SESSION['user_id'])) { ?>
                <li><a class="hovering" href="cartpage.php">Cart</a></li>

                <li><a class="hovering" href="logout.php">Logout</a></li>
            <?php } else { ?>
                <li><a class="hovering" href="loginpage.php">Login</a></li>

                <li><a class="hovering" href="registerpage.php">Register</a></li>
            <?php } ?>
        </ul>

        <!-- to make it mobile freindly -->
        <div class="mobile">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>