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

    <div class="row">
        <div class="col-md-6">
                <h2><?=$title; ?></h2>
        </div>
        <div class="col-md-8 video">
                <div>
                    <iframe allowfullscreen="" frameborder="0" src="<?= $trailer_url; ?>" >
                    </iframe>
                </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-md-8">
        <p>Release date :<?php echo $release_date.'<br>';?> </p>
    </div> 

    <div class="row">

        <div class="col-md-8 mt-3 mb-3">
            <span>Synopsis</span> 
        </div> 
        <div class="col-md-8">
          
              <?php 
                    echo $summary.'<br>';
              ?> 
         </div> 

    </div> 

    <!-- Display seasons only if the media type is  equal to serie -->
    <?php if (($mediaType =='serie') ): ?>
         <h3>All Seasons</h3>
    <?php endif; ?>
    




<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
