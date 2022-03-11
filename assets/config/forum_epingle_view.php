<?php

require 'req.php';
require 'forum_req.php';
require 'bbcode/view.php';

if(isset($_SESSION['email'])) {

    $fo_epingle = $db->prepare('SELECT * FROM forum_sujet_reply_membre WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet AND email = :email ORDER BY id DESC');
    $fo_epingle->execute(array(':forum_id' => $_GET['id1'], ':forum_id_cat' => $_GET['id2'], ':forum_id_cat_sujet' => $_GET['id3'], ':email' => $_SESSION['email']));

}


?>

<?php while($fo_array_result_epingle = $fo_epingle->fetch()) { ?>
    <section class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="container row m-auto">
                    <div class="col-md-8 p-0 m-0 border-epingle">
                        <div class="fo-content fo-content-comment">
                            <strong>Re : <?php echo $fo_array_result_epingle['sujet'] ?></strong>

                            <?php if(isset($_SESSION['email'])) { ?>
                                <div class="d-inline-block fo-epingle-a" id="epingle2"><a title="Message épinglé"><i class="fas fa-star" aria-hidden="true"></i></a></div> 
                            <?php } ?> 

                            <div class="fo-author"><i class="far fa-user mr-1"></i> par
                                <?php echo $fo_array_result_epingle['createur'] ?> >> <?php echo $fo_array_result_epingle['date'] ?> à
                                <?php echo $fo_array_result_epingle['heure'] ?></div>
                            <div class="fo-writing"><?php echo BBCode2Html($fo_array_result_epingle['content']) ?></div>
                            <hr class="w-100 mt-3">
                            <?php ViewProfilMembreContent($fo_array_result_epingle['createur']); ?>
                            <hr class="w-100 mt-1">
                            <div class="fo-writing">N'oubliez pas de modifier votre message en ajoutant le tag <span
                                    class="fo-reg">[Résolue]</span> quand votre sujet est résolue.</div>
                        </div>
                    </div>

                    <div class="col-md-4 p-0 m-0 border-epingle-right">
                        <div class="fo-content fo-border text-center fo-content-right h-100">
                            <?php ViewProfilMembre($fo_array_result_epingle['createur']); ?>

                            <div class="text-left mt-1">
                                <a href="#wrap" title="Haut"><i class="fas fa-chevron-circle-up mr-0"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>