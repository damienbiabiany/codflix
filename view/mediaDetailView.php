<?php ob_start(); ?>




<div class="media-list">

    <div>
            <h2><?=$title; ?></h2>
    </div>
    <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0"
                                src="<?= $trailer_url; ?>" ></iframe>
                    </div>
    </div>

    

    <?php 
          echo $mediaType.'<br>';
          echo $title.'<br>';
          echo $status.'<br>';
          echo $summary.'<br>';

          
    ?> 
    

<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
