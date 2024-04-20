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
  <form action="signup.jsp" method="post">
    <h1>Sign Up</h1>
    <div class="name">
        <input type="text" name="name" placeholder="Username">
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
    <div class="password">
        <input type="password" name="Confirmpassword" placeholder="Confirm Password">
        <i class='bx bxs-lock-alt'></i>
    </div>
    <button type="submit" class="btn">Submit</button>
  </form>
</div>
 
  <?php
  include('footer.html');
  ?>
</body>
</html>