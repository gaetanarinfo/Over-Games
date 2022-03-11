<?php session_start();
require 'assets/config/req.php';
require 'assets/config/function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Primary Meta Tags -->
    <title>Over-Games, Site internet de jeux vidéo.</title>
    <meta name="title" content="Over-Games, Site internet de jeux vidéo.">
    <meta name="description" content="Retrouvez toute l'actualité en temps réel et les tests des derniers jeux vidéo fraîchement sortis, servis par la rédaction de Over Games !">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gaetan-seigneur.store/">
    <meta property="og:title" content="Over-Games, Site internet de jeux vidéo.">
    <meta property="og:description" content="Retrouvez toute l'actualité en temps réel et les tests des derniers jeux vidéo fraîchement sortis, servis par la rédaction de Over Games !">
    <meta property="og:image" content="https://gaetan-seigneur.store/assets/images/thumb-350-1077273.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gaetan-seigneur.store/">
    <meta property="twitter:title" content="Over-Games, Site internet de jeux vidéo.">
    <meta property="twitter:description" content="Retrouvez toute l'actualité en temps réel et les tests des derniers jeux vidéo fraîchement sortis, servis par la rédaction de Over Games !">
    <meta property="twitter:image" content="https://gaetan-seigneur.store/assets/images/thumb-350-1077273.jpg">

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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3J89YN6P3W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3J89YN6P3W');
    </script>

