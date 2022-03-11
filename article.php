<?php require 'assets/config/req.php'; require 'assets/config/premium.php'; require 'assets/config/article.php'; include_once 'assets/config/bbcode/view.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - <?php echo $article_result['titre']; ?></title>
    <meta name="description" content="<?php echo $article_result['content2']; ?>">
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

    <meta property="og:title" content="<?php echo $article_result['titre']; ?>" />
    <meta property="og:description" content="<?php echo $article_result['content2']; ?>" />
    <meta property="og:url" content="https://gaetan-seigneur.store/article?id=<?php echo $article_result['id']; ?>" />
    <meta property="og:image" content="<?php echo $article_result['small_img']; ?>" />
    <meta property="og:type" content="article" />
                            
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@OverGames72" />
    <meta name="twitter:title" content="<?php echo $article_result['titre']; ?>" />
    <meta name="twitter:description" content="<?php echo $article_result['content2']; ?>" />
    <meta name="twitter:url" content="https://gaetan-seigneur.store/article?id=<?php echo $article_result['id']; ?>" />
    <meta name="twitter:image" content="<?php echo $article_result['small_img']; ?>" />    

    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/bootstrap/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/style.css">
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/article.css">

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fe4b34693e2dd001106191c&product=analytics' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fe4b2d2cd726a00126ec67e&product=analytics' async='async'></script>

