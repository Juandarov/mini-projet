$(document).ready(function() {
    $.getJSON('https://codi-e-commerce.herokuapp.com/', function(catalog) {
        for (var i = 0; i < catalog.length; i++) {
            var maPhotoOne = $('<img class="img-responsive" src='+catalog[parseInt(Math.random()*catalog.length)].pictures+'></img>');
            var maPhotoTwo = $('<img class="img-responsive" src='+catalog[parseInt(Math.random()*catalog.length)].pictures+'></img>');
            var maPhotoThree = $('<img class="img-responsive" src='+catalog[parseInt(Math.random()*catalog.length)].pictures+'></img>');
            $("#slides").append(maPhotoOne);
            $("#slides").append(maPhotoTwo);
            $("#slides").append(maPhotoThree);
        };
        $("#slides").slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                // [boolean] Generate the play and stop buttons.
                // You cannot use your own buttons. Sorry.
                effect: "slide",
                // [string] Can be either "slide" or "fade".
                interval: 4000,
                // [number] Time spent on each slide in milliseconds.
                auto: true,
                // [boolean] Start playing the slideshow on load.
                swap: true,
                // [boolean] show/hide stop and play buttons
                pauseOnHover: false,
                // [boolean] pause a playing slideshow on hover
                restartDelay: 2500,
                // [number] restart delay on inactive slideshow
            },
            pagination: {
                active: false,
                // [boolean] Create pagination items.
                // You cannot use your own pagination. Sorry.
                effect: "fade",
                // [string] Can be either "slide" or "fade".
            },
        });
    });
});
