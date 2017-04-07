<?php require 'header.php'; ?>

        <main id="fiche">
            <?php
            define('MYSQL_SERVEUR', 'localhost');
            define('MYSQL_UTILISATEUR', 'toto');
            define('MYSQL_MOTDEPASSE', 'plop');
            define('MYSQL_BASE', 'boutique_en_ligne');

            $id = $_GET["id_produitt"];

            $mysql = new MySQLi(MYSQL_SERVEUR, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE, MYSQL_BASE);

            $mysql->set_charset("utf8");
            $sql = "select * from produitt where id_produitt='$id' ;";
            $result = $mysql->query($sql);

            $row = $result->fetch_assoc();
            echo '<h3 class="name">'.$row['name_produit'].'</h3>';
            echo '<img src="http://placehold.it/400x400">';
            echo '<p class="plant">'.$row['description_produit'].'</p>';
            echo '<p class="prix">'.$row["price_produit"].' $</p>';
            echo '<form class="" action="panier.php"  method="post">';
            echo '<input type="number" name="quantity" value="quantity"">';
            echo '<button type="submit" name="button">Ajouter au Panier</button>';
            echo '<input style="display: none" type="text" name="id" value="'.$id.'"">';
            echo '</form>';
            ?>

        </main>

    </div>

    <script src="static/external/jquery/dist/jquery.min.js"></script>
    <script src="static/external/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="static/js/catalog.js"></script> -->
    <script src="static/js/getparam.js"></script>
    <!-- <script src="static/js/produit.js"></script> -->
    <script src="static/external/SlidesJS/source/jquery.slides.js"></script>
    <script src="static/external/bootstrap-validator/dist/validator.min.js"></script>
</body>

</html>
