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

// SQL文の実行（データをDBに登録）
$record = new Record();
$record->create([$title, $date, $impression, $saying]);

// リダイレクト処理
header('location:index.php');
exit;
