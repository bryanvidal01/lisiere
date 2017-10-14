<?php
/*
Template Name: Contact
*/

get_header();
the_post();
?>
<div class="header-map">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5284.570437136084!2d1.9700888829345877!3d48.52776550548171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e431f191a04acb%3A0xc4f621678a3ec68e!2zTGEgTGlzacOocmUgRG9yw6ll!5e0!3m2!1sfr!2sfr!4v1507977183575" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<div class="container-site container-home container container-single container-contact">
    <div class="container-contact-content">
        <h1 class="title-site title-contact">
            Contact
        </h1>

        <p class="text-paragraphe">
            Email : <?php echo get_field('email', 'option'); ?><br/>
            Téléphone : <?php echo get_field('phone', 'option'); ?>
        </p>
    </div>
</div>
<?php get_footer(); ?>
