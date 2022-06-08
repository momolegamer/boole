<?php
ob_start();

foreach($data as $key) {
    echo $key->domain_name."<br>";
}

$content = ob_get_clean();
require_once "templates/template.view.php";
?>
