<?php
// ファイルの読み込み
require_once('Models/Record.php');
require_once('Models/User.php');
require_once('function.php');

// データの受け取り
$id = $_GET['id'];
// var_dump($id);

// データの受け取り
$record = new Record();
$record = $record->findById($id);
// var_dump($record);

// セッションを開始
session_start();

// DBからユーザーIDを取得
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['userid'];
    // var_dump($userId);
    // die;
} else {
    $userId = " ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編集</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd; ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">ドラマ・映画ノート</a>
    </div>
  </nav>
  <div class="body-section">
    <form class="form-horizontal" action="update.php" method="POST" enctype="multipart/form-data">
      <!-- <div class="form-group">
          <label class="col-sm-2 control-label">ポスター写真</label>
          <div class="col-sm-10">
            <input class="form-control" type="file" value="<?= h($record['image_at']); ?>">
          </div>
        </div> -->
      <div class="form-group mb-3">
        <label class="col-sm-2 control-label">題目</label>
        <div class="">
          <input class="form-control" type="text" name="title" value="<?= h($record['title']); ?>">
        </div>
      </div>
      <div class="form-group mb-3">
        <label class="col-sm-2 control-label">鑑賞日</label>
        <div class="">
          <input class="form-control" type="date" name="date" value="<?= h($record['date']); ?>">
        </div>
      </div>
      <div class="form-group mb-3">
        <label class="col-sm-2 control-label">感想</label>
        <div class="">
          <textarea class="form-control" type="text" name="impression"><?= h($record['impression']); ?></textarea>
        </div>
      </div>
      <div class="form-group mb-3">
        <label class="col-sm-2 control-label">印象に残った言葉</label>
        <div class="">
          <textarea class="form-control" type="text" name="saying"><?= h($record['saying']); ?></textarea>
        </div>
      </div>
      <input type="hidden" name="id" value="<?= $record['id']; ?>">
      <div class="form-group">
        <div class="col-sm-offset-2 form-btn">
          <button type="submit" class="btn btn-dark"><i class="fas fa-edit"></i>編集</button>
        </div>
      </div>

      <input type="hidden" name="userId" value="<?= $userId; ?>">
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>