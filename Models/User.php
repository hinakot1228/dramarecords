<?php

require_once('Model.php');

class User extends Model
{
    protected $table = 'users';

    public function findByUserId ($nickname, $userid, $password, $currentTime)
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE user_id = :userid';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->bindValue(':userid', $userid);
        $stmt->execute();

        $member = $stmt->fetch();
        // var_dump($member);

        if ($member['user_id'] === $userid) {
            $msg = '同じメールアドレスが存在します。';
            $link = '<a href="signupForm.php">戻る</a>';
        }
        else {
            $sql = 'INSERT INTO ' . $this->table . '(nickname, user_id, password) VALUES (:nickname, :userid, :password)';
            $stmt = $this->db_manager->dbh->prepare($sql);
            $stmt->bindValue(':nickname', $nickname);
            $stmt->bindValue(':userid', $userid);
            $stmt->bindValue(':password', $password);
            $stmt->execute();

            $msg = '会員登録が完了しました。';
            $link = '<a href="index.php">トップページ</a>';
        }
        echo $msg;
        echo $link;
    }

    public function login($userid, $password)
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE user_id = :userid';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->bindValue(':userid', $userid);
        $stmt->execute();

        $member = $stmt->fetch();

        if (password_verify($password, $member['password']))
        {
            // DBのユーザー情報をセッションに保存
            $_SESSION['id'] = $member['id'];
            $_SESSION['nickname'] = $member['nickname'];
            $_SESSION['userid'] = $member['user_id'];
            $_SESSION['password'] = $member['password'];
            $msg = $member['nickname'] . '様、こんにちは！ログインしました。';
            $link = '<a href="index.php">トップページ</a>';
        } else {
            $msg = 'ユーザーIDもしくはパスワードが間違っています。';
            $link = '<a href="signinForm.php">戻る</a>';
        }
        echo $msg;
        echo $link;
    }
}
?>