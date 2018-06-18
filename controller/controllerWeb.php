<?php
        // $onePage OBLIGATOIRE
        // $namePage

    function viewHome() {
            require('view/scroll/quiSuisJeView.php');

            require('view/scroll/bandeauSkillView.php');

            require('view/scroll/connaissancesView.php');

            require('view/scroll/bandeauParcoursView.php');

            require('view/scroll/parcoursView.php');

            require('view/scroll/bandeauProjetsView.php');

            require('view/scroll/creationsView.php');  
    }
    
    function viewWebsiteScrollspy() {
        $namePage = 'Portfolio';
        require('view/scroll/SiteScrollspy.php');
      
    }

    function pageQuiSuisje() {
        $namePage = 'QuiSuisJe';
        require('view/page/quiSuisJeView.php');
    }
    
    function pageGamesRef() {
        $namePage = 'GamesRef';
        require('view/page/personalCreation/gamesRefView.php');
    }
    
    function pageSuperpose() {
        $namePage = 'Superpose';
        require('view/page/personalCreation/superpose.php');
    }
    
    function pageHtmlCss() {
        $namePage = 'HtmlCss';
        require('view/page/skillPage/htmlCss.php');
    }
    
    function pageWordPress() {
        $namePage = 'WordPress';
        require('view/page/skillPage/wordPress.php');
    }
