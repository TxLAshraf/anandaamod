<?php

   $connection = mysqli_connect('localhost','root','','aamod');

   if(isset($_POST['send'])){
    $name = strip_tags($_POST['Name']);
        $number = strip_tags($_POST['Number']);
        $email = strip_tags($_POST['Email']);
        $checkin = strip_tags($_POST['Check-In-Date']);
        $checkout = strip_tags($_POST['Check-Out-Date']);

      $request = " insert into booking(name, phone, email, arrival, leaving) values('$name','$number','$email','$checkin','$checkout') ";

      mysqli_query($connection, $request);
      header('location:index.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>