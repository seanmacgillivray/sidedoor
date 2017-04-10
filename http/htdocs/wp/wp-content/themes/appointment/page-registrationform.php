<?php
/* Template Name: Registration Form */
get_header();
get_template_part('index','banner'); ?>
<!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container">
		<div class="row">
            <?php echo do_shortcode('[sidedoor_registration_form]'); ?>

		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>