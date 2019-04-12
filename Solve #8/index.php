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

$color = array(
    "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("First", 5 => "Second", "Third")
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solve #7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <section class="jumbotron text-center">
        <p>$color["holes"][5] = <?php echo $color["holes"][5]; ?></p>
    </section>
</body>

</html>