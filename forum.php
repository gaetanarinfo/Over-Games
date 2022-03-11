<?php require 'assets/config/req.php'; require 'assets/config/forum_req.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Forum</title>
    <meta name="description" content="Partager vos jeux, votre expérience sur le terrain des grands gamers, discuter avec vos amies sans limite.">
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
                    <h1 class="anim-title">Over Games - Forum
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forum</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if($fo_membre_result['rang'] == "Administrateur" OR $fo_membre_result['rang'] == "Moderateur") { ?><a href="" data-toggle="modal" data-target="#categorieModal" class="btn btn-fo-add mb-3">Ajouter une catégorie</a><?php } ?>
                <div class="fo-head">
                    <div class="fo-date">Nous sommes le <?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee ?> à <?php echo date('H:i', strtotime('+1 hour')); ?></div>
                    <div class="fo-sujet">
                        <a id="fo-font" href="" title="Augmenter la taille"><i class="fas fa-font"></i></a>

                        <a id="fo-font2" href="" title="Diminuer la taille"><i class="fas fa-font"></i></a>

                        <a id="fo-color" href="" title="Changer la couleur"><i class="fas fa-tint"></i></a>
                        <input style="display: none;" type="color" id="color" name="color" value="#ffffff" />

                        <a id="fo-color-text" href="" title="Changer la couleur du texte"><i class="fas fa-tint"></i></a>
                        <input style="display: none;" type="color" id="color-text" name="color-text" value="#ffffff" />

                        <a id="fo-remove-font" href="" title="Remettre à zéro"><i class="fas fa-times"></i></a>
                    </div>
                </div>    
                <table class="table table-hover table-borderless table-responsive d-inline-table">
                    <thead>
                        <tr class="fo-tr">
                        <th scope="col" style="width: 93px;"></th>
                        <th scope="col" style="width: 450px;">OVER-GAMES</th>
                        <th scope="col" class="text-center">SUJETS</th>
                        <th scope="col" class="text-center">MESSAGE</th>
                        <th scope="col" style="width: 211px;">DERNIER MESSAGE</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php while($fo_result = $fo_array->fetch()) { ?>
                        <tr id="forum_cat_<?php echo $fo_result['id']; ?>">
                        <th scope="row"><img class="fo-cat" src="<?php echo $fo_result['icone']; ?>" alt="<?php echo $fo_result['titre']; ?>"></th>
                        <td class="fo-td"><a href="/forum_categorie/<?php echo $fo_result['forum_id']; ?>/<?php echo $fo_result['forum_id']; ?>" title=""><strong><?php echo $fo_result['titre']; ?></strong></a>
                            <br>
                            <?php echo $fo_result['content']; ?>
                            <br>
                            Crée par <strong><a href="profil_public/<?php echo $fo_result['createur']; ?>" target="_blank"><?php echo $fo_result['createur']; ?></a></strong>   
                        </td>
                        <td class="text-center fo-td"><div class="mt-4"><?php ViewSujetCat($fo_result['id']); ?></div></td>
                        <td class="text-center fo-td"><div class="mt-4"><?php ViewMessageAll($fo_result['forum_id'], $fo_result['forum_id']); ?></div></td>
                        <td class="fo-td">
                            <?php ViewMessageBefore($fo_result['forum_id'], $fo_result['forum_id']); ?> 
                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

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
                    Légende : <span class="text-danger"><a class="fo-admin-a" href="" data-toggle="modal" data-target="#infoModal">Administrateurs</a></span>, <span class="text-success"><a href="" class="fo-modo-a"  data-toggle="modal" data-target="#infoModal2">Modérateur</a></span>
                </div>

                <div class="fo-stat">
                    <p>ANNIVERSAIRES</p>
                </div>

                <div class="fo-stats">
                    Félicitations à : <?php while($membres_all = $membres_array->fetch()) { ?><?php HappyBirthday($membres_all['age'], $membres_all['pseudo'], $membres_all['day'], $membres_all['month']);?><?php } ?>
                </div>

                <hr>

                <div class="col-md-12 row mb-6">
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-black-flag-icon-256.png"> <div class="fo-icone">Catégorie Forum</div>
                    </div> 
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-2-icon-256.png"> <div class="fo-icone">Sujet Forum</div>
                    </div> 
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-3-icon-256.png"> <div class="fo-icone">Topic ouvert</div>
                    </div> 
                    <div class="col-md-3 text-center">
                        <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-4-icon-256.png"> <div class="fo-icone">Topic Fermer</div>
                    </div> 
                </div>

                <hr>

            </div>
        </div>
    </section>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <?php include_once('assets/config/import/modal_forum.php'); ?>

    <a onclick="topFunction()" class="btn_top" title="Retour en haut"><i class="fas fa-angle-up"></i></a>

    <?php include('assets/config/include.php'); ?>

    <?php if(!isset($_SESSION['pseudo'])) { ?>
        <script>window.onscroll = function() { scrollFunction() };</script>
    <?php }else{ ?>
        <script>window.onscroll = function() { scrollFunction(), scrollFunctionMenu() };</script>
    <?php } ?>

</body>

<script src="https://gaetan-seigneur.store/assets/js/index.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/navbar.js"></script>

<?php if(!isset($_SESSION['pseudo'])) { ?>

<script src="https://gaetan-seigneur.store/assets/js/login.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/password_recover.js"></script>

<?php }else{ ?>
<script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>

    <?php if(isset($_SESSION['pseudo']) AND $fo_membre_result['rang'] == "Administrateur" OR $fo_membre_result['rang'] == "Moderateur") { ?>
        <script src="https://gaetan-seigneur.store/assets/js/forum_add.js"></script>
    <?php } ?>  

<?php } ?>

<script src="https://gaetan-seigneur.store/assets/js/three.min.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/vanta.waves.min.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/anim-forum.js"></script>

</html>