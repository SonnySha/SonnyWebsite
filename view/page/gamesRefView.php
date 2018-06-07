<?php ob_start(); ?>

<section class="pageSonny">

    <div id="GamesRef" class="container">
        <h1 class="title-projet text-center">GAMES REF</h1>
        <div class="row">
            <div class="text-center col-lg-6 col-md-7 col-sm-12 col-xs-12">
                <img class="imageProjet" src="public/picture/projets/gamesRef/home.png" alt="image couverture du projet gamesref">
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <h3 class="text-center">Objectif</h3>
                <p class="para">Créer un site qui référence des jeux vidéo avec leur fiche technique pour bâtir une communauté qui aura la possibilité de créer son compte personnel ainsi que commenter et enregistrer ses jeux favoris dans une liste coup de coeur.</p>
                <p class="para">Cela faisait longtemps que je voulais créer un projet personnel de cette envergure. Ce projet n'a rien de novateur, la base du projet n’a pas été pensée pour créer un nouveau concept, mais simplement pour m'entrainer, montrer mes compétences et m'amuser.</p>
                <a href="http://www.sonnyweb.fr/gamesRef/index.php" class="pull-right btn btn-primary btn-view"><i class="fas fa-1x fa-globe"></i> Voir le projet</a>
            </div>
        </div>
        <div class="row area-langages">
            <h3 class="text-center col-lg-1 col-md-1 col-sm-12 col-xs-12">Dév </h3>
            <ul class="list-langage-use text-center col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <li class="item-lagange-use col-lg-2 col-md-3 col-sm-12 col-xs-12"><img class="logo-langage-use" src="public/picture/logo-langage/html-css.png" alt="logo html css"> HTML/CSS</li>
                <li class="item-lagange-use col-lg-2 col-md-3 col-sm-12 col-xs-12"><img class="logo-langage-use" src="public/picture/logo-langage/bootstrap.png" alt="logo bootstrap"> Bootstrap</li>
                <li class="item-lagange-use col-lg-2 col-md-3 col-sm-12 col-xs-12"><img class="logo-langage-use" src="public/picture/logo-langage/phpmysql.png" alt="logo php/sql"> PHP/SQL</li>
                <li class="item-lagange-use col-lg-3 col-md-3 col-sm-12 col-xs-12"><img class="logo-langage-use" src="public/picture/logo-langage/phpMvc.png" alt="logo mvc en php"> MVC EN PHP</li>
            </ul>
        </div>
        <h3 class="text-center">Fonctionnalité disponible</h3>

    </div>

    <div id="area-fonctionnalite" class="container-fluid">
        <div class="row">
            <div class="firstmac imac  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="img-fonctionnalite" src="public/picture/projets/gamesRef/tousLesJeux.PNG" alt="gamesRef tous les jeux">
                <h4 class="text-center">Consulter les jeux disponible</h4>
            </div>
            <div class="imac col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="img-fonctionnalite" src="public/picture/projets/gamesRef/triez.PNG" alt="gamesRef triez les jeux">
                <h4 class="text-center">Trier les jeux par genres,themes ou consoles</h4>
            </div>
            <div class="imac col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="img-fonctionnalite" src="public/picture/projets/gamesRef/ficheTechnique.png" alt="gamesRef triez les jeux">
                <h4 class="text-center">Consulter les fiches techniques et donner votre avis</h4>
            </div>
            <div class="macbook col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="img-fonctionnalite-macbook" src="public/picture/projets/gamesRef/dashboard.png" alt="gamesRef votre tableau de board">
                <h4 class="text-center">Créer votre compte et accédez à votre dashboard</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="img-fonctionnalite-iphone" src="public/picture/projets/gamesRef/dashboardOtherUser.png" alt="gamesRef votre tableau de board">
                <h4 class="text-center">Ou consulter celui des autres utilisateurs</h4>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="img-fonctionnalite-ipad" src="public/picture/projets/gamesRef/tousLesLike.png" alt="gamesRef votre tableau de board">
                <h4 class="text-center">Un système de like communautaire</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="text-center">Connectez-vous et découvrez</h3>
        <p class="para text-center">Tous les comptes que vous trouverez sont fictifs, connectez-vous et essayez les avec le mot de passe : azerty.</p>
    </div>


</section>




<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
