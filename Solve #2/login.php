<?php
/*
*   Project:    Web-Engineering-Lab-Final-Solve
*   Version:    1.0.0
*   Author:     Al-Amin Firdows
*   Email:      alaminfirdows@gmail.com
*   Skype:      alamin.firdows
*   URI:        http://alamin.me
*   Github:     https://github.com/alaminfirdows/Web-Engineering-Lab-Final-Solve
*/

session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        $_SESSION["username"] = $username;
        $_SESSION["logged_in"] = true;
    } else {
        echo "Incorrect User or Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #2</title>
</head>

<body>
    <?php if (isset($_SESSION["logged_in"])) { ?>
    You are logged In as <?php echo $_SESSION["username"]; ?>.
    <?php } ?>
    <form action="" method="POST">
        User: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>

</html>