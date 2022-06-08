<?php
abstract class Model {
    private $db;

    private function setDB() {
        require_once "./config/config.php";
        $this->db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4;port=$port", "$user", "$pass");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getDB() {
        if (is_null($this->db)) {
            $this->setDB();
        }
        return $this->db;
    }
}
?>
