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
    <title>Solve #7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <section class="jumbotron text-center">
        <p>Sample Range : (11, 20)</p>
        Sample Output :

        <?php
        $n = range(11, 20);
        shuffle($n);
        for ($x = 0; $x < 10; $x++) {
            echo $n[$x] . ' ';
        }
        ?>
    </section>
</body>

</html>