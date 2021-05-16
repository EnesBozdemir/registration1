<?php

  $conn=new mysqli("localhost", "root", "", "githubregistration1") or die();

  if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $password=md5($password);

    $sql="SELECT * FROM `users` WHERE username='$username' AND password='$password'";
    $result=$conn->query($sql);

    if(mysqli_num_rows($result)==1){
      $_SESSION["message"]="You are now logged in";
      $_SESSION["username"]=$username;
      header("location:home.php");
    } else{
      $_SESSION["message"]="Kullanıcı şifre bilgileri doğru değil";

    }
      
  }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>


  <div class="container">
    <div class="row">
        <h1 class="fw-light" style="margin: 30px;">Register, Login and Logout Usher PHP MySQL</h1>
    </div>
    <div class="row">
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="name">
            </div>
            <div class="md-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="*******">
            </div>
            <div class="col-auto" style="margin-top: 20px;">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>


    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>