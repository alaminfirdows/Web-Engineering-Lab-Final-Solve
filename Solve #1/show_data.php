<?php

$db = mysqli_connect("localhost", "root", "", "web_lab_final_solve_1");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$data = $db->query('SELECT * FROM `student_data`');

$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #1</title>
</head>

<body>
    <div>
        <a href="save_data.php">Insert Data</a>
    </div>
    <table>
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