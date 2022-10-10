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
  <link rel="stylesheet" href="./css/admin-booking.css" />
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
        <li><a href="./">
            <i class="fas fa-home"></i>
            <span class="nav_item">Dashboard</span>
          </a></li>
        <li><a href="./booking.php" class="active">
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
    <div class="booking_header">
      <div class="search">
      <form method="GET" action="contact-search.php">
          <input type="test" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Search Data">
          <button type="submit">Search</button>
        </form>
      </div>
      <div class="download">
      <form action="contact-excel.php" method="POST">
          <button type="submit" name=contact_exported_excel>Download CSV</button>
        </form>
      </div>
    </div>
    <div class="data__container">
      <div class="data">
        <h2>All Conatcts</h2>
        <table>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Subject</th>
            <th>Message</th>
          </tr>
          <?php
            require 'config.php';
            $query = "SELECT * FROM contact ORDER BY id DESC";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
              foreach($query_run as $row){
                ?>
            <tr>
              <td><?= $row['Id']?></td>
              <td><?= $row['name']?></td>
              <td><?= $row['email']?></td>
              <td><?= $row['phone']?></td>
              <td><?= $row['subject']?></td>
              <td><?= $row['message']?></td>
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
  </section>
  <!-- header section End here  -->
</body>

</html>