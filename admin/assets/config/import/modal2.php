<?php if($membre_result_co['rang'] == "Administrateur") { ?>
<!-- Voir message -->
<div class="modal fade" style="width: auto !important;" id="messageModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelMessage" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelMessage">Vous avez message(s)</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-center modal-body-message">

                <?php if($nbMail != "0") { ?>       
                    <div id="accordion4">
                        <?php while($result_message = $query7->fetch()) { ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo $result_message['id'] ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-message<?php echo $result_message['id'] ?>" aria-expanded="false"
                                        aria-controls="collapse-message<?php echo $result_message['id'] ?>">
                                        <?php if($result_message['lu'] == "1") { ?>
                                            <i class="fas fa-envelope-open"></i> <?php echo $result_message['nom'] ?> <?php echo $result_message['prenom'] ?> Le <?php echo $result_message['date'] ?> à <?php echo $result_message['heure'] ?>
                                        <?php }else{ ?>
                                            <i class="fas fa-envelope"></i> <?php echo $result_message['nom'] ?> <?php echo $result_message['prenom'] ?> Le <?php echo $result_message['date'] ?> à <?php echo $result_message['heure'] ?>
                                        <?php } ?>  
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse-message<?php echo $result_message['id'] ?>" class="collapse"
                                aria-labelledby="<?php echo $result_message['id'] ?>" data-parent="#accordion4">

                                <div class="card-body message-body">

                                    <div class="">
                                        Email : <?php echo $result_message['email'] ?>
                                    </div>

                                    <div class="mt-3">
                                        Sujet : <?php echo $result_message['sujet'] ?>
                                    </div>

                                    <div class="mt-3">
                                        Bug : <?php echo $result_message['bug'] ?>
                                    </div> 

                                    <div class="mt-3">
                                        Message :
                                    </div> 

                                    <div class="mt-2">
                                        <?php echo $result_message['message'] ?>
                                    </div>

                                    <hr class="w-100">

                                    <div class="text-right">
                                            <a id="message-reply-<?php echo $result_message['id'] ?>" title="Répondre au message ?" class="btn btn-form-mess"> <i class="fas fa-reply mr-0"></i></a>
                                        <?php if($result_message['lu'] == "0") { ?>
                                            <a id="message-lu-<?php echo $result_message['id'] ?>" title="Marquer comme Lu ?" class="btn btn-form-mess"> <i class="fas fa-envelope-open mr-0"></i></a>
                                        <?php } ?>
                                        <?php if($result_message['archive'] == "0") { ?>
                                            <a id="message-archive-<?php echo $result_message['id'] ?>" title="Marquer comme archivé ?" class="btn btn-form-mess"> <i class="fas fa-archive mr-0"></i></a>
                                        <?php } ?>
                                            <a id="message-del-<?php echo $result_message['id'] ?>" title="Supprimer le message ?" class="btn btn-form-mess-trash"> <i class="fas fa-trash-alt mr-0"></i></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <script>

                            const btn_del_message_<?php echo $result_message['id']; ?> = document.getElementById('message-del-<?php echo $result_message['id']; ?>');

                            btn_del_message_<?php echo $result_message['id']; ?>.addEventListener('click', function(event) {

                            event.preventDefault();

                            remove_message(<?php echo $result_message['id']; ?>);

                            });

                            <?php if($result_message['lu'] == "0") { ?>

                            const btn_lu_message_<?php echo $result_message['id']; ?> = document.getElementById('message-lu-<?php echo $result_message['id']; ?>');

                            btn_lu_message_<?php echo $result_message['id']; ?>.addEventListener('click', function(event) {

                            event.preventDefault();

                            message_lu(<?php echo $result_message['id']; ?>);

                            });

                            <?php } ?>

                            <?php if($result_message['archive'] == "0") { ?>

                            const btn_archive_message_<?php echo $result_message['id']; ?> = document.getElementById('message-archive-<?php echo $result_message['id']; ?>');

                            btn_archive_message_<?php echo $result_message['id']; ?>.addEventListener('click', function(event) {

                            event.preventDefault();

                            message_archive(<?php echo $result_message['id']; ?>);

                            });

                            <?php } ?>

                            const btn_reply_message_<?php echo $result_message['id']; ?> = document.getElementById('message-reply-<?php echo $result_message['id']; ?>');

                            btn_reply_message_<?php echo $result_message['id']; ?>.addEventListener('click', function(event) {

                            event.preventDefault();

                            message_reply_view(<?php echo $result_message['id']; ?>);

                            });

                        </script>
                        <?php } ?>
                    </div>

                <?php } ?>  

                <div class="col-md-12" style="display: none;" id="reply-message">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="emailformA">Adresse email</label>
                            <input type="text" class="form-control" disabled name="emailformA" id="emailformA">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                                <label for="messageformA">Message</label>
                                <textarea class="form-control message" name="messageformA" id="messageformA"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer mt-4">
                        <button id="sendMail" onClick="sendMailContact();" class="btn btn-form-info">Envoyer le message</button>
                    </div>
                </div>

                <div class="col-md-12 m-auto">

                    <div id="div-result-message" class="div-result div-result-login"></div>

                </div> 
            </div>
        </div>
    </div>
</div>
<?php } ?>