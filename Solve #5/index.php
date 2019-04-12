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
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_rows = $db->query("SELECT * FROM `solve_5_student_data` WHERE `id` = '$id'");
    $edit_row = $edit_rows->fetch_assoc();
}

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $save = $db->query("UPDATE `solve_5_student_data` SET `name`='$_POST[name]', `s_id`='$_POST[s_id]', `age`='$_POST[age]', `username`='$_POST[username]', `password`='$_POST[password]' WHERE `id`='$id'");
}

$check = $db->query("SELECT * FROM `solve_5_student_data`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <section class="row">
        <div style="width: 900px" class="mx-auto">
            <?php if (isset($save) && $save == 1) : ?>
            <div class="alert alert-success" role="alert">User Saved!</div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">S_ID</th>
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
                        <td><a href="?edit=<?php echo $row['id']; ?>" class="btn btn-danger">Edit</a></td>
                    </tr>
                    <?php
                endwhile;
                ?>
                </tbody>
            </table>

            <?php if (isset($_GET['edit'])) : ?>
            <form method="POST" action="">
                <div class="form-label-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name"
                        value="<?php echo $edit_row['name']; ?>">
                </div>
                <div class="form-label-group">
                    <label for="s_id">Student ID</label>
                    <input type="text" name="s_id" class="form-control" placeholder="Student ID"
                        value="<?php echo $edit_row['s_id']; ?>">
                </div>
                <div class="form-label-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control" placeholder="Age"
                        value="<?php echo $edit_row['age']; ?>">
                </div>
                <div class="form-label-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username"
                        value="<?php echo $edit_row['username']; ?>">
                </div>
                <div class="form-label-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Password"
                        value="<?php echo $edit_row['password']; ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">
                <button type="submit" class="mt-2 btn btn-primary btn-block" name="save">Save</button>
            </form>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>