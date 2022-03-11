function Youtube(string, api) {
    $('#ModalLabelYouTube').html(string);
    $('#ModalIframeYouTube').attr('src', 'https://www.youtube.com/embed/' + api);
}