<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue</title>

    <link href="static/external/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/external/paginate/src/jquery.paginate.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <div class="container">
        <h1>Mini Projet</h1>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                        <h2 class=" enjoy-css" href="#">Mini Projet</h2>
                    </div>price_produit
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="#">Catalogue</a></li>
                            <li><a href="panier.html">Panier</a></li>
                            <li><a href="form.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
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
                            echo '<h3 class="name">'.$row['name_produit'].'</h3>';
                            echo '<p class="plant">'.$row['description_produit'].'<a class="btn btn-default" "role="button">En savoir plus</a>'.'</p>';
                            echo '<p class="prix">'.$row["price_produit"].'</p>';

                            // " ".$row['description_produit']." ".$row["price_produit"]."<br/>";
                        }

                        $result->free();

                        $mysql->close();
                        ?>

                    </div>
                </main>
            </div>
        </div>
    </div>


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
