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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #11</title>
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
            <button type="submit" class="mt-2 btn btn-primary btn-block" name="create">Create Account</button>
        </form>
    </section>
</body>

</html>