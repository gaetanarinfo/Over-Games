<?php if($membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { ?>
<!-- Modal Membre Add Sous Catégorie -->

<div class="modal fade" id="subCat2Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelSubCat2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelSubCat2">Modifier une sous catégorie</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form onsubmit="checkFormSubCat2()" method="POST">
                <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-12">
                            <label for="catfoD">Catégorie</label>
                            <select id="catfoD" name="catfoD" class="form-control">
                                <option value="" selected disabled>&#xf0a3;&nbsp;&nbsp;Choisissez une catégorie</option>
                                <option disabled>-------------</option>
                                <?php while($result_cat = $fo_array6_3->fetch()) { ?>
                                <option value="<?php echo $result_cat['forum_id_cat_sujet']; ?>">
                                    &#xf0a3;&nbsp;&nbsp;<?php echo $result_cat['titre']; ?></option>
                                <option disabled>-------------</option>
                                <?php } ?>
                            </select>
                        </div>
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titreeditcatfoB">Titre de la catégorie</label>
                            <input type="text" class="form-control" name="titreeditcatfoB" id="titreeditcatfoB"
                                aria-describedby="titrefoB" placeholder="Titre">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titreeditcatfoB2">Titre 2 de la catégorie</label>
                            <input type="text" class="form-control" name="titreeditcatfoB2" id="titreeditcatfoB2"
                                aria-describedby="titreeditcatfoB2" placeholder="Titre 2">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="topicresolvededitcatA">Topic résolue ?</label><br>
                            <label class="switch">
                                <input type="checkbox" value="1" id="topicresolvededitcatA" name="topicresolvededitcatA">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contenteditcatfoB">Description de la catégorie</label>
                            <textarea class="form-control" name="contenteditcatfoB" id="contenteditcatfoB" rows="6"></textarea>
                                
                            <input type="hidden" id="foedit1_2" name="foedit1_2" value="<?php echo $fo_array5_result['forum_id'] ?>">
                            <input type="hidden" id="foedit2_2" name="foedit2_2" value="<?php echo $fo_array5_result['forum_id_cat'] ?>">
                            <input type="hidden" id="foedit3_2" name="foedit3_2" value="<?php echo $fo_array5_result['forum_id_cat_sujet'] ?>">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button type="submit" class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12">

                <div class="div-result div-result-login" id="div-result-forum-subcat2"></div>

            </div>

        </div>
    </div>
</div>

<?php } ?>