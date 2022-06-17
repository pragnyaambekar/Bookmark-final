<?php
$con = mysqli_connect("localhost","root","","bookmark") or die(mysqli_error($con));
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <!-- header section -->
    <header class="header">
        <div class="header-1">
        <a href="home.php" class="logo"><i class="fa-solid fa-book"></i>The BookMark</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here" id="search-box">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
                <a href="#" class="fa-solid fa-cart-shopping"></a>
                <a href="profile.php" class="fa-solid fa-user"></a>
                <a href="logout.php" class="fa-solid fa-sign-out"></a>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="#featured">featured</a>
                <a href="#deal">Deals</a>
                <a href="aboutus.php">About us</a>
                <a href="contactus.php">Contact us</a>
            </nav>
        </div>

    </header>
    <center>
    <h1>Your details</h1>
    <table>
        <tr>
            <th>Name:</th>
            <td><?php echo $_SESSION['name'];?></td>
        </tr>
        <tr>
            <th>Email-id:</th>
            <td><?php echo $_SESSION['email'];?></td>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <td><?php echo $_SESSION['phone'];?></td>
        </tr>
    </table>
   <button class="btn"> <a href="change_password.php">Change Password</a></button>
    </center>
</body>

</html>