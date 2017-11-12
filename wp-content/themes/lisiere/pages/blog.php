<?php
/*
Template Name: Blog
*/

get_header(); ?>

<div class="intro-head" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background-intro.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-intro">
                    <h1 class="title-page title-site border">
                        <?php echo get_the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-site container-home container-single container container-blog">
    <div class="row">
        <div class="masonry-blog">
        <?php

        $args = array(
        	'post_type' => 'post'
        );

        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {

        	while ( $the_query->have_posts() ) {
        		$the_query->the_post();

                $img = get_the_post_thumbnail_url($post, '800x600');
                ?>

                <div class="col-sm-6 col-xs-12 item-blog">
                    <div class="article-blog">
                        <?php if($img): ?>
                            <img src="<?php echo $img; ?>" alt="">
                        <?php endif; ?>
                        <div class="title">
                            <?php echo get_the_title(); ?>
                        </div>
                        <div class="description text-paragraphe">
                            <?php echo get_the_content(); ?>
                        </div>

                        <div class="date">
                            <?php echo get_the_date(); ?>
                        </div>
                    </div>
                </div>
        	<?php }
        	wp_reset_postdata();
        }?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
