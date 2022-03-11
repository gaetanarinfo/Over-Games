<!-- Menu navigation -->
<?php if(empty($_SESSION['pseudo'])) { ?>
<section class="container-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>active<?php } ?>" title="Accueil"
                            href="/"><i class="fas fa-home"></i> Accueil</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/news.php") { ?>active<?php } ?>" href="https://gaetan-seigneur.store/news"
                            title="Les actualités"><i class="fas fa-book"></i> Les actualités</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/forum.php") { ?>active<?php } ?>" href="https://gaetan-seigneur.store/forum"
                            title="Forum"><i class="fa fa-coffee"></i> Forum</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/discord.php") { ?>active<?php } ?>" href="https://gaetan-seigneur.store/discord"
                            title="Bot Discord"><i class="fab fa-discord"></i> Discord</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active<?php } ?>" href="https://gaetan-seigneur.store/contact"
                            title="Contact"><i class="fa fa-commenting-o"></i> Contact</a></li>  
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/dev.php") { ?>active<?php } ?>" href="https://gaetan-seigneur.store/dev"
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
                            href="https://gaetan-seigneur.store/news" title="Les actualités"><i class="fas fa-book"></i> Les actualités</a></li>
                    <li><a id="btn-forum" class="<?php if($_SERVER['PHP_SELF'] == "/forum.php") { ?>active<?php } ?>"
                            href="https://gaetan-seigneur.store/forum" title="Forum"><i class="fa fa-coffee"></i> Forum</a></li>
                    <li><a class="<?php if($_SERVER['PHP_SELF'] == "/discord.php") { ?>active<?php } ?>" href="https://gaetan-seigneur.store/discord"
                            title="Bot Discord"><i class="fab fa-discord"></i> Discord</a></li>
                    <li><a id="btn-contact"
                            class="<?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active<?php } ?>"
                            href="https://gaetan-seigneur.store/contact" title="Contact"><i class="fa fa-commenting-o"></i> Contact</a></li>
                    <li><a id="btn-dev" class="<?php if($_SERVER['PHP_SELF'] == "/dev.php") { ?>active<?php } ?>"
                            href="https://gaetan-seigneur.store/dev" title="Développement"><i class="fas fa-code"></i> Dev</a></li>

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
                    <li><a id="btn-profil" class="btn-logout" href="https://gaetan-seigneur.store/profil" title="Gérer mon profil">
                        <i class="fas fa-cog"></i>Gérer mon profil</a></li>
                        <?php if($membre_result_co['rang'] == 'Administrateur') { ?>
                            <li><a id="btn-admin" href="https://gaetan-seigneur.store/admin/" class="<?php if($_SERVER['PHP_SELF'] == "/admin/index.php") { ?>active<?php } ?>" title="Administration">
                            <i class="fas fa-cog"></i>Admin</a></li>
                        <?php } ?>
                    <li><a href="" id="btn-logout" data-toggle="modal" data-target="#exitModal" class="btn-logout" title="Déconnexion">
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
                                href="https://gaetan-seigneur.store/news"><i class="fas fa-book"></i> Les actualités</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/forum.php") { ?>active-mobile<?php } ?>"
                                href="https://gaetan-seigneur.store/forum"><i class="fa fa-coffee"></i> Forum</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/discord.php") { ?>active-mobile<?php } ?>"
                                href="https://gaetan-seigneur.store/discord"><i class="fab fa-discord"></i> Discord</a>
                            <div class="dropdown-divider"></div>
                            <a href="https://gaetan-seigneur.store/dev"
                                class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/dev.php") { ?>active-mobile<?php } ?>"><i
                                    class="fas fa-code"></i> Développement</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/contact.php") { ?>active-mobile<?php } ?>"
                                href="https://gaetan-seigneur.store/contact"><i class="fa fa-commenting-o"></i> Contact</a>
                            <div class="dropdown-divider"></div>    
                            <a class="dropdown-item" title="Espace Membre" data-toggle="modal" data-target="#loginModal"><i
                                class="fa fa-user-o"></i> Connexion</a>
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

                        <a class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>active-mobile<?php } ?>" href="/" title="Accueil">  
                        <i class="fas fa-home"></i>Accueil</a>
                        <div class="dropdown-divider"></div> 
                        <a class="dropdown-item" href="https://gaetan-seigneur.store/profil" title="Gérer mon profil">  
                        <i class="fas fa-cog"></i>Gérer mon profil</a>
                        <?php if($membre_result_co['rang'] == 'Administrateur') { ?>
                            <div class="dropdown-divider"></div>   
                            <a id="btn-admin" href="https://gaetan-seigneur.store/admin/" class="dropdown-item <?php if($_SERVER['PHP_SELF'] == "/admin/index.php") { ?>active-mobile<?php } ?>" title="Administration">
                            <i class="fas fa-cog"></i>Admin</a>
                        <?php } ?>
                        <div class="dropdown-divider"></div>   
                        <a data-toggle="modal" data-target="#exitModal" class="dropdown-item" title="Déconnexion">
                        <i class="fas fa-times"></i>Déconnexion</a>
                           
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>