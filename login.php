<?php
  $host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "useraccounts";

  $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  if(isset($_POST ['username'])){

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $con = $con=mysqli_connect($host, $db_user, $db_pass, $db_name);


    $sql = "SELECT * FROM users WHERE firstname ='".$uname."'AND password = '".$password. "'";
    $result = mysqli_query($con, $sql);

    if($result){
      header("Location: http://localhost/Project1/topics.php");
    }else{
      echo 'You have entered wrong data';
    }
  }


 ?>



<div class="container">
  <form method="POST" action="#">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
    <button type="submit">Login</button>
  </form>
  </div>
