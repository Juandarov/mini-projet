$(document).ready(function() {
    $.getJSON('https://codi-e-commerce.herokuapp.com/', function(catalog) {
        // var monPanier_json = sessionStorage.getItem("panier");
        // var monPanier= JSON.parse(monPanier_json);
        // var indice = ""
        // var prixProduit =""
        // for (var indice in monPanier) {
        //     var quantite = monPanier[indice]
        //     var monProduitTr = $('<tr class="produit" id="'+indice+'"></tr>')
        //     $('tbody').append(monProduitTr);
        //     monProduitTr.append("<th scope='row'></th>");
        //     monProduitTr.append('<td><img src='+catalog[indice].thumb+'></img></td>');
        //     monProduitTr.append('<td><p>'+catalog[indice].name+'</p></td>');
        //     monProduitTr.append('<td><p>'+catalog[indice].price+'€ TTC</p></td>');
        //     monProduitTr.append('<td><input type=number value ='+quantite+'><i class="fa fa-trash fa-2x" aria-hidden="true"></i></td>');
        //     var prixProduit += parseInt(catalog[indice].price)*parseInt(monPanier[indice]);
        //     console.log(indice);
        //     $("#"+indice+"").click(function() {
        //         var newQuantite = $(this).val();
        //         // console.log(newQuantite);
        //         var totalTTCDuProduit = prixProduit*newQuantite;
        //         console.log(totalTTCDuProduit);
        //         $(this.prix).remove()
        //         monProduitTr.append('<td class="prix">'+totalTTCDuProduit+'</td>');
        //         var prixProduit = parseInt(catalog[indice].price);
        //     });
        // var totalTTCDuProduit += prixProduit;
        // monProduitTr.append('<td class="prix">'+totalTTCDuProduit+'</td>');
        // $(".totalTTC").append('<td class="prix">'+totalTTCDuProduit+'</td>');
        //         for (var i = 0; i < monPanier[indice].length; i++) {
        //             // var quantite_json = sessionStorage.getItem("nbre");
        //             // var quantite= JSON.parse(quantite_json);
        //
        // };
        // $(document).ready(function(){

        creation()

        function creation() {
            $("tbody").empty()
            var panier_json = sessionStorage.getItem("panier");
            var panier = JSON.parse(panier_json)
            var Intermediaire = 0;
            for (var key in panier) {
                var maLigne = $('<tr data-id="' + key + '"></tr>');
                var maDesignPanier = $('<th>' + catalog[key].name + '</th>');
                var monPrixPanier = $('<td>' + catalog[key].price + '€ TTC</td>');
                var maQuantitePanier = $('<td><button type="button" class="moins">-</button><input type="text" value="' + panier[key] + '"><button type="button" class="plus">+</button><button type="button" class="trash"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>');
                var monTotalArticle = $('<td>' + catalog[key].price * panier[key] + '€ TTC</td>');
                $("tbody").append(maLigne);
                maLigne.append(maDesignPanier);
                maLigne.append(monPrixPanier);
                maLigne.append(maQuantitePanier);
                maLigne.append(monTotalArticle);
                Intermediaire += parseInt(catalog[key].price) * parseInt(panier[key]);
            }
            console.log(Intermediaire);
            $("#totalFinal").html(Intermediaire + " € TTC")
            $(".moins").click(function() {
                var panier_json = sessionStorage.getItem("panier");
                var panier = JSON.parse(panier_json)
                var dataId = $(this).parent().parent().data("id")
                if (panier[dataId] > 1) {
                    panier[dataId]--
                        panier = JSON.stringify(panier);
                    sessionStorage.setItem("panier", monPanier_json);

                    creation()
                }
            })
            $(".plus").click(function() {
                var panier_json = sessionStorage.getItem("panier");
                var panier = JSON.parse(panier_json);
                var dataId = $(this).parent().parent().data("id");
                panier[dataId]++
                    var monPanier_json = JSON.stringify(monPanier);
                sessionStorage.setItem("panier", monPanier_json);

                creation()
            })

            $(".trash").click(function() {
                var dataId = $(this).parent().parent().data("id")
                var panier_json = sessionStorage.getItem("panier");
                var panier = JSON.parse(panier_json);
                delete panier[dataId];
                var monPanier_json = JSON.stringify(monPanier);
                sessionStorage.setItem("panier", monPanier_json);

                creation()
            })
        }
    });
});
// });
