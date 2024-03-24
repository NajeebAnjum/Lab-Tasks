<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login page</title>
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
    <h1 class="text-center">Welcome Here!</h1>
<form action="#" method="post" class="w-50 m-auto form">
  <div class="mb-3">
    <label for="name" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" placeholder="Enter UserName Here" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Enter Password Here" name="password">
  </div>
  <div class="text-center mb-3">
  <button type="submit" class="btn btn-primary">Log in</button>
  </div>
  <p class="text-center">Not Have Account Yet! <a href="signup.php">Create Now</a></p>
</form>

<div class="text-center mt-3">
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = 'SELECT * from `login`';
    $run = mysqli_query($connect, $select);

    $found = false;
    while ($record = mysqli_fetch_assoc($run))
    {
        if("$username" == $record['name'] && "$password" == $record['password'])
        {
            $found = true;
            echo 'You Are Successfully Loged In '.$record['name'];
            break;
        }
    }
    if(!$found)
    {
        echo 'Wrong UserName or Password';
    }
}
 ?>
</div>
</div>




    
</body>
</html>