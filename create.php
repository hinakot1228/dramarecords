<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規作成</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">ドラマ・映画ノート</a>
        </div>
    </nav>
    <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label">ポスター写真</label>
          <div class="col-sm-10">
            <input class="form-control" type="file">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">題目</label>
          <div class="col-sm-10">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">鑑賞日</label>
          <div class="col-sm-10">
            <input class="form-control" type="date">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">感想</label>
          <div class="col-sm-10">
            <textarea class="form-control" type="text"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">印象に残った言葉</label>
          <div class="col-sm-10">
          <textarea class="form-control" type="text"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">登録</button>
          </div>
        </div>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>