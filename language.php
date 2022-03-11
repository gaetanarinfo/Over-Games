<?php

require_once 'assets/config/db.php';

$sql = 'SELECT * FROM yt_cards WHERE cat = :cat ORDER BY id ASC';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$query->bindParam(':cat', $_GET['categorie']);
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS id FROM yt_cards WHERE cat = :cat';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute(array(':cat' => $_GET['categorie']));

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['id'];

// On détermine le nombre d'articles par page
$parPage = 6;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM yt_cards WHERE cat = :cat ORDER BY id ASC LIMIT :premier, :parpage';

// On prépare la requête
$query = $db->prepare($sql);
$query->bindParam(':cat', $_GET['categorie']);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

$count = $query->rowCount();
?>
<?php if($count != 0) { ?>

    <?php foreach($articles as $result_yt){ ?>
    <div class="col-md-4">
        <div class="card">
            <img title="Voir la vidéo" id="card-<?php echo $result_yt['id'] ?>_1" class="card-img-top show1"
                src="<?php echo $result_yt['images'] ?>">
            <iframe id="card-yt-<?php echo $result_yt['id'] ?>_1" class="card-img-top"
                src="https://www.youtube.com/embed/<?php echo $result_yt['api'] ?>" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="card-body">
                <h5 class="card-title"><?php echo $result_yt['titre'] ?></h5>
                <p class="card-text"><?php echo $result_yt['content'] ?></p>
            </div>
            <div class="card-footer">
                <img class="icon-card icon-<?php echo $result_yt['id'] ?>_1" src="<?php echo $result_yt['icone'] ?>">
                <span class="chaine-card card-chaine-<?php echo $result_yt['id'] ?>_1">Chaine YouTube
                    <?php echo $result_yt['chaine'] ?></span>
                <small class="text-muted">Mise en ligne le <?php echo $result_yt['date'] ?></small>
            </div>
        </div>
    </div>

    <script>
    document.getElementById("card-" + "<?php echo $result_yt['id'] ?>_1").addEventListener('click',
        function() {
            document.getElementById("card-" + "<?php echo $result_yt['id'] ?>_1").style.display =
                "none";
            document.getElementById("card-yt-" + "<?php echo $result_yt['id'] ?>_1").style
                .display = "block";
            document.getElementById("card-yt-" + "<?php echo $result_yt['id'] ?>_1").style
                .opacity = "1";
        });

    document.querySelector(".icon-" + "<?php echo $result_yt['id'] ?>_1").addEventListener('click',
        function() {
            document.querySelector(".card-chaine-" + "<?php echo $result_yt['id'] ?>_1").style
                .opacity = "1";
            document.querySelector(".card-chaine-" + "<?php echo $result_yt['id'] ?>_1").style
                .display = "inline-block";
        });
    </script>
    <?php } ?>

    <div class="pagin">
        <!-- Paginaion Cards Youtube -->
        <nav aria-label="Pagination Youtube">
            <ul class="pagination justify-content-center">
                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                    <a href="./dev?page=<?= $currentPage - 1 ?>" class="page-link"><i class="fas fa-chevron-left"></i></a>
                </li>

                <?php for($page = 1; $page <= $pages - 4; $page++): ?>
                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                    <a href="./dev?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                </li>
                <?php endfor ?>
                <li class="page-item <?= ($currentPage == 11) ? "active" : "" ?>">
                    <a href="./dev?page=<?= $pages ?>" class="page-link"><?= $pages ?></a>
                </li>
                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                    <a href="./dev?page=<?= $currentPage + 1 ?>" class="page-link"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>

<?php }else{ ?>
    <div class="m-auto">
        <p class="result-card">Désoler, Aucun résultat</p>
    </div>   
<?php } ?>