<?php

    require_once('controller/controllerWeb.php');
    
    try {
        if(isset($_GET['page']) && !empty($_GET['page'])) {
            
            if($_GET['page'] == 'QuiSuisJe') {
                pageQuiSuisje();
            }elseif($_GET['page'] == 'GamesRef') {
                pageGamesRef();
            }elseif($_GET['page'] == 'HtmlCss') {
                pageHtmlCss();
            }elseif($_GET['page'] == 'WordPress') {
                pageWordPress();
            }elseif($_GET['page'] == 'Superpose') {
                pageSuperpose();
            }
            
            
            
            
            
            
            
            
            
        } else {
            viewWebsiteScrollspy();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
    
    
?>