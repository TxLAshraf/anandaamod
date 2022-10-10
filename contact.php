<?php

   $connection = mysqli_connect('localhost','root','','aamod');

   if(isset($_POST['submit'])){
    $name = strip_tags($_POST['Name']);
        $number = strip_tags($_POST['Number']);
        $email = strip_tags($_POST['Email']);
        $subject = strip_tags($_POST['Subject']);
        $message = strip_tags($_POST['Message']);

      $request = " insert into contact (name,  phone, email, subject, message) values('$name','$number','$email','$subject','$message') ";

      mysqli_query($connection, $request);
      header('location:index.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>