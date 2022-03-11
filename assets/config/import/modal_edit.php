<?php if(isset($_SESSION['pseudo']) AND $fo_array3_3_result['createur'] == $_SESSION['pseudo']) { ?>
<!-- Voir message -->
<div class="modal fade" style="width: auto !important;" id="editModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelEdit">Editer <?php echo $fo_array3_3_result['titre'] ?></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="application/x-www-form-urlencoded" onsubmit="btn_edit_suj(<?php echo $fo_array3_3_result['forum_id']; ?>, <?php echo $fo_array3_3_result['forum_id_cat']; ?>, <?php echo $fo_array3_3_result['forum_id_cat_sujet']; ?>)" method="POST">
                <div class="modal-body text-center">
        
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-12">
                                    <label for="contentfoA">Editer le titre</label>
                                    <input type="text" class="form-control" name="titreeditfoB" id="titreeditfoB" placeholder="Titre" value="<?php echo $fo_array3_3_result['titre'] ?>">
                            </div>

                            <div class="col-md-12 mt-3">
                                    <section>
                                        <a class="bbcode mr-1" id="bbcode3" title="Gras" onclick="EditorTagInsert('contentfoB', '[b]', '[/b]', 0);"><i class="fas fa-bold mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode4" title="Italic" onclick="EditorTagInsert('contentfoB', '[i]', '[/i]', 0);"><i class="fas fa-italic mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode5" title="Souligné" onclick="EditorTagInsert('contentfoB', '[u]', '[/u]', 0);"><i class="fas fa-highlighter mr-0"></i></a>
                    
                                        <a class="bbcode mr-1" id="bbcode6" title="Barré" onclick="EditorTagInsert('contentfoB', '[s]', '[/s]', 0);"><i class="fas fa-slash mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode7" title="Exposant" onclick="EditorTagInsert('contentfoB', '[sup]', '[/sup]', 0);"><i class="fas fa-superscript mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode8" title="Indice" onclick="EditorTagInsert('contentfoB', '[sub]', '[/sub]', 0);"><i class="fas fa-indent mr-0"></i></a>

                                        <a class="bbcode mr-1" id="bbcode9" title="Gauche" onclick="EditorTagInsert('contentfoB', '[left]', '[/left]', 0);"><i class="fas fa-align-left mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode11" title="Centrer" onclick="EditorTagInsert('contentfoB', '[center]', '[/center]', 0);"><i class="fas fa-align-center mr-0"></i></a>
                                        <a class="bbcode mr-1 mt-3" id="bbcode10" title="Droite" onclick="EditorTagInsert('contentfoB', '[right]', '[/right]', 0);"><i class="fas fa-align-right mr-0"></i></a>
                                        <a class="bbcode mr-1 mt-3" id="bbcode12" title="Justifié" onclick="EditorTagInsert('contentfoB', '[justify]', '[/justify]', 0);"><i class="fas fa-align-justify mr-0"></i></a>

                                        <a class="bbcode mr-1 mt-3" id="bbcode14" title="Lien" onclick="EditorTagInsert('contentfoB', '[url]', '[/url]', 0);"><i class="fas fa-link mr-0"></i></a>

                                        <a class="bbcode mr-1 mt-3" id="bbcode13" title="Image" onclick="EditorTagInsert('contentfoB', '[img]', '[/img]', 0);"><i class="fas fa-image mr-0"></i></a>

                                        <a class="bbcode mr-1 mt-3" id="bbcode18" title="Vidéo" onclick="EditorTagInsert('contentfoB', '[video]', '[/video]', 0);"><i class="fab fa-youtube mr-0"></i></a>

                                        <input type="color" id="bbcode2" name="bbcode2" title="Couleur" onchange="EditorTagInsert('contentfoB', '[color=$1]', '[/color]', this.value);" class="form-control mr-1 mt-3" value="#0000ff">

                                        <select id="bbcode1" onchange="EditorTagInsert('contentfoB', '[size=$1]', '[/size]', this.value);" title="Taille" class="form-control mr-1 mt-3">
                                            <option value="">Taille du texte</option>
                                            <option value="" disabled>--------------</option>
                                            <?php 
                                            
                                            $i = 1;
                                            
                                            while ($i <= 40): ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php
                                                $i++;
                                            endwhile; ?>
                                            
                                        </select>

                                        <select id="bbcode19" onchange="EditorTagInsert2('contentfoB', '[emo=' + this.value + ']');" title="Emôticone" class="form-control mr-1">
                                            <option value="">Emoticone</option>
                                            <option value="" disabled>--------------</option>
                                            <?php 
                                            
                                            $i = 1;
                                            
                                            while ($i <= 30): ?>
                                                <option value="<?php echo $i; ?>">Emôticone (<?php echo $i; ?>)</option>
                                            <?php
                                                $i++;
                                            endwhile; ?>
                                            
                                        </select>

                                        <button data-toggle="popover" title="Emôticone" data-content="<?php $i = 0; while ($i <= 30): ?> <div class='d-inline-block emo text-center'><img width='35px' src='assets/images/bbcode/Emoji-Psck (<?php echo $i; ?>).png'></div><?php $i++; endwhile; ?>" data-html="true" type="button" class="btn btn-help"><i class="fas fa-question mr-0"></i></button>

                                    </section>
                                    <textarea class="form-control mt-4" name="contentfoB" id="contentfoB" rows="10"><?php echo $fo_array3_3_result['content'] ?></textarea>
                                    <input type="hidden" id="focreateurB" name="focreateurB" value="<?php echo $fo_array3_3_result['createur'] ?>">

                            </div>
                        </div>             
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button
                            type="submit" id="btn-edit" class="btn btn-form">Confirmer</button>
                </div>
            </form>   
            
            <div class="col-md-12 m-auto">

                <div id="div-result-edit" class="div-result div-result-login"></div>

            </div>
        </div>
    </div>
</div>
<?php } ?>