<?php
/**
 * Template Name: Full Width Page
 *
 * @package Tesseract
 */

get_header(); ?>

	<div id="primary" class="full-width-page">
		<main id="main" class="site-main" role="main">
		
		<?php
			if ( is_page('home') ) :
		?>

		<div id="carousel" class="owl-carousel">
			<?php $new_query = new WP_Query('post_type=slide&posts_per_page=-1');
				while($new_query->have_posts()) : $new_query->the_post();
			?>
			<a class="item link" href="<?php the_field("slide_url"); ?>">  
				<img style="height: 400px;" src="<?php the_field("slide_image"); ?>" alt="<?php the_title(); ?>"> 
				<div class="carousel-caption hidden-phone">
					<h4><?php the_title(); ?></h4> 
					<p><?php the_field("slide_caption"); ?></p> 
				</div>
			</a>
			<?php endwhile; ?>
		</div>

		<?php else : ?>

		<div class="sub_page_main_content">
			<h1><?php the_field("title"); ?></h1>
			<div class="content_text">
				<p><?php the_field("content_text"); ?></p>
			</div>
			<div class="main_image">
				<img src="<?php the_field("main_content_image"); ?>" >
			</div>	
			<div class="child_images">
				<div class="sub_image_1">
					<img src="<?php the_field("child_image_1"); ?>" >
				</div>
				<div class="sub_image_2">
					<img src="<?php the_field("child_image_2"); ?>" >
				</div>
				<div class="sub_image_3">
					<img src="<?php the_field("child_image_3"); ?>" >
				</div>
			</div>
		</div>

		<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'page' );
					
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; ?>

			<?php tesseract_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>