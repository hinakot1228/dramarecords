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
            $msg = '<div class="alert alert-danger" role="alert">同じユーザーIDが存在します。</div>';
            $link = '<a href="signupForm.php" class="btn btn-dark"><i class="fas fa-user-plus"></i>戻る</a>';
            return array($msg, $link);
        }
        else {
            $sql = 'INSERT INTO ' . $this->table . '(nickname, user_id, password) VALUES (:nickname, :userid, :password)';
            $stmt = $this->db_manager->dbh->prepare($sql);
            $stmt->bindValue(':nickname', $nickname);
            $stmt->bindValue(':userid', $userid);
            $stmt->bindValue(':password', $password);
            $stmt->execute();

            $msg = '<div class="alert alert-primary" role="alert">会員登録が完了しました。</div>';
            $link = '<a href="signinForm.php" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>サインインページへ</a>';
            return array($msg, $link);
        }   
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

            header('location:index.php');
            exit;
        } else {
            $msg = 'ユーザーIDもしくはパスワードが間違っています。';
            $link = '戻る';
            return array($msg, $link);
        }
    }
}
?>