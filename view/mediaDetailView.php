<?php ob_start(); ?>

<head>
    <meta charset="utf-8" />
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet" />

    <link href="public/css/partials/partials.css" rel="stylesheet" />
    <link href="public/css/layout/layout.css" rel="stylesheet" />
  </head>



<div class="row">
    <div class="col-md-4">
        <ul class="movie-series-menu">
            <li class="active mr-3"><a href="index.php?url=films">Films</a></li>
            <li><a href="index.php?url=series">Séries</a></li>
        </ul>
   
    </div>
</div>

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


        <div class="col-md-8 mt-3 mb-3">
            <span>Synopsis</span> 
        </div> 
        <div class="col-md-8">
            
                <?php 
                    echo $summary.'<br>';
                ?> 
            </div> 
     </div> 
    

    
    <div class="row">

        <div class="col-md-8">
            <!-- Display seasons only if the media type is  equal to serie -->
            <?php if (($mediaType =='serie') ): ?>
                <h3>All Seasons</h3>
            <?php endif; ?>
        </div>
    </div> 

    <div class="row">

        <div class="col-md-12">

            <?php foreach( $seasons as $season ): ?>
                
                <!-- We're displaying  the media of type film (Home page)--->


                <?php if ( $season['media_id'] == $_GET['media'] ): ?>

                        <div class="video">
                            <div>
                                <iframe allowfullscreen="" frameborder="0"
                                        src="<?= $season['trailer_url']; ?>" ></iframe>
                            </div>
                        </div>
                        <div class="title"><?=$season['season_num']; ?> 
                            <div> 
                                <p>Release date : <?= $season['release_date']; ?> 
                                </p>
                            </div>
                        </div>
                 
                            
                <?php endif; ?>

            <?php endforeach; ?>


            <?php $seasonsJoin ?>
            <?php foreach( $seasonsJoin as $j ): ?>
                
                <!-- We're displaying  the media of type film (Home page)--->


                <?php $j ?>

            

            <?php endforeach; ?>
        </div>

    </div> 




<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
