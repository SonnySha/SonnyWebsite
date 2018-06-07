<?php ob_start(); ?>

<section class="pageSonny">

    <div id="skillHtmlCss" class="container">
        <h1 class="title-projet text-center"><img class="logo-langage html-logo" src="public/picture/logo-langage/html-css.png" alt="logo html/css"> HTML/CSS</h1>
        <div class="row blocMoocs">
            <h2>Les cours associés</h2>
            <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">
                <div class="blocMooc col-lg-3 col-md-5 col-sm-5 col-xs-12">
                    <div class="imgMooc moocHtmlCss"></div>
                    <h3 class="titleMooc text-center">Apprenez à créer votre site web avec HTML5 et CSS3</h3>
                </div>
            </a>

            <a href="https://openclassrooms.com/courses/utilisez-les-effets-avances-de-css-sur-votre-site">
                <div class="blocMooc col-lg-3 col-md-5 col-sm-5 col-xs-12">
                    <div class="imgMooc moocEffetsCss"></div>
                    <h3 class="titleMooc text-center">Utilisez les effets avancés de CSS sur votre site</h3>
                </div>
            </a>
        </div>

    </div>



</section>




<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
