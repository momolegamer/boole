<?php
ob_start();

if (!(count($data) > 0)) {
    echo "aucun résultats trouvés pour '".htmlspecialchars($keyword)."'<br>";
} else {
    echo "résultats trouvés pour '".htmlspecialchars($keyword)."':<br>";
}

foreach($data as $key => $result) {
    $re = '/(.*\/\/.*\.)([^.\s]{4,})(.*)/';
    $str = $result->domain_name;
    $subst = '$2';
    echo ($key+1)."- ".preg_replace($re, $subst, $str)."<br>";
}

echo $productData["count"];

foreach($productData["products"] as $product) {
    echo $product["product_name"]."<br>";
    echo "<img src='".$product["image_url"]."'><br>";
}

$content = ob_get_clean();
require "templates/template.view.php";
?>
