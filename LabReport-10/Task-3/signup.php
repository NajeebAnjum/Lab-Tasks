<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SignUp page</title>
    <style>
        body{
            background-color: rgb(191, 207, 207);
        }
        .form{
            background-color: #7bcaca;
            box-shadow: 3px 3px 10px 5px rgba(40, 43, 41, 0.4);
            padding: 10px;
        }
        .form input{
            background-color: rgb(217,217,214);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Sign Up Here!</h1>
    <form action="#" method="post" class="w-50 m-auto form">
  <div class="mb-3">
    <label for="name" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" placeholder="Enter UserName Here" name="username">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email Here" name="email">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Enter Password Here" name="password">
  </div>
  <div class="mb-3">
    <label for="conpass" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="conpass" placeholder="Enter Password again Here" name="conpassword">
  </div>
  <div class="text-center mb-3">
  <button type="submit" class="btn btn-primary">Sign Up</button>
  </div>
  <p>Already Have Account or Created Now <a href="login.php">Go To login</a></p>
</form>
    </div>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conpassword = $_POST['conpassword'];

            if($conpassword != $password){
              echo 'password did\'t match';
            }

            $fetch = 'SELECT * FROM `login`';
            $fetchrun = mysqli_query($connect, $fetch);
            


            $found = false;
            
            while ($record = mysqli_fetch_assoc($fetchrun))
            {
              if($record['name'] == "$name")
              {
                $found = true;
                echo 'Already Exist';
                break;
              }
              // elseif($conpassword != $password){
              //   echo 'password did\'t match';
              //   break;
              // }
            }
            if(!$found){
              $send = "INSERT INTO `login` (`name`,`email`,`password`, `conpassword`) VALUES ('$name','$email','$password','$conpassword')";

              $runsend = mysqli_query($connect, $send);

              echo 'Account created Successfully';
            }
        
    }

    ?>
</body>
</html>