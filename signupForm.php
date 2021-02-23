<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サインアップ</title>
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
    <section class="body-section">
        <h3 class="form-heading">サインアップ</h3>
        <form action="signup.php" method="post">
            <div class="mb-3">
                <label for="exampleInputNickname1" class="form-label">ニックネーム</label>
                <input type="text" class="form-control" id="exampleInputNickname1" name="nickname" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputUserid1" class="form-label">ユーザーID</label>
                <input type="text" class="form-control" id="exampleInputUserid1" name="userid" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">パスワード</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-dark"><i class="fas fa-user-plus"></i>登録</button>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>