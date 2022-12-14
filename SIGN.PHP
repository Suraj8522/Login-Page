<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="insert into reg1(username,password) values('$username','$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "Data inserted succesfully";
        }
        else{
            die(mysqli_error($con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup_Page</title>
  </head>
  <body>
     <h1 class="text-center">Signup_Page</h1>
    <div class="container mt-5">

    <form action="SIGN.PHP" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name="username">
   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>

    
  </body>
</html>