<?php
require_once 'db.php';
$result = mysqli_query($link, "SELECT * FROM `example` ORDER BY `first_name` ASC");
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="space">';
    echo '<div>email:' . $row['email'] . '</div>';
    echo '<div>first name:' . $row['first_name'] . '</div>';
    echo '<div>description:' . $row['description'] . '</div>';
    echo '</div>';
}
