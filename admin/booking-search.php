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
        <form method="GET" action="">
          <input type="test" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"
            placeholder="Search Data">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="data__container">
      <div class="data">
        <h2>All Bookings</h2>
        <table>
          <tr>
            <th>ID</th>
            <th>Nme</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Arrival</th>
            <th>Leaving</th>
            <th>Operation</th>
          </tr>
          <?php
            require 'config.php';
            if(isset($_GET['search'])){
              $filtervalues = $_GET['search'];
              $query = "SELECT * FROM booking WHERE CONCAT(phone,email,name) LIKE '%$filtervalues%'";
              $query_run = mysqli_query($conn, $query);
              if (mysqli_num_rows($query_run) > 0 ){
                  foreach($query_run as $items)
                  {
                    ?>
          <tr>
            <td>
              <?= $items['Id'];?>
            </td>
            <td>
              <?= $items['name'];?>
            </td>
            <td>
              <?= $items['phone'];?>
            </td>
            <td>
              <?= $items['email'];?>
            </td>
            <td>
            <?= $items['arrival'];?>
            </td>
            <td>
            <?= $items['leaving'];?>
            </td>
            <td>
              <button >Delete</button>
            </td>
          </tr>
          <?php
                  }
              }else {
                ?>
          <tr>
            <td colspan="7">No record found</td>
          </tr>
          <?php
              }
            }
            
            ?>
        </table>
      </div>
    </div>
  </section>
  <!-- header section End here  -->
</body>

</html>