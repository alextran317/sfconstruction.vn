<?php
   /*
       Template Name: Product
   */  
?> 
<?php get_header(); ?>
<?php require_once LMCIT_THEME_BLOCK_DIR . '/header.php';?>
<div class="container">
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; endif; 
    ?>
    
</div>

<?php get_footer(); ?>
