<?php
    /* Template name: Page des contact */
    get_header(); //inclusion de l'entete
    echo "page-contact.php";
    ?>

    
    <h1>Nous joindre</h1>

    <?php
    //à mettre dans la page pour afficher les responsables
    //**************************************************
    
    //Requête pour obtenir les infos des responsables
    $args = array(
        'post_type' => 'responsables',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order_by' => 'post_date',
        'order' => 'ASC',
    );
    ?>
<?php
    $posts = get_posts(array(
        'post_type' => 'responsables',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order_by' => 'post_date',
        'order' => 'ASC',
    ));
?>

   <div class="row">
    <?php $the_query = new WP_Query( $args );?>
    
    <?php
    if($the_query->have_posts()){?>
        
                <div class="contact__formulaire">
                    <h2>Posez-nous votre question</h2>

                    <input type="hidden" id="erreurVerif" value="true">
                    <form>
                        
                        <div class="col-3 input-effect">
                        <label for="nom">Votre nom complet:</label><br>
                        <input type="text" id="nom" name="nom" class="effect-17"><br>
                        <p class="erreur__message">
                        </p>
                        </div>
                        
                        
                        <div class="col-3 input-effect">
                        <label for="courriel">Votre adresse courriel:</label><br>
                        <input type="email" id="courriel" name="courriel" class="effect-17"><br>
                        <p class="erreur__message">
                        </p>
                        </div>

                        <div class="col-3 input-effect">
                        <label for="responsables">Destinataire:</label><br>
                        <select id="responsables" name="responsables" class="effect-17">
                            <option value="">Choisir un destinataire</option>
                            <?php
                                if($the_query->have_posts()){
                                    if(isset($_GET["ID"])){
                                        $destinataire = $_GET["ID"];
                                    }else{
                                        $destinataire = "";
                                    }
                                while($the_query->have_posts()) {
                                $the_query->the_post();
                                ?>
                            <option <?php if($destinataire==acf_get_valid_post_id()){?> selected <?php }?> value = "<?php echo get_field("prenom");?> <?php echo get_field("nom");?>"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></option>
                            <?php } ?>
                                <?php } ?>
                                <?php } ?>
                        </select><br>
                        <p class="erreur__message">
                        </p>
                        </div>

                        <div class="col-3 input-effect">
                        <label for="sujetMessage">Sujet du message:</label><br>
                        <input type="text" id="sujetMessage" name="sujetMessage" class="effect-17"><br>
                        <p class="erreur__message">
                        </p>
                        </div>

                        <div class="col-3 input-effect">
                        <label for="message">Message:</label><br>
                        <textarea type="text" id="message" name="message" class="effect-17">
                        </textarea><br>
                        <p class="erreur__message">
                        </p>
                        </div>
                        
                        <div class="g-recaptcha" data-sitekeys="6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK"></div>
                        <button class="btn-5">Envoyer</button>
                    </form>

                </div>
         
        <div class="carte__responsable">
            <?php
        while($the_query->have_posts()) {
            $the_query->the_post();?>
            <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
            $photo=get_field("photo");
            //ici on affiche seulement la taille thumbnail
            ?>
            
            <img class="img__responsable" src="<?php echo $photo["sizes"]["thumbnail"]; ?>" alt="<?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?>"/>
            <ul class="responsables__liste">
                <li class="responsables__puces"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></li>
                <li class="responsables__puces"><?php echo get_field("responsabilite");?></li>
                <li class="responsables__puces"><a href="mailto:<?php echo get_field("courriel");?>"><?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?></a></li>
                <li class="responsables__puces"><?php echo get_field("telephone");?></li>
            </ul>
                    <hr class="ligne__separation">
              
            
            
            
            
            <style>
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }
                .contact__formulaire{
                    float: left;
                    width: 65%;
                    
                }
                .carte__responsable{
                    float: left;
                    width: 35%;
                    
                }
                .img__responsable{
                    padding-left: 120px;
                }
                .responsables__liste{
                    list-style: none;
                    text-align: center;
                }
                .responsables__puces:first-child{
                    font-family: Open Sans Condensed;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 1.875em;
                }
                .responsables__puces:nth-child(2){
                    font-family: Open Sans;
                    font-weight: normal;
                    font-size: 1.25em;
                }
                .responsables__puces:nth-child(3){
                    font-family: Open Sans;
                    font-weight: normal;
                    font-size: 1.125em;
                }
                input, select, textarea {
                    width: 70%;
                    padding: 12px 20px;
                    margin: 8px 0 15px;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
                @media screen and (max-width: 800px) {
                    .contact__formulaire, .carte__responsable {
                        width: 100%;
                        padding: 0;
                    }
                    .img__responsable{
                        margin-left: 50px;
                    }
                    input, select, textarea {
                        width: 80%;
                        padding: 7px 15px;
                        margin: 8px 0 45px;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }
                }
                .erreur__message{
                    margin: 0 0 0 0;
                    color: red;
                }
                .spriteRETRO {
                    display: inline-block;
                    width:32px;
                    height:32px;
                //background-color: red;
                //background-image: url(../images/icone_alert.png);
                //background-repeat: no-repeat;
                    vertical-align: middle;
                    transform: scale(0.75, 0.75);
                }

                .spriteRETRO--ok {
                    background-position:0 0;

                }

                .spriteRETRO--warning {
                    background-position:-34px 0;
                }
                .erreur__label{
                    border-bottom: 2px solid #DC0012;
                }

                .shake {

                    -webkit-animation: shake .5s linear ;
                //transform-origin: 50% 50%;
                }
                @-webkit-keyframes shake {
                    8%, 41% {
                        -webkit-transform: translateX(-10px);
                    }
                    25%, 58% {
                        -webkit-transform: translateX(10px);
                    }
                    75% {
                        -webkit-transform: translateX(-5px);
                    }
                    92% {
                        -webkit-transform: translateX(5px);
                    }
                    0%, 100% {
                        -webkit-transform: translateX(0);
                    }
                }
                .spriteRETRO--erreur {
                    background-position:-68px 0;
                }

            </style>
        
        <?php }?>
        </div>
  
   </div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
//    if(isset($_POST["g-recaptcha-response"])){
//        $captcha = $_POST["g-recaptcha-response"];
//    }
//    if($captcha!=false){
//        if(count($arrChampsErreur)==0){
//            if(count($arrChampsErreur)==0){
//                $secretKey="6Ld2xZAUAAAAAKTP2SAEIyikTTN2uzxmgcNRaiLv";
//                $ip=$_SERVER['REMOTE_ADDR'];
//                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=.$ip");
//                $responseKeys = json_decode($response,true);
//
//                if(intval($responseKeys["success"])===1){
//                    $post= get_post($destinataire);
//
//                    $to = get_option('admin_email');
//
//                    $subject = "Quelqu'un a envoyé une message depuis le site" . get_bloginfo('name');
//
//                    $headers = "From: ". $courriel . "\r\n" .
//                        "Reply-To: " . $courriel . "\r\n";
//                    $envoi = wp_mail($to, $subject, strip_tags($message), $headers);
//
//                    if($envoi){
//                        array_push($arrChampsErreur,["retroactions", "envoyer"]);
//                    }
//                }
//            }
//        }
//    }
//    ?>

?>
<?php
    get_footer();
?>
