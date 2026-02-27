<?php
   /*
       Template Name: Contact
   */  
?> 
<?php get_header(); ?>
<?php require_once LMCIT_THEME_BLOCK_DIR . '/header.php';?>
<div id="canvas" class="container">
	<h2>CONTACT</h2>
	<div class="wp-block-columns has-2-columns">
		<div class="wp-block-column">
			<p>If you have any questions, a press inquiry,
collaboration idea, please send us an email
and we’ll reply within 24 hours.</p>
			<p><i class="fas fa-phone-alt fa-lg"></i> &nbsp +84 972897625</p>
			<p><i class="fas fa-envelope fa-lg"></i> &nbsp ninhnau88@gmail.com</p>
			<p><i class="fas fa-map-marker-alt fa-lg"></i> &nbsp Hanoi, Vietnam</p>
		</div>

		<div class="wp-block-column">
				<?php echo do_shortcode('[batv_form_LaiThuXe]'); ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>
