// Afficher tout les articles
$('#all_plateforme').click(function(e) {
    e.preventDefault();

    $('#all').show(200);
    $('#plateforme_result').hide(200);
    $('#dropdown1').hide(50);
    $('#change_p').html('Toute plateforme');
});

$('#plateforme1').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#plateforme_result').show(200);
    $('#dropdown1').hide(50);

    ChoicePlateforme("QUEST2");
    $('#change_p').html('QUEST2');
});

$('#plateforme2').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("QUEST1");
    $('#change_p').html('QUEST1');
});

$('#plateforme3').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("Xbox X|S");
    $('#change_p').html('Xbox X|S');
});

$('#plateforme4').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("PS5");
    $('#change_p').html('PS5');
});

$('#plateforme5').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("Stadia");
    $('#change_p').html('Stadia');
});

$('#plateforme6').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("PC");
    $('#change_p').html('PC');
});

$('#plateforme7').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("MAC");
    $('#change_p').html('MAC');
});

$('#plateforme8').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("iP");
    $('#change_p').html('iP');
});

$('#plateforme9').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("Switch");
    $('#change_p').html('Switch');
});

$('#plateforme10').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("PS4");
    $('#change_p').html('PS4');
});

$('#plateforme11').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("XONE");
    $('#change_p').html('XONE');
});

$('#plateforme12').click(function(e) {
    e.preventDefault();

    $('#all').hide(200);
    $('#dropdown1').hide(50);
    $('#plateforme_result').show(200);

    ChoicePlateforme("AND");
    $('#change_p').html('AND');
});


// Function GET trie plateforme
function ChoicePlateforme(string) {

    $.get("https://gaetan-seigneur.store/assets/config/plateforme.php?plateforme=" + string, function(data) {
        $("#plateforme_result").html(data);
    });

}