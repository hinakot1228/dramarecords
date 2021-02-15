<?php

require_once('dbconnect.php');

class Model
{
    protected $table;
    protected $db_manager;

    public function __construct()
    {
        $this->db_manager = new DbManager();
        $this->db_manager->connect();
    }

    public function getAll()
    {
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);
        $stmt->execute();

        // データを全部取得
        $records = $stmt->fetchAll();
        return $records;
    }
    public function getImageAll()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            // 画像を取得
            $sql = 'SELECT * FROM images';
            $stmt = $this->db_manager->dbh->prepare($sql);
            $stmt->execute();
            $images = $stmt->fetchAll();
            return $images;
        }
    }
}

?>