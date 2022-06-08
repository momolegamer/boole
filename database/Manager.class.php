<?php
require_once "Model.abstractclass.php";

class Manager extends Model {
    public function selectTable($table) {
        $sql = "SELECT * FROM $table LIMIT 10";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}
