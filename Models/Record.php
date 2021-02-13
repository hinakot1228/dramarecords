<?php
require_once('Model.php');

class Record extends Model
{
    protected $table = 'records';
    protected $table2 = 'images';

    public function create($data)
    {
        $sql = 'INSERT INTO ' . $this->table . '(title, date, impression, saying, created_at) VALUES (?, ?, ?, ?, now())';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->execute($data);
    }

    public function imageCreate($data)
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            // 画像を取得
            
        } else {
            // 画像を保存
            if (!empty($_FILES['image']['name'])) {
                $sql = 'INSERT INTO images(image_name, image_type, image_content, image_size, created_at)
                        VALUES (:image_name, :image_type, :image_content, :image_size, now())';
                $stmt = $this->db_manager->dbh->prepare($sql);
                $stmt->bindValue(':image_name', $name, PDO::PARAM_STR);
                $stmt->bindValue(':image_type', $type, PDO::PARAM_STR);
                $stmt->bindValue(':image_content', $content, PDO::PARAM_STR);
                $stmt->bindValue(':image_size', $size, PDO::PARAM_INT);
                $stmt->execute($data);
            }
            // unset($pdo);
        }
    }

    public function findByImageId()
    {
        // $sql = 'SELECT * FROM ' . $this->table2 . ' WHERE image_id = :image_id LIMIT 1';
        // $stmt = $this->db_manager->dbh->prepare($sql);
        // $stmt->bindValue(':image_id', (int)$_GET['id'], PDO::PARAM_INT);
        // $stmt->execute();
        // $image = $stmt->fetch();

        // return $image;
    }
}
