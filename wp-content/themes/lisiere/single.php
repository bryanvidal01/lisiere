<?php get_header();
the_post();

$couleur = get_field('color_code');

if($couleur): ?>
    <style>
        .title-site.border.border-pink:before,
        .title-site.border.border-pink:after,
        .strate .container-image.image-pink:before{
            background: <?php echo $couleur; ?>
        }
    </style>
<?php endif;

$imgID = get_field('thumbnail_service');
if($imgID != NULL):
    $urlImage = wp_get_attachment_image_src($imgID, "1800x800");
endif;


?>
<div class="intro-head" style="background-image: url('<?php echo $urlImage[0]; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-intro">
                    <h1 class="title-page title-site border border-pink">
                        <?php echo get_the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-site container-home container-single container">
    <?php
    // check if the flexible content field has rows of data
    if( have_rows('strates_services') ):

         // loop through the rows of data
        while ( have_rows('strates_services') ) : the_row();

            if( get_row_layout() == 'strate_text' ): ?>


            <div class="row strate-text-image strate">
                <div class="col-sm-12 text-center">
                    <div class="bloc-text text-alone">
                        <h2 class="title-site"><?php echo the_sub_field('title'); ?></h2>
                        <div class="text-paragraphe">
                            <?php echo the_sub_field('text_content'); ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif( get_row_layout() == 'strate_text_image' ):
            $order = get_sub_field('view_order');

            $imgID = get_sub_field('image');
            if($imgID != NULL):
                $urlImage = wp_get_attachment_image_src($imgID, "800x600");
            endif;
            ?>

            <div class="row strate-text-image strate">
                <?php if($order == 'left'): ?>
                    <div class="col-sm-6">
                        <div class="container-image border-image image-pink">
                            <img src="<?php echo $urlImage[0]; ?>" alt="<?php echo the_sub_field('title'); ?>">
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-sm-6">
                    <div class="bloc-text">
                        <h2 class="title-site"><?php echo the_sub_field('title'); ?></h2>
                        <div class="text-paragraphe">
                            <?php echo the_sub_field('text_content'); ?>
                        </div>
                    </div>
                </div>

                <?php if($order == 'right'): ?>
                    <div class="col-sm-6">
                        <div class="container-image border-image image-pink">
                            <img src="<?php echo $urlImage[0]; ?>" alt="<?php echo the_sub_field('title'); ?>">
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php elseif( get_row_layout() == 'strate_two_images' ):

                $imgIDLeft = get_sub_field('image_left');
                if($imgIDLeft != NULL):
                    $urlImageLeft = wp_get_attachment_image_src($imgIDLeft, "800x600");
                endif;

                $imgIDRight = get_sub_field('image_right');
                if($imgIDRight != NULL):
                    $urlImageRight = wp_get_attachment_image_src($imgIDRight, "800x600");
                endif;


                ?>

                <div class="row strate-text-image strate">
                    <div class="col-sm-6">
                        <div class="container-image border-image image-pink">
                            <img src="<?php echo $urlImageLeft[0] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="container-image border-image image-pink">
                            <img src="<?php echo $urlImageRight[0] ?>" alt="">
                        </div>
                    </div>
                </div>

            <?php endif;

        endwhile;

    endif;

    ?>

</div>
<?php get_footer(); ?>