</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>
        
    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - Article
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

    <!-- Section Header Article -->
    <section class="container-avp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="article">
                        <div class="article-back" id="article-back">
                            <div class="article-tag">
                                <?php if($article_result['categorie'] == "NEWS") { ?>
                                <i class="fas fa-lock-open" title="Actualité ouverte"></i>
                                <?php }elseif($article_result['categorie'] == "PREMIUM") { ?>
                                <i class="fas fa-lock" title="Actualité fermé"></i>
                                <?php } ?>
                                <?php echo $article_result['categorie']; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Body Article -->
    <section class="container-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <?php if(!empty($article_result['title_games'])) { ?>

                <div class="article-game-info">
                    <div class="article-game">
                        <div class="article-game-img">
                            <img src="<?php echo $article_result['img_games']; ?>">
                        </div>
                        <div class="article-game-title">
                            <span><?php echo $article_result['title_games']; ?></span>
                        </div>
                        <div class="article-game-genre">
                            <span>Genre : <?php echo $article_result['genre']; ?></span>
                        </div>

                        <div class="article-game-date">
                            <span>Date de sortie : <?php echo $article_result['date_sortie']; ?></span>
                        </div>

                        <div class="article-game-badge">
                            <?php if(!empty($article_result['plateforme'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme']; ?></span>
                            <?php } if(!empty($article_result['plateforme2'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme2']; ?></span>
                            <?php } if(!empty($article_result['plateforme3'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme3']; ?></span>
                            <?php } if(!empty($article_result['plateforme4'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme4']; ?></span>
                            <?php } if(!empty($article_result['plateforme5'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme5']; ?></span>
                            <?php } if(!empty($article_result['plateforme6'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme6']; ?></span>
                            <?php } if(!empty($article_result['plateforme7'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme7']; ?></span>
                            <?php } if(!empty($article_result['plateforme8'])) { ?>
                            <span
                                class="badge badge-perso"><?php echo $article_result['plateforme8']; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <?php } ?>

                    <p class="article-title mb-4">
                        <i class="fas fa-angle-double-right"></i>
                        <?php echo $article_result['titre'] ?>
                    </p>

                    <?php if(!empty($article_result['title_games'])) { ?>

                    <div class="article-game-info-mobile d-none">
                        <div class="article-game">
                            <div class="col-md-12 text-center">
                                <div class="article-game-img">
                                    <img src="<?php echo $article_result['img_games']; ?>">
                                </div>
                                <div class="article-game-title">
                                    <span><?php echo $article_result['title_games']; ?></span>
                                </div>
                                <div class="article-game-genre">
                                    <span>Genre : <?php echo $article_result['genre']; ?></span>
                                </div>

                                <div class="article-game-date">
                                    <span>Date de sortie : <?php echo $article_result['date_sortie']; ?></span>
                                </div>

                                <div class="article-game-badge">
                                    <?php if(!empty($article_result['plateforme'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme']; ?></span>
                                    <?php } if(!empty($article_result['plateforme2'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme2']; ?></span>
                                    <?php } if(!empty($article_result['plateforme3'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme3']; ?></span>
                                    <?php } if(!empty($article_result['plateforme4'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme4']; ?></span>
                                    <?php } if(!empty($article_result['plateforme5'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme5']; ?></span>
                                    <?php } if(!empty($article_result['plateforme6'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme6']; ?></span>
                                    <?php } if(!empty($article_result['plateforme7'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme7']; ?></span>
                                    <?php } if(!empty($article_result['plateforme8'])) { ?>
                                    <span class="badge badge-perso"><?php echo $article_result['plateforme8']; ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <hr>

                    <div class="article-body mb-4 mt-3"><?php echo $article_result['content'] ?></div>


                    <?php if(!empty($article_result['videos'])) { ?>

                    <hr>

                    <div class="article-videos mt-3">
                        <div class="article-video-tag"><?php echo $article_result['tag_video'] ?></div>
                        <iframe src="<?php echo $article_result['videos'] ?>"
                            alt="<?php echo $article_result['titre'] ?>"></iframe>
                    </div>

                    <?php } ?>

                    <hr>

                    <div class="sharethis-inline-share-buttons mb-4"></div>

                    <hr>

                    <div class="sharethis-inline-reaction-buttons"></div>

                    <hr>

                    <!-- Commentaire -->

                    <div class="row">
                        <div id=comment class="col-md-8 m-auto">
                            <?php if($count_comment2 != 0) { ?>
                            <?php while($comment_result = $req9->fetch()) { ?>
                            <div class="media mb-4" id="comment-id<?php echo $comment_result['id'] ?>">
                            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                                    src="<?php if($membre_result['pseudo'] == $comment_result['pseudo']) { ?>upload/avatar/<?php echo $membre_result['avatar']; ?><?php } ?>"
                                    alt="<?php echo $comment_result['pseudo'] ?>">
                                <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                    <div class="g-mb-15 mb-3">
                                        <h5 class="h5 g-color-gray-dark-v1 mb-1">
                                            <?php echo $comment_result['pseudo'] ?>
                                        </h5>
                                        <span class="g-color-gray-dark-v2 g-font-size-12">Le
                                            <?php echo $comment_result['dates'] ?> à
                                            <?php echo $comment_result['heure'] ?></span>
                                    </div>

                                    <div id="t"><?php echo BBCode2Html($comment_result['message']) ?></div>

                                    <ul class="list-inline d-sm-flex my-0 mt-3">
                                        <li class="list-inline-item">
                                            <?php if(isset($_SESSION['email'])) { ?>
                                            <a id="btn_likes<?php echo $comment_result['id'] ?>"
                                                class="u-link-v5 g-color-gray-dark-v4" title="J'aime"
                                                onclick="checkLikes<?php echo $comment_result['id'] ?>(event)">
                                                <i class="fa fa-thumbs-up ml-1" aria-hidden="true"></i></a>
                                            <span id="likes<?php echo $comment_result['id'] ?>"
                                                class="g-color-gray-dark-v4"><?php echo $comment_result['likes'] ?></span>
                                        </li>
                                        <?php }else{ ?>
                                        <a class="u-link-v5 g-color-gray-dark-v4" title="J'aime" data-toggle="modal"
                                            data-target="#loginModal">
                                            <i class="fa fa-thumbs-up ml-1" aria-hidden="true"></i></a>
                                        <span class="g-color-gray-dark-v4"><?php echo $comment_result['likes'] ?></span>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <?php if(isset($_SESSION['pseudo'])) { ?>

                            <script>
                            let likes<?php echo $comment_result['id'] ?> = document.getElementById(
                                'likes<?php echo $comment_result['id'] ?>');
                            const btn_likes<?php echo $comment_result['id'] ?> = document.getElementById(
                                'btn_likes<?php echo $comment_result['id'] ?>');

                            if (sessionStorage.getItem('likes<?php echo $comment_result['id'] ?>') != 'yes') {

                                function checkLikes<?php echo $comment_result['id'] ?>(event) {

                                    event.preventDefault();

                                    $.get("https://gaetan-seigneur.store/assets/config/likes.php?id=<?php echo $comment_result['article_id'] ?>&pseudo=<?php echo $comment_result['pseudo'] ?>&commentid=<?php echo $comment_result['id'] ?>",
                                        function() {
                                            likes<?php echo $comment_result['id'] ?>.textContent = Number(
                                                likes<?php echo $comment_result['id'] ?>.textContent) + 1;
                                            likes<?php echo $comment_result['id'] ?>.style.pointerEvents = 'none';
                                            sessionStorage.setItem('likes<?php echo $comment_result['id'] ?>',
                                                'yes');

                                            btn_likes<?php echo $comment_result['id'] ?>.remove();
                                        });
                                    return false;
                                }

                            } else {
                                function checkLikes(event) {

                                    event.preventDefault();
                                }

                                btn_likes<?php echo $comment_result['id'] ?>.removeAttribute('onclick');
                                btn_likes<?php echo $comment_result['id'] ?>.title = 'Vous avez déjà voter !';
                            }
                            </script>

                            <?php } ?>
                            <?php } ?>
                            <hr>
                            <?php }else{ ?>
                            <div id="comment-empty" class="row">
                                <div class="m-auto">
                                    <p class="comment-empty">Aucun commentaire à afficher</p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <?php if(isset($_SESSION['email'])) { ?>
                        <div class="container">
                            <div class="row">
                                <div class="mt-4 mb-2 add-comment">
                                    <a id="add_comment" data-toggle="modal" data-target="#commentModal"
                                        class="btn btn-form">Poster un commentaire</a>
                                </div>
                            </div>
                        </div>

                        <?php }else{ ?>
                        <div class="container">
                            <div class="row">
                                <div class="mt-4 mb-2 add-comment">
                                    <a id="add_comment" data-toggle="modal" data-target="#loginModal"
                                        class="btn btn-form">Connexion</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
    </section>

    <hr>

    

</div>

    <hr>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <?php include_once('assets/config/import/modal_galerie.php'); ?>

    <?php if(isset($_SESSION['email'])) { ?>
    <?php include_once('assets/config/import/modal_comment.php'); ?>
    <?php } ?>

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
<script src="https://gaetan-seigneur.store/assets/js/add_comment.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>
<?php } ?>

<script>
document.getElementById('article-back').style.backgroundImage = "url(" + "<?php echo $article_result['large_img'] ?>" +
    ")";
</script>

</html>