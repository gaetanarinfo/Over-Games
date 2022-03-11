<?php

require 'assets/config/req.php';
require 'assets/config/forum_req.php';
include 'assets/config/bbcode/view.php';

if ($_GET['forum_id'] != $fo_array3_result['forum_id'] || $_GET['forum_id_cat'] != $fo_array3_result['forum_id_cat'] || $_GET['forum_id_cat_sujet'] != $fo_array3_result['forum_id_cat_sujet']) {
    // header('Location: /forum'); 
} else {
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Forum - <?php echo $fo_array3_result['titre'] ?></title>
    <meta name="description" content="<?php echo $fo_array3_result['content'] ?>">
    <meta name="keywords" content="HTML, CSS, JavaScript, Jeux Vidéo, OverGames, Over Games">
    <meta name="author" content="Seigneur Gaëtan">
    <meta name="robots" content="index,follow">

    <!-- icon -->
    <link rel="icon" href="https://gaetan-seigneur.store/assets/images/favicon.png" />
    <link rel="icon" type="image/png" href="https://gaetan-seigneur.store/assets/images/favicon.png" />
    <link href='https://gaetan-seigneur.store/assets/images/ios/180x180.png' rel='apple-touch-icon' type='image/png'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/57x57.png' rel='apple-touch-icon' sizes='57x57'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/72x72.png' rel='apple-touch-icon' sizes='72x72'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/76x76.png' rel='apple-touch-icon' sizes='76x76'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/114x114.png' rel='apple-touch-icon' sizes='114x114'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/120x120.png' rel='apple-touch-icon' sizes='120x120'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/144x144.png' rel='apple-touch-icon' sizes='144x144'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/152x152.png' rel='apple-touch-icon' sizes='152x152'>
    <link href='https://gaetan-seigneur.store/assets/images/ios/180x180.png' rel='apple-touch-icon' sizes='180x180'>
    <link rel="mask-icon" href='assets/images/favicon.png' color="transparent">
    <meta name="msapplication-square70x70logo" content="https://gaetan-seigneur.store/assets/images/windows/70x70.png" />
    <meta name="msapplication-square150x150logo" content="https://gaetan-seigneur.store/assets/images/windows/150x150.png" />
    <meta name="msapplication-wide310x150logo" content="https://gaetan-seigneur.store/assets/images/windows/310x150.png" />
    <meta name="msapplication-square310x310logo" content="https://gaetan-seigneur.store/assets/images/windows/310x310.png" />
    <link rel="icon" sizes="192x192" href="https://gaetan-seigneur.store/assets/images/chrome/192x192.png">
    <link rel='fluid-icon' type='image/png' href='assets/images/html/32x32.png'>
    <link rel='logo' type='image/svg' href='assets/images/html/logo.svg'>

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/bootstrap/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/style.css">
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/forum.css">
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/iconselect.css">


</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>

    <!-- header page -->
    <header id="wave" style="background-image: none;">
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - Forum</h1>

                    <p class="anim-title-2">Retrouvez toute l'actualité en temps réel et<br>les tests des derniers jeux
                        vidéo !</p>

                    <img class="anim-title-img" src="https://gaetan-seigneur.store/assets/images/logo.png" alt="Logo Over-Games">

                    <?php if (isset($_SESSION['email'])) {
                        include_once('assets/config/import/header_membre.php');
                    } ?>
                </div>
            </div>
        </div>
    </header>

    <?php include_once('assets/config/import/navbar.php'); ?>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="/forum">Forum</a></li>
                        <li class="breadcrumb-item"><a href="/forum_categorie/<?php echo $fo_array3_result['forum_id'] ?>/<?php echo $fo_array3_result['forum_id_cat'] ?>"><?php echo $fo_array2_result['titre'] ?></a>
                        </li>
                        <li class="breadcrumb-item active"><?php echo $fo_array3_result['titre'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-12" id="wrap">

                <h4>
                    <?php echo $fo_array3_result['titre'] ?>
                </h4>

                <div class="fo-admin">
                    <strong>Administrateur :</strong> <?php while ($result_admin = $admin_array->fetch()) { ?><span class="mr-2"><strong><?php echo $result_admin['pseudo']; ?></strong></span><?php } ?>
                    <?php if ($count_modo['id'] == "0") { ?>| Modérateur :
                    <?php while ($result_modo = $modo_array->fetch()) { ?><span class="mr-2"><strong><?php echo $result_modo['pseudo']; ?></strong></span><?php } ?><?php } ?>
                </div>

                <hr class="w-100">

                <?php Topic_Sujet($fo_array3_result['topic']) ?>

                <hr class="w-100">

                <div class="container row fo-reply">
                    <div class="col-md-12">
                        <?php
                        if ($fo_array3_result['resolved'] != 1) {
                            if (isset($_SESSION['email']) and $fo_array3_result['topic'] == 0) { ?><div class="d-inline-block"><a href="" id="btn-reply" class="btn btn-fo-add mb-3">Répondre <i class="fas fa-reply mr-0 ml-1"></i></a></div>
                        <?php }
                        } ?>

                        <?php if ($fo_array3_result['resolved'] != 1 and $fo_array3_result['createur'] == $_SESSION['pseudo']) { ?>
                            <div class="d-inline-block"><a href="" title="Sujet résolue" onclick="btn_resolved(<?php echo $fo_array5_result['forum_id']; ?>, <?php echo $fo_array5_result['forum_id_cat']; ?>, <?php echo $fo_array5_result['forum_id_cat_sujet']; ?>);" class="btn btn-fo-resolved mb-3"><i class="fas fa-check mr-0" aria-hidden="true"></i></a></div><?php } ?>

                        <?php if ($fo_array2_result['rang'] != 1 and $fo_array3_result['createur'] == $_SESSION['pseudo']) { ?>
                            <div class="d-inline-block"><a href="" title="Supprimer le sujet ?" class="btn btn-fo-delete mb-3" data-toggle="modal" data-target="#deleteModal3"><i class="fas fa-times mr-0" aria-hidden="true"></i></a></div><?php } ?>

                        <?php if ($fo_array2_result['rang'] != 1 and $fo_array3_result['createur'] == $_SESSION['pseudo'] and $fo_array5_result['resolved'] != 1) { ?>
                            <div class="d-inline-block"><a href="" title="Modifier le sujet ?" class="btn btn-fo-edit mb-3" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen mr-0" aria-hidden="true"></i></a></div>
                        <?php } else if ($membre_result_co['rang'] == "Administrateur" || $membre_result_co['rang'] == "Modérateur") { ?>
                            <div class="d-inline-block"><a href="" title="Supprimer le sujet ?" class="btn btn-fo-delete mb-3" data-toggle="modal" data-target="#deleteModal3"><i class="fas fa-times mr-0" aria-hidden="true"></i></a></div>
                            <div class="d-inline-block"><a href="" title="Modifier le sujet ?" class="btn btn-fo-edit mb-3" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen mr-0" aria-hidden="true"></i></a></div>
                        <?php } ?>
                    </div>

                    <div class="col-md-5 m-auto">

                        <div class="div-result div-result-login" id="div-result-resolved"></div>

                    </div>
                </div>

                <div class="container row m-auto">
                    <div class="col-md-8 p-0 m-0">
                        <div class="fo-content">
                            <strong><?php echo $fo_array3_result['titre'] ?>
                                <?php if ($fo_array3_result['resolved'] == 1) { ?><span class="fo-reg">[Résolue]</span><?php } ?></strong>
                            <div class="fo-author"><i class="far fa-user mr-1"></i> par
                                <a href="profil_public/<?php echo $fo_array3_result['createur'] ?>" target="_blank"><?php echo $fo_array3_result['createur'] ?></a> >> <?php echo $fo_array3_result['date'] ?> à
                                <?php echo $fo_array3_result['heure'] ?>
                            </div>
                            <div class="fo-writing"><?php echo BBCode2Html($fo_array3_result['content']) ?></div>
                            <hr class="w-100 mt-3">
                            <?php ViewProfilMembreContent($fo_array3_result['createur']); ?>
                            <hr class="w-100 mt-1">
                            <div class="fo-writing">N'oubliez pas de modifier votre message en ajoutant le tag <span class="fo-reg">[Résolue]</span> quand votre sujet est résolue.</div>
                        </div>
                    </div>

                    <div class="col-md-4 p-0 m-0">
                        <div class="fo-content fo-border text-center fo-content-right h-100">
                            <?php ViewProfilMembre($fo_array3_result['createur']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Message épinglé -->

    <div id="result-epingle"></div>

    <?php while ($fo_array3_result = $fo_array_epingle->fetch()) { ?>
        <section class="container mt-4 mb-4" id="div-epingle">
            <div class="row">
                <div class="col-md-12">
                    <div class="container row m-auto">
                        <div class="col-md-8 p-0 m-0 border-epingle">
                            <div class="fo-content fo-content-comment">
                                <strong>Re : <?php echo $fo_array3_result['sujet'] ?></strong>

                                <?php if (isset($_SESSION['email'])) { ?>
                                    <div class="d-inline-block fo-epingle-a" id="epingle2"><a class="btn-epingle" title="Supprimer le message épinglé" onclick="removeEpingle(<?php echo $fo_array3_result['forum_id']; ?>, <?php echo $fo_array3_result['forum_id_cat']; ?>, <?php echo $fo_array3_result['forum_id_cat_sujet']; ?>, '<?php echo $fo_array3_result['createur']; ?>')"><i class="fas fa-star" aria-hidden="true"></i></a></div>
                                <?php } ?>

                                <div class="fo-author"><i class="far fa-user mr-1"></i> par
                                    <a href="profil_public/<?php echo $fo_array3_result['createur'] ?>" target="_blank"> <?php echo $fo_array3_result['createur'] ?></a> >> <?php echo $fo_array3_result['date'] ?> à
                                    <?php echo $fo_array3_result['heure'] ?>
                                </div>
                                <div class="fo-writing"><?php echo BBCode2Html($fo_array3_result['content']) ?></div>
                                <hr class="w-100 mt-3">
                                <?php ViewProfilMembreContent($fo_array3_result['createur']); ?>
                                <hr class="w-100 mt-1">
                                <div class="fo-writing">N'oubliez pas de modifier votre message en ajoutant le tag <span class="fo-reg">[Résolue]</span> quand votre sujet est résolue.</div>
                            </div>
                        </div>

                        <div class="col-md-4 p-0 m-0 border-epingle-right">
                            <div class="fo-content fo-border text-center fo-content-right h-100">
                                <?php ViewProfilMembre($fo_array3_result['createur']); ?>

                                <div class="text-left mt-1">
                                    <a href="#wrap" title="Haut"><i class="fas fa-chevron-circle-up mr-0"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php while ($fo_array3_result = $fo_array_comment->fetch()) { ?>
        <section class="container mt-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="container row m-auto">
                        <div class="col-md-8 p-0 m-0">
                            <div class="fo-content fo-content-comment">
                                <strong>Re : <?php echo $fo_array3_result['sujet'] ?></strong>

                                <?php if (isset($_SESSION['email'])) {
                                    if ($fo_array3_result['epingle'] == 0) { ?>
                                        <div class="d-inline-block fo-epingle" id="epingle"><a title="Épingler en haut" href="" id="btn-epingle" onclick="epingle(<?php echo $fo_array3_result['forum_id']; ?>, <?php echo $fo_array3_result['forum_id_cat']; ?>, <?php echo $fo_array3_result['forum_id_cat_sujet']; ?>, '<?php echo $fo_array3_result['createur']; ?>')"><i class="fas fa-star" aria-hidden="true"></i></a></div>
                                    <?php } else { ?>
                                        <div class="d-inline-block fo-epingle-a" id="epingle2"><a title="Message épinglé"><i class="fas fa-star" aria-hidden="true"></i></a></div>
                                    <?php } ?>
                                <?php } ?>

                                <div class="fo-author"><i class="far fa-user mr-1"></i> par
                                    <a href="profil_public/<?php echo $fo_array3_result['createur'] ?>" target="_blank"><?php echo $fo_array3_result['createur'] ?></a> >> <?php echo $fo_array3_result['date'] ?> à
                                    <?php echo $fo_array3_result['heure'] ?>
                                </div>
                                <div class="fo-writing"><?php echo BBCode2Html($fo_array3_result['content']) ?></div>
                                <hr class="w-100 mt-3">
                                <?php ViewProfilMembreContent($fo_array3_result['createur']); ?>
                                <hr class="w-100 mt-1">
                                <div class="fo-writing">N'oubliez pas de modifier votre message en ajoutant le tag <span class="fo-reg">[Résolue]</span> quand votre sujet est résolue.</div>
                            </div>
                        </div>

                        <div class="col-md-4 p-0 m-0">
                            <div class="fo-content fo-border text-center fo-content-right h-100">
                                <?php ViewProfilMembre($fo_array3_result['createur']); ?>

                                <div class="text-left mt-1">
                                    <a href="#wrap" title="Haut"><i class="fas fa-chevron-circle-up mr-0"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ($fo_array3_result['resolved'] != 1) { ?>
        <!-- Commentaire -->
        <section class="container mt-1" id="reply">
            <div class="row">
                <div class="col-md-12">
                    <div class="container row m-auto">
                        <div class="col-md-12 p-0 m-0">
                            <div class="fo-content fo-content-comment">
                                <strong><i class="far fa-comments"></i> Ajouter un commentaire</strong>
                                <div>
                                    <form id="comment" onsubmit="checkForumComment(event)" method="POST">
                                        <div class="form-group">

                                            <section>
                                                <a class="bbcode mr-1" id="bbcode3" title="Gras" onclick="EditorTagInsert('messagefoA', '[b]', '[/b]', 0);"><i class="fas fa-bold mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode4" title="Italic" onclick="EditorTagInsert('messagefoA', '[i]', '[/i]', 0);"><i class="fas fa-italic mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode5" title="Souligné" onclick="EditorTagInsert('messagefoA', '[u]', '[/u]', 0);"><i class="fas fa-highlighter mr-0"></i></a>

                                                <a class="bbcode mr-1" id="bbcode6" title="Barré" onclick="EditorTagInsert('messagefoA', '[s]', '[/s]', 0);"><i class="fas fa-slash mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode7" title="Exposant" onclick="EditorTagInsert('messagefoA', '[sup]', '[/sup]', 0);"><i class="fas fa-superscript mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode8" title="Indice" onclick="EditorTagInsert('messagefoA', '[sub]', '[/sub]', 0);"><i class="fas fa-indent mr-0"></i></a>

                                                <a class="bbcode mr-1" id="bbcode9" title="Gauche" onclick="EditorTagInsert('messagefoA', '[left]', '[/left]', 0);"><i class="fas fa-align-left mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode11" title="Centrer" onclick="EditorTagInsert('messagefoA', '[center]', '[/center]', 0);"><i class="fas fa-align-center mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode10" title="Droite" onclick="EditorTagInsert('messagefoA', '[right]', '[/right]', 0);"><i class="fas fa-align-right mr-0"></i></a>
                                                <a class="bbcode mr-1" id="bbcode12" title="Justifié" onclick="EditorTagInsert('messagefoA', '[justify]', '[/justify]', 0);"><i class="fas fa-align-justify mr-0"></i></a>

                                                <a class="bbcode mr-1" id="bbcode14" title="Lien" onclick="EditorTagInsert('messagefoA', '[url]', '[/url]', 0);"><i class="fas fa-link mr-0"></i></a>

                                                <a class="bbcode mr-1" id="bbcode13" title="Image" onclick="EditorTagInsert('messagefoA', '[img]', '[/img]', 0);"><i class="fas fa-image mr-0"></i></a>

                                                <a class="bbcode mr-1" id="bbcode18" title="Vidéo" onclick="EditorTagInsert('messagefoA', '[video]', '[/video]', 0);"><i class="fab fa-youtube mr-0"></i></a>

                                                <input type="color" id="bbcode2" name="bbcode2" title="Couleur" onchange="EditorTagInsert('messagefoA', '[color=$1]', '[/color]', this.value);" class="form-control mr-1" value="#0000ff">

                                                <select id="bbcode1" onchange="EditorTagInsert('messagefoA', '[size=$1]', '[/size]', this.value);" title="Taille" class="form-control mr-1">
                                                    <option value="">Taille du texte</option>
                                                    <option value="" disabled>--------------</option>
                                                    <?php

                                                    $i = 1;

                                                    while ($i <= 40) : ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php
                                                        $i++;
                                                    endwhile; ?>

                                                </select>

                                                <select id="bbcode19" onchange="EditorTagInsert2('messagefoA', '[emo=' + this.value + ']');" title="Emôticone" class="form-control mr-1">
                                                    <option value="">Emoticone</option>
                                                    <option value="" disabled>--------------</option>
                                                    <?php

                                                    $i = 1;

                                                    while ($i <= 30) : ?>
                                                        <option value="<?php echo $i; ?>">Emôticone (<?php echo $i; ?>)</option>
                                                    <?php
                                                        $i++;
                                                    endwhile; ?>

                                                </select>

                                                <button data-toggle="popover" title="Emôticone" data-content="<?php $i = 0;
                                                                                                                while ($i <= 30) : ?> <div class='d-inline-block emo text-center'><img width='35px' src='assets/images/bbcode/Emoji-Psck (<?php echo $i; ?>).png'></div><?php $i++;
                                                                                                                                                                                                                                                                                endwhile; ?>" data-html="true" type="button" class="btn btn-help"><i class="fas fa-question mr-0"></i></button>

                                            </section>
                                            <textarea class="form-control mt-3" name="messagefoA" id="messagefoA" placeholder="Lâchez-vous-en respectant bien entendu les règles !" rows="20"></textarea>
                                            <input type="hidden" id="forum_idfoA" name="forum_idfoA" value="<?php echo $fo_array3_3_result['forum_id']; ?>" />
                                            <input type="hidden" id="forum_id_catfoA" name="forum_id_catfoA" value="<?php echo $fo_array3_3_result['forum_id_cat']; ?>" />
                                            <input type="hidden" id="forum_id_cat_sujetfoA" name="forum_id_cat_sujetfoA" value="<?php echo $fo_array3_3_result['forum_id_cat_sujet']; ?>" />
                                            <input type="hidden" id="sujetfoA" name="sujetfoA" value="<?php echo $fo_array3_3_result['titre']; ?>" />

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

                                        <hr class="w-75">

                                        <div class="text-right mt-n3 mb-1">
                                            <button type="submit" class="btn btn-fo-comment">Poster le commentaire</button>
                                        </div>
                                    </form>

                                    <div class="col-md-7 m-auto">

                                        <div id="div-result-fo" class="div-result div-result-login"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <section class="container mt-3">
        <div class="row">
            <div class="col-md-11 m-auto">
                <div class="fo-stat">
                    <p>STATISTIQUES</p>
                </div>

                <div class="fo-stats">
                    <strong><?php ViewAll(); ?></strong> message(s) • <strong><?php ViewAllCat(); ?></strong> catégorie(s) • <strong><?php ViewAllSujet(); ?></strong> sujets • <strong><?php ViewAllMembres(); ?></strong> membre(s) • L’utilisateur enregistré le plus récent est <strong><?php ViewRegisterMembres(); ?></strong>.
                </div>

                <div class="fo-stat">
                    <p>QUI EST EN LIGNE</p>
                </div>

                <div class="fo-stats">
                    Légende : <span class="text-danger"><a class="fo-admin-a" href="" data-toggle="modal" data-target="#infoModal">Administrateurs</a></span>, <span class="text-success"><a href="" class="fo-modo-a" data-toggle="modal" data-target="#infoModal2">Modérateur</a></span>
                </div>

                <div class="fo-stat">
                    <p>ANNIVERSAIRES</p>
                </div>

                <div class="fo-stats">
                    Félicitations à : <?php while ($membres_all = $membres_array->fetch()) {
                                            HappyBirthday($membres_all['age'], $membres_all['pseudo'], $membres_all['day'], $membres_all['month']);
                                        } ?>
                </div>
            </div>
        </div>
    </section>

    <hr class="mt-4 mb0">


    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <?php include_once('assets/config/import/modal_forum.php'); ?>

    <?php if ($fo_array2_result['rang'] != 1 and $fo_array5_result['createur'] == $_SESSION['pseudo'] and $fo_array5_result['resolved'] != 1) { ?>

        <?php include_once('assets/config/import/modal_delete3.php'); ?>

        <?php include_once('assets/config/import/modal_edit.php'); ?>

    <?php } else if ($membre_result_co['rang'] == "Administrateur" || $membre_result_co['rang'] == "Modérateur") { ?>

        <?php include_once('assets/config/import/modal_delete3.php'); ?>

        <?php include_once('assets/config/import/modal_edit.php'); ?>

    <?php } ?>

    <a onclick="topFunction()" class="btn_top" title="Retour en haut"><i class="fas fa-angle-up"></i></a>

    <?php include('assets/config/include.php'); ?>

    <?php include_once 'assets/config/bbcode/create.php'; ?>

    <?php if (!isset($_SESSION['pseudo'])) { ?>
        <script>
            window.onscroll = function() {
                scrollFunction()
            };
        </script>
    <?php } else { ?>
        <script>
            window.onscroll = function() {
                scrollFunction(), scrollFunctionMenu()
            };
        </script>
    <?php } ?>



</body>

<script src="https://gaetan-seigneur.store/assets/js/index.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/navbar.js"></script>

<?php if (!isset($_SESSION['pseudo'])) { ?>

    <script src="https://gaetan-seigneur.store/assets/js/login.js"></script>
    <script src="https://gaetan-seigneur.store/assets/js/password_recover.js"></script>

<?php } else { ?>
    <script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>

    <script src="https://gaetan-seigneur.store/assets/js/forum.js"></script>

<?php } ?>

<script src="https://gaetan-seigneur.store/assets/js/three.min.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/vanta.waves.min.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/anim-forum.js"></script>

<script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
</script>

</html>