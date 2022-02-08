<?php
?>
<aside class="barredroite">
    <ul class="barredroite__liste">
        <?php
            if(function_exists('dynamic_sidebar')){
                dynamic_sidebar('unique-sidebar-id');
            }
        ?>
    </ul>
</aside>
