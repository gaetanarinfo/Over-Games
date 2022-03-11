<?php if(isset($_SESSION['pseudo']) AND $membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { ?>
<!-- Supression -->
<div class="modal fade bd-example-modal-md" id="deleteModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelRemove" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelRemove">Êtes-vous sur de vouloirs supprimé ?</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delete-Modal" onsubmit="btn_del_cat(event)" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="catfoA">Catégorie</label>
                            <select id="catfoB" name="catfoB" class="form-control">
                                <option value="" selected>&#xf0a3;&nbsp;&nbsp;Choisissez une catégorie</option>
                                <option disabled>-------------</option>
                                <?php while($result_cat = $fo_array7->fetch()) { ?>  
                                    <option value="<?php echo $result_cat['forum_id_cat_sujet']; ?>">&#xf0a3;&nbsp;&nbsp;<?php echo $result_cat['titre']; ?></option>
                                    <option disabled>-------------</option>
                                <?php } ?>
                            </select>
                            <input type="hidden" id="catfoB2" name="catfoB2" value="<?php echo $fo_array5_result['forum_id']; ?>">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button
                        type="submit" class="btn btn-form">Confirmer</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result-delete" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>
<?php } ?>