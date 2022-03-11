<?php require 'assets/config/req.php';
require 'assets/config/log.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Over Games - Inscription</title>
    <meta name="description" content="Page permettant l'inscription des membres.">
    <meta name="keywords" content="HTML, CSS, JavaScript, Jeux Vidéo, OverGames, Over Games">
    <meta name="author" content="Seigneur Gaëtan">
    <meta name="robots" content="index,follow">

    <meta property="og:title" content="Over-Games - Inscription, Site internet de jeux vidéo." />
    <meta property="og:description" content="Page permettant l'inscription des membres." />
    <meta property="og:url" content="https://gaetan-seigneur.store/inscription" />
    <meta property="og:image" content="https://gaetan-seigneur.store/assets/image/Background-1.jpg" />
    <meta property="og:type" content="article" />
    <meta property="article:published_time" content="2020-11-13CET12:30:00+0100" />
    <meta property="article:modified_time" content="2020-11-14CET23:39:25+0100" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@OverGames72" />
    <meta name="twitter:title" content="Over-Games - Inscription, Site internet de jeux vidéo." />
    <meta name="twitter:description" content="Page permettant l'inscription des membres." />
    <meta name="twitter:url" content="https://gaetan-seigneur.store/inscription" />
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


</head>

<body>

    <script src="https://gaetan-seigneur.store/assets/js/preloader.js"></script> 

    <!-- header page -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-ms-12 home-title">
                    <h1 class="anim-title">Over Games - Inscription</h1>

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

    

