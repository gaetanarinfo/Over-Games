VANTA.WAVES({
    el: "#wave",
    mouseControls: false,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x27597d,
    shininess: 124.00,
    waveHeight: 20.50,
    waveSpeed: 1.65,
    zoom: 0.81
});

var fo_color = sessionStorage.getItem('fo-color');
var fo_color_text = sessionStorage.getItem('fo-color-text');
var fo_text = sessionStorage.getItem('fo-text');

if (fo_color != null) {

    $('.fo-tr').css('background-color', fo_color);
    $('tbody').css('background-color', fo_color);

}

if (fo_color_text != null) {

    $('.fo-tr').css('color', fo_color_text);
    $('tbody').css('color', fo_color_text);
    $('tbody a').css('color', fo_color_text);

}

if (fo_text != null) {

    $('.fo-tr').css('font-size', fo_text);
    $('.fo-td').css('font-size', fo_text);
    $('.fo-td a').css('font-size', fo_text);

}

if (fo_text != null || fo_color_text != null || fo_text != null) {

    $('#fo-remove-font').click(function() {
        sessionStorage.removeItem('fo-color');
        sessionStorage.removeItem('fo-color-text');
        sessionStorage.removeItem('fo-text');

        $('.fo-tr').css('background-color', '#b9b6b6');
        $('tbody').css('background-color', 'transparent');
        $('tbody a').css('color', '#484a4c');
        $('.fo-tr').css('color', '#484a4c');
        $('.fo-td').css('color', '#484a4c');
        $('.fo-tr').css('font-size', '13px');
        $('.fo-td').css('font-size', '14px');
        $('.fo-td a').css('font-size', '14px');

        $('#fo-remove-font').css('display', 'none');

        return false;
    });

} else {
    $('#fo-remove-font').css('display', 'none');
}


$('#fo-color').click(function() {

    $('#color').fadeToggle(200);

    $('#color').change(function() {
        $('.fo-tr').css('background-color', $('#color').val());
        $('tbody').css('background-color', $('#color').val());
        sessionStorage.setItem('fo-color', $('#color').val());
        $('#fo-remove-font').css('display', 'block');
    });

    return false;
});

$('#fo-color-text').click(function() {

    $('#color-text').fadeToggle(200);

    $('#color-text').change(function() {
        $('.fo-tr').css('color', $('#color-text').val());
        $('tbody').css('color', $('#color-text').val());
        $('tbody a').css('color', $('#color-text').val());
        sessionStorage.setItem('fo-color-text', $('#color-text').val());
        $('#fo-remove-font').css('display', 'block');
    });

    return false;
});

count = 10;

$('#fo-font').click(function() {

    count += 5;

    if (count < 35) {
        $('.fo-tr').css('font-size', count, 'px');
        $('.fo-td').css('font-size', count, 'px');
        $('.fo-td a').css('font-size', count, 'px');
        sessionStorage.setItem('fo-text', count + 'px');
        $('#fo-remove-font').css('display', 'block');
    }


    return false;
});

$('#fo-font2').click(function() {

    count -= 5;


    if (count > 5) {
        $('.fo-tr').css('font-size', count, 'px');
        $('.fo-td').css('font-size', count, 'px');
        $('.fo-td a').css('font-size', count, 'px');
        sessionStorage.setItem('fo-text', count + 'px');
        $('#fo-remove-font').css('display', 'block');
    }


    return false;
});