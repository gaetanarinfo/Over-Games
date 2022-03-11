// Modal

$('#login').css('cursor', 'pointer');
$('#login-2').css('cursor', 'pointer');

$('#login').click(function() {

});

$('#login-2').click(function() {


});

$('#btn-recover').click(function() {
    $('#ModalLabelLogin').text('Mot de passe oublier');

    $('#login-modal').addClass("fade");
    setTimeout(function() {
        $('#login-modal').hide(1000);
    }, 500);

    setTimeout(function() {
        $('#password-modal').addClass("fade show");
        $('#password-modal').show(1000);
    }, 550);
});

$('#login_btn').click(function() {

    $('#ModalLabelLogin').text('Connexion');

    setTimeout(function() {
        $('#password-modal').hide(1000);
    }, 500);

    setTimeout(function() {
        $('#login-modal').addClass("fade show");
        $('#login-modal').show(1000);
    }, 550);
});