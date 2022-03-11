<?php require 'assets/config/req.php'; include_once 'assets/config/function.php'; VerifMembrePublic($_GET['pseudo']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Profil de <?php echo $profil_public_result['pseudo']; ?></title>
    <meta name="description" content="Profil de <?php echo $profil_public_result['pseudo']; ?>">
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
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/profil.css">


</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script>

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - <?php echo $profil_public_result['pseudo']; ?></h1>

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

    <!-- Section profil avatar -->
    <section class="container-avp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="profil">
                        <div class="profil-back" id="profil-back">

                            <div class="profi-avatar">
                                    <img title="<?php echo $profil_public_result['pseudo']; ?>" alt="<?php echo $profil_public_result['pseudo']; ?>" src="/upload/avatar/<?php echo $profil_public_result['avatar']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section modifier profil -->

    <section class="container-profil">
    
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="profil-public">Pseudo <?php echo $profil_public_result['pseudo']; ?></div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="profil-public">Rang <?php echo $profil_public_result['rang']; ?></div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="profil-public">Age <?php HappyBirthday($profil_public_result['age']) ?></div>
                            </div>
                </div>

                <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="profil-public">Sexe <?php echo $profil_public_result['sexe']; ?></div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="profil-public">Localisation <?php echo $profil_public_result['pays']; ?></div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="profil-public">Enregistré le <?php echo $profil_public_result['date_creation']; ?></div>
                            </div>
                </div>

                <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="profil-public">Enregistré le <?php echo $profil_public_result['date_creation']; ?></div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="profil-public">Dernière connexion <?php echo $profil_public_result['date_connexion']; ?></div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="profil-public"><?php if($profil_public_result['bloque'] == "0") { ?>Membre actif<?php }else{ ?>Membre bannis<?php } ?></div>
                            </div>
                </div>

                </div>

            </div>

        </div>

    </section>

    <hr>

    <?php include_once('assets/config/import/footer.php'); ?>

    <?php include_once('assets/config/import/modal.php'); ?>

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

<?php } ?>

<script type="text/javascript">
    document.getElementById('profil-back').style.backgroundImage = "url(" + "/upload/background/<?php echo $profil_public_result['image_fond'] ?>" + ")";
</script>

</html>