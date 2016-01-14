<?php get_header(); ?>
	<section id="content" class="first clearfix">
		<div class="cat-container">
							
				<?php if (is_category()) { ?>
					<div class="cat-head mbottom">
						<h1 class="archive-title">
							<?php printf( __( 'Posts Categorized: %s', 'colorsnap' ), single_cat_title('', false)) ?>	
						</h1>
                    </div>
				<?php } elseif (is_tag()) { ?>
					<div class="cat-head mbottom">
						<h1 class="archive-title">
							<?php printf( __( 'Posts Tagged: %s', 'colorsnap' ), single_tag_title('', false)) ?>	
						</h1>
                    </div>
				<?php } elseif (is_author()) {
					global $post;
					$author_id = $post->post_author; ?>
					<div class="cat-head mbottom">
						<h1 class="archive-title">
							<?php printf( esc_attr__( 'Posts by: %s', 'colorsnap' ), get_the_author('display_name', $author_id) ) ?>	
						</h1>
					</div>
				<?php } elseif (is_day()) { ?>
					<div class="cat-head mbottom">
						<h1 class="archive-title">
							<?php printf( __( 'Daily Archives: %s', 'colorsnap' ), get_the_date( _x( 'l, F j, Y', 'daily archives date format', 'colorsnap' ) ) ); ?>
						</h1>
                    </div>
				<?php } elseif (is_month()) { ?>
                    <div class="cat-head mbottom">
		                <h1 class="archive-title">
							<?php printf( __( 'Monthly Archives: %s', 'colorsnap' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'colorsnap' ) ) ); ?>
						</h1>
                    </div>
				<?php } elseif (is_year()) { ?>
                    <div class="cat-head mbottom">
		                <h1 class="archive-title">
							<?php printf( __( 'Yearly Archives: %s', 'colorsnap' ), get_the_date( _x( 'Y', 'yearly archives date format', 'colorsnap' ) ) ); ?>
						</h1>
                    </div>
				<?php } ?>
				<?php get_template_part( 'loop', 'archive' ); ?>
			</div>
	</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>