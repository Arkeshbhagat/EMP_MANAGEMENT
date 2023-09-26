<?php 
  session_start();


  if(isset($_SESSION['id'])){
    header('location:dashboard.php');
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee registration</title>
  <link rel="stylesheet" href="Employee.css" />
</head>
<body>
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="navigation">
              <a href="#">Home</a>
              <a href="eaboutus.php">About</a>
              <a href="#">contact</a>
              <a href="display.php">Show Data</a>
              <button class="btnLogin-popup">
                Login
              </button>
            </nav>
        </header>

        <div class="wrapper">
          <span class="icon-close">
            <ion-icon name="close"></ion-icon>
          </span>

          <div class="form-box login">
            <h2>Login</h2>
            <form action="losubmit.php" method="POST">
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="text" name="username" required>
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox">
                  remember me
                </label>
                <a href="#">Forgot Password?</a>
              </div>
              <button type="submit" name="login" class="btn">Login</button>
              <div class="login-register">
                <p>Don't have an account?<a href="#" class="register-link">register</a></p>
              </div>
            </form>
          </div>

          <div class="form-box register">
            <h2>Registration</h2>
            <form action="esubmit.php" method="POST">
              <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="username" required>
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label>E-mail</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="call"></ion-icon></span>
                <input type="tel" name="contact" required>
                <label>Contact No.</label>
              </div>
              <div class="remember-forgot">
                <label><input type="checkbox">
                  I Agree to the terms & conditions
                </label>
              </div>
              <button type="submit" class="btn" name="submit">Register</button>
              <div class="login-register">
                <p>Already have an account?<a href="#" class="login-link">Login</a></p>
              </div>
            </form>
          </div>

        </div>


        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>