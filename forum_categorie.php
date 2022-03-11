<?php 

require 'assets/config/req.php'; 

require 'assets/config/forum_req.php';

require 'assets/config/pagination_forum.php';

require 'assets/config/bbcode/create.php'; 

if($_GET['forum_id'] != $fo_array2_result['forum_id'] || $_GET['forum_id_cat'] != $fo_array2_result['forum_id_cat']) { 
    // header('Location: /forum'); 
}else{

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Forum - <?php echo $fo_array1_2_result['titre'] ?></title>
    <meta name="description" content="<?php echo $fo_array1_2_result['content'] ?>">
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

                    <?php if(isset($_SESSION['email'])) { include_once('assets/config/import/header_membre.php'); } ?>
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
                        <li class="breadcrumb-item active"><?php echo $fo_array1_2_result['titre'] ?></li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <h4>
                    <?php echo $fo_array2_result['titre'] ?>
                </h4>

                <div class="fo-admin">
                    <strong>Administrateur :</strong> <?php while($result_admin = $admin_array->fetch()) { ?><span
                        class="mr-2"><strong><?php echo $result_admin['pseudo']; ?></strong></span><?php } ?>
                    <?php if($count_modo['id'] == "0") { ?>| Modérateur :
                    <?php while($result_modo = $modo_array->fetch()) { ?><span
                        class="mr-2"><strong><?php echo $result_modo['pseudo']; ?></strong></span><?php } ?><?php } ?>
                </div>

                <hr class="w-100 mt-2 mb-1">

                <div class="search-box mb-3">
                    <div class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" id="search_i" name="search_i" type="search" height="31px"
                            placeholder="Rechercher ici..." aria-label="Rechercher ici...">
                        <button class="btn btn-search my-2 my-sm-0"
                            onclick="searchBox(<?php echo $fo_array2_result['forum_id']; ?>, <?php echo $fo_array2_result['forum_id_cat']; ?>)"
                            type="button"><i class="fas fa-search mr-0"></i></button>
                    </div>
                </div>

                <?php if(isset($_SESSION['email']) AND $membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { ?>

                <a href="" data-toggle="modal" data-target="#sujetModal" class="btn btn-fo-add mb-3">Ajouter un
                    topic</a>
                <a href="" data-toggle="modal" data-target="#subCatModal" class="btn btn-fo-add mb-3">Ajouter un
                    sujet</a>
                <a href="" data-toggle="modal" data-target="#sujet2Modal" title="Modifier un topic"
                    class="btn btn-fo-delete mb-3"><i class="far fa-edit mr-0"></i></a>

                <a href="" data-toggle="modal" data-target="#subCat2Modal" title="Modifier un sujet"
                    class="btn btn-fo-delete mb-3"><i class="far fa-edit mr-0"></i></a>

                <?php }else{ ?>

                <?php if(isset($_SESSION['email']) AND $fo_array2_result['rang'] == 0) { ?><a href=""
                    data-toggle="modal" data-target="#subCatModal" class="btn btn-fo-add mb-3">Ajouter un
                    sujet</a><?php } ?>

                <?php } ?>

                <?php if(isset($_SESSION['email']) AND $membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { ?><a
                    id="btn-del-cat" data-toggle="modal" data-target="#deleteModal" class="btn btn-fo-delete mb-3"
                    title="Supprimez la catégorie ?"><i class="fas fa-times mr-0"></i></a><?php } ?>

                <?php if(isset($_SESSION['email']) AND $membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { ?><a
                    id="btn-del-top" data-toggle="modal" data-target="#deleteModal2" class="btn btn-fo-delete mb-3"
                    title="Supprimez le topic ?"><i class="fas fa-times mr-0"></i></a><?php } ?>

                <div class="fo-head">
                    <div class="fo-date">Nous sommes le
                        <?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee ?> à
                        <?php echo date('H:i', strtotime('+1 hour')); ?></div>
                    <div class="fo-sujet">
                        <?php ViewSujet($fo_array2_result['forum_id'], $fo_array2_result['forum_id_cat']); ?>&nbsp;&nbsp;sujets&nbsp;&nbsp;•&nbsp;&nbsp;
                        <div class="d-inline-block">
                            Page&nbsp;&nbsp;<?php echo $currentPage ?>&nbsp;&nbsp;sur&nbsp;&nbsp;<?php echo $pages ?>&nbsp;&nbsp;•&nbsp;&nbsp;
                        </div>
                        <div class="d-inline-block">
                            <nav>
                                <ul class="pagination justify-content-center mb-0">

                                    <?php for($page = 1; $page <= $pages; $page++): ?>
                                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                    <li class="page-item <?= ($currentPage == $page - 8) ? "disabled" : "" ?>">
                                        <a href="./forum_categorie/<?php echo $fo_array2_result['forum_id']; ?>/<?php echo $fo_array2_result['forum_id_cat']; ?>/<?= $page ?>"
                                            class="page-link fo-pagin-a"><?= $page ?></a>
                                    </li>
                                    <?php endfor ?>
                                    &nbsp;...&nbsp;
                                    <li class="page-item <?= ($currentPage == 9) ? "disabled" : "" ?>">
                                        <a href="./forum_categorie/<?php echo $fo_array2_result['forum_id']; ?>_<?php echo $fo_array2_result['forum_id_cat']; ?>_<?= $pages ?>"
                                            class="page-link fo-pagin-a">9</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div id="search"></div>

                <table class="table table-hover table-borderless table-responsive d-inline-table" id="search-table">
                    <thead>
                        <tr class="fo-tr">
                            <th scope="col" style="width: 93px;"></th>
                            <th scope="col" style="width: 450px;"><?php echo $fo_array2_result['titre2'] ?></th>
                            <th scope="col" class="text-center">RÉPONSES</th>
                            <th scope="col" class="text-center">VUE</th>
                            <th scope="col" style="width: 211px;">DERNIER MESSAGE</th>
                            <th scope="col" style="width: 65px;"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($articles as $fo_result){ ?>
                        <tr id="forum_cat_<?php echo $fo_result['id']; ?>">
                            <th scope="row">
                                <?php Topic($fo_result['topic']) ?>
                            </th>
                            <td class="fo-td">

                            <?php 
                                    $fo_array9 = $db->prepare('SELECT * FROM forum_cat_cat_sujet WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet ORDER BY id DESC');
                                    $fo_array9->execute(array(':forum_id' => $fo_result['forum_id'], ':forum_id_cat' => $fo_result['forum_id_cat'], ':forum_id_cat_sujet' => $fo_result['forum_id_cat_sujet']));
                                    $fo_array9_result = $fo_array9->fetch();
                                    $fo_array9->closeCursor();
                                ?>

                            <?php if(isset($_SESSION['email']) AND $fo_array2_result['rang'] == 0 AND $membre_result_co['pseudo'] == $fo_result['createur'] AND $fo_array9_result['createur'] != $_SESSION['pseudo']) { ?>
                                <strong><?php echo $fo_result['titre2']; ?></strong>
                            <?php }else{ ?>
                                <a href="/forum_sujet/<?php echo $fo_result['forum_id']; ?>/<?php echo $fo_result['forum_id_cat']; ?>/<?php echo $fo_result['forum_id_cat_sujet']; ?>" title="<?php echo $fo_result['titre2']; ?>"><strong><?php echo $fo_result['titre2']; ?></strong></a>
                            <?php } ?>
                                <br>
                                <?php echo $fo_result['content']; ?>
                                <br>
                                <a href="">Crée par <strong><a href="profil_public/<?php echo $fo_result['createur'] ?>" target="_blank"><?php echo $fo_result['createur']; ?></a></strong></a>
                            </td>
                            <td class="text-center fo-td">
                                <div class="mt-4">
                                    <?php ViewMessageCat($fo_result['forum_id'], $fo_result['forum_id_cat'], $fo_result['forum_id_cat_sujet']); ?>
                                </div>
                            </td>
                            <td class="text-center fo-td">
                                <div class="mt-4">
                                    <?php View($fo_result['forum_id'], $fo_result['forum_id_cat'], $fo_result['forum_id_cat_sujet']); ?>
                                </div>
                            </td>

                            <td class="fo-td">
                                <?php ViewMessageBefore2($fo_result['forum_id'], $fo_result['forum_id'], $fo_result['forum_id_cat_sujet']); ?>
                            </td>

                            <td class="text-center fo-td">

                                <?php if(isset($_SESSION['email']) AND $fo_array2_result['rang'] == 0 AND $membre_result_co['pseudo'] == $fo_result['createur'] AND $fo_array9_result['createur'] != $_SESSION['pseudo']) { ?>
                                
                                <div class="mt-4">
                                    <a href="" data-toggle="modal" data-target="#sujetModal" class="" title="Ajouter un topic"><i class="fas fa-plus mr-1"></i></a>
                                </div>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="fo-stat">
                    <p>STATISTIQUES</p>
                </div>

                <div class="fo-stats">
                    <strong><?php ViewAll(); ?></strong> message(s) • <strong><?php ViewAllCat(); ?></strong>
                    catégorie(s) • <strong><?php ViewAllSujet(); ?></strong> sujets •
                    <strong><?php ViewAllMembres(); ?></strong> membre(s) • L’utilisateur enregistré le plus récent est
                    <strong><?php ViewRegisterMembres(); ?></strong>.
                </div>

                <div class="fo-stat">
                    <p>QUI EST EN LIGNE</p>
                </div>

                <div class="fo-stats">
                    Légende : <span class="text-danger"><a class="fo-admin-a" href="" data-toggle="modal"
                            data-target="#infoModal">Administrateurs</a></span>, <span class="text-success"><a href=""
                            class="fo-modo-a" data-toggle="modal" data-target="#infoModal2">Modérateur</a></span>
                </div>

                <div class="fo-stat">
                    <p>ANNIVERSAIRES</p>
                </div>

                <div class="fo-stats">
                    Félicitations à :
                    <?php while($membres_all = $membres_array->fetch()) { HappyBirthday($membres_all['age'], $membres_all['pseudo'], $membres_all['day'], $membres_all['month']); } ?>
                </div>

                <hr>

                <div class="col-md-12 row mb-6">
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-black-flag-icon-256.png">
                        <div class="fo-icone">Catégorie Forum</div>
                    </div>
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-2-icon-256.png">
                        <div class="fo-icone">Sujet Forum</div>
                    </div>
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-3-icon-256.png">
                        <div class="fo-icone">Topic ouvert</div>
                    </div>
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-4-icon-256.png">
                        <div class="fo-icone">Topic Fermer</div>
                    </div>
                </div>

                <hr>

            </div>
        </div>
    </section>


    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>
    <?php include_once('assets/config/import/modal_forum.php'); ?>

    <?php if(isset($_SESSION['pseudo'])) { ?>

    <?php include_once('assets/config/import/modal_forum2.php'); ?>
    <?php include_once('assets/config/import/modal_forum3.php'); ?>

    <?php } ?>

    <?php if(isset($_SESSION['pseudo']) AND $membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { ?>
    <?php include_once('assets/config/import/modal_delete.php'); ?>
    <?php include_once('assets/config/import/modal_delete2.php'); ?>
    <?php include_once('assets/config/import/modal_forum_edit.php'); ?>
    <?php include_once('assets/config/import/modal_forum_cat_edit.php'); ?>
    <?php } ?>

    <a onclick="topFunction()" class="btn_top" title="Retour en haut"><i class="fas fa-angle-up"></i></a>

    <?php include('assets/config/include.php'); ?>

    <?php if(!isset($_SESSION['pseudo'])) { ?>
    <script>
    window.onscroll = function() {
        scrollFunction()
    };
    </script>
    <?php }else{ ?>
    <script>
    window.onscroll = function() {
        scrollFunction(), scrollFunctionMenu()
    };
    </script>
    <?php } ?>

</body>

<script src="https://gaetan-seigneur.store/assets/js/index.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/navbar.js"></script>

<?php if(!isset($_SESSION['pseudo'])) { ?>

<script src="https://gaetan-seigneur.store/assets/js/login.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/password_recover.js"></script>

<?php }else{ ?>
<script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>

<script src="https://gaetan-seigneur.store/assets/js/forum_add.js"></script>

<?php } ?>

<script src="https://gaetan-seigneur.store/assets/js/three.min.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/vanta.waves.min.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/anim-forum.js"></script>

<script>
function searchBox(id1, id2) {

    $('#search-table').fadeOut(500);
    $('#search').fadeIn(500);

    $.get("https://gaetan-seigneur.store/assets/config/search_cat.php?forum_id=<?php echo $fo_array2_result['forum_id']; ?>&forum_id_cat=<?php echo $fo_array2_result['forum_id_cat']; ?>&s=" +
        $('#search_i').val() + "",
        function(data) {
            $("body");
            $('#search').html(data);
        });

}

$('#catfoC').change(function() {

    var cat = $('#catfoC').val();

    $.get("https://gaetan-seigneur.store/assets/config/view_forum_cat.php?forum_id=<?php echo $fo_array5_result['forum_id'] ?>&forum_id_cat=<?php echo $fo_array5_result['forum_id_cat'] ?>&forum_id_cat_sujet=" +
        cat,
        function(data) {
            $("body")
            $('#titrefoeditA').attr('value', data.titre);
            $('#ModalLabelSujet2').html('Modifier le topic ' + data.titre);
            $('#contentfoeditA').html(data.content);
        }, "json");

});
</script>

<script>
$('#catfoD').change(function() {

    var cat = $('#catfoD').val();

    $.get("https://gaetan-seigneur.store/assets/config/view_forum_cat.php?forum_id=<?php echo $fo_array5_result['forum_id'] ?>&forum_id_cat=<?php echo $fo_array5_result['forum_id_cat'] ?>&forum_id_cat_sujet=" +
        cat,
        function(data) {
            $("body")
            $('#titreeditcatfoB').attr('value', data.titre);
            $('#titreeditcatfoB2').attr('value', data.titre2);
            $('#ModalLabelSubCat2').html('Modifier le sujet ' + data.titre);
            $('#contenteditcatfoB').html(data.content);
        }, "json");

});
</script>

<script>
$(function() {
    $('[data-toggle="popover"]').popover()
})
</script>

</html>