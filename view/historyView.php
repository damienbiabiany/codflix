

<?php ob_start(); ?>

    <title>History</title>
    <body class="">

        <h1>History Page</h1>

        <h2><?= "User mail   :".$userData["email"]."<br>";?></h2>

        
        <div class="container-fluid scroll-view">


           <div class="row content">
                <div class="deleteAll col-md-2">
                            <a href="index.php?action=history&deleteAll" class="btn btn-block bg-blue">Supprimer tout l' historique</a>
                    
                </div>
            </div>
            <div class="row content">
            

                <!-- Display the history of the media for a specific user (current connected user)-->
                <?php foreach( $histories as $history ): ?>

                    <?php if ($current_connected_user == $history["user_id"] ): ?>

                        <div class="col-md-6 mt-4 mb-5">
                            <?= "history_id      = ".$history["id"]."<br>";?>
                            <?= "user_id         = ".$history["user_id"]."<br>";?>
                            <?= "media_id        = ".$history["media_id"]."<br>";?>
                            <?= "start_date      = ".$history["start_date"]."<br>"; ?>
                            <?= "finish_date     = ".$history["finish_date"]."<br>"; ?>   
                            <?= "temps de visionnage = ".$history["watch_duration"]." secondes. <br>"; ?>   
                          
   
                        </div>
   
                       
                        <!-- Display the trailer of the media (current connected user) -->
                        <?php foreach( $medias as $media ): ?>

                            <?php if ($media['id'] == $history["media_id"] ): ?>

                                <div class="col-md-4 mb-4 mb-5">
                                   <div class="title"><?= $media['title']; ?></div>
                                    <a href="index.php?action=history&delete=<?= $history["id"]; ?>" class="btn btn-block bg-blue">Supprimer cet historique</a>

                                </div>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    <?php endif; ?>

                <?php endforeach; ?>
                
            </div>

        </div>


        
    </body>

<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
