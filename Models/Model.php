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
        $sql = 'SELECT * FROM ' . $this->table;
        $stmt = $this->db_manager->dbh->prepare($sql);
        // 準備したSQLを実行する
        $stmt->execute();

        // 実行結果を取得
        $records = $stmt->fetchAll();
        return $records;
    }


    // public function getImageAll()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    //         // 画像を取得
    //         $sql = 'SELECT * FROM images';
    //         $stmt = $this->db_manager->dbh->prepare($sql);
    //         $stmt->execute();
    //         $images = $stmt->fetchAll();
    //         return $images;
    //     }
    // }
}

?>