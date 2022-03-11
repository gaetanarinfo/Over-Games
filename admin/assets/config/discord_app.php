<?php


function DiscordApp($title, $content2, $image, $genre, $date_sortie) {

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
                    "title" => $title,
        
                    // Embed Type
                    "type" => "rich",
        
                    // Embed Description
                    "description" => stripslashes($content2),
        
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
                        "url" => $image
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
                            "name" => $genre,
                            "value" => $date_sortie,
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

}

?>