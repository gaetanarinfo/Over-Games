<?php if($membre_result_co['rang'] == "Administrateur") { ?>
<!-- Ajouter nouveau membre -->
<div class="modal fade bd-example-modal-md" id="addModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelAddMembres" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAddMembres">Ajouter un utilisateur</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add-Modal" onsubmit="checkFormMembres(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nomA">Nom</label>
                        <input type="text" class="form-control" name="nomA" id="nomA" required
                            aria-describedby="emailHelp" placeholder="Nom">
                    </div>

                    <div class="form-group">
                        <label for="prenomA">Prénom</label>
                        <input type="text" class="form-control" name="prenomA" id="prenomA" required
                            aria-describedby="prenomA" placeholder="Prénom">
                    </div>

                    <div class="form-group">
                        <label for="sexeA">Sexe</label>
                        <select required name="sexeA" id="sexeA" class="form-control">
                            <option value="Homme" selected="selected">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ageA">Age</label>
                        <input type="date" class="form-control" required id="ageA" name="ageA">
                    </div>

                    <div class="form-group">
                        <label for="pseudoA">Pseudo</label>
                        <input type="text" class="form-control" required id="pseudoA" name="pseudoA">
                    </div>

                    <div class="form-group">
                        <label for="emailA">Email</label>
                        <input type="email" class="form-control" required id="emailA" name="emailA">
                    </div>

                    <div class="form-group">
                        <label for="passwordA">Mot de passe</label>
                        <input type="password" class="form-control" required id="passwordA" name="passwordA">
                    </div>

                    <div class="form-group">
                        <label for="verifA">Membre vérifié</label>
                        <select required name="verifA" id="verifA" class="form-control">
                            <option value="0" selected="selected">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="premiumA">Membre premium</label>
                        <select required name="premiumA" id="premiumA" class="form-control">
                            <option value="0" selected="selected">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Ajouter une actualité -->
<div class="modal fade bd-example-modal-lg" id="addNews" tabindex="-1" role="dialog" aria-labelledby="ModalLabelAddNews"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAddNews">Ajouter une actualité</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add-Modal-news" onsubmit="checkFormNews(event)" method="POST">
                <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="createurA">Autheur</label>
                        <input type="text" class="form-control" name="createurA" id="createurANews" required
                            aria-describedby="createurA" placeholder="Autheur"
                            value="<?php echo $membre_result_co['prenom'] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="categorieA">Catégorie</label>
                        <select required name="categorieA" id="categorieANews" class="form-control">
                            <option value="NEWS" selected="selected">Actualité</option>
                            <option value="PREMIUM">Premium</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titreA">Titre</label>
                        <input type="text" class="form-control" name="titreA" id="titreANews" required
                            aria-describedby="titreA" placeholder="Titre">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="subtitreA">Sous titre</label>
                        <input type="text" class="form-control" name="subtitreANews" id="subtitreANews"
                            aria-describedby="subtitreA" placeholder="Titre">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="smallimgA">Petite image</label>
                        <input type="text" class="form-control" name="smallimgA" id="smallimgANews" required
                            aria-describedby="smallimgA" placeholder="Petite image lien">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="largeimgA">Grande image</label>
                        <input type="text" class="form-control" name="largeimgA" id="largeimgANews" required
                            aria-describedby="largeimgA" placeholder="Grande image lien">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="contentA">Courte description</label>
                        <textarea class="form-control" name="content2BNews" id="content2BNews" required
                            aria-describedby="content2BNews" placeholder="Courte description" maxlength="255" rows="8"></textarea>
                        
                            <p id="counterBlock"></p>

                        <script>
                            // On selectionne l'element textarea et l'élement p#counterBlock
                            var textarea = document.querySelector('#content2BNews');
                            var blockCount = document.getElementById('counterBlock');

                            function count() {
                                // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
                                var count = 255-textarea.value.length;
                                // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML
                                blockCount.innerHTML= count;
                                
                            // si le count descend sous 0 on ajoute la class red à la balise p#counterBlock
                            if(count<0) {
                                    blockCount.classList.add("red");
                            } 
                            else if(count>=0) {
                                    blockCount.classList.remove("red");
                            }
                            else{}
                            }

                            // on pose un écouteur d'évènement keyup sur le textarea.
                            // On déclenche la fonction count quand l'évènement se produit et au chargement de la page
                            textarea.addEventListener('keyup', count);
                            count();
                        </script>
                    </div>

                    <div class="form-group">
                        <label for="contentB">Longue description</label>
                        <textarea class="form-control" name="contentB" id="contentBNews" required
                            aria-describedby="contentB" placeholder="Longue description" rows="8"></textarea>
                            <script>
                        CKEDITOR.replace( 'contentBNews' );
                </script>
                    </div>

                <div class="form-row">
                   

                    <div class="form-group col-md-6">
                        <label for="tagA">Tag vidéo</label>
                        <select required name="tagA" id="tagANews" class="form-control">
                            <option value="BANDE ANNONCE" selected="selected">BANDE ANNONCE</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="videoA">Vidéo</label>
                        <input type="text" class="form-control" name="videoA" id="videoANews" aria-describedby="videoA"
                            placeholder="Vidéo lien">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="plateforme1A">Plateforme 1</label>
                        <input type="text" class="form-control" name="plateforme1A" id="plateforme1ANews"
                            aria-describedby="plateforme1A" placeholder="Plateforme 1">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme2A">Plateforme 2</label>
                        <input type="text" class="form-control" name="plateforme2A" id="plateforme2ANews"
                            aria-describedby="plateforme2A" placeholder="Plateforme 2">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme3A">Plateforme 3</label>
                        <input type="text" class="form-control" name="plateforme3A" id="plateforme3ANews"
                            aria-describedby="plateforme3A" placeholder="Plateforme 3">
                    </div>

                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme4A">Plateforme 4</label>
                        <input type="text" class="form-control" name="plateforme4A" id="plateforme4ANews"
                            aria-describedby="plateforme4A" placeholder="Plateforme 4">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme5A">Plateforme 5</label>
                        <input type="text" class="form-control" name="plateforme5A" id="plateforme5ANews"
                            aria-describedby="plateforme5A" placeholder="Plateforme 5">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme6A">Plateforme 6</label>
                        <input type="text" class="form-control" name="plateforme6A" id="plateforme6ANews"
                            aria-describedby="plateforme6A" placeholder="Plateforme 6">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme7A">Plateforme 7</label>
                        <input type="text" class="form-control" name="plateforme7A" id="plateforme7ANews"
                            aria-describedby="plateforme7A" placeholder="Plateforme 7">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme8A">Plateforme 8</label>
                        <input type="text" class="form-control" name="plateforme8A" id="plateforme8ANews"
                            aria-describedby="plateforme8A" placeholder="Plateforme 8">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="titreB">Titre du jeux</label>
                        <input type="text" class="form-control" name="titreB" id="titreBNews" aria-describedby="titreB"
                            placeholder="Titre">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="imgB">Image du jeux</label>
                        <input type="text" class="form-control" name="imgB" id="imgBNews" aria-describedby="imgB"
                            placeholder="Image lien">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="genreA">Genre du jeux</label>
                        <input type="text" class="form-control" name="genreA" id="genreANews" aria-describedby="genreA"
                            placeholder="Genre">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="dateA">Date de sortie</label>
                        <input type="text" class="form-control" name="dateA" id="dateANews" aria-describedby="dateA"
                            placeholder="<?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; ?>">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result2" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Ajouter un tuto vidéo -->
<div class="modal fade bd-example-modal-md" id="addTuto" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelAddVideo" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAddVideo">Ajouter un tuto vidéo Youtube</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add-Modal-video" onsubmit="checkFormVideo(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titreA">Titre de la vidéo</label>
                        <input type="text" class="form-control" name="titreA" id="titreA" required
                            aria-describedby="titreA" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="contentA">Description de la vidéo</label>
                        <textarea class="form-control" name="contentA" id="contentA" required
                            aria-describedby="contentA"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="apiA">Code api vidéo</label>
                        <input type="text" class="form-control" name="apiA" id="apiA" required aria-describedby="apiA"
                            placeholder="Code api vidéo">
                    </div>

                    <div class="form-group">
                        <label for="lienA">Lien de la vidéo</label>
                        <input type="text" class="form-control" name="lienA" id="lienA" required
                            aria-describedby="lienA" placeholder="Lien">
                    </div>

                    <div class="form-group">
                        <label for="chaineA">Chaine de la vidéo</label>
                        <input type="text" class="form-control" name="chaineA" id="chaineA" required
                            aria-describedby="chaineA" placeholder="Chaine">
                    </div>

                    <div class="form-group">
                        <label for="iconeA">Icône de la vidéo</label>
                        <input type="text" class="form-control" name="iconeA" id="iconeA" required
                            aria-describedby="iconeA" placeholder="Icône">
                    </div>

                    <div class="form-group">
                        <label for="dateTuto">Date de la vidéo</label>
                        <input type="text" class="form-control" name="dateTuto" id="dateTuto" required
                            aria-describedby="dateTuto" placeholder="Date">
                    </div>

                    <div class="form-group">
                        <label for="imageA">Image de la vidéo</label>
                        <input type="text" class="form-control" name="imageA" id="imageA" required
                            aria-describedby="imageA" placeholder="Image">
                    </div>

                    <div class="form-group">
                        <label for="catA">Catégorie de la vidéo</label>
                        <select required name="catA" id="catA" class="form-control">
                            <option value="HTML" selected="selected">Html</option>
                            <option value="PHP">Php</option>
                            <option value="CSS">Css</option>
                            <option value="SASS">Sass</option>
                            <option value="JS">JavaScript</option>
                            <option value="JAVA">Java</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result3" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Ajouter un test -->
<div class="modal fade bd-example-modal-md" id="addTest" tabindex="-1" role="dialog" aria-labelledby="ModalLabelAddTest"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAddTest">Ajouter un test de jeu</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add-Modal-Test" onsubmit="checkFormTest(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titreC">Titre du test</label>
                        <input type="text" class="form-control" name="titreC" id="titreC" required
                            aria-describedby="titreC" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="lienC">Lien du test</label>
                        <input type="text" class="form-control" name="lienC" id="lienC" required
                            aria-describedby="lienC" placeholder="Lien">
                    </div>

                    <div class="form-group">
                        <label for="small_imgA">Petite image du test</label>
                        <input type="text" class="form-control" name="small_imgA" id="small_imgA" required
                            aria-describedby="small_imgA" placeholder="Petite image">
                    </div>

                    <div class="form-group">
                        <label for="descriptionA">Description du test</label>
                        <textarea type="text" class="form-control" name="descriptionA" id="descriptionA" required
                            aria-describedby="descriptionA"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="plateformeA">Plateform du test</label>
                        <input type="text" class="form-control" name="plateformeA" id="plateformeA" required
                            aria-describedby="plateformeA" placeholder="Plateforme">
                    </div>

                    <div class="form-group">
                        <label for="genreC">Genre du test</label>
                        <input type="text" class="form-control" name="genreC" id="genreC" required
                            aria-describedby="genreC" placeholder="Genre">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result5" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Ajouter une vidéo youtube -->
<div class="modal fade bd-example-modal-md" id="addVideo" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelAddVideoYT" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAddVideoYT">Ajouter une vidéo Youtube</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form onsubmit="checkFormVideoYT(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titreytA">Titre de la vidéo</label>
                        <input type="text" class="form-control" name="titreytA" id="titreytA" required
                            aria-describedby="titreytA" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="apiytA">Api de la vidéo</label>
                        <input type="text" class="form-control" name="apiytA" id="apiytA" required
                            aria-describedby="apiytA" placeholder="Api">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result11" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

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
            <form id="delete-Modal" onsubmit="checkFormDelete(event)" method="POST">
                <input id="emailDelete" value="" name="emailDelete" type="hidden">
                <input id="articleDelete" value="" name="articleDelete" type="hidden">
                <input id="testDelete" value="" name="testDelete" type="hidden">
                <input id="tutoDelete" value="" name="tutoDelete" type="hidden">
                <input id="videoDelete" value="" name="videoDelete" type="hidden">
                <div class="modal-body text-center">
                    <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button
                        type="submit" class="btn btn-form">Confirmer</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result6" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modifier un membre -->
<div class="modal fade bd-example-modal-md" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelEdit"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelEdit"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-Modal" onsubmit="checkFormEditMembre(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nomB">Nom</label>
                        <input type="text" class="form-control" name="nomB" id="nomB" required
                            aria-describedby="emailHelp" placeholder="Nom">
                    </div>

                    <div class="form-group">
                        <label for="prenomB">Prénom</label>
                        <input type="text" class="form-control" name="prenomB" id="prenomB" required
                            aria-describedby="prenomA" placeholder="Prénom">
                    </div>

                    <div class="form-group">
                        <label for="sexeB">Sexe</label>
                        <select required class="form-control" name="sexeB" id="sexeB">
                            <option id="sexeBB"></option>
                            <option disabled>-------</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ageB">Age</label>
                        <input type="date" class="form-control" required id="ageB" name="ageB">
                    </div>

                    <div class="form-group">
                        <label for="pseudoB">Pseudo</label>
                        <input type="text" class="form-control" required id="pseudoB" name="pseudoB">
                    </div>

                    <div class="form-group">
                        <label for="emailB">Email</label>
                        <input type="email" class="form-control" required id="emailB" name="emailB" disabled>
                        <input id="emailEdit" value="" name="emailEdit" type="hidden">
                    </div>

                    <div class="form-group">
                        <label for="verifB">Membre vérifié</label>
                        <select required class="form-control" name="verifB" id="verifB">
                            <option id="verifBB"></option>
                            <option disabled>------</option>
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="bloqueB">Membre bannis</label>
                        <select required class="form-control" name="bloqueB" id="bloqueB">
                            <option id="bloqueBB"></option>
                            <option disabled>------</option>
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="premiumB">Membre premium</label>
                        <select required class="form-control" name="premiumB" id="premiumB">
                            <option id="premiumBB"></option>
                            <option disabled>------</option>
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="adresseB">Adresse</label>
                        <input type="text" class="form-control" id="adresseB" name="adresseB">
                    </div>

                    <div class="form-group">
                        <label for="adresse2B">Complément d'adresse</label>
                        <input type="text" class="form-control" id="adresse2B" name="adresse2B">
                    </div>

                    <div class="form-group">
                        <label for="postalCodeB">Code Postal</label>
                        <input type="text" class="form-control" id="postalCodeB" name="postalCodeB">
                    </div>

                    <div class="form-group">
                        <label for="villeB">Ville</label>
                        <input type="text" class="form-control" id="villeB" name="villeB">
                    </div>

                    <div class="form-group">
                        <label for="paysB">Pays</label>
                        <select class="form-control" id="paysB" name="paysB">
                            <option id="paysBB"></option>
                            <option disabled>------------</option>
                            <option value="Afghanistan">Afghanistan </option>
                            <option value="Afrique_Centrale">Afrique Centrale </option>
                            <option value="Afrique_du_Sud">Afrique du Sud </option>
                            <option value="Albanie">Albanie </option>
                            <option value="Algerie">Algérie </option>
                            <option value="Allemagne">Allemagne </option>
                            <option value="Andorre">Andorre </option>
                            <option value="Angola">Angola </option>
                            <option value="Anguilla">Anguilla </option>
                            <option value="Arabie_Saoudite">Arabie Saoudite </option>
                            <option value="Argentine">Argentine </option>
                            <option value="Armenie">Armenie </option>
                            <option value="Australie">Australie </option>
                            <option value="Autriche">Autriche </option>
                            <option value="Azerbaidjan">Azerbaidjan </option>

                            <option value="Bahamas">Bahamas </option>
                            <option value="Bangladesh">Bangladesh </option>
                            <option value="Barbade">Barbade </option>
                            <option value="Bahrein">Bahrein </option>
                            <option value="Belgique">Belgique </option>
                            <option value="Belize">Belize </option>
                            <option value="Benin">Bénin </option>
                            <option value="Bermudes">Bermudes </option>
                            <option value="Bielorussie">Bielorussie </option>
                            <option value="Bolivie">Bolivie </option>
                            <option value="Botswana">Botswana </option>
                            <option value="Bhoutan">Bhoutan </option>
                            <option value="Boznie_Herzegovine">Boznie Herzégovine </option>
                            <option value="Bresil">Brésil </option>
                            <option value="Brunei">Brunei </option>
                            <option value="Bulgarie">Bulgarie </option>
                            <option value="Burkina_Faso">Burkina Faso </option>
                            <option value="Burundi">Burundi </option>

                            <option value="Caiman">Caiman </option>
                            <option value="Cambodge">Cambodge </option>
                            <option value="Cameroun">Cameroun </option>
                            <option value="Canada">Canada </option>
                            <option value="Canaries">Canaries </option>
                            <option value="Cap_vert">Cap Vert </option>
                            <option value="Chili">Chili </option>
                            <option value="Chine">Chine </option>
                            <option value="Chypre">Chypre </option>
                            <option value="Colombie">Colombie </option>
                            <option value="Comores">Colombie </option>
                            <option value="Congo">Congo </option>
                            <option value="Congo_democratique">Congo Démocratique </option>
                            <option value="Cook">Cook </option>
                            <option value="Coree_du_Nord">Corée du Nord </option>
                            <option value="Coree_du_Sud">Corée du Sud </option>
                            <option value="Costa_Rica">Costa Rica </option>
                            <option value="Cote_d_Ivoire">Côte d’Ivoire </option>
                            <option value="Croatie">Croatie </option>
                            <option value="Cuba">Cuba </option>

                            <option value="Danemark">Danemark </option>
                            <option value="Djibouti">Djibouti </option>
                            <option value="Dominique">Dominique </option>

                            <option value="Egypte">Egypte </option>
                            <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
                            <option value="Equateur">Equateur </option>
                            <option value="Erythree">Erythrée </option>
                            <option value="Espagne">Espagne </option>
                            <option value="Estonie">Estonie </option>
                            <option value="Etats_Unis">Etats-Unis </option>
                            <option value="Ethiopie">Ethiopie </option>

                            <option value="Falkland">Falkland </option>
                            <option value="Feroe">Feroe </option>
                            <option value="Fidji">Fidji </option>
                            <option value="Finlande">Finlande </option>
                            <option value="France">France </option>

                            <option value="Gabon">Gabon </option>
                            <option value="Gambie">Gambie </option>
                            <option value="Georgie">Géorgie </option>
                            <option value="Ghana">Ghana </option>
                            <option value="Gibraltar">Gibraltar </option>
                            <option value="Grece">Grece </option>
                            <option value="Grenade">Grenade </option>
                            <option value="Groenland">Groënland </option>
                            <option value="Guadeloupe">Guadeloupe </option>
                            <option value="Guam">Guam </option>
                            <option value="Guatemala">Guatémala</option>
                            <option value="Guernesey">Guernesey </option>
                            <option value="Guinee">Guinée </option>
                            <option value="Guinee_Bissau">Guinée Bissau </option>
                            <option value="Guinee equatoriale">Guinée Equatoriale </option>
                            <option value="Guyana">Guyana </option>
                            <option value="Guyane_Francaise ">Guyane Francaise </option>

                            <option value="Haiti">Haiti </option>
                            <option value="Hawaii">Hawaii </option>
                            <option value="Honduras">Honduras </option>
                            <option value="Hong_Kong">Hong Kong </option>
                            <option value="Hongrie">Hongrie </option>

                            <option value="Inde">Inde </option>
                            <option value="Indonesie">Indonésie </option>
                            <option value="Iran">Iran </option>
                            <option value="Iraq">Iraq </option>
                            <option value="Irlande">Irlande </option>
                            <option value="Islande">Islande </option>
                            <option value="Israel">Israel </option>
                            <option value="Italie">italie </option>

                            <option value="Jamaique">Jamaïque </option>
                            <option value="Jan Mayen">Jan Mayen </option>
                            <option value="Japon">Japon </option>
                            <option value="Jersey">Jersey </option>
                            <option value="Jordanie">Jordanie </option>

                            <option value="Kazakhstan">Kazakhstan </option>
                            <option value="Kenya">Kenya </option>
                            <option value="Kirghizstan">Kirghizistan </option>
                            <option value="Kiribati">Kiribati </option>
                            <option value="Koweit">Koweït </option>

                            <option value="Laos">Laos </option>
                            <option value="Lesotho">Lesotho </option>
                            <option value="Lettonie">Lettonie </option>
                            <option value="Liban">Liban </option>
                            <option value="Liberia">Liberia </option>
                            <option value="Liechtenstein">Liechtenstein </option>
                            <option value="Lituanie">Lituanie </option>
                            <option value="Luxembourg">Luxembourg </option>
                            <option value="Lybie">Lybie </option>

                            <option value="Macao">Macao </option>
                            <option value="Macedoine">Macédoine </option>
                            <option value="Madagascar">Madagascar </option>
                            <option value="Madère">Madère </option>
                            <option value="Malaisie">Malaisie </option>
                            <option value="Malawi">Malawi </option>
                            <option value="Maldives">Maldives </option>
                            <option value="Mali">Mali </option>
                            <option value="Malte">Malte </option>
                            <option value="Man">Man </option>
                            <option value="Mariannes du Nord">Mariannes du Nord </option>
                            <option value="Maroc">Maroc </option>
                            <option value="Marshall">Marshall </option>
                            <option value="Martinique">Martinique </option>
                            <option value="Maurice">Maurice </option>
                            <option value="Mauritanie">Mauritanie </option>
                            <option value="Mayotte">Mayotte </option>
                            <option value="Mexique">Mexique </option>
                            <option value="Micronesie">Micronesie </option>
                            <option value="Midway">Midway </option>
                            <option value="Moldavie">Moldavie </option>
                            <option value="Monaco">Monaco </option>
                            <option value="Mongolie">Mongolie </option>
                            <option value="Montserrat">Montserrat </option>
                            <option value="Mozambique">Mozambique </option>

                            <option value="Namibie">Namibie </option>
                            <option value="Nauru">Nauru </option>
                            <option value="Nepal">Nepal </option>
                            <option value="Nicaragua">Nicaragua </option>
                            <option value="Niger">Niger </option>
                            <option value="Nigeria">Nigéria </option>
                            <option value="Niue">Niue </option>
                            <option value="Norfolk">Norfolk </option>
                            <option value="Norvege">Norvège </option>
                            <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
                            <option value="Nouvelle_Zelande">Nouvelle Zélande </option>

                            <option value="Oman">Oman </option>
                            <option value="Ouganda">Ouganda </option>
                            <option value="Ouzbekistan">Ouzbékistan </option>

                            <option value="Pakistan">Pakistan </option>
                            <option value="Palau">Palau </option>
                            <option value="Palestine">Palestine </option>
                            <option value="Panama">Panama </option>
                            <option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée</option>
                            <option value="Paraguay">Paraguay </option>
                            <option value="Pays_Bas">Pays Bas </option>
                            <option value="Perou">Perou </option>
                            <option value="Philippines">Philippines </option>
                            <option value="Pologne">Pologne </option>
                            <option value="Polynesie">Polynesie </option>
                            <option value="Porto_Rico">Porto Rico </option>
                            <option value="Portugal">Portugal </option>

                            <option value="Qatar">Qatar </option>

                            <option value="Republique_Dominicaine">Republique Dominicaine </option>
                            <option value="Republique_Tcheque">Republique Tcheque </option>
                            <option value="Reunion">Reunion </option>
                            <option value="Roumanie">Roumanie </option>
                            <option value="Royaume_Uni">Royaume Uni </option>
                            <option value="Russie">Russie </option>
                            <option value="Rwanda">Rwanda </option>

                            <option value="Sahara Occidental">Sahara Occidental </option>
                            <option value="Sainte_Lucie">Sainte-Lucie </option>
                            <option value="Saint_Marin">Saint-Marin </option>
                            <option value="Salomon">Salomon </option>
                            <option value="Salvador">Salvador </option>
                            <option value="Samoa_Occidentales">Samoa Occidentales</option>
                            <option value="Samoa_Americaine">Samoa Americaine </option>
                            <option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>
                            <option value="Senegal">Sénégal </option>
                            <option value="Seychelles">Seychelles </option>
                            <option value="Sierra Leone">Sierra Leone </option>
                            <option value="Singapour">Singapour </option>
                            <option value="Slovaquie">Slovaquie </option>
                            <option value="Slovenie">Slovénie</option>
                            <option value="Somalie">Somalie </option>
                            <option value="Soudan">Soudan </option>
                            <option value="Sri_Lanka">Sri Lanka </option>
                            <option value="Suede">Suede </option>
                            <option value="Suisse">Suisse </option>
                            <option value="Surinam">Surinam </option>
                            <option value="Swaziland">Swaziland </option>
                            <option value="Syrie">Syrie </option>

                            <option value="Tadjikistan">Tadjikistan </option>
                            <option value="Taiwan">Taiwan </option>
                            <option value="Tonga">Tonga </option>
                            <option value="Tanzanie">Tanzanie </option>
                            <option value="Tchad">Tchad </option>
                            <option value="Thailande">Thailande </option>
                            <option value="Tibet">Tibet </option>
                            <option value="Timor_Oriental">Timor Oriental </option>
                            <option value="Togo">Togo </option>
                            <option value="Trinite_et_Tobago">Trinite et Tobago </option>
                            <option value="Tristan da cunha">Tristan de cuncha </option>
                            <option value="Tunisie">Tunisie </option>
                            <option value="Turkmenistan">Turmenistan </option>
                            <option value="Turquie">Turquie </option>

                            <option value="Ukraine">Ukraine </option>
                            <option value="Uruguay">Uruguay </option>

                            <option value="Vanuatu">Vanuatu </option>
                            <option value="Vatican">Vatican </option>
                            <option value="Venezuela">Vénézuela </option>
                            <option value="Vierges_Americaines">Vierges Américaines </option>
                            <option value="Vierges_Britanniques">Vierges Britanniques </option>
                            <option value="Vietnam">Vietnam </option>

                            <option value="Wake">Wake </option>
                            <option value="Wallis et Futuma">Wallis et Futuma </option>

                            <option value="Yemen">Yemen </option>
                            <option value="Yougoslavie">Yougoslavie </option>

                            <option value="Zambie">Zambie </option>
                            <option value="Zimbabwe">Zimbabwe </option>

                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result7" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modifier une actualité -->
<div class="modal fade bd-example-modal-lg" id="editModalArticle" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelEditArticle" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelEditArticle">Editer l'article</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-Modal-article" method="POST">
                <div class="modal-body">

                    <input id="articleEdit" value="" name="articleEdit" type="hidden">

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="createurB">Autheur</label>
                        <input type="text" class="form-control" name="createurB" id="createurB" required
                            aria-describedby="createurB" placeholder="Autheur">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="categorieB">Catégorie</label>
                        <select required class="form-control" name="categorieB" id="categorieB">
                            <option id="categorieBB"></option>
                            <option disabled>--------</option>
                            <option value="NEWS">NEWS</option>
                            <option value="PREMIUM">PREMIUM</option>
                        </select>
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titreBedit">Titre</label>
                        <input type="text" class="form-control" name="titreBedit" id="titreBedit" required
                            aria-describedby="titreBedit" placeholder="Titre">
                    </div>

     
                    <div class="form-group col-md-6">
                        <label for="subtitreB">Sous titre</label>
                        <input type="text" class="form-control" name="subtitreB" id="subtitreB"
                            aria-describedby="subtitreB" placeholder="Sous titre">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="smallimgB">Petite image</label>
                        <input type="text" class="form-control" name="smallimgB" id="smallimgB" required
                            aria-describedby="smallimgB" placeholder="Petite image lien">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="largeimgB">Grande image</label>
                        <input type="text" class="form-control" name="largeimgB" id="largeimgB" required
                            aria-describedby="largeimgB" placeholder="Grande image lien">
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="contenteditB">Courte description</label>
                        <textarea class="form-control" name="contenteditB" id="contenteditB" required
                            aria-describedby="contenteditB" placeholder="Courte description" maxlength="255" rows="5"></textarea>
                     <p id="counterBlock2"></p>

                        <script>
                            // On selectionne l'element textarea et l'élement p#counterBlock
                            var textarea2 = document.querySelector('#contenteditB');
                            var blockCount2 = document.getElementById('counterBlock2');

                            function count2() {
                                // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
                                var count2 = 255-textarea2.value.length;
                                // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML
                                blockCount2.innerHTML= count2;
                                
                            // si le count descend sous 0 on ajoute la class red à la balise p#counterBlock
                            if(count2<0) {
                                    blockCount2.classList.add("red");
                            } 
                            else if(count2>=0) {
                                    blockCount2.classList.remove("red");
                            }
                            else{}
                            }

                            // on pose un écouteur d'évènement keyup sur le textarea.
                            // On déclenche la fonction count quand l'évènement se produit et au chargement de la page
                            textarea2.addEventListener('keyup', count2);
                            count2();
                        </script>
                    </div>

                    <div class="form-group">
                        <label for="contentedit2B">Longue description</label>
                        <textarea class="form-control" name="contentedit2B" id="contentedit2B" required
                            aria-describedby="contentedit2B" placeholder="Longue description" rows="8"></textarea>
                            <!-- <script>
                        CKEDITOR.replace( 'contentedit2B' );
                </script> -->
                    </div>
                    
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tagB">Tag vidéo</label>
                        <select required class="form-control" name="tagB" id="tagB">
                            <option id="tagBB"></option>
                            <option disabled>-----------</option>
                            <option value="BANDE ANNONCE">BANDE ANNONCE</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="videoB">Vidéo</label>
                        <input type="text" class="form-control" name="videoB" id="videoB" aria-describedby="videoB"
                            placeholder="Vidéo lien">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme1B">Plateforme 1</label>
                        <input type="text" class="form-control" name="plateforme1B" id="plateforme1B"
                            aria-describedby="plateforme1B" placeholder="Plateforme 1">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme2B">Plateforme 2</label>
                        <input type="text" class="form-control" name="plateforme2B" id="plateforme2B"
                            aria-describedby="plateforme2B" placeholder="Plateforme 2">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme3B">Plateforme 3</label>
                        <input type="text" class="form-control" name="plateforme3B" id="plateforme3B"
                            aria-describedby="plateforme3B" placeholder="Plateforme 3">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme4B">Plateforme 4</label>
                        <input type="text" class="form-control" name="plateforme4B" id="plateforme4B"
                            aria-describedby="plateforme4B" placeholder="Plateforme 4">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme5B">Plateforme 5</label>
                        <input type="text" class="form-control" name="plateforme5B" id="plateforme5B"
                            aria-describedby="plateforme5B" placeholder="Plateforme 5">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme6B">Plateforme 6</label>
                        <input type="text" class="form-control" name="plateforme6B" id="plateforme6B"
                            aria-describedby="plateforme6B" placeholder="Plateforme 6">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plateforme7B">Plateforme 7</label>
                        <input type="text" class="form-control" name="plateforme7B" id="plateforme7B"
                            aria-describedby="plateforme7B" placeholder="Plateforme 7">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plateforme8B">Plateforme 8</label>
                        <input type="text" class="form-control" name="plateforme8B" id="plateforme8B"
                            aria-describedby="plateforme8B" placeholder="Plateforme 8">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titre2B">Titre du jeux</label>
                        <input type="text" class="form-control" name="titre2B" id="titre2B" aria-describedby="titre2B"
                            placeholder="Titre">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="img4editB">Image du jeux</label>
                        <input type="text" class="form-control" name="img4editB" id="img4editB"
                            aria-describedby="img4editB" placeholder="Image lien">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="genreB">Genre du jeux</label>
                        <input type="text" class="form-control" name="genreB" id="genreB" aria-describedby="genreB"
                            placeholder="Genre">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="dateB">Date de sortie</label>
                        <input type="text" class="form-control" name="dateB" id="dateB" aria-describedby="dateB"
                            placeholder="<?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; ?>">
                    </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result8" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modifier un test -->
<div class="modal fade bd-example-modal-md" id="editModalTest" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelEditTest" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelEditTest">Modifier le test de jeu</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-Modal-Test" onsubmit="checkFormEditTest(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titreeditC">Titre du test</label>
                        <input type="text" class="form-control" name="titreeditC" id="titreeditC" required
                            aria-describedby="titreeditC" placeholder="Titre">
                        <input type="hidden" id="testEdit" name="testEdit" value="">
                    </div>

                    <div class="form-group">
                        <label for="lieneditC">Lien du test</label>
                        <input type="text" class="form-control" name="lieneditC" id="lieneditC" required
                            aria-describedby="lieneditC" placeholder="Lien">
                    </div>

                    <div class="form-group">
                        <label for="small_imgeditC">Petite image du test</label>
                        <input type="text" class="form-control" name="small_imgeditC" id="small_imgeditC" required
                            aria-describedby="small_imgeditC" placeholder="Petite image">
                    </div>

                    <div class="form-group">
                        <label for="descriptioneditc">Description du test</label>
                        <textarea type="text" class="form-control" rows="7" name="descriptioneditc"
                            id="descriptioneditc" required aria-describedby="descriptioneditc"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="plateformeeditC">Plateform du test</label>
                        <input type="text" class="form-control" name="plateformeeditC" id="plateformeeditC" required
                            aria-describedby="plateformeeditC" placeholder="Plateforme">
                    </div>

                    <div class="form-group">
                        <label for="dateseditC">Date du test</label>
                        <input type="text" class="form-control" name="dateseditC" id="dateseditC" required
                            aria-describedby="dateseditC" placeholder="Date">
                    </div>

                    <div class="form-group">
                        <label for="heureeditC">Heure du test</label>
                        <input type="text" class="form-control" name="heureeditC" id="heureeditC" required
                            aria-describedby="heureeditC" placeholder="Heure">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result9" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modifier un tuto vidéo -->
<div class="modal fade bd-example-modal-md" id="editModalTuto" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelEditTuto" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelEditTuto">Editer un tuto Youtube</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit-Modal-tuto" onsubmit="checkFormEditTuto(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titretutoA">Titre de la vidéo</label>
                        <input type="text" class="form-control" name="titretutoA" id="titretutoA" required
                            aria-describedby="titretutoA" placeholder="Titre">
                            <input type="hidden" id="tutoEdit" name="tutoEdit" value="">    
                    </div>

                    <div class="form-group">
                        <label for="contenttutoA">Description de la vidéo</label>
                        <textarea class="form-control" name="contenttutoA" id="contenttutoA" required
                            aria-describedby="contenttutoA" rows="8"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="apitutoA">Code api vidéo</label>
                        <input type="text" class="form-control" name="apitutoA" id="apitutoA" required
                            aria-describedby="apitutoA" placeholder="Code api vidéo">
                    </div>

                    <div class="form-group">
                        <label for="lientutoA">Lien de la vidéo</label>
                        <input type="text" class="form-control" name="lientutoA" id="lientutoA" required
                            aria-describedby="lientutoA" placeholder="Lien">
                    </div>

                    <div class="form-group">
                        <label for="chainetutoA">Chaine de la vidéo</label>
                        <input type="text" class="form-control" name="chainetutoA" id="chainetutoA" required
                            aria-describedby="chainetutoA" placeholder="Chaine">
                    </div>

                    <div class="form-group">
                        <label for="iconetutoA">Icône de la vidéo</label>
                        <input type="text" class="form-control" name="iconetutoA" id="iconetutoA" required
                            aria-describedby="iconetutoA" placeholder="Icône">
                    </div>

                    <div class="form-group">
                        <label for="datetutoA">Date de la vidéo</label>
                        <input type="text" class="form-control" name="datetutoA" id="datetutoA" required
                            aria-describedby="datetutoA" placeholder="Date">
                    </div>

                    <div class="form-group">
                        <label for="imagetutoA">Image de la vidéo</label>
                        <input type="text" class="form-control" name="imagetutoA" id="imagetutoA" required
                            aria-describedby="imagetutoA" placeholder="Image">
                    </div>

                    <div class="form-group">
                        <label for="cattutoA">Catégorie de la vidéo</label>
                        <select id="cattutoA" name="cattutoA" required class="form-control">
                            <option id="cattutoAA"></option>
                            <option disabled>-----</option>
                            <option value="HTML">Html</option>
                            <option value="PHP">Php</option>
                            <option value="CSS">Css</option>
                            <option value="SASS">Sass</option>
                            <option value="JS">JavaScript</option>
                            <option value="JAVA">Java</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result10" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>

<!-- Modifier une vidéo youtube -->
<div class="modal fade bd-example-modal-md" id="editModalVideo" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelEditVideoYT" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelEditVideoYT">Editer une vidéo Youtube</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form onsubmit="checkFormEditVidéo(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titrevidA">Titre de la vidéo</label>
                        <input type="text" class="form-control" name="titrevidA" id="titrevidA" required
                            aria-describedby="titrevidA" placeholder="Titre"> 
                    </div>

                    <div class="form-group">
                        <label for="apividA">Api de la vidéo</label>
                        <input type="text" class="form-control" name="apividA" id="apividA" required
                            aria-describedby="apividA" placeholder="Api"> 
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-form">Effacer</button> <button type="submit"
                        class="btn btn-form">Valider</button>
                </div>
            </form>

            <div class="col-md-12 m-auto">

                <div id="div-result12" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>
<?php } ?>