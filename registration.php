<!-- include logohtml and logo.css-->
<?php
session_start();
$con = mysqli_connect('localhost','root','','bookmark') or die(mysql_error($con));
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
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/logo.css">
    <title>Register</title>
</head>

<body>
    <div class="top">
        <header class="header">
            <header class="header">
                <div class="header-1">
                    <a href="index.html" class="logo"><i class="fa-solid fa-book"></i>The BookMark</a>

                </div>
            </header>
        </header>
    </div>
    <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="register">
        <h2 class="title">Register your account</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <div class="input-group">
                <input type="name" id="name" name="name" placeholder="Full Name" required>
                <i class='bx bx-user'></i>
            </div>
            <small></small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <input type="email" id="email" name="email" required placeholder="Email address">
                <i class='bx bx-envelope'></i>
            </div>
            <small></small>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <div class="input-group">
                <input type="phone" id="phone" name="phone" required placeholder="Phone number">
                <i class='bx bx-phone'></i>
            </div>
            <small></small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" id="password" name="password"  required placeholder="Your password"
                   
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    >
                <i class='bx bx-lock-alt'></i>
            </div>
            <span class="help-text">Must contain at least one number and one uppercase and lowercase letter, and at
                least 8 or more characters</span>
        </div>

        <div class="form-group">
            <label for="confirm-pass">Confirm password</label>
            <div class="input-group">
                <input type="password" id="confirm-pass" name="confirmpassword" required placeholder="Enter password again">
                <i class='bx bx-lock-alt'></i>
            </div>
            <span class="help-text">Confirm password must be same with password</span>
        </div>
        <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
        
        <button type="submit" name="submit" class="btn-submit">Register</button>
        <p>I already have an account. <a href="login.php">Login</a></p>
    </form>
    </div>
    </div>

    <!--php validation for regitration form-->
    <?php
        /*if(isset($_POST['submit'])){
        $email = $_POST ["email"];  
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $email) ){  
            $ErrMsg = "Email is not valid.";  
                    echo $ErrMsg;  
        } else {  
            echo "Your valid email address is: " .$email;  
        }
    } */
        if(isset($_POST['submit'])){
            $name =mysqli_real_escape_string($con,$_POST['name']);
            $email =mysqli_real_escape_string($con,$_POST['email']);
            $phone =mysqli_real_escape_string($con,$_POST['phone']);
            $password =md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
            $confirm =md5(md5(mysqli_real_escape_string($con,$_POST['confirmpassword'])));
            $email_check = "select * from register where email ='$email' ";
            $email_result = mysqli_query($con,$email_check);
            $email_count = mysqli_num_rows($email_result);
            if($email_count>0){
                echo"<center><h4>Email already exists try login <button><a href='login.php'>Log in</a></button><h4></center>";
            }
            else{
                if($password==$confirm){
                $insert_query ="insert into register (name, email, phone, password) values ('$name', '$email', '$phone', '$password')";
                $insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
                echo"<center>You have successfully registered,try login <button class='btn signup'><a href='login.php'>Log in</a></button></center>";
                }
                else{
                  echo"passwords dont match";
                }
            }

        }

?>