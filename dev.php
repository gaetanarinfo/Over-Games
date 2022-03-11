<?php require 'assets/config/req.php'; require 'assets/config/pagination_dev.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Dev</title>
    <meta name="description" content="Over Games Mon CV en ligne">
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


</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - < Dev >
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

    <!-- Section CV -->
    <section class="container-avp dev">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box"><i class="fas fass fa-quote-left fa2"></i>
                        <div class="text"><i class="fas fass fa-quote-right fa1"></i>
                            <div class="div-b">
                                <h3 class="h3-b">Développement</h3>
                                <p class="p-b">Avant tout, je suis un passionné d'informatique depuis l'âge de mes 12 ans, j'ai donc appris en autodidacte, j'ai beaucoup de connaissance dans différents langages à découvrir a travers le site internet en faisant de la veille, c'est comme ça que l'on apprend.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="container-avp dev2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h3-b">Développement</h3>
                    <p class="p-b">Avant tout, je suis un passionné d'informatique depuis l'âge de mes 12 ans, j'ai donc appris en autodidacte, j'ai beaucoup de connaissance dans différents langages à découvrir a travers le site internet en faisant de la veille, c'est comme ça que l'on apprend.</p>
                </div>
            </div>
    </section>

    <section class="container-avp dev_btn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a id="dev-cv" class="btn btn-cv">Télécharger mon CV</a>

                    <div class="container progress_bar">
                        <progress class="progress-bar progress-bar-2" value="0" max="100"></progress>
                        <div class="legend">
                            <span class="done" id="done">0%</span><button id="repeat" class="repeat">&#8617;</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="container-avp dev_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="dev-h">
                        <i class="fas fa-angle-double-down"></i>
                    </div>

                    <h3 class="progress-title"><i class="fab red fa-css3-alt"></i></h3>
                    <div class="progress red">
                        <div class="progress-bar red-c">
                            <div class="progress-value">100%</div>
                        </div>
                    </div>

                    <h3 class="progress-title"><i class="fab blue fa-html5"></i></h3>
                    <div class="progress blue">
                        <div class="progress-bar blue-c">
                            <div class="progress-value">90%</div>
                        </div>
                    </div>

                    <h3 class="progress-title"><i class="fab yellow fa-php"></i></h3>
                    <div class="progress yellow">
                        <div class="progress-bar yellow-c">
                            <div class="progress-value">90%</div>
                        </div>
                    </div>

                    <h3 class="progress-title"><i class="fab green fa-js"></i></h3>
                    <div class="progress green">
                        <div class="progress-bar green-c">
                            <div class="progress-value">65%</div>
                        </div>
                    </div>

                    <h3 class="progress-title"><i class="fab purple fa-java"></i></h3>
                    <div class="progress purple">
                        <div class="progress-bar purple-c">
                            <div class="progress-value">50%</div>
                        </div>
                    </div>

                    <h3 class="progress-title"><i class="fab pink fa-sass"></i></h3>
                    <div class="progress pink">
                        <div class="progress-bar pink-c">
                            <div class="progress-value">45%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="container-avp github">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="https://github.com/gaetanarinfo/Over-Games" target="_blank" class="btn btn-cv dev-git"><i
                            class="fab fa-github"></i>Mon GitHub</a>
                </div>
            </div>
    </section>

    <hr>

    <!-- Cards Youtube -->
    <section class="container-avp yt-dev">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Les tutoriels sur YouTube</h2>
                    <br>

                        <div class="form-row">
                            <div class="form-group col-md-3 ml-3">
                                <select name="categorieA" id="categorieA" onchange="checkCat(this)" class="form-control">
                                    <option value="" selected="selected">Trier par catégorie :</option>
                                    <option value="" disabled>-----</option>
                                    <option value="Auto">Tous les language</option>
                                    <option value="" disabled>-----</option>
                                    <option value="Php">Language Php</option>
                                    <option value="" disabled>-----</option>
                                    <option value="Html">Language Html</option>
                                    <option value="" disabled>-----</option>
                                    <option value="Css">Language Css</option>
                                    <option value="" disabled>-----</option>
                                    <option value="Sass">Language Sass</option>
                                    <option value="" disabled>-----</option>
                                    <option value="JavaScript">Language JavaScript</option>
                                    <option value="" disabled>-----</option>
                                    <option value="Java">Language Java</option>
                                </select>
                            </div>
                        </div>

                    <div class="row mt-4" id="auto">

                        <?php foreach($articles as $result_yt){ ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img title="Voir la vidéo" id="card-<?php echo $result_yt['id'] ?>"
                                    class="card-img-top show1" src="<?php echo $result_yt['images'] ?>">
                                <iframe id="card-yt-<?php echo $result_yt['id'] ?>" class="card-img-top"
                                    src="https://www.youtube.com/embed/<?php echo $result_yt['api'] ?>" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $result_yt['titre'] ?></h5>
                                    <p class="card-text"><?php echo $result_yt['content'] ?></p>
                                </div>
                                <div class="card-footer">
                                    <img class="icon-card icon-<?php echo $result_yt['id'] ?>"
                                        src="<?php echo $result_yt['icone'] ?>">
                                    <span class="chaine-card card-chaine-<?php echo $result_yt['id'] ?>">Chaine YouTube
                                        <?php echo $result_yt['chaine'] ?></span>
                                    <small class="text-muted">Mise en ligne le <?php echo $result_yt['dateTuto'] ?></small>
                                </div>
                            </div>
                        </div>

                        <script>
                        document.getElementById("card-" + "<?php echo $result_yt['id'] ?>").addEventListener('click',
                            function() {
                                document.getElementById("card-" + "<?php echo $result_yt['id'] ?>").style.display =
                                    "none";
                                document.getElementById("card-yt-" + "<?php echo $result_yt['id'] ?>").style
                                    .display = "block";
                                document.getElementById("card-yt-" + "<?php echo $result_yt['id'] ?>").style
                                    .opacity = "1";
                            });

                        document.querySelector(".icon-" + "<?php echo $result_yt['id'] ?>").addEventListener('click',
                            function() {
                                document.querySelector(".card-chaine-" + "<?php echo $result_yt['id'] ?>").style
                                    .opacity = "1";
                                document.querySelector(".card-chaine-" + "<?php echo $result_yt['id'] ?>").style
                                    .display = "inline-block";
                            });
                        </script>
                        <?php } ?>

                    <div class="pagin">
                        <!-- Paginaion Cards Youtube -->
                        <nav aria-label="Pagination Youtube">
                            <ul class="pagination justify-content-center">
                                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                                    <a href="./dev?page=<?= $currentPage - 1 ?>" class="page-link"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>

                                <?php for($page = 1; $page <= $pages - 4; $page++): ?>
                                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                    <a href="./dev?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                                </li>
                                <?php endfor ?>
                                <li class="page-item <?= ($currentPage == 11) ? "active" : "" ?>">
                                    <a href="./dev?page=<?= $pages ?>" class="page-link"><?= $pages ?></a>
                                </li>
                                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                                    <a href="./dev?page=<?= $currentPage + 1 ?>" class="page-link"><i
                                            class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    </div>

                    <div class="row mt-4" style="display: none;" id="php"></div>

                    <div class="row mt-4" style="display: none;" id="html"></div>

                    <div class="row mt-4" style="display: none;" id="css"></div>

                    <div class="row mt-4" style="display: none;" id="sass"></div>

                    <div class="row mt-4" style="display: none;" id="javascript"></div>

                    <div class="row mt-4" style="display: none;" id="java"></div>
                </div>
            </div>
    </section>

    <hr>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <a onclick="topFunction()" class="btn_top" title="Retour en haut"><i class="fas fa-angle-up"></i></a>

    <?php include('assets/config/include.php'); ?>

    <?php if(!isset($_SESSION['pseudo'])) { ?>
        <script>window.onscroll = function() { scrollFunction(), scrollFunctionDev(), scrollFunctionDev2(), scrollFunctionDevBtn(), scrollFunctionDevBar(), scrollFunctionDevYt() };</script>
    <?php }else{ ?>
        <script>window.onscroll = function() { scrollFunction(), scrollFunctionMenu(), scrollFunctionDev(), scrollFunctionDev2(), scrollFunctionDevBtn(), scrollFunctionDevBar(), scrollFunctionDevYt() };</script>
    <?php } ?>

