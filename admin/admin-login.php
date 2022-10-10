<?php 
require("config.php")
?>

<html>

<head>
  <title>Hotel Aamod- Admin Login</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="./css/admin-login.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
</head>

<body>

  <section class="login__page">

    <div class="login__img">
      <img src="../assets/latest/Deluxe Room with Balcony.jpg" alt="">
    </div>
    <div class="login__content">
      <div class="logo">
        <img src="../assets/img/logo-1.png" alt="">
      </div>
      <p>Welcome Back!</p>
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="user">
          <label for="username">Username</label>
          <input type="text" name="AdminName" placeholder="Username">
        </div>
        <div class="pass">
          <label for="Password">Password</label>
          <input type="password" name="AdminPassword" placeholder="Password">
        </div>
        <button type="submit" name="Signin" class="submit">Login</button>
      </form>
    </div>
  </section>

  <?php
  if(isset($_POST['Signin']))
  {
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1)
    {
      session_start();
      $_SESSION["AdminLoginId"]=$_POST['AdminName'];
      header("location: index.php");
    }
    else
    {
      echo "<script>alert('Incorrect Password')</script>";
    }
  }
  ?>

</body>

</html>