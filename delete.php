<?php
// ファイルの読み込み
require_once('Models/Record.php');

// データの受け取り
$id = $_GET['id'];
// var_dump($id);
// die;

// DBからデータを削除
$record = new Record();
$record->delete([$id]);

// リダイレクト処理
header('location:index.php');
exit;
?>