<?php if(isset($_SESSION['email'])) { ?>
<div class="modal fade bd-example-modal-ml" id="commentModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelComment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Poster un nouveau commentaire</p>       
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="comment" onsubmit="checkFormComment(event)" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="messageA">Votre commentaire</label>
                        <section>
                            <a class="bbcode mr-1" id="bbcode3" title="Gras" onclick="EditorTagInsert('messageA', '[b]', '[/b]', 0);"><i class="fas fa-bold mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode4" title="Italic" onclick="EditorTagInsert('messageA', '[i]', '[/i]', 0);"><i class="fas fa-italic mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode5" title="Souligné" onclick="EditorTagInsert('messageA', '[u]', '[/u]', 0);"><i class="fas fa-highlighter mr-0"></i></a>
         
                            <a class="bbcode mr-1" id="bbcode6" title="Barré" onclick="EditorTagInsert('messageA', '[s]', '[/s]', 0);"><i class="fas fa-slash mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode7" title="Exposant" onclick="EditorTagInsert('messageA', '[sup]', '[/sup]', 0);"><i class="fas fa-superscript mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode8" title="Indice" onclick="EditorTagInsert('messageA', '[sub]', '[/sub]', 0);"><i class="fas fa-indent mr-0"></i></a>

                            <a class="bbcode mr-1" id="bbcode9" title="Gauche" onclick="EditorTagInsert('messageA', '[left]', '[/left]', 0);"><i class="fas fa-align-left mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode11" title="Centrer" onclick="EditorTagInsert('messageA', '[center]', '[/center]', 0);"><i class="fas fa-align-center mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode10" title="Droite" onclick="EditorTagInsert('messageA', '[right]', '[/right]', 0);"><i class="fas fa-align-right mr-0"></i></a>
                            <a class="bbcode mr-1" id="bbcode12" title="Justifié" onclick="EditorTagInsert('messageA', '[justify]', '[/justify]', 0);"><i class="fas fa-align-justify mr-0"></i></a>

                            <a class="bbcode mr-1" id="bbcode14" title="Lien" onclick="EditorTagInsert('messageA', '[url]', '[/url]', 0);"><i class="fas fa-link mr-0"></i></a>

                            <input type="color" id="bbcode2" name="bbcode2" title="Couleur" onchange="EditorTagInsert('messageA', '[color=$1]', '[/color]', this.value);" class="form-control mr-1" value="#0000ff">

                            <select id="bbcode1" onchange="EditorTagInsert('messageA', '[size=$1]', '[/size]', this.value);" title="Taille" class="form-control">
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
                        </section>
                        <textarea class="form-control mt-3" name="messageA" id="messageA" placeholder="Libéré les lettres de ce clavier !" rows="20"></textarea>

                        <script type="text/javascript">
                        //<![CDATA[
                            var tagLst = [];
                            function EditorTagInsert(aId, aTag1, aTag2, aOpt){
                                if(aOpt === '') return 0;
                                if(aOpt != 0) aTag1 = aTag1.replace("$1", aOpt);
                                var e = document.getElementById(aId);
                                if(typeof(e) == "undefined" || e == null) return 0;
                                var s1 = e.selectionStart;
                                var s2 = e.selectionEnd;
                                var txt = e.value;
                                e.value = (txt.substring(0, s1) + aTag1 + txt.substring(s1, s2) + aTag2 + txt.substring(s2, txt.length));
                                e.focus;
                            }
                            //]]>
                        </script>

                        <input type="hidden" id="article_idA" name="article_idA" value="<?php echo $_GET['id'] ?>">
                        <input type=hidden id="avatarA" value="https://gaetan-seigneur.store/upload/avatar/<?php echo $membre_result_co['avatar']; ?>">
                        <input type=hidden id="pseudoA" value="<?php echo $membre_result_co['pseudo']; ?>">
                        <input type="hidden" id="datesA" value="<?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; ?>" ?>
                        <input type="hidden" id="heuresA" value="<?php echo date('H:i:s', strtotime('+1 hour')) ?>" ?>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-form">Poster le commentaire</button>
                </div>
            </form>

            <div class="col-md-7 m-auto">

                <div id="div-result" class="div-result div-result-login"></div>

            </div>
                
        </div>
        </div>
    </div>
</div>
<?php } ?>

<?php include_once 'assets/config/bbcode/create.php'; ?>