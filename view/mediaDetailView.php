<?php ob_start(); ?>

<head>
    <meta charset="utf-8" />
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet" />

    <link href="public/css/partials/partials.css" rel="stylesheet" />
    <link href="public/css/layout/layout.css" rel="stylesheet" />
  </head>

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

          echo $release_date.'<br>';
          
    ?> 
    

<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
