<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "ต้องไป login";
        header('location: Accounts.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: Accounts.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>no</h1>
</body>
</html>