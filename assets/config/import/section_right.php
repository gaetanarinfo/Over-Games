<!-- Section right -->

<div class="col-md-4 col-border">

    <p class="Subtitle-widget"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbspLes derniers
        tests</p>

    <div class="col-sm-12">

        <!-- Boucle While pour l'affichage de multiple test -->

        <?php while($test_while = $req4->fetch()) { ?>

        <div class="three-test-post-right d-flex style-4 mb">

            <!-- Blog Thumbnail -->
            <div class="test-thumbnail-right">
                <a href="<?php echo $test_while['lien']; ?>" target="_blank"><img
                        src="<?php echo $test_while['small_img']; ?>" alt=""></a>
            </div>

            <!-- Blog Content -->
            <div class="test-content-right">
                <span class="post-date-right"><?php echo $test_while['dates']; ?> à
                    <?php echo $test_while['heure']; ?></span>
                <br>
                <a href="<?php echo $test_while['lien']; ?>" target="_blank"
                    class="post-title-right"><?php echo $test_while['titre']; ?></a>
                <br>
                <div class="post-description-right"><?php echo $test_while['description']; ?></div>
                <div class="post-comment-right"><i class="fas fa-pencil-alt"
                        aria-hidden="true"></i>&nbsp;<?php echo $test_while['comment']; ?>
                    commentaire(s)</div>
            </div>

        </div>

        <?php } ?>

        <!-- Boucle While pour l'affichage des commentaires membres -->

        <p class="Subtitle-widget-2"><i class="far fa-comment-dots"></i>&nbspLes derniers commentaires
        </p>

        <div class="col-sm-12">

            <?php if($count_comment != 0) { ?>

            <?php while($comment_while = $req5->fetch()) { ?>

            <div class="three-news-post-right-comment d-flex style-4 mb-comment">

                <!-- Blog Thumbnail -->
                <div class="news-thumbnail-right-comment">
                    <a href="#"><img
                            src="<?php if($membre_result['pseudo'] == $comment_while['pseudo']) { ?>upload/avatar/<?php echo $membre_result['avatar']; ?><?php } ?>"
                            alt=""></a>
                </div>

                <!-- Blog Content -->
                <div class="news-content-right-comment">
                    <span class="post-date-right-comment"><?php echo $comment_while['dates']; ?> à
                        <?php echo $comment_while['heure']; ?></span>
                    <br>
                    <span class="post-pseudo-right-comment">Par
                        <?php echo $comment_while['pseudo']; ?></span>
                    <br>
                    <a href="/article?id=<?php echo $comment_while['article_id'] ?>#comment-id<?php echo $comment_while['id'] ?>"
                        class="post-title-right-comment"><?php echo $comment_while['message']; ?></a>
                </div>

            </div>

            <?php } ?>

            <?php }else{ ?>

            <img class="comment-empty-src" src="https://gaetan-seigneur.store/assets/images/comment-empty.png">

            <p class="comment-empty"><i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;Aucun
                commentaire à afficher</p>

            <?php } ?>

        </div>

        <!-- Boucle While pour l'affichage des derniers tuto -->

        <p class="Subtitle-widget-3"><i class="fab fa-youtube"></i>&nbspLes derniers tutoriels
        </p>

        <div class="col-sm-12">

            <?php while($tuto_while = $req7->fetch()) { ?>

            <div class="three-news-post-right-comment d-flex style-4 style-5 mb-4">

                <!-- Blog Thumbnail -->
                <div class="news-thumbnail-right-comment">
                    <a id="youtube-<?php echo $tuto_while['id']; ?>" data-toggle="modal" data-target="#youtubeModal"
                        href=""><img src="<?php echo $tuto_while['images']; ?>"
                            alt="<?php echo $tuto_while['titre']; ?>"></a>
                </div>

                <!-- Blog Content -->
                <div class="news-content-right-comment news-content-right-comment2">
                    <span class="post-date-right-comment"><?php echo $tuto_while['dateTuto']; ?></span>
                    <br>
                    <span class="post-pseudo-right-comment">Par <?php echo $tuto_while['chaine']; ?></span>
                    <br>
                    <span class="post-cat-right-comment">Catégorie <?php echo $tuto_while['cat']; ?></span>
                    <br>
                    <a id="youtube-2-<?php echo $tuto_while['id']; ?>" data-toggle="modal" data-target="#youtubeModal"
                        href="" class="post-title-right-comment"><?php echo $tuto_while['titre']; ?></a>
                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</div>