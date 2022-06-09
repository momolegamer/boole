<?php
require_once "./database/Manager.class.php";

class Controller
{

    private $manager;

    public function __construct()
    {
        $this->manager = new Manager;
    }

    public function home() {
        $keywordData = $this->manager->selectTopKeywords();
        require_once "./templates/home.view.php";
    }

    public function marques() {
        $websites = $this->manager->selectTable("website");
        require_once "./templates/marques.view.php";
    }

    public function display($table = null)
    {
        if ($table) {
            $data = $this->manager->selectTable($table);
            require_once "./templates/$table.view.php";
        } else {
        }
    }

    public function template()
    {
        require_once "./templates/template.view.php";
    }

    public function search($keyword) {
        $keyword = trim($keyword);
        if (!empty($keyword)) {
            $data = $this->manager->selectRankFromKeyword($keyword);
            $productData = $this->manager->searchByTag($keyword);
            require_once "./templates/search.view.php";
        } else {

        }
    }
}
