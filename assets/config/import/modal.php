<?php if(!isset($_SESSION['pseudo'])) { ?>

<!-- Modal Login -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelLogin"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelLogin">Connexion</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="login-modal" onsubmit="checkFormLogin(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" class="form-control" name="emailLogin" id="emailLogin" required
                            aria-describedby="emailHelp" placeholder="Votre adresse email">
                        <small id="emailHelp" class="form-text text-muted">Adresse email obligatoire !</small>
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Mot de passe</label>
                        <input type="password" class="form-control" id="passwordLogin" required
                            placeholder="Votre mot de passe">
                        <small id="passwordHelp" class="form-text text-muted">Mot de passe obligatoire !</small>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" id="checkBoxConfirmLogin">
                        <label class="form-check-label" for="checkBoxConfirmLogin">Se souvenir de moi</label>
                    </div>

                    <div class="modal-links">
                        <i class="fas fa-chevron-right" aria-hidden="true"></i><a id="btn-recover">Mot de passe oubié
                            ?</a><br><i class="fas fa-chevron-right" aria-hidden="true"></i><a href="inscription"
                            target="_blank">Crée un compte</a>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="submit_login" class="btn btn-form">Se connecter</button>
                </div>
            </form>

            <div class="col-md-12">

                <div class="div-result div-result-login" id="div-result-login"></div>

            </div>

            <form id="password-modal" onsubmit="checkFormRecover(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" class="form-control" id="emailRec" name="emailRec" required aria-describedby="emailHelp"
                            placeholder="Votre adresse email">
                        <small id="emailHelp" class="form-text text-muted">Adresse email obligatoire !</small>
                    </div>
                    <div class="form-group">
                        <label for="key">Clé de sécurité</label>
                        <input type="text" class="form-control" id="cleRec" name="cleRec" required placeholder="Votre clé de sécurité">
                        <small id="keyHelp" class="form-text text-muted">Clé secret obligatoire !</small>
                    </div>
                    <div class="form-group">
                        <label for="passRec">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="passRec" name="passRec" required
                            placeholder="Votre nouveau mot de passe">
                        <small id="passwordHelp" class="form-text text-muted">Mot de passe obligatoire !</small>
                    </div>

                    <div class="modal-links">
                        <i class="fas fa-chevron-right" aria-hidden="true"></i><a id="login_btn">Connexion</a><br><i
                            class="fas fa-chevron-right" aria-hidden="true"></i><a href="inscription">Crée un compte</a>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="submit_recover" class="btn btn-form">Valider</button>
                </div>

            </form>

        </div>
    </div>
</div>

<?php } ?>

<?php if($_SERVER['PHP_SELF'] == "/inscription.php") { ?>

<!-- Modal Register -->

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelRegister"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-body-reg">
                    <h3>Bienvenue sur Over Games</h3>
                    <hr>
                    <p>Pour pouvoir vous connectez sur le site internet merci de cliquer sur le lien suivant une fois
                        cela&nbsp;fait :&nbsp; <a href="https://gaetan-seigneur.store/membre-verif">Cliquez-ici</a></p>
                    <hr>
                    <p>Votre clé privé pour la réinitialitation du mot de passe :&nbsp; <span id="clee"></span></p>
                    <hr>
                    <div class="modal-btn">
                        <a type="button" class="btn btn-form-info" data-dismiss="modal" aria-label="Close">Fermer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php } ?>

<?php if(isset($_SESSION['pseudo'])) { ?>

<!-- Modal Exit -->

<div class="modal fade bd-example-modal-lg" id="exitModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelExit" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelExit">Êtes vous sur de vouloir vous déconnecter ?</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!--  Alert !  -->
            <div class="col-md-12">

            <div class="div-result div-result-login" id="div-result-logout"></div>

            </div>

            <div class="modal-footer marg-1">
                <button type="submit" id="logout" class="btn btn-form">Oui</button> <button class="btn btn-form"  data-dismiss="modal" aria-label="Close">Non</button>
            </div>

        </div>
    </div>
</div>

<?php } ?>

<!-- Modal Youtube -->

<div class="modal fade bd-example-modal-lg" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelYouTube" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelYouTube"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <iframe id="ModalIframeYouTube" style="width: 100%; height: 431px;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            
        </div>
    </div>
</div>