<?php
/*
Template Name: Reservation
*/
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
            <form class="form form-reservation" action="index.html" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Vous êtes *</label>
                        <select class="" name="">
                            <option value="particulier">Un particulier</option>
                            <option value="professionnel">Un professionnel</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Civilité *</label>
                        <select class="" name="">
                            <option value="particulier">Un particulier</option>
                            <option value="professionnel">Un professionnel</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Nom *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Prénom *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Société *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Téléphone *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="E-mail *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Adresse *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Ville *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Code Postal *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Pays *">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Date *">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6">
                        <label for="">Flexibilité* *</label>
                        <select class="" name="">
                            <option value="particulier">Oui</option>
                            <option value="professionnel">Non</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Budget global *">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="" placeholder="Nombre de convives (>12 ans)*">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Type d’événement *</label>
                        <select class="" name="">
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
                        <textarea name="message" placeholder="Commentaire"></textarea>
                    </div>
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
