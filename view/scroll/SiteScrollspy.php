<?php ob_start(); ?>
    
    <?php require('view/scroll/quiSuisJeView.php');?>
        
    <?php require('view/scroll/bandeauSkillView.php');?>
        
    <?php require('view/scroll/connaissancesView.php');?>
        
    <?php require('view/scroll/bandeauParcoursView.php');?>
        
    <?php require('view/scroll/parcoursView.php');?>
        
    <?php require('view/scroll/bandeauProjetsView.php');?>
        
    <?php require('view/scroll/creationsView.php');?>
    
    
    
    
    
    
    
 <?php $content = ob_get_clean(); ?>
 <?php require('view/template.php'); ?>