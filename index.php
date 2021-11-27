<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
</head>

<body>
    <h1>Selamat Datang, Di Web 1</h1>
    <form action="" method="post">
        <input type="submit" name="logout" />
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_unset();
    session_destroy();
    header("location:login.php");
}
