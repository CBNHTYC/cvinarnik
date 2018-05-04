<?php
    require_once 'database.php';
    require_once 'functions.php';
    require_once 'authorisation.php';
    $postID = $_GET['postID'];
    $subcatID = $_GET['subcatID'];
    $text =     
    
    $editResult = editSubcat($subcatID, $title, $description, $authID);
    
    header('Location:/category.php?id='.$catID.',insert='.$editResult);

