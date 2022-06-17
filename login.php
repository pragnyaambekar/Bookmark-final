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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="assets/logo.css">
	<title>The bookmark Sign up</title>
</head>
<body>
    <div class="top">
    <header class="header">
        <header class="header">
            <div class="header-1">
                <a href="index.html" class="logo"><i class="fa-solid fa-book"></i>The BookMark</a>

            </div>
        
        </header>
    </div>
    
<!-- login pahe starts-->
<div class="altbody">
<div class="container">
    <form action="login.php" method="post"class="login active">
        <h2 class="title">Login with your account</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email address">
                <i class='bx bx-envelope'></i>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password"pattern=".{8,}" id="password" placeholder="Your password">
                <i class='bx bx-lock-alt' ></i>
            </div>
            <span class="help-text">At least 8 characters</span>
        </div>
        <button type="submit" name="submit" class="btn-submit">Login</button>
        
        <p>I don't have an account. <a href="registration.php" >Register</a></p>
    </form>

<?php

if(isset($_POST['submit'])){
    // validation of email and password*/
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $password =md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    $email_password_check = "select * from register where email='$email' and password = '$password'";
    $email_password_result = mysqli_query($con,$email_password_check);
    if(mysqli_num_rows($email_password_result)){
        $pass = mysqli_fetch_array($email_password_result);
        if($pass['password']==$password){
            $user = "select id,name,email,phone,password from register where email='$email'";
            $user_result = mysqli_query($con,$user);
            $user_fetch = mysqli_fetch_array($user_result) or die(mysqli_error($con));
            $_SESSION['name'] = $user_fetch['name'];
            $_SESSION['password'] = $user_fetch['password'];
            $_SESSION['email'] = $user_fetch['email'];
            $_SESSION['id'] = $user_fetch['id'];
            $_SESSION['phone'] = $user_fetch['phone'];

            header("location:home.php");
        }
        else{
            echo"<center>Incorrect password</center>";
        }
    }
    else{
        echo"<center>Incorrect email or password. New user? <button class='btn signup'><a href='registration.php' >Signup here</a></button><center>";
    }
   
    


}
?>

</body>
</html>