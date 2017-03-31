<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $onglet ?></title>
    <link href="static/external/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                        <h2 class=" enjoy-css" href="#"><?php echo $title ?></h2>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="<?php if($currentPage == 'home') {echo "active";}?>"><a href="index.php">Home</a></li>
                            <li class="<?php if($currentPage == 'cat') {echo "active";}?>"><a href="catalogue.php">Catalogue</a></li>
                            <li class="<?php if($currentPage == 'cart') {echo "active";}?>"><a href="panier.html">Panier</a></li>
                            <li class="<?php if($currentPage == 'contact') {echo "active";}?>"><a href="form.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
