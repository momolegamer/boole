<?php
require_once "./database/Manager.class.php";

class Controller {

    private $manager;

    public function __construct()
    {
        $this->manager = new Manager;
    }

    public function display($table) {
        $data = $this->manager->selectTable($table);
        require_once "./$table.view.php";
    }
}
