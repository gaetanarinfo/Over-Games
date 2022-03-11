<?php if(isset($_SESSION['pseudo'])) { ?>

<!-- Modal Membre Add Sujet -->

<div class="modal fade" id="sujetModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelSujet"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelSujet">Ajouter un topic</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form onsubmit="checkFormSujet(event)" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titrefoA2">Titre de la catégorie</label>
                            <input type="text" class="form-control" name="titrefoA2" id="titrefoA2"
                                aria-describedby="titrefoA2" placeholder="Titre">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="catfoA">Catégorie</label>
                            <select id="catfoA" name="catfoA" class="form-control">
                                <option value="" selected>&#xf0a3;&nbsp;&nbsp;Choisissez une catégorie</option>
                                <option disabled>-------------</option>
                                <?php while($result_cat = $fo_array6->fetch()) { ?>  
                                    <option value="<?php echo $result_cat['forum_id_cat_sujet']; ?>">&#xf0a3;&nbsp;&nbsp;<?php echo $result_cat['titre']; ?></option>
                                    <option disabled>-------------</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contentfoA2">Description de la catégorie</label>
                            <textarea class="form-control" name="contentfoA2" id="contentfoA2" rows="6"></textarea>
                                
                            <input type="hidden" id="forum_idfoA" name="forum_idfoA" value="<?php echo $fo_array5_result['forum_id'] ?>">
                            <input type="hidden" id="forum_id_catfoA" name="forum_id_catfoA" value="<?php echo $fo_array5_result['forum_id_cat'] ?>">
                            <input type="hidden" id="forum_id_cat_sujetfoA" name="forum_id_cat_sujetfoA" value="<?php echo $fo_array5_result['forum_id_cat_sujet'] ?>">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button type="submit" class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12">

                <div class="div-result div-result-login" id="div-result-forum"></div>

            </div>

        </div>
    </div>
</div>
<?php } ?>