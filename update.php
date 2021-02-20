<?php
// ファイルの読み込み
require_once('Models/Record.php');

// データの受け取り
$title = $_POST['title'];
$date = $_POST['date'];
$impression = $_POST['impression'];
$saying = $_POST['saying'];
$id = $_POST['id'];
// var_dump($id);
// die;
// DBへのデータ保存
$record = new Record();
$record->update([$title, $date, $impression, $saying, $id]);

// リダイレクト処理
header('location:index.php');
exit;
?>