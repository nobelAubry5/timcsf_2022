<?php
    /* Template name: Page des stages */
    get_header(); //inclusion de l'entete
    echo "page-stages.php";?>
    <h1>Stages</h1>
    <div class="stages_styles">
    <div class="stage__info">
    <p><?php echo get_field("texte", 107) ?></p>
    </div>

    <div class="stage__duree">
        <div class="stages__test">
    <p class="stage__ate"><?php echo get_field("texte", 110) ?></p>
        </div>
    </div>
    </div>


<style>
    .stages_styles{
        content: "";
        display: table;
        clear: both;
        /*background-color: #ECECEC;*/
    }
    .stage__info{
        float: left;
        width: 40%;
        padding-left: 20px;
        /*background-color: #ECECEC;*/
    }
    .stage__duree{
        background-color: #779EB4;
        float: left;
        width: 50%;
    }
    
    .stages__test{
        background-color: #EDEDED;
        -webkit-box-shadow: 8px 7px 2px 5px rgba(0,0,0,0.3);
        box-shadow: 8px 7px 2px 5px rgba(0,0,0,0.3);
        padding: 10px 40px 10px 40px;
    }
    @media screen and (max-width: 800px) {
        .stage__info, .stage__duree {
            width: 100%;
            padding: 0;
        }
    }
</style>
<?php
    get_footer();
?>