</body>

<script src="https://gaetan-seigneur.store/assets/js/index.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/navbar.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/dev.js"></script>

<?php if(!isset($_SESSION['pseudo'])) { ?>

<script src="https://gaetan-seigneur.store/assets/js/login.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/password_recover.js"></script>

<?php }else{ ?>
    <script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>
<?php } ?>

<script>

    var div_1 = $('#auto'),
        div_2 = $('#php'),
        div_3 = $('#html'),
        div_4 = $('#css'),
        div_5 = $('#sass'),
        div_6 = $('#javascript'),
        div_7 = $('#java');    

    var checkCat = function (item){

        if(item.value == "Auto"){
            div_1.fadeIn(300);
            div_1.css('display', 'flex');
            div_3.fadeOut(200);
            div_4.fadeOut(200);
            div_5.fadeOut(200);
            div_6.fadeOut(200);
            div_7.fadeOut(200);
            div_2.fadeOut(200);
        }else if(item.value == "Php"){
            div_1.fadeOut(200);
            div_3.fadeOut(200);
            div_4.fadeOut(200);
            div_5.fadeOut(200);
            div_6.fadeOut(200);
            div_7.fadeOut(200);
            div_2.fadeIn(300);
            div_2.css('display', 'flex');

            $.get( "language?categorie=PHP&page=<?php echo $_GET['page']; ?>", function( data ) {
                div_2.html( data );
            });

        }else if(item.value == "Html"){
            div_1.fadeOut(200);
            div_2.fadeOut(200);
            div_4.fadeOut(200);
            div_5.fadeOut(200);
            div_6.fadeOut(200);
            div_7.fadeOut(200);
            div_3.fadeIn(300);
            div_3.css('display', 'flex');

            $.get( "language?categorie=HTML&page=<?php echo $_GET['page']; ?>", function( data ) {
                div_3.html( data );
            });
        }else if(item.value == "Css"){
            div_1.fadeOut(200);
            div_2.fadeOut(200);
            div_3.fadeOut(200);
            div_5.fadeOut(200);
            div_6.fadeOut(200);
            div_7.fadeOut(200);
            div_4.fadeIn(300);
            div_4.css('display', 'flex');

            $.get( "language?categorie=FLEX&page=<?php echo $_GET['page']; ?>", function( data ) {
                div_4.html( data );
            });

        }else if(item.value == "Sass"){
            div_1.fadeOut(200);
            div_2.fadeOut(200);
            div_3.fadeOut(200);
            div_4.fadeOut(200);
            div_6.fadeOut(200);
            div_7.fadeOut(200);
            div_5.fadeIn(300);
            div_5.css('display', 'flex');

            $.get( "language?categorie=SASS&page=<?php echo $_GET['page']; ?>", function( data ) {
                div_5.html( data );
            });

        }else if(item.value == "JavaScript"){
            div_1.fadeOut(200);
            div_2.fadeOut(200);
            div_3.fadeOut(200);
            div_4.fadeOut(200);
            div_5.fadeOut(200);
            div_7.fadeOut(200);
            div_6.fadeIn(300);
            div_6.css('display', 'flex');

            $.get( "language?categorie=JAVASCRIPT&page=<?php echo $_GET['page']; ?>", function( data ) {
                div_6.html( data );
            });

        }else if(item.value == "Java"){
            div_1.fadeOut(200);
            div_2.fadeOut(200);
            div_3.fadeOut(200);
            div_4.fadeOut(200);
            div_5.fadeOut(200);
            div_6.fadeOut(200);
            div_7.fadeIn(300);
            div_7.css('display', 'flex');

            $.get( "language?categorie=JAVA&page=<?php echo $_GET['page']; ?>", function( data ) {
                div_7.html( data );
            });
        }
    }
</script>

</html>