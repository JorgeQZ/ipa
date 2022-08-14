<?php get_header(); ?>
<div class="main-container">
    <div class="container">
        <?php 
        echo get_the_post_type();

        if(have_posts()):
            while(have_posts()):
                the_post();
                the_content();
            endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>
