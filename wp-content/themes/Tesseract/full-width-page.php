<?php
/**
 * Template Name: Full Width Page
 *
 * @package Tesseract
 */

get_header(); ?>

	<div id="primary" class="full-width-page">
		<main id="main" class="site-main" role="main">
		
		<div id="carousel" class="owl-carousel">
			<?php $new_query = new WP_Query('post_type=slide&posts_per_page=-1');
				while($new_query->have_posts()) : $new_query->the_post();
			?>
			<a class="item link">  
				<img src="<?php the_field("slide_image"); ?>" alt="<?php the_title(); ?>"> 
				<div class="carousel-caption hidden-phone">
					<h4><?php the_title(); ?></h4> 
					<p><?php the_field("slide_caption"); ?></p> 
				</div>
			</a>
			<?php endwhile; ?>
		</div>

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
