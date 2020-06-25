

<!DOCTYPE html>
<html>
    <title>History</title>
    <body>

        <h1>History Page</h1>

        <div class="container-fluid">
            <div class="row content">


                <!-- Display the history of the media  for a specific user (current connected user)-->
                <?php foreach( $histories as $history ): ?>
                    <div class="col-md-6">
                        <?= "user_id         = ".$history["user_id"]."<br>";?>
                        <?= "media_id        = ".$history["media_id"]."<br>";?>
                        <?= "start_date      = ".$history["start_date"]."<br>"; ?>
                        <?= "finish_date     = ".$history["finish_date"]."<br>"; ?>   
                        <?= "watch_duration  = ".$history["watch_duration"]." secondes. <br>"; ?>   
                    </div>

                    <!-- Display the trailer of the media (current connected user)-->
                    <?php foreach( $medias as $media ): ?>

                        <?php if ($media['id'] == $history["media_id"] ): ?>

                            <div class="col-md-6 video">
                                    <div>
                                        <iframe allowfullscreen="" frameborder="0"
                                                src="<?= $media['trailer_url']; ?>" ></iframe>
                                    </div>
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

                    <?php endforeach; ?>
                
                
            </div>

        </div>

    </body>

<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>