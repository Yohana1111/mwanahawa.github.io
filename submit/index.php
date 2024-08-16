<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $food = $_POST["food"];
  $quote = $_POST["quote"];
  $education = $_POST["education"];
  $favorite_time = $_POST["favorite_time"];

 



  $query = "INSERT INTO submit VALUES('', '$name','$email', '$gender', '$food', '$quote', '$education', '$favorite_time')";
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
      <label for=""> Name</label>
      <input type="text" name="name" required value="">
      
      <label for="">Last email</label>
      <input type="text" last name="email" required value="">


     <label >Gender:</label><br>
        <label for="male">Male</label>
        <input type="checkbox" id="male" name="gender" value="male">
        <br>
        <label for="female">Female</label>
        <input type="checkbox" id="female" name="gender" value="female"><br><br>

        <label>Plz select your favorite food:</label><br>
        <label for="steak">Steak</label>
        <input type="checkbox" id="steak" name="food" value="steak"><br>
        <label for="pizza">Pizza</label>
        <input type="checkbox" id="pizza" name="food" value="pizza"><br><br>

        <label for="quote">Favorite Quote:</label><br>
        <textarea id="quote" name="quote" rows="4" cols="50" placeholder="Enter your favorite quote here..."></textarea><br><br>

        <label for="education">Level of Education:</label><br>
        <select id="education" name="education">
            <option value="highschool">Jr High</option>
            <option value="undergrad">Undergraduate</option>
            <option value="grad">Graduate</option>
            <option value="doctorate">Doctorate</option>
            </select><br><br>

<label for="favorite_time">Favorite Time of the Day:</label><br>
<select id="favorite_time" name="favorite_time">
    <option value="morning">Morning</option>
    <option value="afternoon">Afternoon</option>
    <option value="evening">Evening</option>
    <option value="night">Night</option>
</select><br><br>
















      </select>
      <br>
      <button type="submit" name="submit">submit</button>
    </form>
  </body>
</html>
