<?php require 'assets/config/req.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Discord</title>
    <meta name="description"
        content="Retrouver ici mes bots discord en dev ou en prod, les actus discord...">
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
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/discord.css">


</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - Discord</h1>

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

    <section class="container-avp">
        <div class="container mb-0">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <h2>Mes bots discords</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row m-auto">  

            <div class="col-md-12 m-auto">
                <div class="text-center"><a id="btn_dis_1" class="discord_box" title="Discord Dev"><img src="https://img.icons8.com/clouds/2x/discord-logo.png" style="width: 190px; margin-right: 47px;"></a><a id="btn_dis_2" title="Discord Doc" class="discord_box"><img src="https://img.icons8.com/bubbles/2x/discord-logo.png" style="width: 190px;"></a></div>         
            
                <div class="text-center mt-3 mb-3"><a id="btn_dis_1_1" href="https://discord.com/login?redirect_to=%2Fdevelopers%2Fapplications" target="_blank" class="btn btn-form discord_btn" style="margin-right: 96px; margin-left: 25px;">Discord Dev</a> <a href="https://discord.com/developers/docs/intro" target="_blank" id="btn_dis_2_2" class="btn btn-form discord_btn">Discord Doc</a></div>
            </div>
            
        </div>
    
    </div>

    <hr>

    <div class="container">

        <div class="row m-auto">  
            <?php while($discord_result = $discord->fetch()) { ?>
                <div class="col-md-6 col-lg-4 pb-3 p-3">
                    <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                    <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                    <div class="card-custom-img" style="background-image: url(<?php echo $discord_result['small_img'] ?>);"></div>
                    <div class="card-custom-avatar">
                        <a class="card-avatar" href="/profil_public/<?php if($membre_result['prenom'] == $discord_result['createur']) { ?><?php echo $membre_result['pseudo'] ?><?php } ?>" title="Profil de <?php echo $discord_result['createur'] ?>"><img class="img-fluid" src="<?php if($membre_result['prenom'] == $discord_result['createur']) { ?>upload/avatar/<?php echo $membre_result['avatar']; ?><?php } ?>" alt="<?php echo $discord_result['createur'] ?>"></a>
                    </div>
                    <div class="card-body" style="overflow-y: auto">
                        <h4 class="card-title" style="height: 30px;"><?php echo substr($discord_result['titre'], 0, 70)."..."; ?></h4>

                        <p class="card-text"><?php echo $discord_result['content']."..." ?></p>

                        <div class="mt-4">
                            <div class="news-date">
                                <i class="fas fa-clock" aria-hidden="true"></i> <?php echo $discord_result['date'] ?> à <?php echo $discord_result['heure'] ?>
                            </div>

                            <div class="news-author mt-2">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Par <?php echo $discord_result['createur'] ?>
                            </div>

                            <div class="mt-3">
                                <a href="" data-toggle="modal" data-target="#discordModal_<?php echo $discord_result['id'] ?>" class="btn btn-cards">Ouvrir le projet...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <hr>

    <section class="container-avp">
        <div class="container mb-0">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <h2>Tutoriel bots discords</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
                <?php while($result_disc = $req9->fetch()) { ?>
                    <div class="col-md-6">
                        <p class="Subtitle-yt"><i class="fas fa-play-circle"></i> <?php echo $result_disc['titre'] ?></p>
                        <iframe class="yt-cards" style="height: 304px;" src="https://www.youtube.com/embed/<?php echo $result_disc['api'] ?>" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                <?php } ?>
        </div>
    </div>

    <hr>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

    <!-- Modal Discord -->
    <?php while($discord_result = $discord_modal->fetch()) { ?>

    <div class="modal fade bd-example-modal-lg" id="discordModal_<?php echo $discord_result['id'] ?>" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title"><?php echo $discord_result['titre'] ?></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body text-center">

                        <p class="mb-2 p_discord"><i class="fas fa-angle-double-right mr-0"></i> <?php echo $discord_result['titre'] ?></p>

                        <hr>

                        <div class="d-inline-block">
                            <img class="mb-2 img_discord" width="283px" src="/images/discord_projet/<?php echo $discord_result['capture1'] ?>" alt="<?php echo $discord_result['title'] ?>" title="<?php echo $discord_result['title'] ?>">
                            <img class="mb-2 img_discord" width="416px" src="/images/discord_projet/<?php echo $discord_result['capture2'] ?>" alt="<?php echo $discord_result['title'] ?>" title="<?php echo $discord_result['title'] ?>">
                            <img class="img_discord" src="/images/discord_projet/<?php echo $discord_result['capture3'] ?>" alt="<?php echo $discord_result['title'] ?>" title="<?php echo $discord_result['title'] ?>">
                        </div>

                        <hr>

                        <p class="content_discord"><?php echo $discord_result['content']?></p>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form" data-dismiss="modal">Fermer</button> <a href="<?php echo $discord_result['url'] ?>" target="_blank" class="btn btn-form">Voir le bot</a>
                    </div>

            </div>
        </div>
    </div>

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

<?php } ?>

<script>

$('#btn_dis_1').click(function() {
    $('#btn_dis_1_1').fadeToggle(600)
})

$('#btn_dis_2').click(function() {
    $('#btn_dis_2_2').fadeToggle(600)
})

</script>

</html>