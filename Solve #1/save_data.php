<?php

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
        echo "Data Insert Successfully";
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
</head>

<body>
    <div>
        <a href="show_data.php">Show Data</a>
    </div>
    <form action="" method="POST">
        Name: <input type="text" name="name" required> <br>
        ID: <input type="text" name="s_id" required> <br>
        Age: <input type="number" name="age" required> <br>
        Username: <input type="text" name="username" required> <br>
        Password: <input type="text" name="password" required> <br>
        <input type="submit" name="save" value="Save">
    </form>
</body>

</html>