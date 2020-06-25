

<!DOCTYPE html>
<html>
    <title>Votre Historique de visionnage</title>
    <body>

        <h1>Votre Compte <span>Cod</span>'Flix </h1>

        <h2><?= "User mail   :".$userData["email"]."<br>";?></h2>


        <div class="container-fluid">
        
            <div class="row content">

            </div>

         
                <div class="bg-black">
                    <div class="row no-gutters">
                    <div class="col-md-6 full-height bg-white">
                        <div class="auth-container">
        

                        <form method="post" action="index.php?action=profile" class="custom-form">

                            <div class="form-group">
                                <label for="email"> Changer d'adresse email</label>
                                <input type="email" name="new-email" value="" id="email" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="current-password">Mot de passe actuel</label>
                                <input type="current-password" name="current-password" value="" id="current-password" class="form-control" />
                            </div>

                            <div class="form-group">
                            <label for="new-password">Changer de Mot de passe</label>
                            <input type="new-password" name="new-password" id="new-password" class="form-control" />
                            </div>

                            <div class="form-group">
                            <label for="new-password_confirm">Confirmez votre nouveau mot de passe</label>
                            <input type="new-password" name="new-password-confirm" id="new-password_confirm" class="form-control" />
                            
                            
                        
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" name=""  value="Mettre à jour" class="btn-block bg-blue" />
                                    </div>
                                    <div class="col-md-6">
                                        <a href="index.php" class="btn btn-block bg-blue">Accueil</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="index.php?action=profiledelete" class="btn btn-block bg-blue">Supprimer Compte</a>
                                    </div>
                                                            
                                </div>
                            </div>
                            

                            <span class="error-msg">
                            <?= isset( $error_msg ) ? $error_msg : null;?>
                            </span>
                        </form>
                        </div>
                    </div>
                    
                    </div>
                </div>
            
        </div>

    </body>


<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
