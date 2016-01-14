<?php get_header(); ?>
	<section id="content" class="first clearfix">
		<div class="cat-container">
			<div class="cat-head mbottom">
				<h1 class="archive-title"><?php printf( __( 'Latest Posts Under: %s', 'colorsnap' ), single_cat_title('', false)) ?></h1>	
                <?php echo category_description(); ?>
			</div>
		    	<?php get_template_part( 'loop', 'category' ); ?>
		</div>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>