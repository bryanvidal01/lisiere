<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css">
    </head>
    <body>
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