</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games</h1>

                    <p class="anim-title-2">Retrouvez toute l'actualité en temps réel et<br>les tests des derniers jeux vidéo !</p>

                    <img class="anim-title-img" src="https://gaetan-seigneur.store/assets/images/logo.png" alt="Logo Over-Games">

                    <?php if (isset($_SESSION['email'])) {
                        include_once('assets/config/import/header_membre.php');
                    } ?>
                </div>
            </div>
        </div>
    </header>

    <?php include_once('assets/config/import/navbar.php'); ?>

    <!-- Section News Top -->
    <section class="container-news">
        <div class="container">
            <div class="row">

                <!-- Image news Principal Large -->
                <div class="col-sm-12 col">
                    <div class="one-news-img" id="newsimg">
                        <div class="news-title">
                            <div class="title-h1">
                                <a class="title-head" href="/article?id=<?php echo $actualite['id']; ?>"><?php echo $actualite['titre']; ?></a>
                            </div>
                            <div class="news-cat">
                                <?php if ($actualite['categorie'] == "NEWS") { ?>
                                    <i class="fas fa-lock-open" title="Actualité ouverte"></i>
                                <?php } elseif ($actualite['categorie'] == "PREMIUM") { ?>
                                    <i class="fas fa-lock" title="Actualité fermé"></i>
                                <?php } ?>
                                <?php echo $actualite['categorie']; ?>
                            </div>
                            <div class="news-author">
                                <i class="fas fa-pencil-alt"></i> Par <a href="profil_public/<?php if ($membre_result['prenom'] == $actualite['createur']) { ?><?php echo $membre_result['pseudo']; ?><?php } ?>" target="_blank"><?php echo $actualite['createur']; ?></a>
                            </div>
                            <div class="news-date">
                                <i class="fas fa-clock"></i> <?php echo $actualite['date']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image news Secondaire Moyenne -->
                <div class="col-sm-12 col2">
                    <div class="two-news-img" id="newsimg2">
                        <div class="news-title">
                            <div class="title-h1-2">
                                <a class="title-head" href="/article?id=<?php echo $actualite2['id']; ?>"><?php echo $actualite2['titre']; ?></a>
                            </div>
                            <div class="news-cat">
                                <?php if ($actualite2['categorie'] == "NEWS") { ?>
                                    <i class="fas fa-lock-open" title="Actualité ouverte"></i>
                                <?php } elseif ($actualite2['categorie'] == "PREMIUM") { ?>
                                    <i class="fas fa-lock" title="Actualité fermé"></i>
                                <?php } ?>
                                <?php echo $actualite2['categorie']; ?>
                            </div>
                            <div class="news-author">
                                <i class="fas fa-pencil-alt"></i> Par <a href="profil_public/<?php if ($membre_result['prenom'] == $actualite2['createur']) { ?><?php echo $membre_result['pseudo']; ?><?php } ?>" target="_blank"><?php echo $actualite2['createur']; ?></a>
                            </div>
                            <div class="news-date">
                                <i class="fas fa-clock"></i> <?php echo $actualite2['date']; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Image news Tertiaire Moyenne -->
                    <div class="col-sm-12 col2">
                        <div class="three-news-img" id="newsimg3">
                            <div class="news-title">
                                <div class="title-h1-2">
                                    <a class="title-head" href="/article?id=<?php echo $actualite3['id']; ?>"><?php echo $actualite3['titre']; ?></a>
                                </div>
                                <div class="news-cat">
                                    <?php if ($actualite3['categorie'] == "NEWS") { ?>
                                        <i class="fas fa-lock-open" title="Actualité ouverte"></i>
                                    <?php } elseif ($actualite3['categorie'] == "PREMIUM") { ?>
                                        <i class="fas fa-lock" title="Actualité fermé"></i>
                                    <?php } ?>
                                    <?php echo $actualite3['categorie']; ?>
                                </div>
                                <div class="news-author">
                                    <i class="fas fa-pencil-alt"></i> Par <a href="profil_public/<?php if ($membre_result['prenom'] == $actualite3['createur']) { ?><?php echo $membre_result['pseudo']; ?><?php } ?>" target="_blank"><?php echo $actualite3['createur']; ?></a>
                                </div>
                                <div class="news-date">
                                    <i class="fas fa-clock"></i> <?php echo $actualite3['date']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section Youtube -->
    <section class="container-avp">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Section Sub News -->
                    <div class="col-md-12 mt-3">

                        <h2>Les actualités du jour.</h2>
                        <div class="col-md-12">
                            <div class="container-sub-news">

                                <?php while ($sub_news_while = $req6->fetch()) { ?>
                                    <div class="container-sub-border">
                                        <a href="/article?id=<?php echo $sub_news_while['id'] ?>" target="_blank" title="<?php echo $sub_news_while['titre'] ?>">
                                            <p><i class="fa fa-ellipsis-v"></i>&nbsp;<?php echo $sub_news_while['titre'] ?></p>
                                        </a>
                                        <div class="sub-news">
                                            <a href="/article?id=<?php echo $sub_news_while['id'] ?>" target="_blank" title="<?php echo $sub_news_while['titre'] ?>">
                                                <img src="<?php echo $sub_news_while['small_img'] ?>">
                                            </a>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="sub-news-desc">
                                                        <?php echo $sub_news_while['content2'], "..." ?>
                                                    </div>
                                                    <div class="sub-news-comment">
                                                        <i class="fas fa-pencil-alt" aria-hidden="true"></i><strong><?php echo $sub_news_while['comment'] ?>
                                                            commentaire(s)</strong>
                                                    </div>
                                                    <div class="sub-news-post">
                                                        <i class="fas fa-user"></i><strong>Par
                                                            <a href="profil_public/<?php if ($membre_result['prenom'] == $sub_news_while['createur']) { ?><?php echo $membre_result['pseudo']; ?><?php } ?>" target="_blank"><?php echo $sub_news_while['createur']; ?></a></strong>
                                                    </div>
                                                    <div class="sub-news-dates">
                                                        <i class="fas fa-calendar-alt"></i><strong>Le
                                                            <?php echo $sub_news_while['date'] ?> à
                                                            <?php echo $sub_news_while['heure'] ?></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-n6">
                        <div class="row">
                            <?php while ($result_lets = $req8->fetch()) { ?>
                                <div class="col-md-6">
                                    <p class="Subtitle-yt"><i class="fas fa-play-circle"></i> <?php echo $result_lets['titre'] ?></p>
                                    <iframe class="yt-cards" src="https://www.youtube.com/embed/<?php echo $result_lets['api'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <?php include_once 'assets/config/import/section_right.php' ?>

            </div>
    </section>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <a onclick="topFunction()" class="btn_top" title="Retour en haut"><i class="fas fa-angle-up"></i></a>

    <?php include('assets/config/include.php'); ?>

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

<!-- js perso -->
<script src="https://gaetan-seigneur.store/assets/js/index.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/navbar.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/youtube.js"></script>
<script type="text/javascript">
    document.getElementById('newsimg').style.backgroundImage = "url(" + "<?php echo $actualite['large_img'] ?>" + ")";
    document.getElementById('newsimg2').style.backgroundImage = "url(" + "<?php echo $actualite2['large_img'] ?>" + ")";
    document.getElementById('newsimg3').style.backgroundImage = "url(" + "<?php echo $actualite3['large_img'] ?>" + ")";
</script>

<?php if (!isset($_SESSION['pseudo'])) { ?>
    <script src="https://gaetan-seigneur.store/assets/js/login.js"></script>
    <script src="https://gaetan-seigneur.store/assets/js/password_recover.js"></script>
<?php } else { ?>
    <script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>
<?php } ?>

<!-- Youtube Modal -->
<?php while ($tuto_while = $req7_7->fetch()) { ?>

    <script>
        $('#youtube-<?php echo $tuto_while['id'] ?>').click(function() {
            Youtube("<?php echo $tuto_while['titre'] ?>", "<?php echo $tuto_while['api'] ?>");
        });

        $('#youtube-2-<?php echo $tuto_while['id'] ?>').click(function() {
            Youtube("<?php echo $tuto_while['titre'] ?>", "<?php echo $tuto_while['api'] ?>");
        });
    </script>

<?php } ?>

</html>