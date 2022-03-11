<?php 

require 'db.php';

$plateforme = $db->prepare('SELECT * FROM actualites WHERE plateforme LIKE :plateforme OR plateforme2 LIKE :plateforme2 OR plateforme3 LIKE :plateforme3 OR plateforme4 LIKE :plateforme4 OR plateforme5 LIKE :plateforme5 OR plateforme6 LIKE :plateforme6 OR plateforme7 LIKE :plateforme7 OR plateforme8 LIKE :plateforme8');
$plateforme->execute(array(':plateforme' => $_GET['plateforme'], ':plateforme2' => $_GET['plateforme'], ':plateforme3' => $_GET['plateforme'], ':plateforme4' => $_GET['plateforme'], ':plateforme5' => $_GET['plateforme'], ':plateforme6' => $_GET['plateforme'], ':plateforme7' => $_GET['plateforme'], ':plateforme8' => $_GET['plateforme']));
$count = $plateforme->rowCount();

?>

<?php if($count != "0") { ?>

<?php while($plateforme_result = $plateforme->fetch()) { ?>
    <div class="col-md-6 col-lg-4 pb-3 p-3">
        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
        <div class="card-custom-img" style="background-image: url(<?php echo $plateforme_result['small_img'] ?>);"></div>
        <div class="card-custom-avatar">
            <a class="card-avatar" href="/profil-public?pseudo=<?php echo $plateforme_result['createur'] ?>" title="Profil de <?php echo $plateforme_result['createur'] ?>"><img class="img-fluid" src="upload/avatar/thumb-148546.jpg" alt="<?php echo $plateforme_result['createur'] ?>"></a>
        </div>
        <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title"><?php echo substr($plateforme_result['titre'], 0, 70)."..."; ?></h4>

            <p class="card-text"><?php echo $plateforme_result['content2']."..." ?></p>

            <div class="mt-4">
                <div class="news-date">
                    <i class="fas fa-clock" aria-hidden="true"></i> <?php echo $plateforme_result['date'] ?> à <?php echo $plateforme_result['heure'] ?>
                </div>

                <div class="news-author mt-2">
                    <i class="fas fa-pencil-alt" aria-hidden="true"></i> Par <?php echo $plateforme_result['createur'] ?>
                </div>

                <div class="mt-2">
                    <p class="card-tag"><?php if($plateforme_result['categorie'] == "NEWS") { ?>
                    <i class="fas fa-lock-open" title="Actualité ouverte"></i>
                    <?php }elseif($plateforme_result['categorie'] == "PREMIUM") { ?>
                    <i class="fas fa-lock" title="Actualité fermé"></i>
                    <?php } ?>
                    <?php echo $plateforme_result['categorie']; ?></p>
                </div>

                <div class="mt-3">
                    <a href="/article?id=<?php echo $plateforme_result['id'] ?>" class="btn btn-cards">Lire la suite...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php }else{ ?>

<div class="col-md-12">   
    <div class="m-auto text-center">
        <img class="comment-empty-src" src="https://gaetan-seigneur.store/assets/images/comment-empty.png">
    </div>

    <p class="news-empty"><i class="fas fa-newspaper mr-2"></i>Désolé, Aucune actualité pour cette plateforme !</p>
</div>
<?php } ?>    