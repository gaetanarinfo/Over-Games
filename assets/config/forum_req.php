<?php

require 'db.php';

$fo_membre = $db->prepare('SELECT * FROM membres WHERE email = :email');
$fo_membre->execute(array(':email' => $_SESSION['email']));
$fo_membre_result = $fo_membre->fetch();
$fo_membre->closeCursor();

// Liste Administrateur

$admin_array = $db->prepare('SELECT * FROM membres WHERE rang = :rang');
$admin_array->execute(array(':rang' => "Administrateur"));

// Liste Modérateur

$modo_array = $db->prepare('SELECT * FROM membres WHERE rang = :rang');
$modo_array->execute(array(':rang' => "Moderateur"));
$count_modo = $modo_array->rowCount();

// Liste Membres

$membres_array = $db->prepare('SELECT * FROM membres');
$membres_array->execute();

// Liste Sujet Principal

$fo_array = $db->prepare('SELECT * FROM forum ORDER BY id ASC');
$fo_array->execute();

$fo_array1_2 = $db->prepare('SELECT * FROM forum WHERE forum_id = :forum_id');
$fo_array1_2->execute(array(':forum_id' => $_GET['forum_id']));
$fo_array1_2_result = $fo_array1_2->fetch();
$fo_array1_2->closeCursor();

$fo_array2 = $db->prepare('SELECT * FROM forum_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat');
$fo_array2->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));
$fo_array2_result = $fo_array2->fetch();
$fo_array2_count = $fo_array2->rowCount();
$fo_array2->closeCursor();

$fo_array2_2 = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id ASC');
$fo_array2_2->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));

$fo_array3 = $db->prepare('SELECT * FROM forum_cat_cat_sujet WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet');
$fo_array3->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':forum_id_cat_sujet' => $_GET['forum_id_cat_sujet']));
$fo_array3_result = $fo_array3->fetch();
$fo_array3_count = $fo_array3->rowCount();
$fo_array3->closeCursor();

$fo_array3_3 = $db->prepare('SELECT * FROM forum_cat_cat_sujet WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet ORDEr BY id');
$fo_array3_3->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':forum_id_cat_sujet' => $_GET['forum_id_cat_sujet']));
$fo_array3_3_result = $fo_array3_3->fetch();
$fo_array3_3->closeCursor();

$fo_array5 = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id DESC');
$fo_array5->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));
$fo_array5_result = $fo_array5->fetch();
$fo_array5->closeCursor();

// Boucle Post de Categorie à Topic

$fo_array6 = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND createur = :pseudo ORDER BY id ASC');
$fo_array6->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':pseudo' =>  $_SESSION['pseudo']));

$fo_array6_2 = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id ASC');
$fo_array6_2->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));

$fo_array6_3 = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id ASC');
$fo_array6_3->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));

// Boucle Delete de Categorie à Topic

$fo_array7 = $db->prepare('SELECT * FROM forum_cat_cat ORDER BY id ASC');
$fo_array7->execute();
$fo_array8 = $db->prepare('SELECT * FROM forum_cat_cat ORDER BY id ASC');
$fo_array8->execute();

// Commentaire sujet

$fo_array_comment = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet ORDER BY datetime ASC');
$fo_array_comment->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':forum_id_cat_sujet' => $_GET['forum_id_cat_sujet']));

// Epingle sujet

$fo_array_epingle = $db->prepare('SELECT * FROM forum_sujet_reply_membre WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet AND email = :email ORDER BY datetime ASC');
$fo_array_epingle->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':forum_id_cat_sujet' => $_GET['forum_id_cat_sujet'], ':email' => $_SESSION['email']));

// Récupere le nombre de vue sur le sujet

function View($forum_id, $forum_id_cat, $forum_id_cat_sujet) {

    Global $db;

    $view_vue = $db->prepare('SELECT * FROM forum_cat_view WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet');
    $view_vue->execute(array(':forum_id' => $forum_id, ':forum_id_cat' => $forum_id_cat, ':forum_id_cat_sujet' => $forum_id_cat_sujet));
    $view_vue_count = $view_vue->rowCount();
    $view_vue->closeCursor();

    echo $view_vue_count;

}


// Permet de crée une visite sur le sujet

