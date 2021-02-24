<?php
require_once('Model.php');

class Record extends Model
{
    protected $table = 'records';
    protected $table2 = 'users';

    public function create($data)
    {
        $sql = 'INSERT INTO ' . $this->table . '(user_id, image_at, title, date, impression, saying, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->execute($data);
    }

    public function update($data)
    {
        $sql = 'UPDATE ' . $this->table . ' SET user_id = ?, title = ?, date = ?, impression = ?, saying = ? WHERE id = ?';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->execute($data);
    }

    

    // public function imageCreate($data)
    // // 画像を登録する
    // {
    //     // 画像がアップロードされている場合
    //     if ($_FILES['image']['error'] !== 4) {
    //         $imgPath = 'images/' . $_FILES['image']['title'];
    //         move_uploaded_file([$file, $imgPath]);
    //     } // 画像がアップロードされていない場合
    //     else {
    //         $imgPath = 'images/default.png';
    //     }

    //     // DBへの保存
    //     $sql = 'INSERT INTO images (title, image_at) VALUES (?, ?)';
    //     $stmt = $this->db_manager->dbh->prepare($sql);
    //     $stmt->execute($data);
    //     return $imgPath;
    // }

    // public function getImageAll()
    // {
    //     $stmt =  $this->db_manager->dbh->prepare('SELECT * FROM images');
    //     $stmt->execute();
    //     $images = $stmt->fetchAll();
    //     return $images;
    // }
}
