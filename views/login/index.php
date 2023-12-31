<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/login/style.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>FastMeds | Login & Register</title>
</head>
<body >
    <main id="main">
        <form action="<?=$_ENV['APP_URL']?>/home" method="POST" class="login" id="login">
            <h1>Login <i class="bi bi-person-circle"></i></h1>
            <input type="email" name="email" placeholder="Email or Username">
            <input type="password" name="password" placeholder="Password">
            <a href="#">Forgot Password?</a>
            <button type="submit">Login <i class="bi bi-arrow-right"></i></button>
            <p onclick="toggleForm(1)">Don't have an account? <a href="#" >Sign Up</a></p>
        </form>
        <form action="<?=$_ENV['APP_URL']?>/register" method="POST" class="register" id="register">
            <h1>Sign Up <i class="bi bi-person-plus"></i></h1>
            <input type="text" name="username" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password"  placeholder="Password" id="pass1">
            <input type="password" name="conPassword" placeholder="Confirm Password" id="pass2">
            <p id="msg"></p>
            <button type="submit">Sign Up <i class="bi bi-arrow-right"></i></button>
            <p onclick="toggleForm(0)">Already have an account? <a href="#">Login</a></p>
        </form>
        <img src="assets/login/assets/banner-right.svg" alt="" class="right-img" id="right">
    </main>
    <footer>
        <p><font style="color: #7500db;">FastMeds</font> &copy; 2023-2024 , <font style="color: #7500db;">By Othman Kharbouch</font></p>
    </footer>
    <script src="assets/login/script.js" defer></script>
</body>
</html>