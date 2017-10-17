<?php
/*
Template Name: Reservation
*/
?>


<?php
if( (isset($_POST['is_send']))  ){
    $send_mail = send_mail();

    if($send_mail == 1){
        $error = "<div class='validate-response'>Votre demande de devis à bien été envoyé</div>";
    }else{
        $error = "<div class='error-response'>Tous les champs avec une étoile sont obligatoires</div>";
    }
}
?>
<?php get_header(); ?>
<div class="intro-head" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background-intro.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-intro text-center">
                    <div class="logo-intro title-site white">
                        <?php echo get_the_title(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-site container-home container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form form-reservation" action="" method="post">
                <div class="row">
                    <?php if(isset($error)): ?>
                        <div class="col-sm-12 text-center">
                            <div class="error">
                                <?php echo $error; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-sm-6">
                        <label for="">Vous êtes *</label>
                        <select class="" name="genre">
                            <option value="particulier">Un particulier</option>
                            <option value="professionnel">Un professionnel</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Civilité *</label>
                        <select class="" name="civility">
                            <option value="particulier">Mme.</option>
                            <option value="professionnel">M.</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="nom" value="<?php echo empty($_POST['nom']) ? '' : $_POST['nom'] ?>" placeholder="Nom *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="prenom" value="<?php echo empty($_POST['prenom']) ? '' : $_POST['prenom'] ?>" placeholder="Prénom *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="societe" value="<?php echo empty($_POST['societe']) ? '' : $_POST['societe'] ?>" placeholder="Société">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="phone" value="<?php echo empty($_POST['phone']) ? '' : $_POST['phone'] ?>" placeholder="Téléphone *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="email" value="<?php echo empty($_POST['email']) ? '' : $_POST['email'] ?>" placeholder="E-mail *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="adresse" value="<?php echo empty($_POST['adress']) ? '' : $_POST['adress'] ?>" placeholder="Adresse *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="ville" value="<?php echo empty($_POST['ville']) ? '' : $_POST['ville'] ?>" placeholder="Ville *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="code_postal" value="<?php echo empty($_POST['code_postal']) ? '' : $_POST['code_postal'] ?>" placeholder="Code Postal *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="pays" value="<?php echo empty($_POST['pays']) ? '' : $_POST['pays'] ?>" placeholder="Pays *">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="date" value="<?php echo empty($_POST['date']) ? '' : $_POST['date'] ?>" placeholder="Date *">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6">
                        <label for="">Flexibilité* *</label>
                        <select class="" name="flexibility">
                            <option value="particulier">Oui</option>
                            <option value="professionnel">Non</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6">
                        <input type="text" name="budget" value="<?php echo empty($_POST['budget']) ? '' : $_POST['budget'] ?>" placeholder="Budget global *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="invites" value="<?php echo empty($_POST['invites']) ? '' : $_POST['invites'] ?>" placeholder="Nombre de convives (>12 ans)*">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Type d’événement *</label>
                        <select class="" name="event">
                            <option value="cocktail">Cocktail</option>
                            <option value="conference">Conférence</option>
                            <option value="dejeuner">Déjeuner</option>
                            <option value="dejeuner">Dîner</option>
                            <option value="Repas de fin d’année">Repas de fin d’année</option>
                            <option value="Salon professionnel">Salon professionnel</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="message" value="<?php echo empty($_POST['message']) ? '' : $_POST['message'] ?>" placeholder="Commentaire"></textarea>
                    </div>

                    <input type="hidden" name="is_send" value="1">

                    <div class="col-sm-12 text-center">
                        <div class="buttons-submit">
                            <button type="submit" name="button" class="button button-black">Demander un devis</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-intro-reservation text-center">
                <div class="title-site">
                    Contact
                </div>
                <p class="text-paragraphe">
                    La Lisière Dorée<br/>
                    Route de Dourdan, 78730 Sainte-Mesme<br/>
                    TEL : (+33)134 834 143
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
