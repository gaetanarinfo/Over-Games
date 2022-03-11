<?php 

require 'assets/config/req.php'; 
require 'assets/config/admin.php'; 
require 'assets/config/pagination_news.php'; 
require 'assets/config/pagination_test.php'; 
require 'assets/config/pagination_tuto.php'; 
require 'assets/config/pagination_youtube.php'; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Administration</title>
    <meta name="description" content="Page d'administration">
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
    <link rel="stylesheet" href="https://gaetan-seigneur.store/admin/assets/css/admin.css">

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>
        

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - Admin
                    </h1>

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

    <!-- Section Admin Nav -->
    <section class="container-avp">
        <div class="container">
            <div class="row">

                <?php include_once 'assets/config/import/section_left.php' ?>

                <div class="col-md-8">

                    <div class="col-md-6 mt-4">
                        <h2>Les actualités</h2>
                    </div>

                    <div id="accordion" class="mt-4 mb-12">
                        <?php foreach($articles as $result_news){ ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo $result_news['id'] ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse<?php echo $result_news['id'] ?>" aria-expanded="false"
                                        aria-controls="collapse<?php echo $result_news['id'] ?>">
                                        <?php echo $result_news['titre'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse<?php echo $result_news['id'] ?>" class="collapse"
                                aria-labelledby="<?php echo $result_news['id'] ?>" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <img src="<?php echo $result_news['small_img'] ?>" class="img-thumbnail">
                                    </div>
                                    <?php echo $result_news['content2'] ?>

                                    <div class="mt-3">
                                        <div class="sub-news-comment">
                                            <i class="fas fa-pencil-alt"
                                                aria-hidden="true"></i><strong><?php echo $result_news['comment'] ?>
                                                commentaire(s)</strong>
                                        </div>
                                        <div class="sub-news-post">
                                            <i class="fas fa-user" aria-hidden="true"></i><strong>Par
                                                <?php echo $result_news['createur'] ?></strong>
                                        </div>
                                        <div class="sub-news-dates">
                                            <i class="fas fa-calendar-alt" aria-hidden="true"></i><strong>Le
                                                <?php echo $result_news['date'] ?> à
                                                <?php echo $result_news['heure'] ?></strong>
                                        </div>

                                        <div class="m-auto sub-menu">
                                            <a class="ml-2" id="editArticle-<?php echo $result_news['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#editModalArticle"><i
                                                    class="fas fa-edit"></i>Editer l'article</a>
                                            <a id="deleteArticle-<?php echo $result_news['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fas fa-trash-alt"></i>Supprimer l'article</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="pagin">
                            <!-- Paginaion Cards -->
                            <nav aria-label="Pagination News">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                                        <a href="./index?page=<?= $currentPage - 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>

                                    <?php for($page = 1; $page <= $pages; $page++): ?>
                                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                    <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                        <a href="./index?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                                    </li>
                                    <?php endfor ?>
                                    <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                                        <a href="./index?page=<?= $currentPage + 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-7 mt-4">
                        <h2>Les tests de jeux</h2>
                    </div>

                    <div id="accordion2" class="mt-4 mb-12">
                        <?php foreach($articles2 as $result_test){ ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo $result_test['id'] ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-test-<?php echo $result_test['id'] ?>"
                                        aria-expanded="false"
                                        aria-controls="collapse-test-<?php echo $result_test['id'] ?>">
                                        <?php echo $result_test['titre'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse-test-<?php echo $result_test['id'] ?>" class="collapse"
                                aria-labelledby="<?php echo $result_test['id'] ?>" data-parent="#accordion2">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <img src="<?php echo $result_test['small_img'] ?>" class="img-thumbnail">
                                    </div>
                                    <?php echo $result_test['content'] ?>

                                    <div class="mt-3">
                                        <div class="sub-news-comment">
                                            <i class="fas fa-pencil-alt"
                                                aria-hidden="true"></i><strong><?php echo $result_test['comment'] ?>
                                                commentaire(s)</strong>
                                        </div>
                                        <div class="sub-news-post">
                                            <i class="fas fa-ghost"></i><strong>Sur
                                                <?php echo $result_test['plateforme'] ?></strong>
                                        </div>
                                        <div class="sub-news-dates">
                                            <i class="fas fa-calendar-alt" aria-hidden="true"></i><strong>Le
                                                <?php echo $result_test['dates'] ?> à
                                                <?php echo $result_test['heure'] ?></strong>
                                        </div>

                                        <div class="m-auto sub-menu">
                                            <a class="ml-2" id="editTest-<?php echo $result_test['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#editModalTest"><i
                                                    class="fas fa-edit"></i>Editer le test</a>
                                            <a id="deleteTest-<?php echo $result_test['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fas fa-trash-alt"></i>Supprimer le test</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="pagin">
                            <!-- Paginaion Cards -->
                            <nav aria-label="Pagination News">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?= ($currentPage2 == 1) ? "disabled" : "" ?>">
                                        <a href="./index?test=<?= $currentPage2 - 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>

                                    <?php for($page2 = 1; $page2 <= $pages2; $page2++): ?>
                                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                    <li class="page-item <?= ($currentPage2 == $page2) ? "active" : "" ?>">
                                        <a href="./index?test=<?= $page2 ?>" class="page-link"><?= $page2 ?></a>
                                    </li>
                                    <?php endfor ?>
                                    <li class="page-item <?= ($currentPage2 == $pages2) ? "disabled" : "" ?>">
                                        <a href="./index?test=<?= $currentPage2 + 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-7 mt-4">
                        <h2>Les tutos YouTube</h2>
                    </div>

                    <div id="accordion3" class="mt-4 mb-12">
                        <?php foreach($articles3 as $result_tuto){ ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo $result_tuto['id'] ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-test<?php echo $result_tuto['id'] ?>"
                                        aria-expanded="false"
                                        aria-controls="collapse-test<?php echo $result_tuto['id'] ?>">
                                        <?php echo $result_tuto['titre'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse-test<?php echo $result_tuto['id'] ?>" class="collapse"
                                aria-labelledby="<?php echo $result_tuto['id'] ?>" data-parent="#accordion3">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <img class="w-25" src="<?php echo $result_tuto['images'] ?>">
                                    </div>

                                    <?php echo $result_tuto['content'] ?>

                                    <div class="mt-3">
                                        <img width="36px" src="<?php echo $result_tuto['icone'] ?>">

                                        <div class="sub-news-comment mt-2">
                                            <strong><?php echo $result_tuto['chaine'] ?></strong>
                                        </div>

                                        <div class="sub-news-comment mt-2">
                                            <strong>Le <?php echo $result_tuto['date'] ?></strong>
                                        </div>

                                        <div class="sub-news-comment mt-2">
                                            <strong>Catégorie <?php echo $result_tuto['cat'] ?></strong>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="m-auto sub-menu">
                                            <a class="ml-2" id="editTuto-<?php echo $result_tuto['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#editModalTuto"><i
                                                    class="fas fa-edit"></i>Editer le tuto</a>
                                            <a id="deleteTuto-<?php echo $result_tuto['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fas fa-trash-alt"></i>Supprimer le tuto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="pagin">
                            <!-- Paginaion Cards -->
                            <nav aria-label="Pagination News">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?= ($currentPage3 == 1) ? "disabled" : "" ?>">
                                        <a href="./index?tuto=<?= $currentPage3 - 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>

                                    <?php for($page3 = 1; $page3 <= $pages3; $page3++): ?>
                                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                    <li class="page-item <?= ($currentPage3 == $page3) ? "active" : "" ?>">
                                        <a href="./index?tuto=<?= $page3 ?>" class="page-link"><?= $page3 ?></a>
                                    </li>
                                    <?php endfor ?>
                                    <li class="page-item <?= ($currentPage3 == $pages3) ? "disabled" : "" ?>">
                                        <a href="./index?tuto=<?= $currentPage3 + 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-9 mt-4">
                        <h2>Les Lets Play YouTube</h2>
                    </div>

                    <div id="accordion4" class="mt-4 mb-12">
                        <?php foreach($articles4 as $result_video){ ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo $result_video['id'] ?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse-youtube<?php echo $result_video['id'] ?>"
                                        aria-expanded="false"
                                        aria-controls="collapse-youtube<?php echo $result_video['id'] ?>">
                                        Vidéo Youtube - <?php echo $result_video['titre'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse-youtube<?php echo $result_video['id'] ?>" class="collapse"
                                aria-labelledby="<?php echo $result_video['id'] ?>" data-parent="#accordion4">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <iframe class="w-100" style="height: 385px;"
                                            src="https://www.youtube.com/embed/<?php echo $result_video['api'] ?>"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen=""></iframe>
                                    </div>

                                    <div class="sub-news-comment">
                                        <strong><?php echo $result_video['titre'] ?></strong>
                                    </div>

                                    <div class="mt-3">
                                        <div class="m-auto sub-menu">
                                            <a class="ml-2" id="editVideo-<?php echo $result_video['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#editModalVideo"><i
                                                    class="fas fa-edit"></i>Editer la vidéo</a>
                                            <a id="deleteVideo-<?php echo $result_video['id']; ?>" href="#"
                                                data-toggle="modal" data-target="#deleteModal"><i
                                                    class="fas fa-trash-alt"></i>Supprimer la vidéo</a>
                                        </div>
                                    </div>
                                    ></div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="pagin">
                            <!-- Paginaion Cards -->
                            <nav aria-label="Pagination News">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?= ($currentPage4 == 1) ? "disabled" : "" ?>">
                                        <a href="./index?video=<?= $currentPage4 - 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>

                                    <?php for($page4 = 1; $page4 <= $pages4; $page4++): ?>
                                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                    <li class="page-item <?= ($currentPage4 == $page4) ? "active" : "" ?>">
                                        <a href="./index?video=<?= $page4 ?>" class="page-link"><?= $page4 ?></a>
                                    </li>
                                    <?php endfor ?>
                                    <li class="page-item <?= ($currentPage4 == $pages4) ? "disabled" : "" ?>">
                                        <a href="./index?video=<?= $currentPage4 + 1 ?>" class="page-link"><i
                                                class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <hr>
                    <h2>Les Utilisateurs</h2>
                </div>

                <div id="accordion" class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header" id="membres">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapse-membres" aria-expanded="false"
                                    aria-controls="collapse-membres">
                                    Membres qui sont inscrit sur le site internet ! (Inclus les membres bannis ou
                                    inactif)
                                </button>
                            </h5>
                        </div>

                        <div id="collapse-membres" class="collapse" aria-labelledby="membres" data-parent="#accordion">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-dark m-0">
                                        <thead>
                                            <tr class="th-admin">
                                                <th>Id</th>
                                                <th>Nom & Prénom</th>
                                                <th>Dernière connexion</th>
                                                <th>Adresse ip</th>
                                                <th>Adresse email</th>
                                                <th>Status compte</th>
                                                <th>Gestion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($result_membres = $req1->fetch()) { ?>
                                            <tr class="th-admin-2">
                                                <td><?php echo $result_membres['id'] ?></td>
                                                <td><?php echo $result_membres['nom'] ?>
                                                    <?php echo $result_membres['prenom'] ?></td>
                                                <td><?php echo $result_membres['date_connexion'] ?></td>
                                                <td><?php echo $result_membres['ip'] ?></td>
                                                <td><?php echo $result_membres['email'] ?></td>
                                                <td><?php if($result_membres['bloque'] == "1") { ?><span
                                                        class="badge badge-danger">bannis</span><?php }else{ ?><?php if($result_membres['membre_verif'] == "0") { ?><span
                                                        class="badge badge-warning">inactif</span><?php }else{ ?><span
                                                        class="badge badge-info">active<?php } ?></span><?php } ?></td>
                                                <td><a id="banMembres-<?php echo $result_membres['id']; ?>" href="#"
                                                        data-toggle="modal" data-target="#deleteModal"
                                                        class="badge badge-danger badge-trash"><i
                                                            class="fas fa-ban"></i></a>
                                                    <a id="editMembres-<?php echo $result_membres['id']; ?>" href="#"
                                                        data-toggle="modal" data-target="#editModal"
                                                        class="badge badge-info badge-trash ml-2"><i
                                                            class="fas fa-user-edit"></i></a>
                                                    <a id="deleteMembres-<?php echo $result_membres['id']; ?>" href="#"
                                                        data-toggle="modal" data-target="#deleteModal"
                                                        class="badge badge-info badge-trash"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <hr>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <?php include_once('assets/config/import/modal2.php'); ?>

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
<?php } ?>

<?php if($membre_result_co['rang'] == "Administrateur") { ?>
<script src="https://gaetan-seigneur.store/admin/assets/js/function.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/add_membre.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/add_news.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/add_video.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/add_video_yt.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/add_test.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/remove_modal.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/edit_modal.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/edit_news.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/edit_test.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/edit_tuto.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/edit_video.js"></script>
<script src="https://gaetan-seigneur.store/admin/assets/js/message.js"></script>
<?php } ?>

<script src="https://gaetan-seigneur.store/assets/js/ckeditor/ckeditor.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/ckeditor/adapters/jquery.js"></script>

<script src="https://gaetan-seigneur.store/assets/js/jquery-3.4.1.min.js"></script>


<!-- Membres -->
<script>
const modal_delete = document.getElementById('ModalLabelRemove'),
    emailDelete = document.getElementById('emailDelete'),
    modal_edit = document.getElementById('ModalLabelEdit');

var clicked = false;
var clicked1 = false;

<?php while($result_membres = $req2->fetch()) { ?>

const btn_membre_<?php echo $result_membres['id']; ?> = document.getElementById(
    'deleteMembres-<?php echo $result_membres['id']; ?>');

$("#deleteMembres-<?php echo $result_membres['id']; ?>").click(function() {
    $('#emailDelete').val("<?php echo $result_membres['email']; ?>");
});

btn_membre_<?php echo $result_membres['id']; ?>.addEventListener('click', function(event) {

    event.preventDefault()

    modal_delete.textContent = 'Êtes-vous sur de supprimé le membre ?';

    clicked = true;

});

const btn_membre2_<?php echo $result_membres['id']; ?> = document.getElementById(
    'banMembres-<?php echo $result_membres['id']; ?>');

$("#banMembres-<?php echo $result_membres['id']; ?>").click(function() {

    event.preventDefault()

    modal_delete.textContent = 'Êtes-vous sur de bannir le membre ?';

    clicked1 = true;

    $('#emailDelete').val("<?php echo $result_membres['email']; ?>");
});

const btn_membre3_<?php echo $result_membres['id']; ?> = document.getElementById(
    'editMembres-<?php echo $result_membres['id']; ?>');

$("#editMembres-<?php echo $result_membres['id']; ?>").click(function() {

    event.preventDefault()

    modal_edit.textContent = 'Modifier le membre !';

    clickededit = true;

    EditMembre("<?php echo $result_membres['email']; ?>");
});

<?php } ?>

</script>

<!-- Article -->
<script>

const modal_edit_article = document.getElementById('ModalLabelEditArticle');

var clickededitarticle = false;

<?php foreach($articles as $result_article){ ?>

const btn_edit_<?php echo $result_article['id']; ?> = document.getElementById(
    'editArticle-<?php echo $result_article['id']; ?>');

$("#editArticle-<?php echo $result_article['id']; ?>").click(function() {

    event.preventDefault()

    modal_edit_article.textContent = "Modifier l'article !";

    clickededitarticle = true;

    EditArticle("<?php echo $result_article['id'] ?>")
});

const btn_delete_<?php echo $result_article['id']; ?> = document.getElementById(
    'deleteArticle-<?php echo $result_article['id']; ?>');

var clickedremovearticle = false;

$("#deleteArticle-<?php echo $result_article['id']; ?>").click(function() {
    $('#articleDelete').val("<?php echo $result_article['id']; ?>");
});

btn_delete_<?php echo $result_article['id']; ?>.addEventListener('click', function(event) {

    event.preventDefault()

    modal_delete.textContent = "Êtes-vous sur de supprimé l'article ?";

    clickedremovearticle = true;

});

<?php } ?>

</script>

<!-- Test -->
<script>

const modal_edit_test = document.getElementById('ModalLabelEditTest');

var clickededittest = false;

<?php foreach($articles2 as $result_test){ ?>

const btn_edit_test_<?php echo $result_test['id']; ?> = document.getElementById(
    'editTest-<?php echo $result_test['id']; ?>');

$("#editTest-<?php echo $result_test['id']; ?>").click(function() {

    event.preventDefault()

    modal_edit_test.textContent = "Modifier le test de jeux !";

    clickededittest = true;

    EditTest("<?php echo $result_test['id']; ?>");
});

const btn_delete_test_<?php echo $result_test['id']; ?> = document.getElementById(
    'deleteTest-<?php echo $result_test['id']; ?>');

var clickedremovetest = false;

$("#deleteTest-<?php echo $result_test['id']; ?>").click(function() {
    $('#testDelete').val("<?php echo $result_test['id']; ?>");
});

btn_delete_test_<?php echo $result_test['id']; ?>.addEventListener('click', function(event) {

    event.preventDefault()

    modal_delete.textContent = "Êtes-vous sur de supprimé le test ?";

    clickedremovetest = true;

});

<?php } ?>
</script>

<!-- Tuto Youtube -->
<script>
const modal_edit_tuto = document.getElementById('ModalLabelEditTuto');

var clickededittuto = false;

<?php foreach($articles3 as $result_tuto){ ?>

const btn_edit_tuto_<?php echo $result_tuto['id']; ?> = document.getElementById(
    'editTuto-<?php echo $result_tuto['id']; ?>');

$("#editTuto-<?php echo $result_tuto['id']; ?>").click(function() {

    event.preventDefault()

    modal_edit_tuto.textContent = "Modifier le tuto YouTube !";

    clickededittuto = true;

    EditTuto("<?php echo $result_tuto['id']; ?>");
});

const btn_delete_tuto_<?php echo $result_tuto['id']; ?> = document.getElementById(
    'deleteTuto-<?php echo $result_tuto['id']; ?>');

var clickedremovetuto = false;

$("#deleteTuto-<?php echo $result_tuto['id']; ?>").click(function() {
    $('#tutoDelete').val("<?php echo $result_tuto['id']; ?>");
});

btn_delete_tuto_<?php echo $result_tuto['id']; ?>.addEventListener('click', function(event) {

    event.preventDefault()

    modal_delete.textContent = "Êtes-vous sur de supprimé le tuto ?";

    clickedremovetuto = true;

});

<?php } ?>
</script>

<?php if($nbMail != "0") { ?>

<!-- Message -->

<script>
const btn_message = document.getElementById('btn_message')
modal_message = document.getElementById('ModalLabelMessage');

var clickedmessage = false;

btn_message.addEventListener('click', function(event) {

    event.preventDefault()

    modal_message.textContent = "Vous avez <?php echo $nbMail ?> message(s)";

    clickedmessage = true;

});
</script>

<?php } ?>

<!-- Vidéo YouRube -->

<script>
const modal_edit_video = document.getElementById('ModalLabelEditVideoYT');

var clickededitvideo = false;

<?php foreach($articles4 as $result_video) { ?>

const btn_edit_video_<?php echo $result_video['id']; ?> = document.getElementById(
    'editVideo-<?php echo $result_video['id']; ?>');

$("#editVideo-<?php echo $result_video['id']; ?>").click(function() {

    event.preventDefault()

    modal_edit_video.textContent = "Modifier la vidéo <?php echo $result_video['titre']; ?> !";

    clickededitvideo = true;

    EditYouTube("<?php echo $result_video['id'] ?>");
});

const btn_delete_video_<?php echo $result_video['id']; ?> = document.getElementById(
    'deleteVideo-<?php echo $result_video['id']; ?>');

var clickedremovevideo = false;

$("#deleteVideo-<?php echo $result_video['id']; ?>").click(function() {
    $('#videoDelete').val("<?php echo $result_video['id']; ?>");
});

btn_delete_video_<?php echo $result_video['id']; ?>.addEventListener('click', function(event) {

    event.preventDefault()

    modal_delete.textContent = "Êtes-vous sur de supprimé la vidéo ?";

    clickedremovevideo = true;

});
<?php } ?>
</script>

</html>