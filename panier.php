<?php require 'header.php'; ?>

        <main id="panier">
            <h3>Panier <i class="fa fa-shopping-basket" aria-hidden="true"></i></h3>
            <p>Votre panier contient 1 produit(s)</p>
        </main>

        <?php
        define('MYSQL_SERVEUR', 'localhost');
        define('MYSQL_UTILISATEUR', 'toto');
        define('MYSQL_MOTDEPASSE', 'plop');
        define('MYSQL_BASE', 'boutique_en_ligne');


        $mysql = new MySQLi(MYSQL_SERVEUR, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE, MYSQL_BASE);

        $mysql->set_charset("utf8");
        $sql = 'SELECT * from  contient_cart join produitt on contient_cart.id_produitt = produitt.id_produitt';
        $result = $mysql->query($sql);

        while ($row = $result->fetch_assoc()){

        echo '<table style="width:100%">
              <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th></th>
              </tr>
              <tr>
                <td>'.$row['name_produit'].'</td>
                <td>'.$row['price_produit'].'$'.'</td>
                <td>'.$row['quantity_contient'].'</td>
                <td>'.$row['quantity_contient']*$row['price_produit'].'$'.'</td>
                <td>delete</td>
              </tr>
            </table>';
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
