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

$db = mysqli_connect("localhost", "root", "", "web_lab_final_solve");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = $db->query("SELECT * FROM `solve_6_student_data` WHERE (`username` = '$_POST[username]' or `s_id` = '$_POST[username]') AND `password` = '$_POST[password]'");

    if ($check->num_rows > 0) {
        $row = $check->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['logged_in'] = true;
    } else {
        echo "Incorrect User or Password";
    }
}

if (isset($_POST['log_out'])) {
    unset($_SESSION["user_id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["logged_in"]);
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <?php if (isset($_SESSION["logged_in"])) { ?>
    <section class="jumbotron text-center">

        You are logged In as <?php echo $_SESSION["name"]; ?>
        <form action="" method="POST">
            <button type="submit" class="mt-2 btn btn-primary" name="log_out">Log Out</button>
        </form>
    </section>
    <?php } else { ?>
    <form method="POST" action="" style="width: 100%; max-width: 420px; padding: 15px; margin: 0 auto;">
        <div class="form-label-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-label-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="mt-2 btn btn-primary btn-block" name="login">Log In</button>
        <a href="index.php" class="mt-2 btn btn-primary btn-block">Create Account</a>
    </form>
    <?php } ?>

</body>

</html>