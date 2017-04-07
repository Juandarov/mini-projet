<?php require 'header.php'; ?>

        <main id="panier">
            <h3>Panier <i class="fa fa-shopping-basket" aria-hidden="true"></i></h3>
            <p>Votre panier contient 1 produit(s)</p>
            <table class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    define('MYSQL_SERVEUR', 'localhost');
                    define('MYSQL_UTILISATEUR', 'toto');
                    define('MYSQL_MOTDEPASSE', 'plop');
                    define('MYSQL_BASE', 'boutique_en_ligne');


                    $mysql = new MySQLi(MYSQL_SERVEUR, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE, MYSQL_BASE);

                    $mysql->set_charset("utf8");

                    if (isset($_POST['quantity'])) {
                        $sql = "INSERT INTO contient_cart (id_of_cart, id_produitt, quantity_contient)
                        VALUES ('1', '".$_POST['id']."', '".$_POST['quantity']."');";
                        $result = $mysql->query($sql);
                        header('Location: panier.php');
                    }

                    $sql = 'SELECT * from  contient_cart join produitt on contient_cart.id_produitt = produitt.id_produitt';

                    $result = $mysql->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo '  <tr>
                                <td>'.$row['name_produit'].'</td>
                                <td>'.$row['price_produit'].'$'.'</td>
                                <td>'.$row['quantity_contient'].'<input type="number">'.'</td>
                                <td>'.$row['quantity_contient']*$row['price_produit'].'$'.'</td>
                                </tr>';
                    };
                    ?>
                </tbody>
                </table>
        </main>
    </div>

    <!-- <script src="static/external/jquery/dist/jquery.min.js"></script> -->
    <script src="static/external/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/external/bootstrap-validator/dist/validator.min.js"></script>

</body>

</html>
