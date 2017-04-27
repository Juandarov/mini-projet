<?php require 'header.php'; ?>

        <div class="row">
            <div class="col-sm-12 form-group filtres">
                <input type="text" class="form-control search" placeholder="Search">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Prix</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#" id="vingt">jusqu'à 30€</a></li>
                        <li><a href="#" id="trente">jusqu'à 40€</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" id="tous">Voir tous les prix</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <main>
                    <div class="row" id="catalogue">

                        <?php
                        define('MYSQL_SERVEUR', 'localhost');
                        define('MYSQL_UTILISATEUR', 'toto');
                        define('MYSQL_MOTDEPASSE', 'plop');
                        define('MYSQL_BASE', 'boutique_en_ligne');


                        $mysql = new MySQLi(MYSQL_SERVEUR, MYSQL_UTILISATEUR, MYSQL_MOTDEPASSE, MYSQL_BASE);

                        $mysql->set_charset("utf8");
                        $sql = "select * from produitt;";
                        $result = $mysql->query($sql);

                        while ($row = $result->fetch_assoc()){

                        echo '<div class="le_produit">';
                        echo '<h3 class="name">'.$row['name_produit'].'</h3>';
                        echo '<section>';
                        echo '<img src="http://placehold.it/140x140">';
                        echo '<p class="plant">'.$row['description_produit'];
                        echo '<a class="btn btn-default" href="http://localhost:8080/mini-projet/produit.php?id_produitt='.$row['id_produitt'].'" role="button">En savoir plus</a>';
                        echo '</p>';
                        echo '<p class="prix">'.$row["price_produit"].' $</p>';
                        echo '</section></div>';
                        };

                        $result->free();

                        $mysql->close();
                        ?>

                    </div>
                </main>
            </div>
        </div>
    </div>

    html5  

    <script src="static/external/jquery/dist/jquery.min.js"></script>
    <script src="static/external/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="static/js/catalog.js"></script> -->
    <!-- <script src="static/js/cat.js"></script> -->
    <script src="static/external/paginate/src/jquery.paginate.js"></script>

    <script src="static/external/SlidesJS/source/jquery.slides.js"></script>
    <script src="static/external/bootstrap-validator/dist/validator.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".produit").paginate({
                'perPage': 4,
                'scope': $('.le_produit')

            });
        });
    </script>

</body>
</html>
