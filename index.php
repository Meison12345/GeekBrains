<?php
require_once 'db.php';
$result = mysqli_query($link, 'SELECT * FROM `image` WHERE 1 ORDER BY `viewid` DESC');
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="showimages.php?id=' . $row['id'] . '">';
    echo '<img width="200" height="200" src="' . $row['image_path'] . '">';
    echo '</a>';
}