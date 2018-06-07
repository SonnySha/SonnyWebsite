<?php ob_start(); ?>

<section class="pageSonny">

    <div id="skillHtmlCss" class="container">
        <h1 class="title-projet text-center"><img class="logo-langage" src="public/picture/logo-langage/word-press.png" alt="logo html/css"> Word Press</h1>
        <div class="row blocMoocs">
            <h2>Les cours associés</h2>
            <a href="https://openclassrooms.com/courses/creez-votre-site-avec-wordpress">
                <div class="blocMooc col-lg-3 col-md-5 col-sm-5 col-xs-12">
                    <div class="imgMooc moocWordPressPremierSite"></div>
                    <h3 class="titleMooc text-center">Créez votre premier site avec WordPress</h3>
                </div>
            </a>

            <a href="https://openclassrooms.com/courses/realisez-des-sites-modernes-et-beaux-grace-a-wordpress">
                <div class="blocMooc col-lg-3 col-md-5 col-sm-5 col-xs-12">
                    <div class="imgMooc moocRealisezSiteBeau"></div>
                    <h3 class="titleMooc text-center">Réalisez des sites modernes et beaux grâce à WordPress</h3>
                </div>
            </a>
            <a href="https://openclassrooms.com/courses/propulsez-votre-site-avec-wordpress">
                <div class="blocMooc col-lg-3 col-md-5 col-sm-5 col-xs-12">
                    <div class="imgMooc moocPropulsezVotreSite"></div>
                    <h3 class="titleMooc text-center">Propulsez votre site avec WordPress</h3>
                </div>
            </a>
        </div>

    </div>



</section>




<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
