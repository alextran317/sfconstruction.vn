	<?php 
	global $wp_query;
	
	$big = 999999999;
	//#038;
	$pagenum_link = str_replace( $big, '%#%', get_pagenum_link( $big ));
	$pagenum_link = str_replace( '#038;','&',  $pagenum_link);
	
	$args = array(
			'base'               => $pagenum_link,
			'format'             => '?page=%#%',
			'total'              => $wp_query->max_num_pages,
			'current'            => max(1, get_query_var('paged')),
			'show_all'           => false,
			'end_size'           => 1,
			'mid_size'           => 2,
			'prev_next'          => false,
			//'prev_text'          => __('« Trang truoc'),
			//'next_text'          => __('Trang tiep theo »'),
			'type'               => 'list',
			//'add_args'           => array('test'=>'abc','type'=>'happy'),
			//'add_fragment'       => '&test=abc',
			//'before_page_number' => '[',
			//'after_page_number'  => ']'
			);	
	?>

<div class="site-pagination">
	<?php echo paginate_links($args);?>
</div>