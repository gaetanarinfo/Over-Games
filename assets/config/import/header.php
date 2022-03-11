<!-- Menu navigation -->
<?php if(empty($_SESSION['pseudo'])) { ?>
<section class="container-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>active<?php } ?>" title="Accueil"
                            href="/"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/news.php") { ?>active<?php } ?>" href="/news"
                            title="Les actualités"><i class="fas fa-book"></i> Les actualités</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/jeux.php") { ?>active<?php } ?>" href="/jeux"
                            title="Mes jeux"><i class="fa fa-trophy"></i>Mes jeux</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/forum.php") { ?>active<?php } ?>" href="/forum"
                            title="Forum"><i class="fa fa-coffee"></i> Forum</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/dicord.php") { ?>active<?php } ?>" href="/discord"
                            title="Bot Discord"><i class="fab fa-discord"></i> Discord</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active<?php } ?>" href="/contact"
                            title="Contact"><i class="fa fa-commenting-o"></i> Contact</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/dev.php") { ?>active<?php } ?>" href="/dev"
                            title="Développement"><i class="fas fa-code"></i> Dev</a></li>
                    <li><a id="login" title="Espace Membre" data-toggle="modal" data-target="#loginModal"><i
                                class="fa fa-user-o"></i> Connexion</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php }else{ ?>

<section class="container-menu" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a id="btn-index" class="<?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>active<?php } ?>"
                            title="Accueil" href="/"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><a id="btn-news" class="<?php if($_SERVER['PHP_SELF'] == "/news.php") { ?>active<?php } ?>"
                            href="/news" title="Les actualités"><i class="fas fa-book"></i> Les actualités</a></li>
                    <li><a id="btn-jeux" class="<?php if($_SERVER['PHP_SELF'] == "/jeux.php") { ?>active<?php } ?>"
                            href="/jeux" title="Mes jeux"><i class="fa fa-trophy"></i>Mes jeux</a></li>
                    <li><a id="btn-forum" class="<?php if($_SERVER['PHP_SELF'] == "/forum.php") { ?>active<?php } ?>"
                            href="/forum" title="Forum"><i class="fa fa-coffee"></i> Forum</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/dicord.php") { ?>active<?php } ?>" href="/discord"
                            title="Bot Discord"><i class="fab fa-discord"></i> Discord</a></li>
                    <li><a id="btn-contact"
                            class="<?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active<?php } ?>"
                            href="/contact" title="Contact"><i class="fa fa-commenting-o"></i> Contact</a></li>
                    <li><a id="btn-dev" class="<?php if($_SERVER['PHP_SELF'] == "/dev.php") { ?>active<?php } ?>"
                            href="/dev" title="Développement"><i class="fas fa-code"></i> Dev</a></li>
                    <li><a id="btn-users" class="btn-users" title="Mon espace membre"><i class="far fa-user"></i>Espace membre</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="container-menu" id="menu-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a id="btn-users-2" class="btn-users btn-users-2" title="Mon espace membre">
                        <i class="fas fa-user"></i>Retour</a></li>
                    <li><a id="btn-profil" class="btn-logout btn-users" title="Mon profil">
                        <i class="fas fa-check"></i>Mon profil</a></li>
                    <li><a id="btn-logout" data-toggle="modal" data-target="#exitModal" class="btn-logout btn-users" title="Déconnexion">
                        <i class="fas fa-times"></i>Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<!-- Menu navigation Mobile -->
<section class="container-menu-mobile">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(empty($_SESSION['pseudo'])) { ?>
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>active-mobile<?php } ?>"
                                href="/"><i class="fas fa-home"></i> Accueil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/news.php") { ?>active-mobile<?php } ?>"
                                href="/news"><i class="fas fa-book"></i> Les actualités</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/jeux.php") { ?>active-mobile<?php } ?>"
                                href="/jeux"><i class="fas fa-bullhorn"></i> Mes jeux</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/forum.php") { ?>active-mobile<?php } ?>"
                                href="/forum"><i class="fa fa-coffee"></i> Forum</a>
                            <div class="dropdown-divider"></div>
                            <a href="/discord"
                                class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/discord.php") { ?>active-mobile<?php } ?>"><i
                                    class="fab fa-discord"></i> Discord</a>
                            <div class="dropdown-divider"></div>
                            <a href="/dev"
                                class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/dev.php") { ?>active-mobile<?php } ?>"><i
                                    class="fas fa-code"></i> Développement</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active-mobile<?php } ?>"
                                href="/contact"><i class="fa fa-commenting-o"></i> Contact</a>
                        </div>
                    </li>
                </ul>
                <?php }else{ ?>
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active-mobile<?php } ?>"
                                href="/contact"><i class="fa fa-commenting-o"></i> Ok</a>
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php if(!empty($_SESSION['pseudo'])) { ?>
<!--  Alert !  -->
<div id="alert-anim" class="alert-anim container">
    <div class="row">
        <div id="alert-perso" class="col-ms-8 alert-perso">
            <div class="alert alert-warning">
                <strong><i class="fas fa-user-clock" aria-hidden="true"></i></strong>Déconnexion en cours merci de
                patienter !
            </div>
        </div>
    </div>
</div>

<?php } ?>