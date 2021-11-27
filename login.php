<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="post" action="">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input type="submit" value="submit" />
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['username'] == 'admin' && $_POST['password'] == '123') {
        $_SESSION['loggedin'] = true;
        header('location:index.php');
    } else {
        echo 'username dan password salah';
    }
}
