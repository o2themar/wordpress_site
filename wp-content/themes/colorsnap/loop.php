<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('item-list mbottom'); ?>>
         
		 <div class="post-img"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large');} ?>
         
              </div>
			  
		 <div class="postmeta">
       		    <p class="vsmall pnone">by  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>" title="<?php sprintf( esc_attr__( 'View all posts by %s', 'colorsnap' ), get_the_author() ) ?>"><?php echo get_the_author() ?> </a>
     		       on <span class="mdate"><?php echo the_time(get_option( 'date_format' )) ?></span></p>
			</div>
		 <div class="cdetail">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
           
        </div>
        <div class="catpost"><?php the_excerpt(); ?></div>
		<div class="clr"></div>
    </article>
<?php endwhile; ?>
    <div class="pagenavi alignright">
	    <?php if ($wp_query->max_num_pages > 1) colorsnap_wp_pagination(); ?>
	</div>
<?php else : get_template_part( 'no-results', 'loop' ); endif; ?>