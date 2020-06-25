<?php ob_start(); ?>

<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                       placeholder="Rechercher un film ou une série">

                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>



<div class="row">
    <div class="col-md-4">
        <ul class="movie-series-menu">
            <li class="active"><a href="index.php?url=films">Films</a></li>
            <li><a href="index.php?url=series">Séries</a></li>
        </ul>
    </div>
</div>


<?php if (!( $_GET['url'] == 'films') && !( $_GET['url'] == 'series') ): ?>
            <h2> Films et Séries disponibles</h2>
<?php endif; ?>

<?php if ( $_GET['url'] == 'films'): ?>
            <h2> Films</h2>
<?php endif; ?>

<?php if (  $_GET['url'] == 'series'): ?>
            <h2> Séries </h2>
<?php endif; ?>

<div class="media-list">


        <?php foreach( $medias as $media ): ?>
 
              <!-- We're displaying  the media of type film (Home page)--->
              <?php if (!( $_GET['url'] == 'films') && !( $_GET['url'] == 'series') ): ?>

                <a class="item" href="index.php?media=<?= $media['id']; ?>">
                    <div class="video">
                        <div>
                            <iframe allowfullscreen="" frameborder="0"
                                    src="<?= $media['trailer_url']; ?>" ></iframe>
                        </div>
                    </div>
                    <div class="title"><?= $media['title']; ?></div>

                </a>
            <?php endif; ?>


            <!-- We're displaying  the media of type film (ONLY MOVIES)--->
            <?php if (( $_GET['url'] == 'films') && ($media['type']=='film') ): ?>

                <a class="item" href="index.php?media=<?= $media['id']; ?>">
                    <div class="video">
                        <div>
                            <iframe allowfullscreen="" frameborder="0"
                                    src="<?= $media['trailer_url']; ?>" ></iframe>
                        </div>
                    </div>
                    <div class="title"><?= $media['title']; ?>INFOS</div>
                
                </a>
            <?php endif; ?>


            <!-- We 're displaying only the media of type serie  (ONLY SERIES)--->
            <?php if (( $_GET['url'] == 'series')  && ($media['type']=='serie') ): ?>

                <a class="item" href="index.php?media=<?= $media['id']; ?>">
                    <div class="video">
                        <div>
                            <iframe allowfullscreen="" frameborder="0"
                                    src="<?= $media['trailer_url']; ?>" ></iframe>
                        </div>
                    </div>
                    <div class="title"><?= $media['title']; ?></div>
                </a>
            <?php endif; ?>


        <?php endforeach; ?>
   



</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
