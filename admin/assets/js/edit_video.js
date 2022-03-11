function EditYouTube(id) {

    $.get("https://gaetan-seigneur.store/admin/assets/config/view_video.php?id=" + id, function(data) {
        $("body")
        $('#titrevidA').attr('value', data.titre);
        $('#apividA').attr('value', data.api);

    }, "json");

}