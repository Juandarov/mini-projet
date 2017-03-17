$(document).ready(function() {
    var monPanier_json = localStorage.getItem("panier");
    var monPanier = JSON.parse(monPanier_json);

    for (var panier in monPanier) {

        var myArticle = $('<tr></tr>');
        var mySpacebar = $('<td></td>');
        var myPrice = $('<td>' + '<p class="prix">' + catalog[panier].price + ' €</p>' + '</td>');
        var myPhoto = $('<td>' + '<img src=' + catalog[panier].thumb + '></img>' + '</td>');
        var myName = $('<td>' + '<p class="name">' + catalog[panier].name + '</p>' + '</td>');
        var myQuantity = $('<td><input type="number" name="quantity" value="'+ monPanier[panier]+'" ><button type="button" class="btn btn-warning" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>');

        $('table').append(myArticle);
        myArticle.append(mySpacebar);
        myArticle.append(myPhoto);
        myArticle.append(myName);
        myArticle.append(myPrice);
        myArticle.append(myQuantity);

    }

    $("button").click(function() {
        $(this).localStorage.removeItem("panier");
    });
})
