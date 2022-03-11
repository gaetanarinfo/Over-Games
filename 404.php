<?php require 'assets/config/req.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Erreur 404</title>
    <meta name="description" content="Over-Games Site internet de jeux vidéo.">
    <meta name="keywords" content="HTML, CSS, JavaScript, Jeux Vidéo, OverGames, Over-Games">
    <meta name="author" content="Seigneur Gaëtan">
    <meta name="robots" content="index,follow">

    <meta name="_csrf" th:content="${_csrf.token}" />
    <meta name="_csrf_parameter_name" th:content="${_csrf.parameterName}" />

    <meta property="og:title" content="Over-Games, Site internet de jeux vidéo. - Erreur 404" />
    <meta property="og:description"
        content="Retrouvez toute l'actualité en temps réel et les tests des derniers jeux vidéo fraîchement sortis, servis par la rédaction de Over Games !" />
    <meta property="og:url" content="https://gaetan-seigneur.store/404" />
    <meta property="og:image" content="https://gaetan-seigneur.store/assets/image/Background-1.jpg" />
    <meta property="og:type" content="article" />
    <meta property="article:published_time" content="2020-11-13CET12:30:00+0100" />
    <meta property="article:modified_time" content="2020-11-14CET23:39:25+0100" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@OverGames72" />
    <meta name="twitter:title" content="Over-Games, Site internet de jeux vidéo. - Erreur 404" />
    <meta name="twitter:description"
        content="Retrouvez toute l'actualité en temps réel et les tests des derniers jeux vidéo fraîchement sortis, servis par la rédaction de Over Games !" />
    <meta name="twitter:url" content="https://gaetan-seigneur.store/404" />
    <meta name="twitter:image" content="https://gaetan-seigneur.store/assets/image/Background-1.jpg" />

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
    <link rel="stylesheet" href="https://gaetan-seigneur.store/assets/css/404.css">

    <!-- Js Boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</head>

<body>

    <!-- header page -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - 404 Erreur</h1>

                    <p class="anim-title-2">DÉSOLÉ ! <br>LA PAGE QUE VOUS RECHERCHEZ N'EXISTE PAS.</p>
                    <br>
                    <a href="https://gaetan-seigneur.store/" class="btn btn-home-404">Retour en arrière</a>

                    <img class="anim-title-img" src="https://gaetan-seigneur.store/assets/images/logo.png" alt="Logo Over-Games">

                </div>
            </div>
        </div>
        </header>

        <?php include('assets/config/include.php'); ?>

        <!-- js perso -->
        <script src="https://gaetan-seigneur.store/assets/js/404.js"></script>

</body>

</html>