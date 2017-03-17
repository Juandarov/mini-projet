$(document).ready(function() {
    var monPanier_json = sessionStorage.getItem("panier");
    var monPanier= JSON.parse(monPanier_json);

    for (var indice in monPanier) {
        var quantite = monPanier[indice]
        // var monTableau = $();
        $('tbody').append('<tr class="produit"></tr>');
        // var maRow = $('<th scope="row"></th>';
        $(".produit").append("<th scope='row'></th>");
        // var maPhoto = $('<td><img src="static/images/cactus.jpg" alt="Cactus" class="img-responsive" width="40">
        $(".produit").append('<td><img src='+catalog[indice].thumb+'</img></td>');
        $(".produit").append('<td><p>'+catalog[indice].name+'</p></td>');
        $(".produit").append('<td><p>'+catalog[indice].price+'</p></td>');
        $(".produit").append('<td><input id="qty" type=number value ='+quantite+'><i class="fa fa-trash fa-2x" aria-hidden="true"></i></td>');
        var prixProduit = parseInt(catalog[indice].price);
        var totalTTCDuProduit = parseInt(prixProduit*quantite);
        $(".produit").append('<td>'+totalTTCDuProduit+'</td>');
    };
    $("#qty").on("change",function() {
        for (var i = 0; i < monPanier[indice].length; i++) {
            var newQuantite = $(this).val();
            // var quantite_json = sessionStorage.getItem("nbre");
            // var quantite= JSON.parse(quantite_json);
            var totalTTCDuProduit = parseInt(prixProduit*newQuantite);
            console.log(totalTTCDuProduit);

        }
    })
    // var totalTTC += totalTTCDuProduit;
    // $(".totalTTC").append('<p>'+totalTTC+'</p>');

})
