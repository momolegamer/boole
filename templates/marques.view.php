<?php
ob_start();


foreach($websites as $website) {
    $re = '/(.*\/\/.*\.)([^.\s]{4,})(.*)/';
    $str = $website->domain_name;
    $subst = '$2';
    echo preg_replace($re, $subst, $str)."<br>";
}
?>

<?php
$content = ob_get_clean();
echo $content;
?>
