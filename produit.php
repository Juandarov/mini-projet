<?php
    ini_set('display_errors', 1);
    setlocale (LC_TIME, 'fr_FR.utf8','fra');
    require "header.php"; ?>
        <main id="fiche">
            <?php

            define('MYSQL_SERVEUR', 'localhost');
            define('MYSQL_UTILISATEUR', 'solene');
            define('MYSQL_MOTDEPASSE', 'plop');
            define('MYSQL_BASE', 'projet');
            $mysql = new MySQLi(MYSQL_SERVEUR,
                                MYSQL_UTILISATEUR,
                                MYSQL_MOTDEPASSE,
                                MYSQL_BASE);
            $mysql->set_charset("utf8");
            $sql = "SELECT * FROM Product WHERE id_Product = ".$_GET['produit'].";";

            $result = $mysql->query($sql);

            $row = $result->fetch_assoc();
            echo '<h3 class="name">'.$row['name_Product'].'</h3>';
            echo '<p class="plant">'.$row['documentation_Product'].'</p>';
            echo '<p class="prix">'.$row['price_Product'].'</p>';
            echo '<a class="btn btn-default" href="#" role="button"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Ajouter au panier</a>';

            $result->free();
            $mysql->close();
            ?>

        </main>
        <?php require "footer.php"; ?>
