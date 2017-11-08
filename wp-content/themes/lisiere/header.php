<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>La lisière dorée | <?php echo get_the_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css">

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js" charset="utf-8"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js" charset="utf-8"></script>
    </head>
    <body>
        <div class="visible-xs">
            <div class="container-menu-mobile">
                <div class="button-mobile">
                    <div class="barre"></div>
                </div>
            </div>

            <div class="logo-mobile">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
                </a>
            </div>
        </div>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="logo">
                            <a href="<?php echo get_site_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
                            </a>
                        </div>

                        <?php
                            wp_nav_menu();
                        ?>
                    </div>

                    <div class="col-sm-3 text-right">
                        <ul class="second-nav">
                            <li>
                                <a href="<?php echo get_contact_page(); ?>">Contact</a>
                            </li>
                            <li>
                                <a href="<?php echo get_reservation_page(); ?>">Reservation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <?php include 'includes/social.php'; ?>
