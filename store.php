<?php
// ファイルの呼び出し
require_once('Models/Record.php');

// データの受け取り
$file = $_FILES['image']['tmp_name'];
$title = $_POST['title'];
$date = $_POST['date'];
$impression = $_POST['impression'];
$saying = $_POST['saying'];
$currentTime = date("Y/m/d H:i:s");

// var_dump($image);

// 画像がアップロードされている場合
if ($_FILES['image']['error'] !== 4) {
    $imgPath = 'images/' . $_FILES['image']['name'];
    move_uploaded_file($file, $imgPath);
}
// 画像がアップロードされていない場合
else {
    $imgPath = 'images/default.png';
}

// SQL文の実行（データをDBに保存）
$record = new Record();
$record->create([$imgPath, $title, $date, $impression, $saying, $currentTime]);

// リダイレクト処理
header('location:index.php');
exit;
