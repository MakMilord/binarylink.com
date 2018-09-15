
<?php
require_once('partials/nav.php');
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Réseau social pour developpeurs">
    <meta name="author" content="Morad M'LIK">
    <link rel="stylesheet" href="">
    <title>
    <?php
    if(isset($title)){
        $title=WEBSITE_NAME.' '.$title;
      }
      echo $title;
      ?>
    </title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
    
    <!-- Bootstrap bleu -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    
    <!-- Bootstrap noir -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-iMvB1cubutqnCw/Xlf3A1lEXHojPMC7dETFR9CYfYENKn8yw6QlyL+BaYmPXEjmo" crossorigin="anonymous"> 
    
    <!-- Bootstrap foncé -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-ae362vOLHy2F1EfJtpMbNW0i9pNM1TP2l5O4VGYYiLJKsaejqVWibbP6BSf0UU5i" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->
  </head>

 <body>
<?php 
  // include("partials/_nav.php");
  echo $html;
  include("partials/_flash.php"); 
?>