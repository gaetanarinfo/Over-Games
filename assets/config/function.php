<?php

require 'req.php';

// Age profil public
function HappyBirthday($age)
{

        $date = date('Y-m-d');
        $diff = date_diff(date_create($age), date_create($date));

        echo "" . $diff->format('%y') . " ans";
}


// Nombre de message sur le forum

function ViewMessageMembre($pseudo)
{

        global $db;

        $messageCount = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE pseudo = :pseudo');
        $messageCount->execute(array(':pseudo' => $pseudo));
        $messageCountResult = $messageCount->rowCount();
        $messageCount->closeCursor();

        echo $messageCountResult;
}

function VerifMembrePublic($pseudo)
{

        global $db;

        $membres_verif = $db->prepare('SELECT * FROM membres WHERE pseudo = pseudo');
        $membres_verif->execute();
        $membre_result_verif = $membres_verif->fetch();
        $membres_verif->closeCursor();

        if ($membre_result_verif['pseudo'] != $pseudo) {

                header('Location: /');
        }
}
