<?php
// ファイルの呼び出し
require_once('Models/Record.php');

// データの受け取り
$title = $_POST['title'];
$date = $_POST['date'];
$impression = $_POST['impression'];
$saying = $_POST['saying'];
$currentTime = date("Y/m/d H:i:s");
// var_dump($img);
// var_dump($title);
// var_dump($title, $date, $impression, $saying);

$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$content = file_get_contents($_FILES['image']['tmp_name']);
$size = $_FILES['image']['size'];

// SQL文の実行（データをDBに登録）
$record = new Record();
$record->create([$title, $date, $impression, $saying]);

$record->imageCreate([$name, $type, $content, $size]);
// リダイレクト処理
header('location:index.php');
exit;
