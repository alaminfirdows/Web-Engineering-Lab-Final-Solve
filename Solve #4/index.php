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

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = $db->query("DELETE FROM `solve_4_student_data` WHERE id = '$id'");
}

$check = $db->query("SELECT * FROM `solve_4_student_data`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <section class="row">
        <div style="width: 900px" class="mx-auto">
            <?php if (isset($delete)) : ?>
            <div class="alert alert-danger" role="alert">User Deleted!</div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">SID</th>
                        <th scope="col">Age</th>
                        <th scope="col">username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $check->fetch_assoc()) :
                        ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['s_id']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                endwhile;
                ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>