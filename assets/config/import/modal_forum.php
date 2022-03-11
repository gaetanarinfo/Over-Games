<?php if(isset($_SESSION['pseudo']) AND $fo_membre_result['rang'] == "Administrateur" OR $fo_membre_result['rang'] == "Moderateur") { ?>

<!-- Modal Admin & Modo Add Catégorie -->

<div class="modal fade" id="categorieModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCat"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelCat">Ajouter une catégorie</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form onsubmit="checkFormCat(event)" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="iconefoA">Icône de la catégorie</label>
                            <input type="text" class="form-control" name="iconefoA" id="iconefoA"
                                aria-describedby="iconefoA" placeholder="Icône"
                                value="assets/images/forum/categorie/assassins-creed-black-flag-icon-256.png" disabled>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titrefoA">Titre de la catégorie</label>
                            <input type="text" class="form-control" name="titrefoA" id="titrefoA"
                                aria-describedby="titrefoA" placeholder="Titre">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titre2foA">Titre 2 de la catégorie</label>
                            <input type="text" class="form-control" name="titre2foA" id="titre2foA"
                                aria-describedby="titre2foA" placeholder="Titre 2">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titre2foA">Rang de la catégorie</label>
                            <select type="text" class="form-control" name="rangfoA" id="rangfoA">
                                <option>Rang de la catégorie</option>
                                <option disabled>---------------</option>
                                <option value="1">Administrateur & Modérateur</option>
                                <option value="0">Membre</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="topicfoA">Bloquer le sujet</label>
                            <select type="text" class="form-control" name="topicfoA" id="topicfoA">
                                <option>Création de sujet</option>
                                <option disabled>---------------</option>
                                <option value="0">Oui</option>
                                <option value="1">Non</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="contentfoA">Description de la catégorie</label>
                            <textarea class="form-control" name="contentfoA" id="contentfoA"
                                aria-describedby="contentfoA" rows="6"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="content2foA">Description 2 de la catégorie</label>
                            <textarea class="form-control" name="content2foA" id="content2foA"
                                aria-describedby="content2foA" rows="6"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button
                        type="submit" class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12">

                <div class="div-result div-result-login" id="div-result-forum"></div>

            </div>

        </div>
    </div>
</div>

<?php } ?>

<!-- Modal Admin -->

<div class="modal fade bd-example-modal-lg" id="infoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Administrateurs</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <table class="table table-hover table-borderless">
                    <thead>
                        <tr class="fo-tr">
                            <th scope="col" class="text-center">PSEUDO</th>
                            <th scope="col" class="text-center">RANG</th>
                            <th scope="col" class="text-center">MESSAGE(S)</th>
                            <th scope="col" class="text-center">LOACALISATION</th>
                            <th scope="col" class="text-center">ENREGISTRÉ LE</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php while($membres_result = $membres_view_all->fetch()) { ?>

                        <tr>
                            <td scope="row" style="vertical-align: middle;">
                                <strong><a href="profil_public/<?php echo $membres_result['pseudo'] ?>" target="_blank"><?php echo $membres_result['pseudo'] ?></a></strong>
                            </td>
             
                            <td class="text-center" style="vertical-align: middle;">
                                <div class="fo-rang fo-rang-2 m-auto">
                                <span class="text-danger"><i class="fas fa-bolt mr-2" aria-hidden="true"></i> <?php echo $membres_result['rang'] ?></span>
                                </div>
                            </td>

                            <td class="text-center" style="vertical-align: middle;">
                                <strong><?php ViewMessageMembre($membres_result['email']) ?></strong>
                            </td>

                            <td class="text-center" style="vertical-align: middle;">
                                <strong><?php echo $membres_result['pays'] ?></strong>
                            </td>

                            <td class="text-center" style="vertical-align: middle;">
                                <strong><?php echo $membres_result['date_creation'] ?></strong>
                            </td>
                        </tr> 
                        
                    <?php } ?>

                    </tbody>
                </table>

            </div>

            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal Modo -->

<div class="modal fade bd-example-modal-lg" id="infoModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Modérateur</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <table class="table table-hover table-borderless">
                    <thead>
                        <tr class="fo-tr">
                            <th scope="col" class="text-center">PSEUDO</th>
                            <th scope="col" class="text-center">RANG</th>
                            <th scope="col" class="text-center">MESSAGE(S)</th>
                            <th scope="col" class="text-center">LOACALISATION</th>
                            <th scope="col" class="text-center">ENREGISTRÉ LE</th>
                        </tr>
                    </thead>
                    <tbody>
     
                        <?php while($membres_result = $membres_view_all2->fetch()) { ?>

                            <tr>
                                <td scope="row" style="vertical-align: middle;">
                                    <strong><a href="profil_public/<?php echo $membres_result['pseudo'] ?>" target="_blank"><?php echo $membres_result['pseudo'] ?></a></strong>
                                </td>
                
                                <td class="text-center" style="vertical-align: middle;">
                                    <div class="fo-rang fo-rang-2 m-auto">
                                    
                                        <span class="text-success"><i class="fas fa-bolt mr-2" aria-hidden="true"></i> <?php echo $membres_result['rang'] ?></span>
                                    </div>
                                </td>

                                <td class="text-center" style="vertical-align: middle;">
                                    <strong><?php ViewMessageMembre($membres_result['email']) ?></strong>
                                </td>

                                <td class="text-center" style="vertical-align: middle;">
                                    <strong><?php echo $membres_result['pays'] ?></strong>
                                </td>

                                <td class="text-center" style="vertical-align: middle;">
                                    <strong><?php echo $membres_result['date_creation'] ?></strong>
                                </td>
                            </tr> 
                            
                        <?php } ?>

                    </tbody>
                </table>

            </div>

            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button>
            </div>

        </div>
    </div>
</div>