</div>

    <!-- Section Inscription -->
    <section class="container-avp">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <form role="form" id="form" onsubmit="checkForm(event)" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNom">Votre nom</label>
                                <input type="text" class="form-control" name="nom" id="nomA" placeholder="Nom">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPrenom">Votre prénom</label>
                                <input type="text" class="form-control" name="prenomA" id="prenomA"
                                    placeholder="Prénom">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Votre adresse email</label>
                                <input type="email" required class="form-control" name="emailA" id="emailA"
                                    placeholder="Votre adresse email">
                                <input type="hidden" id="emailVerif" name="emailVerif" value="">
                                <input type="hidden" id="cleVerif" name="cleVerif" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="pseudo">Votre pseudo (Pour les forums etc...)</label>
                                <input type="text" required class="form-control" id="pseudoA" name="pseudoA"
                                    placeholder="Votre pseudo">
                                <input type="hidden" id="pseudoVerif" name="pseudoVerif" value="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sexe">Votre civilité</label>
                                <select required name="sexeA" id="sexeA" class="form-control">
                                    <option value="Homme" selected="selected">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>    
                            </div>

                            <div class="form-group col-md-4">
                                <label for="age">Votre age</label>
                                <input type="date" class="form-control" id="ageA" name="ageA"
                                    placeholder="23/02/2020">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="day">Votre date de naissance</label>
                                <div class="d-inline-block">
                                    <input style="width: 115px;" type="number" class="form-control" onKeyDown="if(this.value.length==2) return false;" id="dayA" required name="dayA"
                                        placeholder="Jour">
                                </div>
                                <div class="d-inline-block">
                                    <input style="width: 115px;" type="number" class="form-control" onKeyDown="if(this.value.length==2) return false;" id="monthA" required name="monthA"
                                        placeholder="Mois">    
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Votre mot de passe</label>
                                <div class="input-group">
                                    <input type="password" required class="form-control" id="passwordA" name="passwordA"
                                        placeholder="Votre mot de passe">
                                    <span title="Afficher le mot de passe" class="input-group-addon"><i
                                            class="fas fa-key"></i></span>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="passwordConfirm">Confirmation mot de passe</label>
                                <div class="input-group">
                                    <input type="password" required class="form-control" name="passwordConfirm"
                                        id="passwordConfirm" placeholder="Confirmation mot de passe">
                                    <span title="Afficher le mot de passe" class="input-group-addon"><i
                                            class="fas fa-key"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <p class="pass-cond">Le mot de passe doit contenir minimums 8 caractères : 1 nombre, 1
                                    majuscule, 1 minuscule, 1 caractère spécial</p>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="pays">Votre pays</label>
                                <select name="paysA" id="paysA" class="form-control">
                                    <option value="France" selected="selected">France </option>

                                    <option value="Afghanistan">Afghanistan </option>
                                    <option value="Afrique_Centrale">Afrique Centrale </option>
                                    <option value="Afrique_du_Sud">Afrique du Sud </option>
                                    <option value="Albanie">Albanie </option>
                                    <option value="Algerie">Algérie </option>
                                    <option value="Allemagne">Allemagne </option>
                                    <option value="Andorre">Andorre </option>
                                    <option value="Angola">Angola </option>
                                    <option value="Anguilla">Anguilla </option>
                                    <option value="Arabie_Saoudite">Arabie Saoudite </option>
                                    <option value="Argentine">Argentine </option>
                                    <option value="Armenie">Armenie </option>
                                    <option value="Australie">Australie </option>
                                    <option value="Autriche">Autriche </option>
                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                    <option value="Bahamas">Bahamas </option>
                                    <option value="Bangladesh">Bangladesh </option>
                                    <option value="Barbade">Barbade </option>
                                    <option value="Bahrein">Bahrein </option>
                                    <option value="Belgique">Belgique </option>
                                    <option value="Belize">Belize </option>
                                    <option value="Benin">Bénin </option>
                                    <option value="Bermudes">Bermudes </option>
                                    <option value="Bielorussie">Bielorussie </option>
                                    <option value="Bolivie">Bolivie </option>
                                    <option value="Botswana">Botswana </option>
                                    <option value="Bhoutan">Bhoutan </option>
                                    <option value="Boznie_Herzegovine">Boznie Herzégovine </option>
                                    <option value="Bresil">Brésil </option>
                                    <option value="Brunei">Brunei </option>
                                    <option value="Bulgarie">Bulgarie </option>
                                    <option value="Burkina_Faso">Burkina Faso </option>
                                    <option value="Burundi">Burundi </option>

                                    <option value="Caiman">Caiman </option>
                                    <option value="Cambodge">Cambodge </option>
                                    <option value="Cameroun">Cameroun </option>
                                    <option value="Canada">Canada </option>
                                    <option value="Canaries">Canaries </option>
                                    <option value="Cap_vert">Cap Vert </option>
                                    <option value="Chili">Chili </option>
                                    <option value="Chine">Chine </option>
                                    <option value="Chypre">Chypre </option>
                                    <option value="Colombie">Colombie </option>
                                    <option value="Comores">Colombie </option>
                                    <option value="Congo">Congo </option>
                                    <option value="Congo_democratique">Congo Démocratique </option>
                                    <option value="Cook">Cook </option>
                                    <option value="Coree_du_Nord">Corée du Nord </option>
                                    <option value="Coree_du_Sud">Corée du Sud </option>
                                    <option value="Costa_Rica">Costa Rica </option>
                                    <option value="Cote_d_Ivoire">Côte d’Ivoire </option>
                                    <option value="Croatie">Croatie </option>
                                    <option value="Cuba">Cuba </option>

                                    <option value="Danemark">Danemark </option>
                                    <option value="Djibouti">Djibouti </option>
                                    <option value="Dominique">Dominique </option>

                                    <option value="Egypte">Egypte </option>
                                    <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
                                    <option value="Equateur">Equateur </option>
                                    <option value="Erythree">Erythrée </option>
                                    <option value="Espagne">Espagne </option>
                                    <option value="Estonie">Estonie </option>
                                    <option value="Etats_Unis">Etats-Unis </option>
                                    <option value="Ethiopie">Ethiopie </option>

                                    <option value="Falkland">Falkland </option>
                                    <option value="Feroe">Feroe </option>
                                    <option value="Fidji">Fidji </option>
                                    <option value="Finlande">Finlande </option>
                                    <option value="France">France </option>

                                    <option value="Gabon">Gabon </option>
                                    <option value="Gambie">Gambie </option>
                                    <option value="Georgie">Géorgie </option>
                                    <option value="Ghana">Ghana </option>
                                    <option value="Gibraltar">Gibraltar </option>
                                    <option value="Grece">Grece </option>
                                    <option value="Grenade">Grenade </option>
                                    <option value="Groenland">Groënland </option>
                                    <option value="Guadeloupe">Guadeloupe </option>
                                    <option value="Guam">Guam </option>
                                    <option value="Guatemala">Guatémala</option>
                                    <option value="Guernesey">Guernesey </option>
                                    <option value="Guinee">Guinée </option>
                                    <option value="Guinee_Bissau">Guinée Bissau </option>
                                    <option value="Guinee equatoriale">Guinée Equatoriale </option>
                                    <option value="Guyana">Guyana </option>
                                    <option value="Guyane_Francaise ">Guyane Francaise </option>

                                    <option value="Haiti">Haiti </option>
                                    <option value="Hawaii">Hawaii </option>
                                    <option value="Honduras">Honduras </option>
                                    <option value="Hong_Kong">Hong Kong </option>
                                    <option value="Hongrie">Hongrie </option>

                                    <option value="Inde">Inde </option>
                                    <option value="Indonesie">Indonésie </option>
                                    <option value="Iran">Iran </option>
                                    <option value="Iraq">Iraq </option>
                                    <option value="Irlande">Irlande </option>
                                    <option value="Islande">Islande </option>
                                    <option value="Israel">Israel </option>
                                    <option value="Italie">italie </option>

                                    <option value="Jamaique">Jamaïque </option>
                                    <option value="Jan Mayen">Jan Mayen </option>
                                    <option value="Japon">Japon </option>
                                    <option value="Jersey">Jersey </option>
                                    <option value="Jordanie">Jordanie </option>

                                    <option value="Kazakhstan">Kazakhstan </option>
                                    <option value="Kenya">Kenya </option>
                                    <option value="Kirghizstan">Kirghizistan </option>
                                    <option value="Kiribati">Kiribati </option>
                                    <option value="Koweit">Koweït </option>

                                    <option value="Laos">Laos </option>
                                    <option value="Lesotho">Lesotho </option>
                                    <option value="Lettonie">Lettonie </option>
                                    <option value="Liban">Liban </option>
                                    <option value="Liberia">Liberia </option>
                                    <option value="Liechtenstein">Liechtenstein </option>
                                    <option value="Lituanie">Lituanie </option>
                                    <option value="Luxembourg">Luxembourg </option>
                                    <option value="Lybie">Lybie </option>

                                    <option value="Macao">Macao </option>
                                    <option value="Macedoine">Macédoine </option>
                                    <option value="Madagascar">Madagascar </option>
                                    <option value="Madère">Madère </option>
                                    <option value="Malaisie">Malaisie </option>
                                    <option value="Malawi">Malawi </option>
                                    <option value="Maldives">Maldives </option>
                                    <option value="Mali">Mali </option>
                                    <option value="Malte">Malte </option>
                                    <option value="Man">Man </option>
                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                    <option value="Maroc">Maroc </option>
                                    <option value="Marshall">Marshall </option>
                                    <option value="Martinique">Martinique </option>
                                    <option value="Maurice">Maurice </option>
                                    <option value="Mauritanie">Mauritanie </option>
                                    <option value="Mayotte">Mayotte </option>
                                    <option value="Mexique">Mexique </option>
                                    <option value="Micronesie">Micronesie </option>
                                    <option value="Midway">Midway </option>
                                    <option value="Moldavie">Moldavie </option>
                                    <option value="Monaco">Monaco </option>
                                    <option value="Mongolie">Mongolie </option>
                                    <option value="Montserrat">Montserrat </option>
                                    <option value="Mozambique">Mozambique </option>

                                    <option value="Namibie">Namibie </option>
                                    <option value="Nauru">Nauru </option>
                                    <option value="Nepal">Nepal </option>
                                    <option value="Nicaragua">Nicaragua </option>
                                    <option value="Niger">Niger </option>
                                    <option value="Nigeria">Nigéria </option>
                                    <option value="Niue">Niue </option>
                                    <option value="Norfolk">Norfolk </option>
                                    <option value="Norvege">Norvège </option>
                                    <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
                                    <option value="Nouvelle_Zelande">Nouvelle Zélande </option>

                                    <option value="Oman">Oman </option>
                                    <option value="Ouganda">Ouganda </option>
                                    <option value="Ouzbekistan">Ouzbékistan </option>

                                    <option value="Pakistan">Pakistan </option>
                                    <option value="Palau">Palau </option>
                                    <option value="Palestine">Palestine </option>
                                    <option value="Panama">Panama </option>
                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée</option>
                                    <option value="Paraguay">Paraguay </option>
                                    <option value="Pays_Bas">Pays Bas </option>
                                    <option value="Perou">Perou </option>
                                    <option value="Philippines">Philippines </option>
                                    <option value="Pologne">Pologne </option>
                                    <option value="Polynesie">Polynesie </option>
                                    <option value="Porto_Rico">Porto Rico </option>
                                    <option value="Portugal">Portugal </option>

                                    <option value="Qatar">Qatar </option>

                                    <option value="Republique_Dominicaine">Republique Dominicaine </option>
                                    <option value="Republique_Tcheque">Republique Tcheque </option>
                                    <option value="Reunion">Reunion </option>
                                    <option value="Roumanie">Roumanie </option>
                                    <option value="Royaume_Uni">Royaume Uni </option>
                                    <option value="Russie">Russie </option>
                                    <option value="Rwanda">Rwanda </option>

                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                    <option value="Sainte_Lucie">Sainte-Lucie </option>
                                    <option value="Saint_Marin">Saint-Marin </option>
                                    <option value="Salomon">Salomon </option>
                                    <option value="Salvador">Salvador </option>
                                    <option value="Samoa_Occidentales">Samoa Occidentales</option>
                                    <option value="Samoa_Americaine">Samoa Americaine </option>
                                    <option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>
                                    <option value="Senegal">Sénégal </option>
                                    <option value="Seychelles">Seychelles </option>
                                    <option value="Sierra Leone">Sierra Leone </option>
                                    <option value="Singapour">Singapour </option>
                                    <option value="Slovaquie">Slovaquie </option>
                                    <option value="Slovenie">Slovénie</option>
                                    <option value="Somalie">Somalie </option>
                                    <option value="Soudan">Soudan </option>
                                    <option value="Sri_Lanka">Sri Lanka </option>
                                    <option value="Suede">Suede </option>
                                    <option value="Suisse">Suisse </option>
                                    <option value="Surinam">Surinam </option>
                                    <option value="Swaziland">Swaziland </option>
                                    <option value="Syrie">Syrie </option>

                                    <option value="Tadjikistan">Tadjikistan </option>
                                    <option value="Taiwan">Taiwan </option>
                                    <option value="Tonga">Tonga </option>
                                    <option value="Tanzanie">Tanzanie </option>
                                    <option value="Tchad">Tchad </option>
                                    <option value="Thailande">Thailande </option>
                                    <option value="Tibet">Tibet </option>
                                    <option value="Timor_Oriental">Timor Oriental </option>
                                    <option value="Togo">Togo </option>
                                    <option value="Trinite_et_Tobago">Trinite et Tobago </option>
                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                    <option value="Tunisie">Tunisie </option>
                                    <option value="Turkmenistan">Turmenistan </option>
                                    <option value="Turquie">Turquie </option>

                                    <option value="Ukraine">Ukraine </option>
                                    <option value="Uruguay">Uruguay </option>

                                    <option value="Vanuatu">Vanuatu </option>
                                    <option value="Vatican">Vatican </option>
                                    <option value="Venezuela">Vénézuela </option>
                                    <option value="Vierges_Americaines">Vierges Américaines </option>
                                    <option value="Vierges_Britanniques">Vierges Britanniques </option>
                                    <option value="Vietnam">Vietnam </option>

                                    <option value="Wake">Wake </option>
                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                    <option value="Yemen">Yemen </option>
                                    <option value="Yougoslavie">Yougoslavie </option>

                                    <option value="Zambie">Zambie </option>
                                    <option value="Zimbabwe">Zimbabwe </option>

                                </select>
                            </div>

                            <div class="col-md-12">
                                <div class="input-file-container">
                                    <input class="input-file" id="file" name="file" type="file">
                                    <label for="file" class="input-file-trigger" tabindex="0" style="width: 276px;">
                                        Sélectionner votre image
                                    </label>
                                </div>
                                <div class="file-return"></div>
                                <div class="preview_img" id="preview_img">
                                    <img id="img_avat" class="img" src="">
                                </div>
                            </div> 

                            <div class="form-check">
                                <div class="col-md-12">
                                    <input type="checkbox" id="checkBoxConfirm">
                                    <label class="form-check-label" for="checkBoxConfirm">J'ai lu et j'accepte les conditions générales du site internet</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>

                        <div class="col-md-9">
                            <div class="div-result"></div>
                        </div>

                        <button id="signin-btn" type="submit" class="btn btn-form-info">Valider</button>

                    </form>

                </div>

                <!-- Section right -->
                <?php include_once 'assets/config/import/section_right.php' ?>  

            </div>
    </section>

    <hr>

    

</div>

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

    <script src="https://gaetan-seigneur.store/assets/js/form.js"></script>

</body>

<script src="https://gaetan-seigneur.store/assets/js/index.js"></script>
<script src="https://gaetan-seigneur.store/assets/js/navbar.js"></script>

<?php if(!isset($_SESSION['pseudo'])) { ?>
    <script src="https://gaetan-seigneur.store/assets/js/login.js"></script>
    <script src="https://gaetan-seigneur.store/assets/js/password_recover.js"></script>
<?php }else{ ?>
    <script src="https://gaetan-seigneur.store/assets/js/membres.js"></script>
<?php } ?>
</html>