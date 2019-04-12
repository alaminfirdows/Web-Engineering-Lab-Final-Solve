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

$db = mysqli_connect("localhost", "root", "", "web_lab_final_solve");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $s_id = $_POST['s_id'];
    $age = $_POST['age'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $run = $db->query('INSERT INTO `solve_1_student_data`(`name`, `s_id`, `age`, `username`, `password`) VALUES ("' . $name . '", "' . $s_id . '", "' . $age . '","' . $username . '","' . $password . '")');

    if ($run) {
        echo '<div class="alert alert-success" role="alert">Data Insert Successfully</div>';
    } else {
        echo "Error: " . $db->error;
    }
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <section>
        <form method="POST" action="" style="width: 100%; max-width: 420px; padding: 15px; margin: 0 auto;">
            <div class="form-label-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-label-group">
                <label for="s_id">Student ID</label>
                <input type="text" name="s_id" class="form-control" placeholder="Student ID">
            </div>
            <div class="form-label-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
            <div class="form-label-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-label-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="mt-2 btn btn-primary btn-block" name="save">Create Account</button>
            <a href="show_data.php" class="mt-2 btn btn-primary btn-block">Show Data</a>
        </form>
    </section>
</body>

</html>