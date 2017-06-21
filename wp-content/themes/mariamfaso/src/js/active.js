/* Képhren/Projet
*
* /src/js/script.js - Main script for projet
*
* coded by Képhren SIMONIS
* started at 22/02/2017
*/

$(document).ready(function () {
    $('.list3__elt').click(function(e) {

        $('.list3__elt').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});

$(document).ready(function () {
    $('.list5__elt').click(function(e) {

        $('.list5__elt').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});

