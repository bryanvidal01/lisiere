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
                        <?php  include 'baseline.php'; ?>
                    </div>
                    <div class="text-paragraphe white">
                        <?php echo get_field('text_big_img'); ?>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo get_contact_page(); ?>" class="button button-white">Nous contacter</a>
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


                <?php
                    $args = array(
                        'post_type'=> 'service',
                        'order'    => 'ASC'
                    );
                    query_posts( $args );
                    while ( have_posts() ) : the_post();
                        $imgID = get_field('thumbnail_service');
                        if($imgID != NULL):
                            $urlImage = wp_get_attachment_image_src($imgID, "800x800");
                        endif;
                    ?>

                    <div class="bloc-image-text clearfix">
                        <div class="image" style="background-image: url('<?php echo $urlImage[0]; ?>');"></div>
                        <div class="text">
                            <h2 class="title-site">
                                <?php echo get_the_title(); ?>
                            </h2>
                            <p class="text-paragraphe">
                                <?php echo get_the_content(); ?>
                            </p>
                            <a href="<?php echo get_the_permalink(); ?>" class="button border-under">En savoir plus</a>
                        </div>
                    </div>

                    <?php endwhile;
                    wp_reset_query();
                ?>

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
                        <div class="slider-avis">
                            <?php
                            if( have_rows('avis') ):
                                while ( have_rows('avis') ) : the_row(); ?>
                                    <div class="item-avis">
                                        <p>
                                            <?php echo the_sub_field('avis_content'); ?>
                                        </p>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>

                        <a href="https://www.facebook.com/pg/lisieredoree/reviews/" class="button button-white">
                            Voir tous les avis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
