<?php if(isset($_SESSION['pseudo'])) { ?>
<!-- Modal Membre Add Sous Catégorie -->

<div class="modal fade" id="subCatModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelSubCat"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelSubCat">Ajouter une sous catégorie</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form onsubmit="checkFormSubCat(event)" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titrefoB">Titre de la catégorie</label>
                            <input type="text" class="form-control" name="titrefoB" id="titrefoB"
                                aria-describedby="titrefoB" placeholder="Titre">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titrefoB2">Titre 2 de la catégorie</label>
                            <input type="text" class="form-control" name="titrefoB2" id="titrefoB2"
                                aria-describedby="titrefoB2" placeholder="Titre 2">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contentfoB">Description de la catégorie</label>
                            <textarea class="form-control" name="contentfoB" id="contentfoB" rows="6"></textarea>
                                
                            <input type="hidden" id="forum_idfoB" name="forum_idfoB" value="<?php echo $fo_array5_result['forum_id'] ?>">
                            <input type="hidden" id="forum_id_catfoB" name="forum_id_catfoB" value="<?php echo $fo_array5_result['forum_id_cat'] ?>">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button type="submit" class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12">

                <div class="div-result div-result-login" id="div-result-forum-subcat"></div>

            </div>

        </div>
    </div>
</div>

<?php } ?>