function ViewCat() {

    Global $db;
  

    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y H:i:s', strtotime('+1 hour'));
    $forum_id = $_GET['forum_id'];
    $forum_id_cat = $_GET['forum_id_cat'];
    $forum_id_cat_sujet = $_GET['forum_id_cat_sujet'];

    $view_ip = $db->prepare('SELECT * FROM forum_cat_view WHERE ip = :ip AND forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet');
    $view_ip->execute(array(':ip' => $ip, ':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':forum_id_cat_sujet' => $_GET['forum_id_cat_sujet']));
    $view_ip_result = $view_ip->fetch();
    $view_ip->closeCursor();

    if($ip != $view_ip_result['ip'] AND $forum_id == $_GET['forum_id'] AND $forum_id_cat['forum_id_cat'] == $_GET['forum_id_cat'] AND $forum_id_cat_sujet == $_GET['forum_id_cat_sujet']) {

    $Arr_Key_Value = array('ip' => $ip, 'date' => $date , 'forum_id' => $forum_id, 'forum_id_cat' => $forum_id_cat, 'forum_id_cat_sujet' => $forum_id_cat_sujet);

    //Requête d'insertion
    $Sql_Query = "INSERT INTO forum_cat_view(ip, date, forum_id, forum_id_cat, forum_id_cat_sujet) VALUES (:ip, :date, :forum_id, :forum_id_cat, :forum_id_cat_sujet)";

    //Préparation de la requête (sécurisation des variables du tableau associatif)
    $Request= $db->prepare($Sql_Query);

    //Exécution de la requête
    $Request->execute($Arr_Key_Value);

    }

}

// Récupere le nombre de sujet

function ViewSujetCat($id) {

    Global $db;    

    $view_sujetcat = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat');
    $view_sujetcat->execute(array(':forum_id' => $id, ':forum_id_cat' => $id));
    $view_sujetcat_count = $view_sujetcat->rowCount();
    $view_sujetcat->closeCursor();

    echo $view_sujetcat_count;
}

// Récupere le nombre de message

function ViewMessageCat($forum_id, $forum_id_cat, $forum_id_cat_sujet) {

    Global $db;    

    $view_messagecat = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet');
    $view_messagecat->execute(array(':forum_id' => $forum_id, ':forum_id_cat' => $forum_id_cat, ':forum_id_cat_sujet' => $forum_id_cat_sujet));
    $view_messagecat_count = $view_messagecat->rowCount();
    $view_messagecat->closeCursor();

    echo $view_messagecat_count;
}

function ViewMessageAll($forum_id, $forum_id_cat) {

    Global $db;    

    $view_messagecat = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat');
    $view_messagecat->execute(array(':forum_id' => $forum_id, ':forum_id_cat' => $forum_id_cat));
    $view_messagecat_count = $view_messagecat->rowCount();
    $view_messagecat->closeCursor();

    echo $view_messagecat_count;
}

function ViewMessageBefore($forum_id, $forum_id_cat) {

    Global $db;

    $fo_array4 = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY datetime DESC');
    $fo_array4->execute(array(':forum_id' => $forum_id, ':forum_id_cat' => $forum_id_cat));
    $fo_array4_result = $fo_array4->fetch();
    $fo_array4_count = $fo_array4->rowCount();
    $fo_array4->closeCursor(); ?>

    <?php if($fo_array4_count != "0") { ?>
        <a href="/forum_sujet?forum_id=<?php echo $fo_array4_result['forum_id'] ?>&forum_id_cat=<?php echo $fo_array4_result['forum_id_cat'] ?>&forum_id_cat_sujet=<?php echo $fo_array4_result['forum_id_cat_sujet'] ?>"><strong><?php echo $fo_array4_result['sujet'] ?></strong></a>
        <br>
        par <a href="" title="<?php echo $fo_array4_result['createur'] ?>"><strong><?php echo $fo_array4_result['createur'] ?></strong></a>
        <br>
        <a href="/forum_sujet?forum_id=<?php echo $fo_array4_result['forum_id'] ?>&forum_id_cat=<?php echo $fo_array4_result['forum_id_cat'] ?>&forum_id_cat_sujet=<?php echo $fo_array4_result['forum_id_cat_sujet'] ?>#comment"><strong>Voir le dernier message</strong></a>
        <br>
        <?php echo $fo_array4_result['date'] ?> à <?php echo $fo_array4_result['heure'] ?>
    <?php }else{ ?>
        <div class="text-center mt-4"><strong>Aucun message posté</strong></div>
    <?php } ?>    

<?php

}

?>

<?php

function ViewMessageBefore2($forum_id, $forum_id_cat, $forum_id_cat_sujet) {

    Global $db;

    $fo_array4 = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet ORDER BY datetime DESC');
    $fo_array4->execute(array(':forum_id' => $forum_id, ':forum_id_cat' => $forum_id_cat, ':forum_id_cat_sujet' => $forum_id_cat_sujet));
    $fo_array4_result = $fo_array4->fetch();
    $fo_array4_count = $fo_array4->rowCount();
    $fo_array4->closeCursor(); ?>

    <?php if($fo_array4_count != "0") { ?>
        <a href="/forum_sujet?forum_id=<?php echo $fo_array4_result['forum_id'] ?>&forum_id_cat=<?php echo $fo_array4_result['forum_id_cat'] ?>&forum_id_cat_sujet=<?php echo $fo_array4_result['forum_id_cat_sujet'] ?>"><strong><?php echo $fo_array4_result['sujet'] ?></strong></a>
        <br>
        par <a href="" title="<?php echo $fo_array4_result['createur'] ?>"><strong><?php echo $fo_array4_result['createur'] ?></strong></a>
        <br>
        <a href="/forum_sujet?forum_id=<?php echo $fo_array4_result['forum_id'] ?>&forum_id_cat=<?php echo $fo_array4_result['forum_id_cat'] ?>&forum_id_cat_sujet=<?php echo $fo_array4_result['forum_id_cat_sujet'] ?>#comment"><strong>Voir le dernier message</strong></a>
        <br>
        <?php echo $fo_array4_result['date'] ?> à <?php echo $fo_array4_result['heure'] ?>
    <?php }else{ ?>
        <div class="text-center mt-4"><strong>Aucun message posté</strong></div>
    <?php } ?>    

<?php

}

?>

<?php 

function Topic($id) {

    if($id == "1") { ?>
        <img class="fo-cat" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-4-icon-256.png" title="Topic fermé" alt="Topic fermé">
    <?php }else{ ?>
        <img class="fo-cat" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-3-icon-256.png" title="Topic ouvert" alt="Topic ouvert">
    <?php } ?>

<?php } ?>

<?php

function Topic_Sujet($id) { ?>

<div class="col-md-12 mb-6">
<?php if($id == 0) {  ?>
<div class="text-center">
    <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-3-icon-256.png"> <div class="fo-icone">Topic ouvert</div>
</div> 
<?php } else{ ?>
<div class="text-center">
    <img width="55px" src="https://gaetan-seigneur.store/assets/images/forum/categorie/assassins-creed-4-icon-256.png"> <div class="fo-icone">Topic Fermer</div>
</div> 
<?php } ?>
</div>

<?php 

}

?>

<?php

function ViewMessageAllMembre($pseudo) {

    Global $db;

    $fo_arraymembre = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE createur = :createur ORDER BY datetime DESC');
    $fo_arraymembre->execute(array(':createur' => $pseudo));
    $fo_arraymembre_count = $fo_arraymembre->rowCount();
    $fo_arraymembre->closeCursor(); 

    echo $fo_arraymembre_count;

}

function ViewProfilMembre($fo_array3_result) {

    Global $db;

    $membres = $db->prepare('SELECT * FROM membres WHERE pseudo = :pseudo');
    $membres->execute(array(':pseudo' => $fo_array3_result));
    $membre_result = $membres->fetch();
    $membres->closeCursor(); ?>

    <div class="fo-avatar">
        <img src="https://gaetan-seigneur.store/upload/avatar/<?php echo $membre_result['avatar']; ?>" title="<?php echo $fo_array3_result ?>">
    </div>

    <div class="fo-pseudo mt-2">
        <?php echo $fo_array3_result ?>
    </div>

    <div class="fo-rang mt-2">
       <?php if($membre_result['rang'] == "Administrateur") { ?><span class="text-danger"><i class="fas fa-bolt mr-2"></i><?php echo $membre_result['rang']; ?></span><?php } ?>
       <?php if($membre_result['rang'] == "Membre") { ?><span class="text-info"><i class="fab fa-battle-net mr-2"></i><?php echo $membre_result['rang']; ?></span><?php } ?>
       <?php if($membre_result['rang'] == "Modérateur") { ?><span class="text-success"><i class="fab fa-bolt-net mr-2"></i><?php echo $membre_result['rang']; ?></span><?php } ?>
    </div>

    <div class="fo-mess mt-2">
        Message(s) : <?php ViewMessageAllMembre($fo_array3_result); ?>
    </div>

    <div class="fo-mess mt-2">
        Date d'iscription : <?php echo $membre_result['date_creation']; ?>
    </div>

    <div class="fo-mess mt-2">
        Dernière connexion : <?php echo $membre_result['date_connexion']; ?>
    </div>

    <div class="fo-mess mt-2">
        Localisation : <?php echo $membre_result['pays']; ?>
    </div>
<?php    

}

?>

<?php

function ViewProfilMembreContent($fo_array3_result) {

Global $db;

$membres = $db->prepare('SELECT * FROM membres WHERE pseudo = :pseudo');
$membres->execute(array(':pseudo' => $fo_array3_result));
$membre_result = $membres->fetch();
$membres->closeCursor(); ?>

<div class="fo-writing"><?php echo BBCode2Html($membre_result['signature']) ?></div>

<?php    

}

?>

<?php

// Statistique
function ViewAll() {

    Global $db;    

    $view = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply');
    $view->execute();
    $view_count = $view->rowCount();
    $view->closeCursor();

    echo $view_count;

}

function ViewAllSujet() {

    Global $db;    

    $view = $db->prepare('SELECT * FROM forum_cat_cat_sujet');
    $view->execute();
    $view_count = $view->rowCount();
    $view->closeCursor();

    echo $view_count;

}

function ViewAllCat() {

    Global $db;    

    $view = $db->prepare('SELECT * FROM forum_cat_cat');
    $view->execute();
    $view_count = $view->rowCount();
    $view->closeCursor();

    echo $view_count;

}

function ViewAllMembres() {

    Global $db;    

    $view = $db->prepare('SELECT * FROM membres');
    $view->execute();
    $view_count = $view->rowCount();
    $view->closeCursor();

    echo $view_count;

}

function ViewRegisterMembres() {

    Global $db;    

    $view = $db->prepare('SELECT * FROM membres ORDER BY id DESC');
    $view->execute();
    $views_result = $view->fetch();
    $view->closeCursor();

    echo '<a href="profil_public/'.$views_result['pseudo'].'" target="_blank">'; echo $views_result['pseudo']; echo '</a>';

}

$membres_view_all = $db->prepare('SELECT * FROM membres WHERE rang = :rang ORDER BY id ASC');
$membres_view_all->execute(array(':rang' => "Administrateur"));

$membres_view_all2 = $db->prepare('SELECT * FROM membres WHERE rang = :rang ORDER BY id ASC');
$membres_view_all2->execute(array(':rang' => "Modérateur"));

function ViewMessageMembre($email) {

Global $db;

$membres = $db->prepare('SELECT * FROM membres WHERE email = :email');
$membres->execute(array(':email' => $email));
$membres_count = $membres->rowCount();
$membres->closeCursor();

echo $membres_count;

}

function HappyBirthday($age, $pseudo, $day, $month) {

    $date = date('Y-m-d');
    $dateJ = date('d');
    $dateM = date('m');
    $diff = date_diff(date_create($age), date_create($date));

    if($dateJ == $day AND $dateM = $month)
    {
        echo '<a href="profil_public/'.$pseudo.'" target="_blank">' + $pseudo, " (" . $diff->format('%y'). " ans)</a>, ";
    }else{
        echo "Aucun anniversaire à fêter !";
    }

}

function ViewSujet($forum_id, $forum_id_cat) {

    Global $db;    

    $view = $db->prepare('SELECT * FROM forum_cat_cat_sujet WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat');
    $view->execute(array(':forum_id' => $forum_id, ':forum_id_cat' => $forum_id_cat));
    $view_count = $view->rowCount();
    $view->closeCursor();

    echo $view_count;

}

?>