<?php 

require 'db.php';
require 'forum_req.php';

    $search_keyword = $_GET['s'];
    $forum_id = $_GET['forum_id'];
    $forum_id_cat = $_GET['forum_id_cat'];

    $sql = 'SELECT * FROM forum_cat_cat WHERE titre LIKE :titre AND forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id DESC';

    $pdo_statement = $db->prepare($sql);
    $pdo_statement->bindValue(':titre', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->bindValue(':forum_id', $forum_id, PDO::PARAM_STR);
    $pdo_statement->bindValue(':forum_id_cat', $forum_id_cat, PDO::PARAM_STR);
    $pdo_statement->execute();
    $count = $pdo_statement->rowCount();

?>

<?php

if($count != "0") {

while($forum_result = $pdo_statement->fetch()) { ?>

<div class="result-search">Résultat de votre recherche pour : <?php echo $_GET['s'] ?> <a id="search-remove" href=""
        title="Effacer la recherche"><i class="fas fa-times"></i></a></div>

<table class="table table-hover table-borderless table-responsive" id="search-table-2">
    <thead>
        <tr class="fo-tr">
            <th scope="col" style="width: 93px;"></th>
            <th scope="col" style="width: 450px;"><?php echo $forum_result['titre2'] ?></th>
            <th scope="col" class="text-center">RÉPONSES</th>
            <th scope="col" class="text-center">VUE</th>
            <th scope="col" style="width: 211px;">DERNIER MESSAGE</th>
        </tr>
    </thead>
    <tbody>


        <tr id="forum_cat_<?php echo $forum_result['id']; ?>">
            <th scope="row">
                <?php Topic($forum_result['topic']) ?>
            </th>
            <td class="fo-td"><a
                    href="/forum_sujet_<?php echo $forum_result['forum_id']; ?>_<?php echo $forum_result['forum_id_cat']; ?>_<?php echo $forum_result['forum_id_cat_sujet']; ?>"
                    title=""><strong><?php echo $forum_result['titre2']; ?></strong></a>
                <br>
                <?php echo $forum_result['content']; ?>
                <br>
                <a href="">Crée par <strong><?php echo $forum_result['createur']; ?></strong></a>
            </td>
            <td class="text-center fo-td">
                <div class="mt-4">
                    <?php ViewMessageCat($forum_result['forum_id'], $forum_result['forum_id_cat'], $forum_result['forum_id_cat_sujet']); ?>
                </div>
            </td>
            <td class="text-center fo-td">
                <div class="mt-4">
                    <?php View($forum_result['forum_id'], $forum_result['forum_id_cat'], $forum_result['forum_id_cat_sujet']); ?>
                </div>
            </td>

            <td class="fo-td">
                <?php ViewMessageBefore2($forum_result['forum_id'], $forum_result['forum_id'], $forum_result['forum_id_cat_sujet']); ?>
            </td>
        </tr>

    </tbody>
</table>

<?php } }else{ ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="m-auto text-center">
                <img class="comment-empty-src" src="https://gaetan-seigneur.store/assets/images/comment-empty.png">
            </div>

            <p class="result-empty"><i class="fas fa-newspaper mr-2" aria-hidden="true"></i>Désolé, votre recherche n'a donné aucun résultat !</p>
        </div>
    </div>
</div>

<?php } ?>

<script>
$('#search-remove').click(function() {
    $('#search-table').fadeIn(500);
    $('#search').fadeOut(500);

    return false;
});
</script>