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

$data = $db->query('SELECT * FROM `solve_1_student_data`');

$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #1</title>
</head>

<body>
    <div>
        <a href="index.php">Insert Data</a>
    </div>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php while ($row = $data->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['s_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>