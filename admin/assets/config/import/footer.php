<!-- footer page -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p class="widget">Réseaux sociaux</p>
                <!-- Widget Social Twitter etc... -->
                <div class="widget-social">
                    <ul>
                        <li>
                            <a href="https://twitter.com/OverGames72" title="Twitter" target="_blank">
                                <img src="https://gaetan-seigneur.store/assets/images/social/twitter.png">
                                <span>Sur Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Youtube" target="_blank">
                                <img src="https://gaetan-seigneur.store/assets/images/social/youtube.png">
                                <span>Chaîne YouTube</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Facebook" target="_blank">
                                <img src="https://gaetan-seigneur.store/assets/images/social/facebook.png">
                                <span>Sur Facebook</span>
                        </li>
                        </a>
                        <li>
                            <a href="#" title="Instagram" target="_blank">
                                <img src="https://gaetan-seigneur.store/assets/images/social/instagram.png">
                                <span>Sur Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Widget Social Twitter News -->
            <div class="col-sm-4">
                <p class="widget">La Tweet planète</p>
                <a class="twitter-timeline" data-lang="fr" data-width="350" data-height="232" data-dnt="true"
                    data-theme="dark" href="https://twitter.com/OverGames72?ref_src=twsrc%5Etfw">Tweets by
                    OverGames72</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <!-- Widget News.. -->
            <div class="col-sm-4 news">
                <p class="widget">Dernières actus</p>

                <div class="three-news-post d-flex style-4 mb-30">

                    <!-- Blog Thumbnail -->
                    <div class="news-thumbnail">
                        <a href="/article?id=<?php echo $actualite['id'] ?>"><img src="<?php echo $actualite['small_img']; ?>" alt=""></a>
                    </div>

                    <!-- Blog Content -->
                    <div class="news-content">
                        <span class="post-date"><?php echo $actualite['date']; ?> à
                            <?php echo $actualite['heure']; ?></span>
                        <br>
                        <a href="/article?id=<?php echo $actualite['id'] ?>" class="post-title"><?php echo $actualite['titre']; ?></a>
                        <br>
                        <span class="post-comment"><i class="fas fa-pencil-alt"
                                aria-hidden="true"></i>&nbsp;<?php echo $actualite['comment']; ?> commentaire(s)</span>
                    </div>

                </div>

                <div class="three-news-post d-flex style-4 mb-30">

                    <!-- Blog Thumbnail -->
                    <div class="news-thumbnail">
                        <a href="https://gaetan-seigneur.store/article?id=<?php echo $actualite2['id'] ?>"><img src="<?php echo $actualite2['small_img']; ?>" alt=""></a>
                    </div>

                    <!-- Blog Content -->
                    <div class="news-content">
                        <span class="post-date"><?php echo $actualite2['date']; ?> à
                            <?php echo $actualite2['heure']; ?></span>
                        <br>
                        <a href="https://gaetan-seigneur.store/article?id=<?php echo $actualite2['id'] ?>" class="post-title"><?php echo $actualite2['titre']; ?></a>
                        <br>
                        <span class="post-comment"><i class="fas fa-pencil-alt"
                                aria-hidden="true"></i>&nbsp;<?php echo $actualite2['comment']; ?> commentaire(s)</span>
                    </div>

                </div>

                <div class="three-news-post d-flex style-4 mb-30">

                    <!-- Blog Thumbnail -->
                    <div class="news-thumbnail">
                        <a href="https://gaetan-seigneur.store/article?id=<?php echo $actualite3['id'] ?>"><img src="<?php echo $actualite3['small_img']; ?>" alt=""></a>
                    </div>

                    <!-- Blog Content -->
                    <div class="news-content">
                        <span class="post-date"><?php echo $actualite3['date']; ?> à
                            <?php echo $actualite3['heure']; ?></span>
                        <br>
                        <a href="https://gaetan-seigneur.store/article?id=<?php echo $actualite3['id'] ?>" class="post-title"><?php echo $actualite3['titre']; ?></a>
                        <br>
                        <span class="post-comment"><i class="fas fa-pencil-alt"
                                aria-hidden="true"></i>&nbsp;<?php echo $actualite3['comment']; ?> commentaire(s)</span>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <hr>

    <!-- Copyright -->
    <div class="div-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright"><i class="fas fa-glasses"></i>Page vue <?php echo $count_visit ?> fois - <i class="fab fa-php"></i><?php echo 'Page chargé en '.strlen(($end_time - $begin_time)), ' secondes'; ?> <a href="/rgpd.pdf" target="_blank">Protection des données</a><br>
                        Copyright © 2020 / 2021 <a href="" target="_blank">Gaëtan Seigneur</a>. Tout droits réservés.
                        Thème par <a href="" target="_blank">Gaëtan Seigneur</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>