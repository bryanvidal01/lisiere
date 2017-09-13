<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div class="intro-head" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background-intro.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-intro">
                    <div class="logo-intro">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/baseline.svg" alt="">
                    </div>
                    <div class="text-paragraphe white">
                        <?php echo get_field('text_big_img'); ?>
                    </div>
                    <div class="text-center">
                        <a href="#" class="button button-white">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-site container-home container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="text-about">
                <h1 class="title-site border">
                    Bienvenue à la Lisière Dorée
                </h1>
                <p class="text-paragraphe">
                    <?php echo get_field('introduction_text'); ?>
                </p>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="container-services-home">
                <div class="bloc-image-text clearfix">
                    <div class="image" style="background-image: url('assets/images/image-service.jpg');"></div>
                    <div class="text">
                        <h2 class="title-site">
                            Mariages
                        </h2>
                        <p class="text-paragraphe">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="button button-pink border-under">En savoir plus</a>
                    </div>
                </div>
                <div class="bloc-image-text clearfix">
                    <div class="image" style="background-image: url('assets/images/image-service.jpg');"></div>
                    <div class="text">
                        <h2 class="title-site">
                            Mariages
                        </h2>
                        <p class="text-paragraphe">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="button button-green border-under">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="container-avis">
                <div class="logo-avis">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-avis.svg" alt="">
                </div>
                <div class="container-item">
                    <h4 class="title-site white">
                        Ils parlent de nous
                    </h4>
                    <div class="item-avis">
                        <p>Nous avons passé un super weekend à la Lisière Dorée</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
