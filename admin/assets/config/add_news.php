<?php

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") {

    if(!empty($_POST))
    {
        $date = $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;
        $heure = date('H:i', strtotime('+1 hour'));

        $Arr_Key_Value = array('createur' => $_POST['createur'],
         'categorie' => $_POST['categorie'], 
         'titre' => $_POST['titre'], 
         'subtitle' => $_POST['subtitle'],
         'content2' => $_POST['content2'],
         'content' => $_POST['content'],
         'small_img' => $_POST['small_img'], 
         'large_img' => $_POST['large_img'],  
         'videos' => $_POST['videos'], 
         'tag_video' => $_POST['tag_video'], 
         'date' => $date, 
         'heure' => $heure, 
         'plateforme' => $_POST['plateforme'], 
         'plateforme2' => $_POST['plateforme2'], 
         'plateforme3' => $_POST['plateforme3'], 
         'plateforme4' => $_POST['plateforme4'], 
         'plateforme5' => $_POST['plateforme5'], 
         'plateforme6' => $_POST['plateforme6'], 
         'plateforme7' => $_POST['plateforme7'], 
         'plateforme8' => $_POST['plateforme8'], 
         'title_games' => $_POST['title_games'], 
         'img_games' => $_POST['img_games'], 
         'genre' => $_POST['genre'], 
         'date_sortie' => $_POST['date_sortie']);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO actualites(
            createur, 
            categorie, 
            titre, 
            subtitle, 
            content2,
            content,
            small_img, 
            large_img, 
            videos,
            tag_video,
            date,
            heure,
            plateforme,
            plateforme2,
            plateforme3,
            plateforme4,
            plateforme5,
            plateforme6,
            plateforme7,
            plateforme8,
            title_games,
            img_games,
            genre,
            date_sortie
            ) 
            VALUES (
            :createur, 
            :categorie, 
            :titre,
            :subtitle, 
            :content2,
            :content,
            :small_img, 
            :large_img, 
            :videos,
            :tag_video,
            :date,
            :heure,
            :plateforme,
            :plateforme2,
            :plateforme3,
            :plateforme4,
            :plateforme5,
            :plateforme6,
            :plateforme7,
            :plateforme8,
            :title_games,
            :img_games,
            :genre,
            :date_sortie
            )";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);

        //=======================================================================================================
        // Create new webhook in your Discord channel settings and copy&paste URL
        //=======================================================================================================
        
        $webhookurl = "https://discord.com/api/webhooks/802192744353235005/dn2lPRcHuqeZW_SbhpF_jZ7ae2oo2KkDDZZaTi6hz41z-VXVBe_Cm7YafNU0HHB_QdD2";
        
        //=======================================================================================================
        // Compose message. You can use Markdown
        // Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
        //========================================================================================================
        
        $timestamp = date("c", strtotime("now"));
        
        $json_data = json_encode([
            // Message
            "content" => "Une nouvelle actualité est sortie viens la voir ou on peut en discuter !",
            
            // Username
            "username" => "Gaëtan Seigneur",
        
            // Avatar URL.
            // Uncoment to replace image set in webhook
            //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",
        
            // Text-to-speech
            "tts" => false,
        
            // File upload
            // "file" => "",
        
            // Embeds Array
            "embeds" => [
                [
                    // Embed Title
                    "title" => $_POST['titre'],
        
                    // Embed Type
                    "type" => "rich",
        
                    // Embed Description
                    "description" => stripslashes($_POST['content2']),
        
                    // URL of title link
                    "url" => "https://gaetan-seigneur.store/",
        
                    // Timestamp of embed must be formatted as ISO8601
                    "timestamp" => $timestamp,
        
                    // Embed left border color in HEX
                    "color" => hexdec( "3366ff" ),
        
                    // Footer
                    "footer" => [
                        "text" => "Gaëtan Seigneur",
                        "icon_url" => "https://gaetan-seigneur.store/upload/avatar/thumb-148546.jpg"
                    ],
        
                    // Image to send
                    "image" => [
                        "url" => $_POST['small_img']
                    ],
        
                    // Thumbnail
                    //"thumbnail" => [
                    //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
                    //],
        
                    // Author
                    "author" => [
                        "name" => "Gaëtan Seigneur",
                        "url" => "https://gaetan-seigneur.store/"
                    ],
        
                    // Additional Fields array
                    "fields" => [
                        // Field 1
                        [
                            "name" => $_POST['genre'],
                            "value" => $_POST['date_sortie'],
                            "inline" => true
                        ],
                    ]
                ]
            ]
        
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        
        
        $ch = curl_init( $webhookurl );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        
        $response = curl_exec( $ch );
        // If you need to debug, or find out why you can't send message uncomment line below, and execute script.
        // echo $response;
        curl_close( $ch );

        echo 1;
    }else{
        echo 0;
    }

}

?>