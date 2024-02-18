<!DOCTYPE html>
<html>
<head>
<title>Crop Connect Login</title>
<link rel="stylesheet" href="log.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
  <body>
  <?php
  include('header.html');
  ?>

  <div class="wrapper">
  <form action="log.php" method="post">
    <h1>Login</h1>
    <div class="name">
        <input type="text" name="username" placeholder="Username">
        <i class='bx bxs-user'></i>
    </div>
    <div class="email">
        <input type="email" name="email" placeholder="Email ID">
        <i class='bx bxs-user'></i>
    </div>
    <div class="password">
        <input type="password" name="password" placeholder="Password">
        <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="remember-forgot">
        <label>
            <input type="checkbox" placeholder="Remeber me">
            Remeber me
        </label>
            <a href="#">Forgot Password?</a>
    </div>
    <button type="submit" class="btn">Login</button>
    <div class="register-link">
        <p>Don'have an account? <a href="#">Register</a></p>

    </div>
  </form>
</div>
 
  <?php
  include('footer.html');
  ?>
</body>
</html>