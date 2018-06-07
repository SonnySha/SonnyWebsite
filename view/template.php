<?php 

require_once('controller/controllerWeb.php'); 

    




?>

<!doctype html>
<html>

<head>
    <base href="/SonnyWebsite/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sonny Web {
        <?=$namePage?>}</title>
    <!-- CDN Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- CDN Icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Feuille de style -->
    <link rel="stylesheet" href="public/css/styleHeadFoot.css">
    <link rel="stylesheet" href="public/css/scroll/style.css">
    <link rel="stylesheet" href="public/css/page/style.css">
    <!--Media Queries-->
    <link rel="stylesheet" media="all and (max-device-width: 992px)" href="public/css/scroll/styleMediaSm.css" />
    <link rel="stylesheet" media="all and (max-device-width: 768px)" href="public/css/scroll/styleMediaXs.css" />
    <!-- font-family-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Poppins|Raleway|Reenie+Beanie|Tajawal" rel="stylesheet">






</head>

<body data-spy="scroll" data-target=".navbar">

    <div class="container-fluid">
        <nav id="navigation-menu" class="container navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Sonny Web</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php
    //Charge les bons menus de navigation par rapport au titre de la page
        if($namePage == 'Portfolio') {
            require('view/scroll/navScrollspy.php');
        } else {
           
        }               
                        
?>


                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <!--<?php  ?>-->
    <!--HEADER-->
    <?php require('view/headerView.php'); ?>
    <!--FIN HEADER-->



    <?=$content;?>








        <!--FOOTER-->
        <?php require('view/footerView.php');?>
        <!--FIN FOOTER-->
        <!-- CDN JQuery -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--SCRIPT JQUERY POUR LE SCROOL-->
        <script>
            $(function() {

                $('li>a').on('click', function(e) {

                    e.preventDefault();

                    var hash = this.hash;

                    $('html, body').animate({

                        scrollTop: $(this.hash).offset().top

                    }, 1000, function() {

                        window.location.hash = hash;

                    });

                });

            });

        </script>
        <!--FIN SCRIPT JQUERY POUR LE SCROOL-->
</body>

</html>
