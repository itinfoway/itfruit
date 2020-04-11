$('#blogCarousel').carousel({
    interval: 5000
});
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

$("#sliced-loading").show();
$(document).ajaxStart(function () {
    $("#sliced-loading").show();
});
$(document).ajaxStop(function () {
    $("#sliced-loading").hide();
});
$("#cart-notification").hide();
$(window).load(function () {
    $("#sliced-loading").hide();
    if (getCookie("crt") != "")
    {
        $("#cart-notification").show();
        $("#cart-notification").text(getCookie("crt"));
    }
});