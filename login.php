<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="">
        <div class="imgcontainer">
            <center><img src="enlogo.png" alt="Avatar"  width="80" height="80"></center>
        </div>
     <center> <h3>COLLEGE OF ENGINEERING</h3></center>
     
      <div class="input-box">
        <input type="text" placeholder="Username" required maxlength="11">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="registration.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>