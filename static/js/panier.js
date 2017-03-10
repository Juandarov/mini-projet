$(document).ready(function() {
    var monPanier_json = sessionStorage.getItem("panier");
    var monPanier= JSON.parse(monPanier_json);
    var indice = "";
    var quantite = "";
    var monPanier = {indice:quantite};
    console.log(monPanier);


    // var monTableau = $();
    // $('tbody').append('<tr></tr>');
    // // var maRow = $('<th scope="row"></th>';
    // $("tr").append("<th scope='row'></th>");
    // // var maPhoto = $('<td><img src="static/images/cactus.jpg" alt="Cactus" class="img-responsive" width="40">
    // $("tr").append('<td><img src='+catalog[indice].thumb+'></img></td>');

})
// <!-- <tr>
//     <th scope="row"></th>
//     <td>
//         <img src="static/images/cactus.jpg" alt="Cactus" class="img-responsive" width="40">
//     </td>
//     <td>
//         <p>Cactus</p>
//     </td>
//     <td>
//         <p>25 964 €</p>
//     </td>
//     <td>
//         <input type=number> <a href="#"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
//     </td>
//     <td></td>
// </tr>
