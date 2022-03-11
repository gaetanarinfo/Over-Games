<?php if(isset($_SESSION['pseudo']) AND $fo_array5_result['createur'] == $_SESSION['pseudo']) { ?>
<!-- Supression -->
<div class="modal fade bd-example-modal-md" id="deleteModal3" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelRemoveSujet" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelRemoveSujet">Êtes-vous sur de vouloirs supprimé le sujet ?</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="application/x-www-form-urlencoded" id="delete-Modal" onsubmit="btn_del_suj(<?php echo $fo_array5_result['forum_id']; ?>, <?php echo $fo_array5_result['forum_id_cat']; ?>, <?php echo $fo_array5_result['forum_id_cat_sujet']; ?>)" method="POST">
                <div class="modal-body text-center">
                    <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button
                        type="submit" class="btn btn-form">Confirmer</button>
                </div>
                <input type="hidden" id="focreateurA" name="focreateurA" value="<?php echo $fo_array5_result['createur']; ?>">
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result-delete-suj" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>
<?php } ?>