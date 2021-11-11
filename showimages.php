<?php
require_once 'db.php';
$id = $_GET['id'] ?? null;
if ($id && is_numeric($id)) {
    mysqli_query($link, 'UPDATE `image` SET  viewid=viewid+1 WHERE id =' . $id);
    $result = mysqli_query($link, 'SELECT * FROM `image` WHERE id=' . $id);
    $image = mysqli_fetch_assoc($result);
    if ($image) {
        echo '<img src="' . $image['image_path'] . '">';
    }else{
        die("can't find image with id=" . $id);
    }
}