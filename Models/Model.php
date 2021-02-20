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

    public function findById($id)
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE id = ?';
        $stmt = $this->db_manager->dbh->prepare($sql);
        // 準備したSQLを実行する
        $stmt->execute([$id]);

        // 実行結果を取得
        $record = $stmt->fetch();
        return $record;
    }
}

?>