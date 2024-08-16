<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email= $_POST["email"];
  $password = $_POST["password"];
 



  $query = "INSERT INTO log VALUES('', '$firstname','$lastname','$email', '$password')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">First Name</label>
      <input type="text" first name="firstname" required value="">
      <label for="">Last Name</label>
      <input type="text" last name="lastname" required value="">
      <label for="">email</label>
      <input type="text" last name="email" required value="">

      <label for="">Password</label>
      <input type="number" name="password" required value="">
      
      </select>
      <br>
      <button type="submit" name="submit">login</button>
    </form>
  </body>
</html>
