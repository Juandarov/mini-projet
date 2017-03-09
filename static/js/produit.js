$(document).ready(function() {
    var monTitre = $('<h3 class="name">'+catalog[GET_PARAM("produit")].name+'</h3>');
    $("#fiche").append(monTitre);
    var monImage = $('<img src='+catalog[GET_PARAM("produit")].pictures+'></img>');
    $("#fiche").append(monImage);
    var maDescription = $('<p class="plant">'+catalog[GET_PARAM("produit")].description+'</p>');
    $("#fiche").append(maDescription);
    var monPrix = $('<p class="prix">'+catalog[GET_PARAM("produit")].price+' €</p>');
    $("#fiche").append(monPrix);
    var monPanier = $('<button type="button" class="btn btn-success"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Ajouter au panier</button>')
    $("#fiche").append(monPanier);

})
