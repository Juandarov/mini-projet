// var hackerList = new List('hacker-list', options);
//
// var options = {
//     valueNames: [ 'name', 'plant' ]
// };


$(document).ready(function() {

    var maDiv = $('<div class="produit col-md-10"></div>');

    for (var i = 0; i < catalog.length; i++) {
        var maSection = $('<section></section>')
        var monImage = $('<img src='+catalog[i].thumb+'></img>');
        var monTitre = $('<h3 class="name">'+catalog[i].name+'</h3>');
        var maDescription = $('<p class="plant">'+catalog[i].description+'<a class="btn btn-default" href="produit.html" role="button">En savoir plus</a></p>');
        var monPrix = $('<p class="prix">'+catalog[i].price+' €</p>');
            $("#catalogue").append(maDiv);
            maDiv.append(monTitre);
            maDiv.append(maSection);
            maSection.append(monImage);
            maSection.append(maDescription);
            maSection.append(monPrix);

    }
})
