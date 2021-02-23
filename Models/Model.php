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

    public function delete($data)
    {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE id = ?';
        $stmt = $this->db_manager->dbh->prepare($sql);

        return $stmt->execute($data);
    }

    public function join()
    {
        $sql = 'SELECT * FROM users, records WHERE users. user_id = records. user_id';
        $stmt = $this->db_manager->dbh->prepare($sql);
        $stmt->execute();

        // 実行結果を取得
        $records = $stmt->fetchAll();
        return $records;
    }
}

?>