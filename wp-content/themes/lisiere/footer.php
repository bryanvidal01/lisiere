<div class="container">
    <div class="footer">
        <div class="row">
            <div class="col-sm-6">
                <p class="text-paragraphe">
                    ©Copyright 2017 - Site by Orizon
                </p>
            </div>
            <div class="col-sm-6 text-right">
                <p class="text-paragraphe">
                    <a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a><br/>
                    <?php echo get_field('phone', 'option'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
    <?php wp_footer(); ?>
  </body>
</html>
