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

$color = array('white', 'green', 'red');
?>
<ol type="A">
    <li>
        <?php foreach ($color as $color_name) {
            echo $color_name . ', ';
        } ?>
    </li>
    <li>
        <ul>
            <?php foreach ($color as $color_name) {
                echo '<li>' . $color_name . '</li>';
            } ?></ul>
    </li>
</ol>