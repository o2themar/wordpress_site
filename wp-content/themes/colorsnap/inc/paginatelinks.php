<?php

/**
/*------------------------------*/
function colorsnap_wp_pagination() {
global $wp_query;
		$big = 999999999;	
		echo '<div class="pager">';	
		echo paginate_links( array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages,
			'prev_next' => False,
		));
		echo '</div>';
	
}

?>