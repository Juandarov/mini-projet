$(document).ready(function() {
    $.getJSON('https://codi-e-commerce.herokuapp.com/', function(catalog) {
        var monTitre = $('<h3 class="name">'+catalog[GET_PARAM("produit")].name+'</h3>');
        $("#fiche").append(monTitre);

        for (var i = 0; i < catalog[GET_PARAM("produit")].pictures.length; i++) {
            var monImage = $('<img src='+catalog[GET_PARAM("produit")].pictures[i]+'></img>');
            $("#fiche").append(monImage);
        }

        var maDescription = $('<p class="plant">'+catalog[GET_PARAM("produit")].description+'</p>');
        $("#fiche").append(maDescription);
        var howMany = $('<input type=number value =1>');
        $("#fiche").append(howMany);
        var monPrix = $('<p class="prix">'+catalog[GET_PARAM("produit")].price+' €</p>');
        $("#fiche").append(monPrix);
        var bouton = $('<a class="btn btn-default" href="#" role="button"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Ajouter au panier</a>');
        $("#fiche").append(bouton);

        var id = GET_PARAM("produit");
        bouton.click(function(){
            var monPanier_json = sessionStorage.getItem("panier");
            if (monPanier_json == null) {
                var monPanier = {}
            } else {
                var monPanier= JSON.parse(monPanier_json);
                console.log(monPanier);
            }
            monPanier[id] = howMany.val();
            var monPanier_json = JSON.stringify(monPanier);
            sessionStorage.setItem("panier", monPanier_json);
        // console.log(monPanier);

        //
        //     if (monPanier[id] != undefined) {
        // } else {
        //         monPanier[id] ++;
        //         console.log(monPanier[id]);
        //         var monPanier_json = JSON.stringify(monPanier);
        //         localStorage.setItem("panier", monPanier_json);
        //
        //         }
//             else {
//                 var newProduit = monPanier[id];
//                 newProduit = 1;
//                 var monPanier_json = JSON.stringify(newProduit);
//                 localStorage.setItem("panier", monPanier_json);
//             }
// }
        })

    })
})
