<?php
require_once('Model.php');

class Record extends Model
{
    protected $table = 'records';

    public function create($data)
    {
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (title, img, date, impression, saying) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute($data);
    }
}

?>