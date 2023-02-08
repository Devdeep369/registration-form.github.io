<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    // header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>User page</title>
</head>

<body>
    <div class="form-container">
        <div class="content">
            <h1>Welcome, <span>USER</span></h1>

            <a href="login.php" class="btn">Login</a>
            <a href="index.php" class="btn">Signup</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>

</html>