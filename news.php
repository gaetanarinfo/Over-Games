<?php require 'assets/config/req.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Actualité</title>
    <meta name="description"
        content="Retrouver ici toute nos actus gamingdu moment, avec des articles premium rien que pour vous.">
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
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/news.css">


</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - Actualité</h1>

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

    <!-- Section header actualité -->
    <section class="container-avp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1️"></li>
                            <li data-target="#carousel1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="carousel-cat">
                                    <?php if($actu_premium_result['categorie'] == "NEWS") { ?>
                                    <i class="fas fa-lock-open mr-1" title="Actualité ouverte"></i>
                                    <?php }elseif($actu_premium_result['categorie'] == "PREMIUM") { ?>
                                    <i class="fas fa-lock mr-1" title="Actualité fermé"></i>
                                    <?php } ?>
                                    <span><?php echo $actu_premium_result['categorie']; ?></span>
                                </div>
                                <img class="d-block w-100" src="<?php echo $actu_premium_result['large_img'] ?>"
                                    alt="<?php echo $actu_premium_result['titre'] ?>">
                                <div class="carousel-title">
                                    <span><a href="/article?id=<?php echo $actu_premium_result['id']; ?>" class="carousel-link"><?php echo $actu_premium_result['titre']; ?></a></span>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-cat">
                                    <?php if($actu_premium_result2['categorie'] == "NEWS") { ?>
                                    <i class="fas fa-lock-open mr-1" title="Actualité ouverte"></i>
                                    <?php }elseif($actu_premium_result2['categorie'] == "PREMIUM") { ?>
                                    <i class="fas fa-lock mr-1" title="Actualité fermé"></i>
                                    <?php } ?>
                                    <span><?php echo $actu_premium_result2['categorie']; ?></span>
                                </div>
                                <img class="d-block w-100" src="<?php echo $actu_premium_result2['large_img'] ?>"
                                    alt="<?php echo $actu_premium_result2['titre'] ?>">
                                <div class="carousel-title">
                                    <span><a href="/article?id=<?php echo $actu_premium_result2['id']; ?>" class="carousel-link"><?php echo $actu_premium_result2['titre']; ?></a></span>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-cat">
                                    <?php if($actu_premium_result3['categorie'] == "NEWS") { ?>
                                    <i class="fas fa-lock-open mr-1" title="Actualité ouverte"></i>
                                    <?php }elseif($actu_premium_result3['categorie'] == "PREMIUM") { ?>
                                    <i class="fas fa-lock mr-1" title="Actualité fermé"></i>
                                    <?php } ?>
                                    <span><?php echo $actu_premium_result3['categorie']; ?></span>
                                </div>
                                <img class="d-block w-100" src="<?php echo $actu_premium_result3['large_img'] ?>"
                                    alt="<?php echo $actu_premium_result3['titre'] ?>">
                                <div class="carousel-title">
                                    <span><a href="/article?id=<?php echo $actu_premium_result3['id']; ?>" class="carousel-link"><?php echo $actu_premium_result3['titre']; ?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <div>
        <div class="container">
            <div class="row m-auto">
                <div class="col-md-9 m-auto">
                    <p class="trailer-title mb-4">Le trailer du jour</p>
                    <iframe class="mb-3" style="width: 100% !important;height: 438px !important;" frameborder="0" allow="autoplay" allowfullscreen="true" width="480" height="438" src="https://www.dailymotion.com/embed/video/<?php echo $result_trailerj['api'] ?>?api=postMessage&autoplay=false&id=f3b369e2dfe4f1&mute=true"></iframe>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="card-filter pb-3 p-3">
            <a id="plateforme" href=""><i class="fas fa-chevron-circle-right mr-1"></i> Filtrer : <span id="change_p">Toute plateforme</span></a>
            <div id="dropdown1" class="filter_dropdown">
                <ul class="list js-platform-filter" data-current="">
                    <li><a id="all_plateforme" href="">Toutes</a></li>
                        <li><a id="plateforme1" href="" data-full-name="Oculus Quest 2">Quest 2</a></li>
                        <li><a id="plateforme2" href="" data-full-name="Oculus Quest">Quest</a></li>
                        <li><a id="plateforme3" href="" data-full-name="Xbox Series X|S">Xbox X|S</a></li>
                        <li><a id="plateforme4" href="" data-full-name="PlayStation 5">PS5</a></li>
                        <li><a id="plateforme5" href="" data-full-name="Google Stadia">Stadia</a></li>
                        <li><a id="plateforme6" href="" data-full-name="PC">PC</a></li>
                        <li><a id="plateforme7" href="" data-full-name="Mac OS">MAC</a></li>
                        <li><a id="plateforme8" href="" data-full-name="iPhone/iPod Touch">iP</a></li>
                        <li><a id="plateforme9" href="" data-full-name="Nintendo Switch">Switch</a></li>
                        <li><a id="plateforme10" href="" data-full-name="PlayStation 4">PS4</a></li>
                        <li><a id="plateforme11" href="" data-full-name="Xbox One">XONE</a></li>
                        <li><a id="plateforme12" href="" data-full-name="Android">AND</a></li>
                </ul>
    </div>
        </div>

        <div class="row m-auto" id="all">  
            <?php while($actu_result = $actu->fetch()) { ?>
                <div class="col-md-6 col-lg-4 pb-3 p-3">
                    <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                    <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                    <div class="card-custom-img" style="background-image: url(<?php echo $actu_result['small_img'] ?>);"></div>
                    <div class="card-custom-avatar">
                        <a class="card-avatar" href="/profil_public/<?php if($membre_result['prenom'] == $actu_result['createur']) { ?><?php echo $membre_result['pseudo'] ?><?php } ?>" title="Profil de <?php echo $actu_result['createur'] ?>"><img class="img-fluid" src="<?php if($membre_result['prenom'] == $actu_result['createur']) { ?>upload/avatar/<?php echo $membre_result['avatar']; ?><?php } ?>" alt="<?php echo $actu_result['createur'] ?>"></a>
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title"><?php echo substr($actu_result['titre'], 0, 70)."..."; ?></h4>

                        <p class="card-text"><?php echo $actu_result['content2']."..." ?></p>

                        <div class="mt-4">
                            <div class="news-date">
                                <i class="fas fa-clock" aria-hidden="true"></i> <?php echo $actu_result['date'] ?> à <?php echo $actu_result['heure'] ?>
                            </div>

                            <div class="news-author mt-2">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Par <?php echo $actu_result['createur'] ?>
                            </div>

                            <div class="mt-2">
                                <p class="card-tag"><?php if($actu_result['categorie'] == "NEWS") { ?>
                                <i class="fas fa-lock-open" title="Actualité ouverte"></i>
                                <?php }elseif($actu_result['categorie'] == "PREMIUM") { ?>
                                <i class="fas fa-lock" title="Actualité fermé"></i>
                                <?php } ?>
                                <?php echo $actu_result['categorie']; ?></p>
                            </div>

                            <div class="mt-3">
                                <a href="/article?id=<?php echo $actu_result['id'] ?>" class="btn btn-cards">Lire la suite...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="row m-auto" id="plateforme_result"></div>
    </div>

    <hr>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

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

<script src="https://gaetan-seigneur.store/assets/js/plateforme.js"></script>

<script>
$("#plateforme").click(function() {
    $('#dropdown1').toggle(50);
  return false;  
});
</script>

</html>
