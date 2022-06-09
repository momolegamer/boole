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

    public function selectRankFromKeyword($keyword) {
        $sql = "SELECT
            *,
            sum(visibility_score) as sum
        FROM
            ranked_page
            INNER JOIN keyword on keyword_id = keyword.id
            INNER JOIN website on website_id = website.id
        WHERE
            keyword REGEXP :keyword
        GROUP BY
            website_id
        ORDER BY
            sum
        DESC";
        $req = $this->getDB()->prepare($sql);
        $req->execute([
            "keyword" => "(^| )".$keyword."( |$)"
        ]);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function selectTopKeywords() {
        $sql = "SELECT
                *
            FROM
                keyword
            order by monthly_search_count desc
            LIMIT 10";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function searchByTag($keyword) {
        $url = "https://world.openfoodfacts.org/category/$keyword.json";
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        return $json_data;
    }
}
