<?php
ini_set('display_errors', 1);
$title = "Mon 'tit Catalogue";
$onglet = "Catalogue";
$currentPage = "cat";
include_once "header.php"; ?>
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
                        <div class="produit col-md-10">
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
                            $sql = "SELECT * FROM Product;";

                            $result = $mysql->query($sql);

                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="le_produit"><h3 class="name">'.$row['name_Product'].'</h3>';
                                echo '<p class="plant">'.$row['documentation_Product'].'</p>';
                                echo '<p>'.$row['price_Product'].' €</p>';
                                echo '<p><a class="btn btn-default" href="produit.php?produit='.$row['id_Product'].'" role="button">En savoir plus</a></p></div>';
                            }
                            $result->free();
                            $mysql->close();
                            ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>

<?php $anotherscript = '<script src="static/external/paginate/src/jquery.paginate.js"></script>';
include "footer.php"; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".produit").paginate({
            'perPage': 6,
            'scope': $('.le_produit')
        });
    });
</script>
