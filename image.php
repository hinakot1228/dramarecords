<?php
require_once('Models/Record.php');

$record = new Record();
$image= $record->findByImageId();

header('Content-type: ' . $image['image_type']);
echo $image['image_content'];

// header('location:index.php');
// exit;
?>