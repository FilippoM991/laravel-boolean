require('./bootstrap');

var $ = require('jquery');

$(".faq").click(function(){
    $(this).children("p").slideToggle();
    if ($(this).children("i").hasClass("fa-minus")) {
        $(this).children("i").removeClass("fa-minus");
        $(this).children("i").addClass("fa-plus");
    } else {
        $(this).children("i").removeClass("fa-plus");
        $(this).children("i").addClass("fa-minus");
    };
    


})
