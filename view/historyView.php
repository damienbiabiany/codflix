


<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<h1>History Page</h1>


<?php foreach( $histories as $history ): ?>
    <?= "user_id         = ".$history["user_id"]."<br>";?>
    <?= "media_id        = ".$history["media_id"]."<br>";?>

    <?= "media_url       = ".$medias["media_id"]."<br>";?>  

    <?= "start_date      = ".$history["start_date"]."<br>"; ?>
    <?= "finish_date     = ".$history["finish_date"]."<br>"; ?>   
    <?= "watch_duration  = ".$history["watch_duration"]." secondes. <br>"; ?>   
    
    
    <?php foreach( $medias as $media ): ?>

        <?php if ($media['id'] == $history["media_id"] ): ?>

            <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0"
                                src="<?= $media['trailer_url']; ?>" ></iframe>
                    </div>
            </div>

        <?php endif; ?>

    <?php endforeach; ?>

<?php endforeach; ?>





</body> 
</html>