<?php
require "include/header.view.php";
require "include/menubar.view.php";

ob_start();
?>

<section id='about' class='top-border-me'>
    <div class='section-inner'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center mb100'>
                    <h2 class='section-heading'><span class='theme-accent-color'>Les</span> Marques</h2>
                    <hr class="thin-hr">
                    <hr class="thin-hr">
                    <div class='row'>
                        <?php
                        foreach ($websites as $website) {
                            $re = '/(.*\/\/.*\.)([^.\s]{4,})(.*)/';
                            $str = $website->domain_name;
                            $subst = '$2';

                            echo "<div class='col-xs-4'>
                                    <a href='" . $str . "'><img src='assets/img/marques/" . preg_replace($re, $subst, $str) . ".png 'class='img-responsive'>
                                </div>
                                <br>
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
echo $content;
?>