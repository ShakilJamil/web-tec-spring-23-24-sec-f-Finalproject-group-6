<?php

if ((isset($_COOKIE['UserEmail'])) && (isset($_COOKIE['UserPass']))) {
    $Email = $_COOKIE['UserEmail'];
    $Password = $_COOKIE['UserPass'];
} else {
    $Email = "";
    $Password = "";
}

?>

<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="../asset/css/stylebackground.css">
        <link rel="stylesheet" href="../asset/css/logindesign.css">
        <script src="../asset/js/login.js"></script>
    </head>
    <body >
 
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box login">
        <h2>Login</h2>
        <form onsubmit="return IsvalidForm()" method="post" action="../controller/LoginChecker.php" enctype="">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="text" name="email" id="lemail" onkeyup="isValidEmail()" value="<?php echo $Email ?>"></br><small id = "EmailError" style="color: red;"></small>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></ion-icon></span>
                <input type="password"name="password" id="password" onkeyup="isValidPassword()" value="<?php echo $Password ?>"></br><small id = "PassError" style="color:red"></small>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="check"> Remember me</label>
                <a href="forgetPass.html" >    Forgot password?</a>
            </div>
            <button type="submit" name="logsubmit" class="btn">Login</button>
            <div class="login-register">
                <p>Don't have account?<a href="Picker.php" class="register-link">Register</a></p>
            </div>
        </form>
    </div>
 </div>
 

 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

 
    </body>
</html>



