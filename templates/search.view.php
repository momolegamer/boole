<?php
require "include/header.view.php";
require "include/menubar.view.php";
?>

<body id='page-top class=' regular-navigation'>
<section id='about' class='top-border-me'>
    <div class='section-inner'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center mb100'>
                    <h2 class='section-heading'><span class='theme-accent-color'>Produit</span>Recherché</h2>
                    <hr class="thin-hr">
                </div>
            </div>
        </div>
    </div>
</section>
    <section id='about' class='top-border-me'>
        <div class='section-inner'>

            <div class='container'>
                <?php 
                    if (isset($ranked) > 0 && !(count($ranked))) {
                        echo "<h4>aucun résultats trouvés pour '".htmlspecialchars($keyword)."'</h4><br>";
                    } else {
                        echo "<h4>résultats trouvés pour '".htmlspecialchars($keyword)."':</h4><br>";
                    }
                if(!empty($ranked)) {
                    foreach($ranked as $key => $result) {
                        $re = '/(.*\/\/.*\.)([^.\s]{4,})(.*)/';
                        $str = $result->domain_name;
                        $subst = '$2';
                        echo "<h5>".($key+1)."- ".preg_replace($re, $subst, $str)."</h5><img style='width: 50px;' src='assets/img/marques/".preg_replace($re, $subst, $str).".png'><br>";
                    }
                } ?>
                <div id="products">

                </div>
                
    <div id="keywords">
        <h4>Mots clés</h4>
            <select name="keywords"> </select>
            <a href="index.php?page=recherche" type="submit" value="rechercher">Rechercher</a>
        
    </div>
</body>

<?php
require "include/footer.view.php";
?>
