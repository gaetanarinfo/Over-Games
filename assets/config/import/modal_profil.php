<?php if(isset($_SESSION['pseudo'])) { ?>

<!-- Modal Avatar -->

<div class="modal fade bd-example-modal-ml" id="avatarModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelAvatar" aria-hidden="true">
    <div class="modal-dialog modal-ml">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAvatar">Modifier mon avatar</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!--  Alert !  -->
            <div class="col-md-12">
                <div class="div-result div-result-login"></div>
            </div>

            <div class="modal-footer marg-1">
                <div class="col-md-12" id="avatar-mod">
                    <form id="formavatar" onsubmit="checkFormAvatar(event)" method="POST">

                        <div class="input-file-container">
                            <input class="input-file" id="file" name="file" type="file">
                            <label for="file" class="input-file-trigger" tabindex="0">
                                Sélectionner mon avatar
                            </label>
                        </div>
                        <div class="file-return"></div>

                        <button id="signin-btn" type="submit" class="btn btn-form-info">Valider</button>

                    </form>
                </div>

                <div class="col-md-12" id="background-mod" style="display: none;">
                    <form id="formbackground" onsubmit="checkFormBackground(event)" method="POST">

                        <div class="input-file-container2">
                            <input class="input-file2" id="file2" name="file2" type="file">
                            <label for="file2" class="input-file-trigger2" tabindex="0">
                                Sélectionner ma bannière
                            </label>
                        </div>
                        <div class="file-return2"></div>

                        <button id="signin-btn2" type="submit" class="btn btn-form-info">Valider</button>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<?php } ?>