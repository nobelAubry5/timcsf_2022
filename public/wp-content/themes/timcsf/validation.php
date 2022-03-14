<?php
    
    //LIVRAISON
    $nom = valider('nom', '#^[a-zA-Z]+(([,. -][a-zA-Z ])?[a-zA-Z]*)*$#');
    $courriel = valider('courriel', '#^\S+@\S+\.\S+$#');
    $destinataire = valider('responsables', '#^[A-Z]{2}$#');
    $telephone = valider('telephone', '^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$');
    $consentement = valider('consentement', '#^#');
    $sujet_message = valider('sujetMessage', '#^[A-Z][A-Za-z\é\è\ê\-]+$#');
    $message = valider('message', '#^[A-Z][A-Za-z\é\è\ê\-]+$#');
    
    
    
    $tValidation =
        [
            //LIVRAISON
            
            "nom"=>$nom,
            "courriel"=>$courriel,
            "responsables"=>$destinataire,
            "telephone"=>$telephone,
            "consentement"=>$telephone,
            "sujetMessage"=>$sujet_message,
            "message"=>$message,
        ];
    
    
    var_dump('<pre>',$tValidation,'</pre>');
    
    if($tValidation["nom"]["valide"] == "vrai"
        && $tValidation["courriel"]["valide"] == "vrai"
        && $tValidation["responsables"]["valide"] == "vrai"
        && $tValidation["telephone"]["valide"] == "vrai"
        && $tValidation["consentement"]["valide"] == "vrai"
        && $tValidation["sujetMessage"]["valide"] == "vrai"
        && $tValidation["message"]["valide"] == "vrai")
         {
        
    }else {
    
    }
   function valider($nomChamp, $pattern)
{
    // Récupérer le contenu des messages en format JSON
    $contenuBruteFichierJson = get_template_directory_uri()."/liaisons/json/messagesInscriptionValidation.json";
    // Convertir en tableau associatif
    $json = file_get_contents($contenuBruteFichierJson);
    $tMessagesJson = json_decode($json, true);
    
    // À compléter...
    $message = "";
    $valide = "";
    if (isset($_POST[$nomChamp])){
        trim($_POST[$nomChamp]);
        if (preg_match($pattern, $_POST[$nomChamp])){
            $valide = "vrai";
            $message = "";
        }
        else if ($_POST[$nomChamp] == ""){
            $message = $tMessagesJson[$nomChamp]["erreurs"]['vide'];
            $valide = "faux";
        }
        else{
            $valide = "faux";
            $message = $tMessagesJson[$nomChamp]["erreurs"]['motif'];
        }
    }

////////////////////////////////////////////////////////////////////////////
    return ['valeur'=>$_POST[$nomChamp], 'valide'=>$valide, 'message'=>$message];
    
}
        if(isset($_POST["g-recaptcha-response"])){
            $captcha = $_POST["g-recaptcha-response"];
        }
        if($captcha!=false){
            
            if(count($arrChampsErreur)==0){
                
                if(count($arrChampsErreur)==0){
                    $secretKey="6Ld2xZAUAAAAAKTP2SAEIyikTTN2uzxmgcNRaiLv";
                    $ip=$_SERVER['REMOTE_ADDR'];
                    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=.$ip");
                    $responseKeys = json_decode($response,true);
    
                    if(intval($responseKeys["success"])===1){
                        $post= get_post($destinataire);
    
                        $to = get_option('admin_email');
    
                        $subject = "Quelqu'un a envoyé une message depuis le site" . get_bloginfo('name');
    
                        $headers = "From: ". $courriel . "\r\n" .
                            "Reply-To: " . $courriel . "\r\n";
                        $envoi = wp_mail($to, $subject, strip_tags($message), $headers);
    
                        if($envoi){
                            array_push($arrChampsErreur,["retroactions", "envoyer"]);
                        }
                    }
                }
            }
        }
    

    
   


?>