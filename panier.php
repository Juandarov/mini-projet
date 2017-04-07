<?php require 'header.php'; ?>

        <main id="panier">
            <h3>Panier <i class="fa fa-shopping-basket" aria-hidden="true"></i></h3>
            <p>Votre panier contient 1 produit(s)</p>
            <div class="table-responsive">
                <table style="width:100%">
                    <tr>
                        <th></th>
                        <th>Photo</th>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th></th>
                    </tr>
                </table>
            </div>
        </main>

        <?php
        define('MYSQL_SERVEUR', 'localhost');
        define('MYSQL_UTILISATEUR', 'toto');
        define('MYSQL_MOTDEPASSE', 'plop');
        define('MYSQL_BASE', 'boutique_en_ligne');

        $id = $_GET["id_cart"];

        $mysql = new MySQLi(MYSQL_SERVEUR, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE, MYSQL_BASE);

        $mysql->set_charset("utf8");
        $sql = "select * contient_cart where id_cart='$id' ;";
        $result = $mysql->query($sql);

        while ($row = $result->fetch_assoc()){


        echo '<h3>'.$row['id_produitt'].'</h3>';
        };
        ?>
    </div>


    <!-- <script src="static/external/jquery/dist/jquery.min.js"></script> -->
    <script src="static/external/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/external/bootstrap-validator/dist/validator.min.js"></script>
    <!-- <script src="static/js/catalog.js"></script>
    <script src="static/js/cat.js"></script>
    <script src="static/js/panier.js"></script> -->
</body>

</html>
