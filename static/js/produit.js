$(document).ready(function() {

            var monTitre = $('<h3 class="name">' + catalog[GET_PARAM("produit")].name + '</h3>');
            $("#fiche").append(monTitre);

            for (var i = 0; i < catalog[GET_PARAM("produit")].pictures.length; i++) {
                var monImage = $('<img src=' + catalog[GET_PARAM("produit")].pictures[i] + '></img>');
                $("#fiche").append(monImage);
            }

            var maDescription = $('<p class="plant">' + catalog[GET_PARAM("produit")].description + '</p>');
            $("#fiche").append(maDescription);
            var monPrix = $('<p class="prix">' + catalog[GET_PARAM("produit")].price + ' €</p>');
            $("#fiche").append(monPrix);
            var bouton = $('<a class="btn btn-default" href="panier.html" role="button"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Ajouter au panier</a>');
            $("#fiche").append(bouton);

                bouton.click(function() {
                    var monPanier_json = localStorage.getItem("panier");
                    if (monPanier_json == null) {
                        var monPanier = {};
                    } else {
                        var monPanier = JSON.parse(monPanier_json);
                    }

                    monPanier[GET_PARAM("produit")] = 1

                    var monPanier_json = JSON.stringify(monPanier);
                    localStorage.setItem("panier", monPanier_json);
                })
            })
