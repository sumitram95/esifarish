
$('.toggle-password').on('mousedown touchstart', function(e) {
    $("#password").attr("type", "text");
}).bind('mouseup mouseleave touchend', function() {
    $("#password").attr("type", "password");
});


$(".toggle-passwordres").click(function () {
    if ($("#password").attr("type") == "password") {
        $("#password").attr("type", "text");
    } else {
        $("#password").attr("type", "password");
    }
});
$(".toggle-passwordconf").click(function () {
    if ($("#password_confirmation").attr("type") == "password") {
        $("#password_confirmation").attr("type", "text");
    } else {
        $("#password_confirmation").attr("type", "password");
    }
});
