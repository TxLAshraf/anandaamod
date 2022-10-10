<?php 
 session_start();
 if(!isset($_SESSION['AdminLoginId']))
 {
  header("location: admin-login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/admin-dashboard.css" />
  <link rel="stylesheet" href="./css/admin-sidebar.css">

  <title>HDFC- Admin Panel</title>
</head>

<body>
  <!-- header section start here  -->
  <header class="header">
    <nav>
      <ul>
        <li>
          <a href="" class="logo">
            <img src="../assets/img/logo-1.png" alt="">
          </a>
        </li>
        <li><a href="./" class="active">
            <i class="fas fa-home"></i>
            <span class="nav_item">Dashboard</span>
          </a></li>
        <li><a href="./booking.php">
            <i class="fa-solid fa-calendar-days"></i>
            <span class="nav_item">Bookings</span>
          </a></li>
        <li><a href="./contact.php">
            <i class="fas fa-id-card"></i>
            <span class="nav_item">Contact</span>
          </a></li>
        <li class="">
          <div class="logout">
            <form method="POST">
              <button name="Logout">
                Logout
              </button>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <?php 
        if(isset($_POST['Logout'])) 
        {
          session_destroy();
          header("location: admin-login.php");
        }
      ?>
  </header>
  <section class="main">
    <div class="container">
      <div class="heading">
        <h2>Dashboard</h2>
      </div>
      <div class="count">
        <div class="box box_1">
          <h4>Bookings</h4>
          <?php
          require 'config.php';
          $query = "SELECT id FROM booking ORDER BY id";
          $query_run = mysqli_query($conn,$query);
          $row = mysqli_num_rows($query_run);
          echo'<p>'.$row.'</p>';
          ?>
        </div>
        <div class="box box_1">
          <h4>Contact</h4>
          <?php
          require 'config.php';
          $query = "SELECT id FROM contact ORDER BY id";
          $query_run = mysqli_query($conn,$query);
          $row = mysqli_num_rows($query_run);
          echo'<p>'.$row.'</p>';
          ?>
        </div>
      </div>
      <div class="data">
        <div class="data__field">
          <h2>Latest Booking</h2>
          <table>
            <tr>
              <th>Nme</th>
              <th>Contact</th>
              <th>check In Date</th>
            </tr>
            <?php
            require 'config.php';
            $query = "SELECT * FROM booking ORDER BY id DESC LIMIT 5";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
              foreach($query_run as $row){
                ?>
                    <tr>
              <td><?= $row['name']?></td>
              <td><?= $row['phone']?></td>
              <td><?= $row['arrival']?></td>
            </tr>
                <?php
              }
            }
            else{
              ?>
                <tr>
                  <td colspan="4">
                    no record found
                  </td>
                </tr>

              <?php
            }
            ?>
          </table>
        </div>
        <div class="data__field">
          <h2>Latest Contact</h2>
          <table>
            <tr>
              <th>Nme</th>
              <th>Contact</th>
              <th>Email</th>
            </tr>
            <?php
            require 'config.php';
            $query = "SELECT * FROM contact ORDER BY id DESC LIMIT 5";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
              foreach($query_run as $row){
                ?>
                    <tr>
              <td><?= $row['name']?></td>
              <td><?= $row['phone']?></td>
              <td><?= $row['email']?></td>
            </tr>
                <?php
              }
            }
            else{
              ?>
                <tr>
                  <td colspan="4">
                    no record found
                  </td>
                </tr>

              <?php
            }
           ?>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- header section End here  -->
</body>

</html>