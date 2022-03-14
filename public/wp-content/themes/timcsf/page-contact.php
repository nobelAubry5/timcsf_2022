<?php
    /* Template name: Page des contact */
    get_header(); //inclusion de l'entete
    echo "page-contact.php";
    $tValidation=null;
    if(count($_POST)!= 0) {
        require_once('validation.php');
    }
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/contact.css"/>

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
    $the_query = new WP_Query($args);
?>


<div class="row">


    <div class="contact__formulaire">
        <h2>Posez-nous votre question</h2>

        <input type="hidden" id="erreurVerif" value="true">
        <form method="POST" novalidate>

            <div class="col-3 input-effect">
                <label for="nom">Votre nom complet:</label><br>
                <input type="text" id="nom" name="nom" class="effect-17" pattern='#^[a-zA-Z]+(([,. -][a-zA-Z ])?[a-zA-Z]*)*$#' required><br>
                <p class="erreur__message">
                    <?php if($tValidation == null){

                    }else {?>
                        <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                      <?php echo $tValidation["nom"]["message"];
                    }
                    ?>
                </p>
            </div>


            <div class="col-3 input-effect">
                <label for="courriel">Votre adresse courriel:</label><br>
                <input type="email" id="courriel" name="courriel" class="effect-17" pattern='#^\S+@\S+\.\S+$#' required><br>
                <p class="erreur__message">
                    <?php
                        if($tValidation == null){

                        }else {?>
                    <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                           <?php echo $tValidation["courriel"]["message"];
                        }
                    ?>
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
                        <?php
                        } ?>
               
                </select><br>
                <p class="erreur__message">
                    <?php
                        if($tValidation == null){

                        }else {?>
                    <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                           <?php echo $tValidation["responsables"]["message"];
                        }
                    ?>
                </p>
            </div>
            <div class="telephone">
            <?php
                        if($the_query->have_posts()){
                            if($_GET["ID"]==41) {?>
                              
                              <div class="col-3 input-effect">
                <label for="telephone">Téléphone:</label><br>
                <input type="text" id="telephone" name="telephone" class="effect-17" pattern='^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$' required><br>
                <p class="erreur__message">
                    <?php
                        if($tValidation == null){

                        }else {?>
                            <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                          <?php echo $tValidation["telephone"]["message"];
                        }
                    ?>
                </p>
            </div>
                
                    <input type="checkbox" id="consentement" name="consentement">
                    <label for="consentement">Consentement </label><br>
                    <p class="erreur__message">
                        <?php
                            if($tValidation == null){
                
                            }else {?>
                                <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                                <?php echo $tValidation["consentement"]["message"];
                            }
                        ?>
                    </p>
                          
                          <?php  }
                            else{?>
                                <style>.telephone{
                                        display: none;
                                    }</style>
                            <?php }
                            }
                            ?>
                                    </div>

            <div class="col-3 input-effect">
                <label for="sujetMessage">Sujet du message:</label><br>
                <input type="text" id="sujetMessage" name="sujetMessage" class="effect-17" pattern='#^[A-Z][A-Za-z\é\è\ê\-]+$#' required><br>
                <p class="erreur__message">
                    <?php
                        if($tValidation == null){

                        }else {?>
                            <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                          <?php echo $tValidation["sujetMessage"]["message"];
                        }
                    ?>
                </p>
            </div>

            <div class="col-3 input-effect">
                <label for="message">Message:</label><br>
                <textarea type="text" id="message" name="message" class="effect-17" required>
                        </textarea><br>
                <p class="erreur__message">
                    <?php
                        if($tValidation == null){

                        }else {?>
                            <i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i>
                          <?php echo  $tValidation["message"]["message"];
                        }
                    ?>
                </p>
            </div>
            
            <div class="g-recaptcha" data-sitekeys="6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK"></div>
<!--            <span>--><?php //echo $arrMessagesErreur["humain"] ?><!--</span>-->
            
            <button class="btn-5" type="submit">Envoyer</button>
        </form>

    </div>

    <div class="carte__responsable">
        
        <?php
            if($the_query->have_posts()){
            while($the_query->have_posts()) {
                $the_query->the_post();?>
                
                <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                $photo=get_field("photo");
                //ici on affiche seulement la taille thumbnail
                
                $lien = get_field_object("lien_responsable");
                $post_object = $lien["value"];
                
                ?>
                
        <a href="<?= add_query_arg('ID', $post_object->ID, get_the_permalink(42));?>">
            
                <img class="img__responsable" src="<?php echo $photo["sizes"]["thumbnail"]; ?>" alt="<?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?>"/>
                <ul class="responsables__liste">
                    <li class="responsables__puces"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></li>
                    <li class="responsables__puces"><?php echo get_field("responsabilite");?></li>
                    <li class="responsables__puces"><a href="mailto:<?php echo get_field("courriel");?>"><?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?></a></li>
                    <li class="responsables__puces"><?php echo get_field("telephone");?></li>
                </ul>
                <hr class="ligne__separation">
        </a>
            
            <?php }?>
        <?php }?>
    </div>

</div>



<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
    get_footer();
?>





