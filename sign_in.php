<?php
// CONNECT TO SERVER AND DATABASE AND GET DATA
require_once "init_db.php";

// START SESSION
session_start();
$_SESSION[admin]

$sql = "SELECT
            username,
            password
          FROM
            users
        ;";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="actions/action_sign_in.php" method="post">
        <input type="text"     name="username" placeholder="Username">
        <input type="password" name="pass"     placeholder="Password">
        <input type="submit">
    </form>
</body>
</html>