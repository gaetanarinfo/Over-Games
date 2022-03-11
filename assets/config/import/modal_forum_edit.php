<?php if(isset($_SESSION['pseudo']) AND $fo_membre_result['rang'] == "Administrateur" OR $fo_membre_result['rang'] == "Moderateur") { ?>

<!-- Modal Membre Add Sujet -->

<div class="modal fade" id="sujet2Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabelSujet2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelSujet2">Modifier un topic</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="form_edit_topic" onsubmit="checkFormSujet2()" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="titrefoeditA">Titre de la catégorie</label>
                            <input type="text" class="form-control" name="titrefoeditA" id="titrefoeditA"
                                aria-describedby="titrefoeditA" placeholder="Titre">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="catfoC">Catégorie</label>
                            <select id="catfoC" name="catfoC" class="form-control">
                                <option value="" selected disabled>&#xf0a3;&nbsp;&nbsp;Choisissez une catégorie</option>
                                <option disabled>-------------</option>
                                <?php while($result_cat = $fo_array6_2->fetch()) { ?>
                                <option value="<?php echo $result_cat['forum_id_cat_sujet']; ?>">
                                    &#xf0a3;&nbsp;&nbsp;<?php echo $result_cat['titre']; ?></option>
                                <option disabled>-------------</option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="topiceditA">Topic privé ?</label><br>
                            <label class="switch">
                                <input type="checkbox" value="1" id="topiceditA" name="topiceditA">
                                <span class="slider round"></span>

                                <input type="hidden" id="foedit1" name="foedit1" value="<?php echo $fo_array5_result['forum_id'] ?>">
                                <input type="hidden" id="foedit2" name="foedit2" value="<?php echo $fo_array5_result['forum_id_cat'] ?>">
                                <input type="hidden" id="foedit3" name="foedit3" value="<?php echo $fo_array5_result['forum_id_cat_sujet'] ?>">
                            </label>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="topiceditA">Topic résolue ?</label><br>
                            <label class="switch">
                                <input type="checkbox" value="1" id="topicresolvedA" name="topicresolvedA">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="contentfoeditA">Description de la catégorie</label>
                                <section>
                                        <a class="bbcode mr-1" id="bbcode3" title="Gras" onclick="EditorTagInsert('contentfoeditA', '[b]', '[/b]', 0);"><i class="fas fa-bold mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode4" title="Italic" onclick="EditorTagInsert('contentfoeditA', '[i]', '[/i]', 0);"><i class="fas fa-italic mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode5" title="Souligné" onclick="EditorTagInsert('contentfoeditA', '[u]', '[/u]', 0);"><i class="fas fa-highlighter mr-0"></i></a>
                    
                                        <a class="bbcode mr-1" id="bbcode6" title="Barré" onclick="EditorTagInsert('contentfoeditA', '[s]', '[/s]', 0);"><i class="fas fa-slash mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode7" title="Exposant" onclick="EditorTagInsert('contentfoeditA', '[sup]', '[/sup]', 0);"><i class="fas fa-superscript mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode8" title="Indice" onclick="EditorTagInsert('contentfoeditA', '[sub]', '[/sub]', 0);"><i class="fas fa-indent mr-0"></i></a>

                                        <a class="bbcode mr-1" id="bbcode9" title="Gauche" onclick="EditorTagInsert('contentfoeditA', '[left]', '[/left]', 0);"><i class="fas fa-align-left mr-0"></i></a>
                                        <a class="bbcode mr-1" id="bbcode11" title="Centrer" onclick="EditorTagInsert('contentfoeditA', '[center]', '[/center]', 0);"><i class="fas fa-align-center mr-0"></i></a>
                                        <a class="bbcode mr-1 mt-3" id="bbcode10" title="Droite" onclick="EditorTagInsert('contentfoeditA', '[right]', '[/right]', 0);"><i class="fas fa-align-right mr-0"></i></a>
                                        <a class="bbcode mr-1 mt-3" id="bbcode12" title="Justifié" onclick="EditorTagInsert('contentfoeditA', '[justify]', '[/justify]', 0);"><i class="fas fa-align-justify mr-0"></i></a>

                                        <a class="bbcode mr-1 mt-3" id="bbcode14" title="Lien" onclick="EditorTagInsert('contentfoeditA', '[url]', '[/url]', 0);"><i class="fas fa-link mr-0"></i></a>

                                        <a class="bbcode mr-1 mt-3" id="bbcode13" title="Image" onclick="EditorTagInsert('contentfoeditA', '[img]', '[/img]', 0);"><i class="fas fa-image mr-0"></i></a>

                                        <a class="bbcode mr-1 mt-3" id="bbcode18" title="Vidéo" onclick="EditorTagInsert('contentfoeditA', '[video]', '[/video]', 0);"><i class="fab fa-youtube mr-0"></i></a>

                                        <input type="color" id="bbcode2" name="bbcode2" title="Couleur" onchange="EditorTagInsert('contentfoeditA', '[color=$1]', '[/color]', this.value);" class="form-control mr-1 mt-3" value="#0000ff">

                                        <select id="bbcode1" onchange="EditorTagInsert('contentfoeditA', '[size=$1]', '[/size]', this.value);" title="Taille" class="form-control mr-1 mt-3">
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

                                        <select id="bbcode19" onchange="EditorTagInsert2('contentfoeditA', '[emo=' + this.value + ']');" title="Emôticone" class="form-control mr-1">
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
                                <textarea class="form-control" name="contentfoeditA" id="contentfoeditA"
                                    rows="6"></textarea>

                                    <script type="text/javascript">
                                        //<![CDATA[
                                        var tagLst = [];

                                        function EditorTagInsert(aId, aTag1, aTag2, aOpt) {
                                            if (aOpt === '') return 0;
                                            if (aOpt != 0) aTag1 = aTag1.replace("$1", aOpt);
                                            var e = document.getElementById(aId);
                                            if (typeof(e) == "undefined" || e == null) return 0;
                                            var s1 = e.selectionStart;
                                            var s2 = e.selectionEnd;
                                            var txt = e.value;
                                            e.value = (txt.substring(0, s1) + aTag1 + txt.substring(s1, s2) + aTag2 +
                                                txt.substring(s2, txt.length));
                                            e.focus;
                                        }

                                        function EditorTagInsert2(aId, aTag1) {
                                            var e = document.getElementById(aId);
                                            if (typeof(e) == "undefined" || e == null) return 0;
                                            var s1 = e.selectionStart;
                                            var txt = e.value;
                                            e.value = (txt.substring(0, s1) + aTag1);
                                            e.focus;
                                        }
                                        //]]>
                                        </script>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <button data-dismiss="modal" aria-label="Close" class="btn btn-form">Fermer</button> <button
                            type="submit" class="btn btn-form">Valider</button>
                    </div>
                </div>  
            </form>

            <div class="col-md-12">

                <div class="div-result div-result-login" id="div-result-edit"></div>

            </div>

        </div>
    </div>
</div>
<?php } ?>