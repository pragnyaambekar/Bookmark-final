<?php
$con = mysqli_connect("localhost","root","","bookmark") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The BookMark</title>
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
                <a href="#deal">Deal</a>
                <a href="aboutus.php">About us</a>
                <a href="contactus.php">Contact us</a>
            </nav>
        </div>

    </header>



    <!-- header section end -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>
    <div class=" container">
            <form method="post" action="change_password.php">
                <div class="panel  panel-primary panelbg">
                    <div class="panel-heading">
                        <center>
                            <h3>Change Password
                            </h3>
                        </center>
                    </div>
                    <div class="panel-body">
                        <label for="password" class="form-label">Old password:
                        </label>
                        <input type="password" class="form-control" id="password" name="oldp"
                            placeholder="Enter your old password" pattern=".{6,}"
                            required>
                    </div>
                    <div class="panel-body">
                        <label for="password" class="form-label">New password:
                        </label>
                        <input type="password" class="form-control" id="password" name="newp"
                            placeholder="Enter your new password" pattern=".{6,}" required>
                    </div>
                    <div class="panel-body">
                        <label for="password" class="form-label">Confirm password:
                        </label>
                        <input type="password" class="form-control" id="password" name="confirmp"
                            placeholder="Confirm your password" pattern=".{6,}" required>
                    </div>
                    <center>
                        <button type="submit" class="btn btnclr" name="submit">Change
                        </button>
                    </center>
                </div>
            </form>
        </div>
       
   </body>
</html>
<?php
/*change password*/
if (isset($_POST['oldp'])) {
    $oldp = md5(md5(mysqli_escape_string($con, $_POST['oldp'])));
}
if (isset($_POST['newp'])) {
    $newp = md5(md5(mysqli_escape_string($con, $_POST['newp'])));
}
if (isset($_POST['confirmp'])) {
    $confirmp = md5(md5(mysqli_escape_string($con, $_POST['confirmp'])));
}
if (isset($_POST['submit'])) {
    $oldpwd = $_SESSION['password'];
    if ($oldpwd == $oldp) {
        if ($newp == $confirmp) {
            $email   = $_SESSION['email'];
            $change = "update register set password='$newp' where name = '$email'";
            $change_result = mysqli_query($con, $change) or die(mysqli_error($con));
            echo "<center><h4>Password successfully changed</h4></center>";
            $oldpwd = $oldp;
            echo "<center><h4><button><a href='home.php'>Back</a></button><h4><center>";
        } else {
            echo "<center><h4>The confirmation password doesnt match</h4></center>";
        }
    } else {
        echo "<center><h4>Entered wrong old password</h4></center>";
    }
}
?>