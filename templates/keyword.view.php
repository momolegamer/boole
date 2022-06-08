<?php
ob_start();

foreach($data as $key) {
    echo $key->keyword."<br>";
}

$content = ob_get_clean();
require_once "templates/template.view.php";
?>
