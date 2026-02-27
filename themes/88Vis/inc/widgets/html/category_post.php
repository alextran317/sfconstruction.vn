<?php
	global $themeSupport;
	global $post;
    $sticky = get_option('sticky_posts');// Lọc ra những bài viết đã sticky
    $args = array(
            'post_type'             => 'post',
            'posts_status'          => 'publish',
            'taxonomy'              => 'category',
            'cat'                   => $instance['cat'],
            'post__in' => $sticky,
            'posts_per_page'        => 7,
            'orderby'               => 'ID',
            'order'                 => 'DESC',
            'caller_get_posts'=> 1 ,
            'category__not_in' => array( 2), 
    );
    $wpQuery = new WP_Query($args);
    if($wpQuery->have_posts()) {
        if(!empty($instance['title'])) {
            $title = $instance['title'];
        }else{
            $title = "Tin nổi bật";
        }
        echo '<h3 class="title"><a href="">'.$title.'</a></h3><div class="content">';
	    while ($wpQuery->have_posts()){
			$wpQuery->the_post();
?>
            <div class="item"><img alt="" src="<?php echo LMCIT_THEME_IMG_URL; ?>/highlight.png"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </div>
<?php
        }
        echo "</div>";
    }
?>

