$(document).ready(function() {

    var maDiv = $('<div class="produit col-md-10"></div>');
    var prixAComparer = ""

    for (var i = 0; i < catalog.length; i++) {
        var maDivProduit = $('<div class="le_produit"></div>')
        var maSection = $('<section></section>')
        var monImage = $('<img src='+catalog[i].thumb+'></img>');
        var monTitre = $('<h3 class="name">'+catalog[i].name+'</h3>');
        var maDescription = $('<p class="plant">'+catalog[i].description+'<a class="btn btn-default" href="produit.html?produit='+[i]+'"role="button">En savoir plus</a></p>');
        var monPrix = $('<p class="prix">'+catalog[i].price+'€'+'</p>');
        $("#catalogue").append(maDiv);
        maDiv.append(maDivProduit);
        maDivProduit.append(monTitre);
        maDivProduit.append(maSection);
        maSection.append(monImage);
        maSection.append(maDescription);
        maSection.append(monPrix);
    }

    $("#vingt").click(function() {
        var lesDivProduit = $(".le_produit");
        for (var i = 0; i < lesDivProduit.length; i++) {
            var leProduit = $(lesDivProduit[i])
            prixAComparer = leProduit.find(".prix").html()

            if (prixAComparer > 31) {
                console.log(prixAComparer);
                leProduit.hide();
            }
            else {
                leProduit.show();
            }
        }
    })
    $("#trente").click(function() {
        var lesDivProduit = $(".le_produit");
        for (var i = 0; i < lesDivProduit.length; i++) {
            var leProduit = $(lesDivProduit[i])
            leProduit.show();
            prixAComparer = leProduit.find(".prix").html()

            if (prixAComparer > 41) {
                console.log(prixAComparer);
                leProduit.hide();
            }
            else {
                leProduit.show();
            }

        }
    })
    $("#tous").click(function() {
        var lesDivProduit = $(".le_produit");
            var leProduit = $(lesDivProduit[i])
            lesDivProduit.show();
    });

    // $(".search").blur(function() {
    //     var lesDivProduit = $(".le_produit");
    //     for (var i = 0; i < lesDivProduit.length; i++) {
    //         var leProduit = $(lesDivProduit[i]);
    //         var monContenu = lesDivProduit.val();
    //         var maRecherche = $('.recherche').val();
    //         console.log(maRecherche);
    //         var result = monContenu.indexOf(maRecherche)
    //
    //         if (result = -1) {
    //             alert("il n'y a pas de résultat à votre recherche");
    //         }
    //         else {
    //             alert("il n'y a un résultat à votre recherche");;
    //         }
    //     }
    // })

})
