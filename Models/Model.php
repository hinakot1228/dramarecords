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

    public function getExample($data)
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE user_id = ?';
        $stmt = $this->db_manager->dbh->prepare($sql);
        // 準備したSQLを実行する
        $stmt->execute($data);

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

    public function delete($data)
    {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE id = ?';
        $stmt = $this->db_manager->dbh->prepare($sql);

        return $stmt->execute($data);
    }

    public function getAllByid($data)
    {
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE user_id = ?';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->execute($data);

        // 実行結果を取得
        $records = $stmt->fetchAll();
        return $records;
    }
}

?>